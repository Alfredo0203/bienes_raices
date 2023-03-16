<?php
require '../includes/funciones.php';
$resultado = $_GET['resultado']?? null;

//Importar la conexion

    require('../includes/config/database.php');
    $db = conectarBD();

//Escribir el querry
$propiedadesDB = 'SELECT * FROM propiedades';
//Condultar la BD
$propiedadesDB = mysqli_query($db,$propiedadesDB);

incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Real estate manager</h1>
        <?php if($resultado == 1) :?>
            <p class="alerta exito"> Successfully Save </p>
            <?php elseif($resultado==2) : ?>
                <p class="alerta exito"> Successfully Updated </p>
            <?php endif ?>
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

            
            <tbody> <!-- Mostrar Resultados-->
            <?php while($propiedad = mysqli_fetch_assoc($propiedadesDB)) :?>
                <tr>
                    <td><?php echo $propiedad['id'] ?></td>
                    <td><?php echo $propiedad['titulo'] ?></td>
                    <td><img src="/bienes_raices/imagenes/<?php echo $propiedad['imagen']?>" alt="anuncio" class="img-table"></td>
                    <td>$<?php echo $propiedad['precio'] ?></td>
                    <td>
                        <a href="/bienes_raices/admin/propiedades/update.php?id=<?php echo $propiedad['id']?>" class="boton-amarillo-block">Update</a>
                        <a href="#" class="boton-rojo-block">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

    <?php

    mysqli_close($db);
incluirTemplate('footer');
?>