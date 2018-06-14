<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Save Changes To Lands</title>
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
                        Agricultural Land Manager
                    </h1>
                </div>
            </header>
            <div class="content">
				<form class = "form" autocomplete="on">
					<h1>Eugen Lovinescu</h1>
					Caracteristici pedoclimatice:<br>
					<input type="text" placeholder="sol argilos" required>
					<button>Salveaza</button>
					<br>
					Pretabil culturi agricole	:<br>
					<input type="text" placeholder="da">
					<button>Salveaza</button>
					<br>
					Valoare:<br>
					<input type="text" placeholder="15000 lei" required>
					<button>Salveaza</button>
					<br>
					Mentiuni speciale:<br>
					<input type="text" placeholder="nu" required>
					<button>Salveaza</button>
					<br>
					Riscuri:<br>
					<input type="text" placeholder="nu" required>
					<button>Salveaza</button>
					<br>
					Suprafata:<br>
					<input type="text" placeholder="15 ha" required>
					<button>Salveaza</button>
					<br>
					Alte date de interes:<br>
					<input type="text" placeholder="nu" required>
					<button>Salveaza</button>
					<br>
				</form>
            </div>
            <footer class="footer">
                <small>
                    &copy;Copyright 2018
                </small>
            </footer>
        </div>
    </body>
</html>