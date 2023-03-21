<?php
require 'includes/funciones.php';
require 'includes/config/database.php';
incluirTemplate('header');

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);



$db = conectarBD();

$consulta = "SELECT * from propiedades WHERE id = {$id}";
$resultado = mysqli_query($db, $consulta);

if(!$id || !$resultado -> num_rows){ // num_rows valida si ha optenido valores
    header('location: /bienes_raices/');
}
$propiedad = mysqli_fetch_assoc($resultado);

?>



    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo'] ?></h1>
            <img src="/bienes_raices/imagenes/<?php echo $propiedad['imagen'] ?>" alt="Destacada">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $propiedad['precio'] ?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono-dark-mode"  loading="lazy" src="build/img/icono_wc.svg" alt="Icono">
                    <p><?php echo $propiedad['wc'] ?></p>
                </li>

                <li>
                    <img class="icono-dark-mode"  loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono">
                    <p><?php echo $propiedad['estacionamiento'] ?></p>
                </li>

                <li>
                    <img class="icono-dark-mode"  loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono">
                    <p><?php echo $propiedad['habitaciones'] ?></p>
                </li>
            </ul>

            <p class="parrafo"><?php echo $propiedad['descripcion'] ?> </p>
            

        </div>

    </main>

    <?php
    mysqli_close($db);
incluirTemplate('footer');
?>