<?php
    session_start();
    require 'database.php';
if( isset($_SESSION['id']) ){
    $records = $conn->prepare('SELECT * FROM utilizator WHERE id = :id');
    $records->bindParam(':id', $_SESSION['id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = NULL;
    if( count($results) > 0){
        $user = $results;
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Welcome</title>
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
                    <li><a href="browse.php">Browse</a></li>
                    <li><a href="account.php">My Profile</a></li>
                    <li><a href="upload.php">Import Data</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
            <header class="header">
                <div class="welcome-box">
                    <h1 class="title">
                        Change the World
                    </h1>
                    <p class="subtitle">
                        One Land at a Time
                    </p>
                </div>
            </header>
            <div class="content">
                <div class = "form">
                    <h2>Personal Data</h2>
                    <p>
                        <strong>Username:</strong>
                        <span><?php echo $results['username']; ?></span>
                    </p>
                    <p>
                        <strong>Email:</strong>
                        <span><?php echo $results['email']; ?></span>
                    </p>
                    <p>
                        <strong>First Name:</strong>
                        <span><?php echo $results['prenume']; ?></span>
                    </p>
                    <p>
                        <strong>Last Name:</strong>
                        <span><?php echo $results['nume']; ?></span>
                    </p>
                    <p>
                        <strong>Birth date:</strong>
                        <span><?php echo $results['data_nastere']; ?></span>
                    </p>
                    <p>
                        <strong>Type:</strong>
                        <span><?php echo $results['tip']; ?></span>
                    </p>
                    <button>Modifica</button>
                    <div class ="wildcard">
                        <h2>Teren Extravilan</h2>
                        <p>Detalii teren</p>
                        <p>Detalii teren</p>
                        <p>Detalii teren</p>
                        <button>Modifica</button>
                    </div>
                    <div class ="wildcard">
                        <h2>Teren Agricol</h2>
                        <p>Detalii teren</p>
                        <p>Detalii teren</p>
                        <p>Detalii teren</p>
                        <button>Modifica</button>
                    </div>
                </div>
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