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
		<img src="imagenes/LogoCornella.png">
	</header>
	<nav>
		<div id='menu'>
			<ul>
				<li><a href=''>Ajuntament</a>
					<ul>
						<li><a href="">L'alcalde</a></li>
						<li><a href="">Consistori</a></li>
						<li><a href="">Organització Municipal</a></li>
						<li><a href="">Empreses Municipal</a></li>
						<li><a href="">Pressupostos</a></li>
						<li><a href="">Imatge Corporativa</a></li>
					</ul>
				</li>
				<li><a href='historia.php'>Historia</a></li>
				<li><a href=''>Debats</a></li>
				<li><a href='chat.php'>Chat Room</a></li>
				<li><a href=''>Denuncies</a></li>
				<li><a href=''>Intercanvis</a></li>
			</ul>
		</div>
		<div id='login'>
			<p>Bienvenido, <?php echo $_SESSION['session_username'];?>! <a href="logout.php">Salir</a></p>
		</div>
	</nav>
	<article>
		
	</article>
	<footer>
		<p>Copiright 2018 - Projecte Xat</p>
	</footer>
</body>
</html>