<?php
include("simple_html_dom.php");
header('Acces-Control-Allow-Origin: *');

if(isset($_GET['link'])){
    $url = $_GET['link'];

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $video = curl_exec($curl);

    curl_close($curl);

    $content = explode('https://v.redd.it', $video);
    $content2 = explode('/', $content[1]);
    $videoD = 'https://v.redd.it/'.$content2[1].'/DASH_720.mp4';

    
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta name="theme-color" content="#c6c6ff">
    <link rel="shortcut icon" href="favicon.png">
    <title>Reddit Downloader</title>
</head>
<header>
<div>
    <a href="index.php"><h1 class="h1reddit">Reddit<span>DL</span></h1></a>
</div>
<nav>
    <a href="https://www.instagram.com/vyte.exe/" target="_blank">Contact</a>
</nav>
</header>

<body>
    
    <div class="u222">
        <h2>Reddit Video Downloader</h2>
        <P class="p332">Descarga Videos de Reddit</P>    
        <form>
            <input type="text" id="iText" class="iText" name="link" placeholder="Link del video" required>    
            <input type="submit" value="Mostrar" class="btn">
        </form>
    </div>

    <div class="div">
        <?php 
        if(isset($_GET['link'])){
            include("video.html");
        }
        ?>
    </div>

    <div class="ae432">
        <h3>Sobre RedditDL</h3>
        <p>RedditDL es un descargador con el cual podrás descargar videos de reddit.com</p>
    </div>

    <div class="aa367">
        <h3>¿Cómo descargar videos de reddit?</h3>
        <ol class="ol111">
            <li>Ingresar a reddit.com, luego copiar el link/url del video que desea descargar.</li>
            <li>Ingresar a redditdl.online y pegar el link en la entrada indicada más arriba.</li>
            <li>Se le generará un link, en el cual podrá descargar el video.</li>
        </ol>
    </div>

    <div class="ai997">

    </div>

    <div class="ae777">
        <h3>Preguntas Frecuentes</h3>
        <div>
            <h4>¿Los videos se descargan con sonido?</h4>
            <p>Algunos videos se descargan con sonido y otros no, estamos
                trabajando para que puedas descargar todos los videos con
                sonido.
            </p>
            <h4>No genera mi link de descarga</h4>
            <p>Posiblemente sea un error de la página ya que se encuentra
                en fase de desarrollo. Puedes informarnos de tu problema en
                el apartado de "contactos".
            </p>
        </div>
    </div>



    <footer>
        <div class="all">

            <div class="zv456">
                <div class="infoC">
                    <h2>Información Importante</h2>
                <p>
                    redditDL se encuentra en una fase de desarrollo (beta) por lo tanto pueden presentarse errores.
                </p>
            </div>
            <div class="SocialM">
                <h2>Redes Sociales</h2>
                <div class="row">
                <a href="https://www.instagram.com/vyte.exe/" target="_blank">
                    <img src="instagram.png">
                </a>
                    <label>Instagram</label>
                </div>
            </div>
        </div>
        <div class="zv556">
            <div class="copy">
                Copyright © RedditDL | 2021
            </div>
            <div class="term">
                <a href="polity.html">Políticas de Privacidad y usos</a>
            </div>
        </div>
    </div>
    </footer>
</body>
</html>