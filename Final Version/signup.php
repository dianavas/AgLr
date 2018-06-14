<?php
session_start();
if( isset($_SESSION['user_id']) ){
  header("Location: index.php");
}
require 'database.php';
$message = '';
if(!empty($_POST['username']) && !empty($_POST['password'])):
  
  // Enter the new user in the database
  $sql = "INSERT INTO utilizator (username, password, email, nume, prenume, tip, data_nastere) VALUES (:username, :password, :email, :nume, :prenume, :tip, :data_nastere)";
  $stmt = $conn->prepare($sql);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':username', $_POST['username']);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':nume', $_POST['nume']);
  $stmt->bindParam(':prenume', $_POST['prenume']);
  $stmt->bindParam(':tip', $_POST['tip']);
  $stmt->bindParam(':data_nastere', $_POST['data_nastere']);
  if( $stmt->execute() ):
    $message = 'Successfully created new user';
  else:
    $message = 'Sorry there must have been an issue creating your account';
  endif;
endif;
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <img src="https://agra.org/wp-content/uploads/2017/07/inputs.png" alt="logo"/>
                </div>
                <ul class="list-items">
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <header class="header">
                <div class="welcome-box">
                    <h1 class="title">
                        Agricultural Land Manager
                    </h1>
                </div>
            </header>
            <div class="content">
                <?php if(!empty($message)): ?>
                    <p><?= $message ?></p>
                <?php endif; ?>                
                <div class = "form">
                    <form method="POST" action="signup.php">
                        <h1>Create a new account</h1>
                        <div class="form-group">
                            <div class="form-control">
                                <label><b>First Name</b></label>
                                <input type="text" placeholder="Enter First Name" name="prenume" required>
                            </div>
                            <div class="form-control">
                                <label><b>Last Name</b></label>
                                <input type="text" placeholder="Enter Last Name" name="nume" required>
                            </div>
                            <div class="form-control">
                                <label><b>Type</b></label>
                                <input type="text" name="tip" required>
                            </div>
                            <div class="form-control">
                                <label><b>Birth date</b></label>
                                <input type="date" name="data_nastere" required>
                            </div>
                            <div class="form-control">
                                <label><b>E-mail address</b></label>
                                <input type="text" placeholder="E-mail" name="email" required>
                            </div>
                            <div class="form-control">
                                <label><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="username" required>
                            </div>
                            <div class="form-control">
                                <label><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" required>
                            </div>
                            <button type="submit" id="submit-button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <footer class="footer">
                <small>
                    &copy;Copyright 2018
                </small>
            </footer>
        </div>
    </body>
</html>