<?php
	session_start();
	include 'connection.php';

	if(isset($_SESSION["session_username"])){
	// echo "Session is set"; 
	header("Location: inicio.php");
	}
	 
		if(!empty($_POST['nombre']) && !empty($_POST['password']) ) {
			$username=$_POST['nombre'];												//Asigna a las variables el post 
			$password=$_POST['password']; 

			 
			
			

			if($username == "Anonimo" && $password == "Anonimo"){
				echo "lol";	
				$_SESSION['session_username']=$username;
				header("Location: login.php");
			 	

		 	

		}
	}

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
				
			</ul>
		</div>
		<div id='login'>
			<form action="inicio.php" method="POST">Usuario: <input type="text" name="nombre"> Password: <input type="password" name="password"><input type="submit" value="Entrar"></form>
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