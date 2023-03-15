<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

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

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="entrada-texto">
                <a href="entrada.html">
                    <h4>Terrace on the roof of your house</h4>
                    <p>Written on: <span>Feb/24/2023</span> por: <span>Admin</span></p>

                    <p>
                        Tips for building a terrace on the roof of your house with the best materials and saving money.
                    </p>
                </a>
            </div>

        </article>


        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="entrada-texto">
                <a href="entrada.html">
                    <h4>guide to decorating your home</h4>
                    <p>Written on: <span>Feb/24/2023</span> por: <span>Admin</span></p>

                    <p>
                        Maximize the space in your home with this guide, learn to combine furniture and colors to give life to your space
                    </p>
                </a>
            </div>

        </article>




    </main>

    <?php
incluirTemplate('footer');
?>