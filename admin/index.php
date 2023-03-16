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

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Casa en la playa</td>
                    <td><img src="../../bienes_raices/src/img/anuncio3.jpg" alt="anuncio" class="img-table"></td>
                    <td>$20000</td>
                    <td>
                        <a href="#" class="boton-amarillo-block">Update</a>
                        <a href="#" class="boton-rojo-block">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

    <?php
incluirTemplate('footer');
?>