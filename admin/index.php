<?php
require '../includes/funciones.php';
$resultado = $_GET['resultado']?? null;

incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Real estate manager</h1>
        <?php if($resultado) {?>
            <p class="alerta exito">
                Successfully Save
        </p>
            <?php } ?>
        <a href="../admin/propiedades/create.php" class="boton boton-verde">Nueva Propiedad</a>
    </main>

    <?php
incluirTemplate('footer');
?>