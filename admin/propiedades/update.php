<?php
require '../../includes/funciones.php';
require '../../includes/config/database.php';

session_start();
$auth = estaAutenticado();
if(!$auth) {
header('Location: /bienes_raices/');
}

//Validar URL por ID valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id)  {
    header('Location: /bienes_raices/admin');
}

$db = conectarBD();

//Obtener vendedores desde la DB
$consulta= "SELECT * from propiedades WHERE id =" .$id;
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);


//Obtener vendedores desde la DB
$listaVendedores = "SELECT * from vendedores";
$listaVendedores = mysqli_query($db, $listaVendedores);

$errores = [];
$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedorId = $propiedad['vendedorId'];
$imagen = $propiedad['imagen'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';
    // exit;

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedorId']);
    $creado = mysqli_real_escape_string($db, date('y/m/d'));

    $imagen = $_FILES['imagen'];
   
 

    if(!$titulo) {
        $errores[] = 'The title is required';
    }

    if(!$precio) {
        $errores[] = 'The price id required';
    }

    if(strlen($descripcion) < 15) {
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

    $medida = 1000 * 1000;
    if($imagen['size'] > $medida) {
        $errores[] = 'File is too long';
    }
    

   // Validar datos antes de insertar
   //Verificar si el arreglo de errores esta vacio
   if(empty($errores)) {

    // //CREAR CARPETA  PARA GUARDAR ARCHIVOS
    $carpetaImg = '../../imagenes/';
    if(!is_dir($carpetaImg)) {
        mkdir($carpetaImg);    
    }

    $nombreImg = '';
    if($imagen['name']) {
        unlink($carpetaImg . $propiedad['imagen']);
          // //Generar un nombre unico para img
    $nombreImg = md5(uniqid(rand(), true)) . '.jpg';
  
    // //Guardar imagen en la carpeta
    move_uploaded_file($imagen['tmp_name'], $carpetaImg. $nombreImg);
    }

    else {
        $nombreImg = $propiedad['imagen'];
    }

  


     //INSERTAR EN LA BD
     $valores = "UPDATE propiedades SET titulo = '{$titulo}', precio = '{$precio}', imagen = '{$nombreImg}', descripcion = '{$descripcion}',
      habitaciones ={$habitaciones}, wc = {$wc}, estacionamiento = {$estacionamiento}, vendedorId = {$vendedorId} WHERE id =  {$id}";
$resultado = mysqli_query($db, $valores);



if($resultado) {
    //REDIRECCIONAR
    header('Location: /bienes_raices/admin?resultado=2');


}
}

//echo $$valores;


}





incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Updating</h1>
        <a href="../" class="boton boton-verde">Return</a>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
            <?php endforeach; ?>

        <form class="formulario" method="post" enctype="multipart/form-data">
            <fieldset>

                <legend>General Information</legend>

                <label for="titulo">Title:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Property Title" value="<?php echo $titulo ?>">

                <label for="precio">Price: </label>
                <input type="number" id="precio" name="precio" placeholder="Property price" value="<?php echo $precio ?>">

                <label for="imagen">Image: </label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <img src="/bienes_raices/imagenes/<?php echo $imagen?>" class="img-small" alt="">

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
                    <?php while($vendedor = mysqli_fetch_assoc($listaVendedores)) { ?>
                        <option  value="<?php echo $vendedor['id'];?>" 
                        <?php echo $vendedorId === $vendedor['id']? 'selected' : ''?> >
                        <?php echo $vendedor['nombre'] . ' ' . $vendedor['apellido'] ?>
                    </option>
                        <?php }?>
                </select>
            </fieldset>

            <input type="submit" value="Update property" class="boton boton-verde">
        </form>
    </main>

    <?php
incluirTemplate('footer');
?>