<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Map View</title>
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
                        Agricultural Land Manager
                    </h1>
                    <p class="subtitle">
                        Look-up
                    </p>
                </div>
            </header>
            <div class="content">
                <form class="form" method="GET" action="map.php" >     
                    <h3>The Land You're Looking For</h3>
                    <input name = "id" type="text" placeholder="ID Land">
                    <button>Look Up</button>
                    <div class="map flex-container justify-content">
                        <iframe src="https://www.google.com/maps/embed/v1/place?q=Iasi%20Romania&zoom=17&key=AIzaSyCMz6wrXQca1Hza9LscWT8Pus5JKYqXD24" class="embed-responsive-item form">
                        </iframe>
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
