<?php
session_start();
if( isset($_SESSION['id']) ){
  header("Location: afterlogin.php");
}

require 'database.php';
if(!empty($_POST['username']) && !empty($_POST['password'])):
   $records = $conn->prepare('SELECT * FROM utilizator WHERE username = :username');
   $records->bindParam(':username', $_POST['username']);
   $records->execute();
   $results = $records->fetch(PDO::FETCH_ASSOC);
   $message = '';
   if(count($results) > 0 && password_verify($_POST['password'], $results['password']) && $results['tip'] == 'admin'){
      $_SESSION['id'] = $results['id'];
      header("Location: admin_home.php");
   } else if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){
      $_SESSION['id'] = $results['id'];
      header("Location: afterlogin.php");
   } else {
      $message = 'Sorry, those credentials do not match';
   }

endif;
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Log In</title>
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
                    <li><a href="signup.php">Sign Up</a></li>
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
                    <h2 class="subtitle">
                        We've missed you...
                    </h2>
                    <h2 class="subtitle">
                        Please enter your credentials below.
                    </h2>
                    <div class="form">
                        <form method = "POST" action="login.php"> 
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="username">User-name</label>
                                    <input type="text" name="username" placeholder="username" required/>
                                </div>
                                <div class="form-control">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" placeholder="password" required/>
                                </div>
                                <button type="submit" id="submit-button">Login</button>
                                <div id ="signup">
                                    <br>
                                        <span>
                                                Not member? Create account.
                                                  <a href="signup.php"> Sign up</a>
                                        </span>

                                </div>
                            </div>
                        </form>
                         <?php if(!empty($message)): ?>
                            <p><?= $message ?></p>
                            <?php endif; ?>   
                    </div>     
                    <h2 class="subtitle">
                        Don't quite remember them? We'll help you. Click <a href ="#"> here </a>.
                    </h2>   
                </div>

                
            <footer class="footer">
                <small>
                    &copy;Copyright 2018
                </small>
            </footer>
        </div>
    </body>
</html>