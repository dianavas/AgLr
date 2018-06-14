<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Delete Users</title>
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
					<li><a href="modify_lands.php">Modify Lands</a></li>
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
				<form class="form" method="GET" action="delete_users.php" >		
					<h3>User Id</h3>
					<input name = "id_util" type="text" placeholder="integers">
					<button>Delete User</button>
					<?php 
					if (isset($_GET['id_util'])) {
					$id = $_GET['id_util'];
					mysqli_query($db, "DELETE FROM utilizator WHERE id=$id");
					$_SESSION['message'] = "User deleted!"; 
					header('location: delete_users.php');
					}
					?>
				</form >
				<table class="form">
					<thead>
						<tr>
						<th>Id</th>
						<th>Username</th>
						<th>Email</th>
						<th>Name</th>
						<th>Date of Birth</th>
						<th>Type</th>
						</tr>
					</thead>
						<tbody>
							<?php
							$dbhost = 'localhost';
							$dbuser = 'root';
							$dbpass = '';
							$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
							$sql = 'SELECT * FROM utilizator';
							mysqli_select_db( $conn ,'alex');
							$retval = mysqli_query($conn, $sql);

							if(! $retval ) {
							die('Could not get data: ' . mysql_error());
							}
							echo "<tr>";
							while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
							echo "<tr>";
							echo "<td>{$row['id']}</td> ".
							"<td>{$row['username']}</td> ".
							"<td>{$row['email']}</td> ".
							"<td>{$row['nume']}</td> ".
							"<td>{$row['data_nastere']}</td> ".
							"<td>{$row['tip']}</td> ";
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
