<?php
	session_start();
	include 'connection.php';

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

	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style>
		body{
			text-align: center;
		}
		header{
			text-align: center;
		}
		div{
			margin: 0 auto;
			border-style: solid;
			width: 300px;
			margin-bottom: 150px;
			text-align: center;
		}
		h1, footer{
			background-color: black;
			color: white;
		}
		
	</style>
</head>
<body>
	<div id="img"><img src="imagenes/log.png"></div>
	<div>
		
		<h2>Registrarse</h2>
		<form action="registro.php" method="POST">
		<p>
		<label for="user_login">Email: <br />
		<input type="email" name="email" class="input" value="" size="20"/></label>
		</p>
		<p>
		<label for="user_login">Telefono: <br />
		<input type="tel" name="email" class="input" value="" size="20"/></label>
		</p>
		<p>
		<label for="user_login">Ciudad: <br />
		<input type="text" name="email" class="input" value="" size="20"/></label>
		</p>
		<p>
		<label for="user_login">Nom Usuari: <br />
		<input type="text" name="usuario" class="input" value="" size="20"/></label>
		</p>
		<p>
		<label for="user_login">Contrasenya: <br />
		<input type="password" name="pass" class="input" value="" size="20"/></label>
		</p>
		<p>
		<label for="user_login">Repite la Contrasenya: <br />
		<input type="password" name="pass1" class="input" value="" size="20"/></label>
		</p>
		<p class="submit">
		<input type="submit" name="login" class="button" value="Registrarse"/></label>
		</form>
	</div>

</body>
</html>