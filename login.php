<?php
require 'includes/funciones.php';
incluirTemplate('header');

require 'includes/config/database.php';

$db = conectarBD();

$errores = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {

$email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
$password = mysqli_real_escape_string($db, $_POST['password']);

if(!$email) {
    $errores[] = 'The email is required or is NOT valid';
}

if(!$password) {
    $errores[] = 'The password is required';
}

if(empty($errores)) {
    //REVISAR SI EL USUARIO EXISTE
    $query = "SELECT * FROM usuarios WHERE email = '{$email}'";
    $resultado = mysqli_query($db, $query);
    if($resultado-> num_rows) {
        //REVISAR SI LA PASSWORD ES CORRECTA
        $usuario = mysqli_fetch_assoc($resultado);

        //VERIFICAR SI LA PASSWORD ES CORRECTA
        $auth = password_verify($password, $usuario['pass']);
        if($auth) {
            //EL USUARIO ESTA AUTENTIFICADO

        }
        else {
            $errores[] = "WRONG PASSWORD";
        }

    }
    else {
        $errores[] = "User does NOT exist";
    }
}

}
?>


    <main class="contenedor seccion">
        <h1>Iniciar sesion</h1>

        <?php foreach($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
            <?php endforeach?>

        <form method="post" class="formulario">
            <fieldset>
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu email" id="email">

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Your password" id="">
            </fieldset>
            <input type="submit" value="Log in" class="boton boton-verde">
        </form>
    </main>

    <?php
incluirTemplate('footer');
?>