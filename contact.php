<?php
require 'includes/app.php';

incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Contact</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Fill out the contact form</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Personal information</legend>

                <label for="nombre">Name</label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu email" id="email">

                <label for="telefono">Phone</label>
                <input type="tel" placeholder="Tu telefono" id="">

                <label for="mensaje">Mensaje: </label>
                <textarea name="" id="mensaje"></textarea>

                <fieldset>
                    <legend>Property information</legend>

                    <label for="opciones">Sell or buy:</label>
                    <select name="" id="opciones">
                        <option value="" disabled selected>--Seleccione--</option>
                        <option value="compra">Buy</option>
                        <option value="vende">Sell</option>
                    </select>

                    <label for="presupuesto">Price or budget</label>
                    <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto" min="1">
                </fieldset>
            </fieldset>

            <fieldset>
                <legend>Property information</legend>
                <p>How would you like to be contacted</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Phone</label>
                    <input type="radio" name="contacto" id="contactar-telefono">

                    <label for="contactar-email">Email</label>
                    <input type="radio" name="contacto" id="email">
                </div>

                <p>If you chose phone, choose the date and time</p>
                <label for="fecha">Date</label>
                    <input type="date" id="fecha">

                    <label for="hora">Time</label>
                    <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php
incluirTemplate('footer');
?>