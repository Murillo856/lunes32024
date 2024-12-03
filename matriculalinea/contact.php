<!DOCTYPE html>
<html lang="es">

<?php
include("head.php")
?>

<body>
    <header>
        <?php include("menu.php") ?>
    </header>
    <main>
        <section>
            <form  method="post" id="contactForm">
                <h2>Contacto</h2>
                <div class="form-group">
                    <label for="contact">Nombre de Contacto</label>
                    <input type="text" id="contact" name="contact">
                    <span id="error-contact">El nombre es obligatorio.</span>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email">
                    <span id="error-email">El correo es obligatorio.</span>
                </div>
                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input type="text" id="subject" name="subject">
                    <span id="error-subject">El asunto es obligatorio.</span>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea id="message" name="message" rows="5"></textarea>
                    <span id="error-message">El mensaje es obligatorio.</span>

                </div>
                <button type="submit" class="boton">Enviar</button>
            </form>
        </section>
    </main>

    <?php include("footer.php") ?>

</body>

</html>