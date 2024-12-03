<!DOCTYPE html>
<html>

<head>
    <!--Metadatos-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Matricula en linea</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-3.7.1.js"></script>
    <script src="./js/script.js"></script>
</head>

<body>
    <?php include('menu.php') ?>
    <main>
        <section>
            <form action="procesar_registration.php" method="post" id="registrationForm" enctype="multipart/form-data">
                <h2>Matricula de estudiantes</h2>
                <div class="form-group">
                    <label for="name">Nombre del estudiante</label>
                    <input type="text" id="name" name="name">
                    <span id="error-name">El nombre es obligatorio.</span>
                </div>
                <div class="form-group">
                    <label for="age">Edad</label>
                    <input type="number" id="age" name="age">
                    <span id="error-age">La edad es obligatorio.</span>
                </div>
                <div class="form-group">
                    <label for="grade">Grado que desea matricular</label>
                    <select id="grade" name="grade" required>
                        <option value="">Seleccione un grado</option>
                        <option value="1">Primer grado</option>
                        <option value="2">Segundo grado</option>
                        <option value="3">Tercer grado</option>
                        <option value="4">Cuarto grado</option>
                        <option value="5">Quinto grado</option>
                        <option value="6">Sexto grado</option>
                    </select>
                    <span id="error-grade">El grado es obligatorio.</span>
                </div>
                <div class="form-group">
                    <label for="file">Comprobante</label>
                    <input type="file" id="file" name="file">
                    <span id="error-file">El comprobante es obligatorio.</span>
                </div>
                <button type="submit" class="boton">Enviar</button>
            </form>
        </section>
    </main>
    <?php
    include("footer.php");
    ?>
</body>