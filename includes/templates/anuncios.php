<?php
//Importar la conexion

$db = conectarBD();

//Consulta
    $query = 'SELECT * from propiedades LIMIT '. $limite;

    //Obtener resultados 
    $resultado = mysqli_query($db, $query);


?>
<div class="contenedor-anuncios">
<?php while($propiedad = mysqli_fetch_assoc($resultado)) : ?>
<div class="anuncio">
 
        <img loading="lazy" src="/bienes_raices/imagenes/<?php echo $propiedad['imagen']?>" alt="anuncio">


    <div class="contenido-anuncio">
        <h3><?php echo $propiedad['titulo']?></h3>
        <p><?php echo $propiedad['descripcion']?></p>
        <p class="precio">$<?php echo $propiedad['precio']?></p>

        <ul class="iconos-caracteristicas">

            <li>
                <img class="icono-dark-mode"  src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                <p><?php echo $propiedad['wc']?></p>
            </li>

            <li>
                <img class="icono-dark-mode"  src="build/img/icono_estacionamiento.svg" alt="icono wc" loading="lazy">
                <p><?php echo $propiedad['estacionamiento']?></p>
            </li>

            <li>
                <img class="icono-dark-mode"  src="build/img/icono_dormitorio.svg" alt="icono wc" loading="lazy">
                <p><?php echo $propiedad['habitaciones']?></p>
            </li>
        </ul>

        <a href="anuncio.php?id=<?php echo $propiedad['id']?>" class="boton boton-amarillo-block">
            See Property
        </a>
    </div>
</div>  <!-- Finaliza anuncio-->

<?php endwhile; ?>

</div>