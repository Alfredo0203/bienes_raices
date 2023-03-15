<?php
require '../../includes/funciones.php';
require '../../includes/config/database.php';

$db = conectarBD();
$errores = [];
$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
   

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedorId'];

    if(!$titulo) {
        $errores[] = 'The title is required';
    }

    if(!$precio) {
        $errores[] = 'The price id required';
    }

    if(strlen($descripcion) < 50) {
        $errores[] = 'The Description is required and must have at least 50 letters';
    }

    if(!$habitaciones) {
        $errores[] = 'The number of bedrooms is required';
    }
    if(!$wc) {
        $errores[] = 'The number of bathrooms is required';
    }
    if(!$estacionamiento) {
        $errores[] = 'The number of parking lot is required';
    }
    if(!$vendedorId) {
        $errores[] = 'Choose a seller';
    }

   // Validar datos antes de insertar
   //Verificar si el arreglo de errores esta vacio
   if(empty($errores)) {

     //INSERTAR EN LA BD
     $valores = "INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId) 
     VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";

$resultado = mysqli_query($db, $valores);

if($resultado) {
    echo 'Data inserted succesfully';
}
}

//echo $$valores;


}





incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Create</h1>
        <a href="../" class="boton boton-verde">Return</a>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
            <?php endforeach; ?>

        <form class="formulario" method="post" action="../../admin/propiedades/create.php">
            <fieldset>

                <legend>General Information</legend>

                <label for="titulo">Title:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Property Title" value="<?php echo $titulo ?>">

                <label for="precio">Price: </label>
                <input type="number" id="precio" name="precio" placeholder="Property price" value="<?php echo $precio ?>">

                <label for="imagen">Image: </label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Description:</label>
                <Textarea name="descripcion"><?php echo $descripcion ?></Textarea>
                
            </fieldset>

            <fieldset>
                <legend>Property Information</legend>
                <label for="habitaciones">Bedrooms</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Example: 3" min="1" max="9" value="<?php echo $habitaciones ?>">

                <label for="wc">Bathrooms:</label>
                <input type="text" id="wc" name="wc" placeholder="Example: 3" min="1" max="9" value="<?php echo $wc ?>">

                <label for="estacionamiento">Parking lot:</label>
                <input type="text" id="estacionamiento" name="estacionamiento" placeholder="Example: 3" min="1" max="9" value="<?php echo $estacionamiento ?>">
            </fieldset>

            <fieldset>
                <legend>Seller</legend>
                <select name="vendedorId" id="vendedor">
                    <option value="">--Choose--</option>
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