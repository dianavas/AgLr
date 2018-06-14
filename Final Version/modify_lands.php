<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Modify Lands</title>
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
					<li><a href="delete_users.php">Delete User</a></li>
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
            <div class="content">
            	<form class="form" method="GET" action="browse.php" >     
                    <h3>Search Criterium</h3>
                    <input name = "criterium" type="text" placeholder="area, climate, type...">
                    <button>Search</button>
                </form >
			<table class="form">
                <table class="form">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Climate</th>
                        <th>Risks</th>
                        <th>Other</th>
                        <th>Category</th>
                        <th>Type</th>
                        
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            $dbhost = 'localhost';
                            $dbuser = 'root';
                            $dbpass = '';
                            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
                            $sql = 'SELECT * FROM teren';
                            mysqli_select_db( $conn ,'alex');
                            $retval = mysqli_query($conn, $sql);

                            if(! $retval ) {
                            die('Could not get data: ' . mysql_error());
                            }
                            echo "<tr>";
                            while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
                            echo "<tr>";
                            echo "<td>{$row['id']}</td> ".
                            "<td>{$row['clima']}</td> ".
                            "<td>{$row['riscuri']}</td> ".
                            "<td>{$row['altele']}</td> ".
                            "<td>{$row['categorie']}</td> ".
                            "<td>{$row['de_vanzare']}</td> ";
                           echo "<td><a href=\"save_changes.php\">Modifica</a></td>";
                           echo "</tr>";

                            }   
                            mysqli_close($conn);
                            ?>
                    </tbody>
                </table>    
            </div>
            <footer class="footer">
                <small>
                    &copy;Copyright 2018
                </small>
            </footer>
        </div>
    </body>
</html>