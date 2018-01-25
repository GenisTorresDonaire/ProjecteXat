<?php
	session_start();

	if(isset($_SESSION["session_username"])){
	// echo "Session is set"; 
	header("Location: inicio.php");
	}
	 
	if(isset($_POST["email"])){
		
	   
		if(!empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass1']) && !empty($_POST['usuario'])) {
			
			$username=$_POST['usuario'];
			$username1="Anonimo";
			$email=$_POST['email'];
			//Asigna a las variables el post 
			$password=$_POST['pass']; 
			$password1=$_POST['pass1']; 

			if ($password==$password1) {
		 	
			 				 	
			 	header("Location: inicio.php");
			 		

		 	}

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
				<p><a onClick="registrarse()">Registrarse</a> / <a>Entrar</a></p>
			</div>
		</nav>
		<article >
				<div id="registro">
					
					<form  id="formRegistro" action="registro.php" method="POST">
					<h3 id="h3" >Registrarse</h3>
					<p>
					<label id="label" for="user_login">Email: <br />
					<input id="input" type="email" name="email" class="input" value="" size="20"/></label>
					</p>
					<p>
					<label id="label" for="user_login">Telefono: <br />
					<input id="input"  type="tel" name="email" class="input" value="" size="20"/></label>
					</p>
					<p>
					<label id="label" for="user_login">Ciudad: <br />
					<input id="input" type="text" name="email" class="input" value="" size="20"/></label>
					</p>
					<p>
					<label id="label" for="user_login">Nom Usuari: <br />
					<input id="input" type="text" name="usuario" class="input" value="" size="20"/></label>
					</p>
					<p>
					<label id="label" for="user_login">Contrasenya: <br />
					<input id="input" type="password" name="pass" class="input" value="" size="20"/></label>
					</p>
					<p>
					<label id="label" for="user_login">Repite la Contrasenya: <br />
					<input id="input" type="password" name="pass1" class="input" value="" size="20"/></label>
					</p>
					<p class="submit">
					<input id="input" type="submit" name="login" class="button" value="Registrarse"/></label>
					</form>
				</div>

		</article>
		<footer>
			<p>Copiright 2018 - Projecte Xat</p>
		</footer>
	</body>

</html>