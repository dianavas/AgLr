<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Home</title>
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
					<li><a href="modify_lands.php">Modify Lands</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
            <header class="header">
                <div class="welcome-box">
                    <h1 class="title">
                        Welcome back!
                    </h1>
                </div>
            </header>
            <div class="content">
                    <h2 class ="description">To manage the users go to Delete Users from the upper menu bar.</h2>
                    <h2 class ="description">To manage the lands go to Modify Lands from the upper menu bar.</h2>
					<h2 class ="description">Please don't mess up the database, will you?</h2>
					<h2 class ="description">Thank you!</h2>
            </div>
            <footer class="footer">
                <small>
                    &copy;Copyright 2018
                </small>
            </footer>
        </div>
    </body>
</html>