<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>About Us</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 years of experience
                </blockquote>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, 
                    ex vel itaque distinctio dolor quis aspernatur sint? Illo rerum ex accusantium? 
                    Quia dignissimos ipsa, fugiat nemo facere deleniti optio aliquid!
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, 
                    ex vel itaque distinctio dolor quis aspernatur sint? Illo rerum ex accusantium? 
                    Quia dignissimos ipsa, fugiat nemo facere deleniti optio aliquid!
                </p>
            </div>

        </div>


    </main>

    <section class="contenedor seccion">
        <h1>More about us</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Security</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Assumenda itaque error cum quos, tenetur adipisci perspiciatis modi 
                    quaerat aliquam exercitationem recusandae</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono Precio" loading="lazy">
                <h3>Price</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Assumenda itaque error cum quos, tenetur adipisci perspiciatis modi 
                    quaerat aliquam exercitationem recusandae</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Time</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Assumenda itaque error cum quos, tenetur adipisci perspiciatis modi 
                    quaerat aliquam exercitationem recusandae</p>
            </div>
        </div>
    </section>
    
    <?php
incluirTemplate('footer');
?>
