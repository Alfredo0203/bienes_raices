<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Lake House</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="/build/img/destacada.jpg" alt="Destacada">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$150,000.00</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono-dark-mode"  loading="lazy" src="/build/img/icono_wc.svg" alt="Icono">
                    <p>2</p>
                </li>

                <li>
                    <img class="icono-dark-mode"  loading="lazy" src="/build/img/icono_estacionamiento.svg" alt="Icono">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono-dark-mode"  loading="lazy" src="/build/img/icono_dormitorio.svg" alt="Icono">
                    <p>3</p>
                </li>
            </ul>

            <p class="parrafo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At repellendus nulla tempora sint accusamus enim amet 
                dolorum, ducimus odit possimus ipsa doloremque debitis hic a repellat perferendis error soluta quos.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. At repellendus nulla tempora sint accusamus enim amet 
                dolorum, ducimus odit possimus ipsa doloremque debitis hic a repellat perferendis error soluta quos. 
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. At repellendus nulla tempora sint accusamus enim amet 
                dolorum, ducimus odit possimus ipsa doloremque debitis hic a repellat perferendis error soluta quos. 
            </p>

        </div>

    </main>

    <?php
incluirTemplate('footer');
?>