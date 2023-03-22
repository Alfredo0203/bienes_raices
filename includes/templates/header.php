<?php

//verificar si la variable sesion existe
if(!isset($_SESSION)){
    session_start();
}

$auth = $_SESSION['login'] ?? false;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real estate 🏘️</title>
    <link rel="stylesheet" href="/bienes_raices/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienes_raices/index.php">
                    <img src="/bienes_raices/build/img/logo.svg" alt="logo">
                </a>

                <div class="mobile-menu">
                    <img src="/bienes_raices/build/img/barras.svg" alt="icono mrnu responsivo">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/bienes_raices/build/img/dark-mode.svg" alt="">
                    <nav class="navegacion">
                        <a href="about.php">About us</a>
                        <a href="ad.php">Ad</a>
                        <a href="blog.php">Blog</a>                      
                        <a href="contact.php">Contact</a>
                        <?php if($auth) :?>
                            <a href="cerrar-sesion.php">Log out</a>
                            <?php endif ?>
                    </nav>
                </div>
            </div>

            <?php if($inicio) { ?>
                <h1>Sale of houses and exclusive luxury apartments</h1>
            
           <?php } ?>
        </div>
    </header>