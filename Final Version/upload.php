<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="upload.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <img src="https://agra.org/wp-content/uploads/2017/07/inputs.png" alt="logo"/>
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

                </div>
            </header>
            <div class="content-upload">
                    <h2 class="subtitle">
                        Upload the file with the data you wish to import.
                    </h2>
                    <div class="form-upload">
                            <form enctype="multipart/form-data" action="upload.php" method="POST">
                                <div class="form-group-upload">
                                    <div >
                                            <p>Please choose a file: </p>          
                                            <input name="file   " type="file" ><br> 
                                            

                                    </div>
                                    <!--<input type="submit" value="Upload" /><br/> -->
                                    <button type="submit" id="upload-button">Upload</button>
                                </div>       
                            </form> 
                            <h2 class="description">
                            Confused about any of this?
                            </h2>  
                            <h3 class="description">
                            Contact us and voice your concern.
                        </h3> 
                    </div> <br><br>
                    <div class="form-upload">
                            <form enctype="multipart/form-data" action="upload.php" method="POST">
                                <div class="form-group-upload">
                                    <div >
                                            <p>Please choose what you would like to export: </p>          
                                            <input ><br> 
                                    </div>
                                    <!--<input type="submit" value="Upload" /><br/> -->
                                    <button type="submit" id="upload-button">Export</button>
                                </div>       
                            </form> 
                            <h2 class="description">
                            You can export your personal data, as well as land information of your interest.
                            </h2>  
                            <h3 class="description">
                            Personalize your export <a href ="#" >here</a>.
                        </h3> 
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