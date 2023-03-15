<?php
require '../../includes/funciones.php';

incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Create</h1>
        <a href="../" class="boton boton-verde">Return</a>

        <form class="formulario">
            <fieldset>

                <legend>General Information</legend>

                <label for="titulo">Title:</label>
                <input type="text" id="titulo" placeholder="Property Title">

                <label for="precio">Price: </label>
                <input type="number" id="precio" placeholder="Property price">

                <label for="imagen">Image: </label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Description:</label>
                <Textarea></Textarea>
                
            </fieldset>

            <fieldset>
                <legend>Property Information</legend>
                <label for="habitaciones">Bedrooms</label>
                <input type="number" id="habitacionwa" placeholder="Example: 3" min="1" max="9">

                <label for="wc">Bathrooms:</label>
                <input type="text" id="wc" placeholder="Example: 3" min="1" max="9">

                <label for="estacionamiento">Parking lot:</label>
                <input type="text" id="estacionamiento" placeholder="Example: 3" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Seller</legend>
                <select name="" id="">
                    <option value="1">Alfredo</option>
                    <option value="2">Alejandra</option>
                </select>
            </fieldset>

            <input type="submit" value="Save property" class="boton boton-verde">
        </form>
    </main>

    <?php
incluirTemplate('footer');
?>