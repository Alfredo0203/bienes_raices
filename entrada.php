<?php
$inicio = false;
include './includes/templates/header.php';
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Guide for decorating your home</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="/build/img/destacada2.jpg" alt="Destacada">
        </picture>

        <p class="informacion-meta">Written on: <span>Feb/24/2023</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">

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
include './includes/templates/footer.php';
?>