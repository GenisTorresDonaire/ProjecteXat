<?php
    session_start();

    if(!isset($_SESSION["session_username"])){
        header("Location: inicio.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Projecte Xat</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="js/script.js"></script> 
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
                    <li><a href=''>Serveis</a></li>
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
            <div id="divChat" class="col-sm-3 col-sm-offset-4 frame">
                <ul id="aqui"></ul>
                <div>
                    <div class="msj-rta macro" style="margin:auto">                        
                        <div class="text text-r" style="background:whitesmoke !important">
                            <input class="mytext" placeholder="Type a message"/>
                        </div> 
                    </div>
                </div>
            </div>
            <br>
        </article>
        <footer>
            <p>Copiright 2018 - Projecte Xat</p>
        </footer>
    </body>
</html>