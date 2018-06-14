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
require 'database.php';
$message = '';
if(!empty($_POST['username']) && !empty($_POST['password'])):
  
  // Enter the new user in the database
  $sql = "INSERT INTO teren (id_utilizator, clima, riscuri, altele, de_vanzare) VALUES (:id_utilizator, :clima, :riscuri, :altele, :de_vanzare)";
  $stmt = $conn->prepare($sql);
  $id_util = $results['id'];
  $stmt->bindParam(':clima', $_POST['clima']);
  $stmt->bindParam(':id_utilizator', $id_util);
  $stmt->bindParam(':riscuri', $_POST['riscuri']);
  $stmt->bindParam(':altele', $_POST['altele']);
  $stmt->bindParam(':de_vanzare', $_POST['de_vanzare']);
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
        <title>Land Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <img src="https://agra.org/wp-content/uploads/2017/07/inputs.png" alt=" " />
                </div>
                <ul class="list-items">
                    <li><a href="browse.php">Browse</a></li>
                    <li><a href="map.php">Map</a></li>
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
                <h2 class="subtitle">
                    Adding Land Form
                </h2>
                <p class="description">
                    Enter the corresponding data below and hit the submit button.
                </p>
                <?php if(!empty($message)): ?>
                <p><?= $message ?></p>
                <?php endif; ?>
                <div class="form">
                    <form method="POST" action="landform.php">
                        <div class="form-group">
                            <div class="form-control">
                                <label for="zona">Climate</label>
                                <input name = "clima" type="text" id="zona"/>
                            </div>
                            <div class="form-control">
                                <label for="riscuri">Risks</label>
                                <input name="riscuri" type="text" id="riscuri"/>
                            </div>
                            <div class="form-control">
                                <label for="suprafata">Category</label>
                                <input name="categorie" type="number" id="suprafata"/>
                            </div>
                            <div class="form-control">
                                <label for="altele">More</label>
                                <input name="altele" type="text" id="altele"/>
                            </div>
                            <div class="form-control">
                                <label for="vanzareDa">For Sale</label>
                                <input name="de_vanzare" type="text" id="altele"/>
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
