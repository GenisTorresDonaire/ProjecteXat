


 
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
        </nav>

        <article>
          <div  style="margin: 0 auto; padding: 10px; width: 300px" >
             <form>      
            
             
              <div class="form-group">
                <label for="exampleTextarea">Redacte su denuncia</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Vincula alguna imagen.</small>
              </div>
              <fieldset class="form-group">
                <legend>Nivel de urgencia</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Bajo
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Medio
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                    Urgente
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Vamos a morir todos
                  </label>
                </div>
              </fieldset>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Check me out
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </article>
        </form>

        <footer>
            <p>Copiright 2018 - Projecte Xat</p>
        </footer>
    </body>
</html>

