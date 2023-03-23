<?php
require '../../bienes_raices/includes/app.php';

if(!isset($_SESSION)){
    session_start();
}
$auth = estaAutenticado();
if(!$auth) {
header('Location: /bienes_raices/');
}

$resultado = $_GET['resultado']?? null;

//Importar la conexion

$db = conectarBD();

//Escribir el querry
$propiedadesDB = 'SELECT * FROM propiedades';
//Condultar la BD
$propiedadesDB = mysqli_query($db, $propiedadesDB);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id) {
        
        // Eliminar archivo
        $query = "SELECT imagen FROM propiedades WHERE id = {$id}";
        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);
       
        unlink('../imagenes/'.$propiedad['imagen']);
        //Eliminar la propiedad
        $query = "DELETE FROM propiedades WHERE id = {$id}";
        $rersultado = mysqli_query($db, $query);

        if($rersultado) {
            header('Location: /bienes_raices/admin?resultado=3');
        }

       
        echo $query;
    }
    
}



incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Real estate manager</h1>
        <?php if($resultado == 1) :?>
            <p class="alerta exito"> Successfully Save </p>
            <?php elseif($resultado==2) : ?>
                <p class="alerta exito"> Successfully Updated </p>

                <?php elseif($resultado==3) : ?>
                <p class="alerta error"> Successfully Deleted</p>
            <?php endif ?>
            
        <a href="../admin/propiedades/create.php" class="boton-add">New Property</a>

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
                        <a href="/bienes_raices/admin/propiedades/update.php?id=<?php echo $propiedad['id']?>" class="btn-accion boton-acciones">Update</a>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']?>">
                            <input type="submit" class="btn-accion boton-delete" value="Delete">
                        </form> 
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