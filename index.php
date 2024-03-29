<?php
require 'includes/app.php';

incluirTemplate('header', $inicio = true);
?>


    <main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Houses and apartments in sales</h2>
        <?php 
        $limite = 3;
         include 'includes/templates/anuncios.php';

         ?>

        <div class="alinear-derecha">
            <a href="ad.php" class="boton-verde">See all</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Find your dreamed house</h2>
        <p>Fill out the contact form and a representative will contact you</p>
        <a href="contact.php" class="boton-amarillo">Contact Us    </a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>New Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="entrada-texto">
                    <a href="entrada.html">
                        <h4>Terrace on the roof of your house</h4>
                        <p class="informacion-meta">Written on: <span>Feb/24/2023</span> por: <span>Admin</span></p>

                        <p>
                            Tips for building a terrace on the roof of your house with the best materials and saving money.
                        </p>
                    </a>
                </div>

            </article>


            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="entrada-texto">
                    <a href="entrada.html">
                        <h4>guide to decorating your home</h4>
                        <p class="informacion-meta">Written on: <span>Feb/24/2023</span> por: <span>Admin</span></p>

                        <p>
                            Maximize the space in your home with this guide, learn to combine furniture and colors to give life to your space
                        </p>
                    </a>
                </div>

            </article>

        </section>

        <section class="testimoniales">
            <h3>Testimonials</h3>

            <div class="testimonial">
                <blockquote>
                    The staff behaved in an excellent way, very good attention and the house that they offered me met my expectations
                </blockquote>
                <p> - Alfredo Torres</p>
            </div>
        </section>
    </div>

    
    <?php
incluirTemplate('footer');
?>