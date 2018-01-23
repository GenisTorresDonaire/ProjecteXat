<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Projecte Xat</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript"></script>
</head>
<body>
	<header>
		<img src="imagenes/logo1.png">
	</header>
	<nav>
		<div id='menu'>
			<ul>
				<li><a href=''>Ajuntament</a></li>
				<li><a href=''>El municipi</a></li>
				<li><a href=''>Serveis</a></li>
				<li><a href=''>Debats</a></li>
				<li><a href=''>Chat Room</a></li>
				<li><a href=''>Denuncies</a></li>
				<li><a href=''>Intercanvis</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
		<div id='login'>
			<h3>Bienvenido, <span><?php echo $_SESSION['session_username'];?>! </span></h3>
		</div>
	</nav>
	<article>
		<p></p>
	</article>
	<footer>
		<p>Copiright 2018 - Projecte Xat</p>
	</footer>
</body>
</html>