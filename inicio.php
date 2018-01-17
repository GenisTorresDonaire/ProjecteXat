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
		<script src="js/script.js"></script> 
	</head>
	<body>
		<header>
			<img src="imagenes/logo.jpg">
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
				<p><a>Registrarse</a> / <a onClick="entrar()">Entrar</a></p>
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