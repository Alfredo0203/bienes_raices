<?php
require '../../includes/funciones.php';
require '../../includes/config/database.php';

$db = conectarBD();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';-
    var_dump($_POST);
    echo '</pre>';

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedorId'];

    //INSERTAR EN LA BD

    $valores = "INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId) 
VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";

//echo $$valores;

$resultado = mysqli_query($db, $valores);

if($resultado) {
    echo 'Data inserted succesfully';
}
}





incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Create</h1>
        <a href="../" class="boton boton-verde">Return</a>

        <form class="formulario" method="post" action="../../admin/propiedades/create.php">
            <fieldset>

                <legend>General Information</legend>

                <label for="titulo">Title:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Property Title">

                <label for="precio">Price: </label>
                <input type="number" id="precio" name="precio" placeholder="Property price">

                <label for="imagen">Image: </label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Description:</label>
                <Textarea name="descripcion"></Textarea>
                
            </fieldset>

            <fieldset>
                <legend>Property Information</legend>
                <label for="habitaciones">Bedrooms</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Example: 3" min="1" max="9">

                <label for="wc">Bathrooms:</label>
                <input type="text" id="wc" name="wc" placeholder="Example: 3" min="1" max="9">

                <label for="estacionamiento">Parking lot:</label>
                <input type="text" id="estacionamiento" name="estacionamiento" placeholder="Example: 3" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Seller</legend>
                <select name="vendedorId" id="vendedor">
                    <option value="1" >Alfredo</option>
                    <option value="2">Alejandra</option>
                </select>
            </fieldset>

            <input type="submit" value="Save property" class="boton boton-verde">
        </form>
    </main>

    <?php
incluirTemplate('footer');
?>