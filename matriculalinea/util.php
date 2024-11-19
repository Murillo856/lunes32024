<!DOCTYPE html>
<html lang="es">

<?php
include("head.php")
?>

<body>
    <!--Encabezados-->
    <header>
        <?php include("menu.php") ?>
    </header>
    <!--Principal-->
    <main>
        <section>
            <h1>Selecciona un producto</h1>
            <div class="product">
                <select id="productSelector" class="select-util">
                    <option value="0" data-price="0" data-img="./images/default.jpg">Seleccione un producto</option>
                    <option value="1" data-price="900.00" data-img="./images/product1.jpg">Tijeras</option>
                    <option value="2" data-price="700.00" data-img="./images/product2.jpg">Goma</option>
                    <option value="3" data-price="500.00" data-img="./images/product3.jpg">Borrador</option>
                </select>
                <div>
                    <img id="productImage" class="img-util" src="./images/default.jpg" alt="Producto">
                </div>
                <div id="price">
                    Precio: 0.00 crc
                </div>
        </section>
    </main>

    <?php include("footer.php") ?>

</body>

</html>