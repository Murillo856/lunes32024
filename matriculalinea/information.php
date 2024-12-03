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
            <h1>Informacion de los cursos, darle click para mas informacion</h1>

            <div class="image-price">
                <h3>Grado 1</h3>
                <img src="./images/patio.jpg" alt="Image 1">
                <div class="price" >100.000</div>
            </div>

            <div class="image-price">
                <h3>Grado 2</h3>
                <img src="./images/patio.jpg" alt="Image 2">
                <div class="price" >130.000</div>
            </div>

            <div class="image-price">
                <h3>Grado 3</h3>
                <img src="./images/patio.jpg" alt="Image 3">
                <div class="price" >140.000</div>
            </div>

            <div class="image-price">
                <h3>Grado 4</h3>
                <img src="./images/patio.jpg" alt="Image 4">
                <div class="price" >130.000</div>
            </div>

            <div class="image-price">
                <h3>Grado 5</h3>
                <img src="./images/patio.jpg" alt="Image 5">
                <div class="price" >140.000</div>
            </div>

            <div class="image-price">
                <h3>Grado 6</h3>
                <img src="./images/patio.jpg" alt="Image 6">
                <div class="price" >180.000</div>
            </div>
        </section>
    </main>
    <?php
    include("footer.php");
    ?>
</body>