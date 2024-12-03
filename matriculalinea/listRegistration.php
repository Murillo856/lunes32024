<!DOCTYPE html>
<html>

<head>
    <!--Metadatos-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Matricula en linea</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/script.js"></script>
</head>

<body>
    <?php include('menu.php');

    if (empty($_SESSION)) {
        header("Location: login.php");
    }


    ?>
    <main>
        <section>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Grado</th>
                    <th>Comprobante</th>
                    <th>Ver</th>
                </tr>
                <?php
                include('db.php');

                $sql = "SELECT * FROM registration";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($estudiante = $result->fetch_assoc()) {
                        echo "<tr><td>" . $estudiante["name"] . "</td><td>" . $estudiante["age"] . "</td><td>" . $estudiante["grade"] . "</td><td><img src='" . $estudiante["voucher"] . "'></td><td><a href='" . $estudiante["voucher"] . "' target='_blank'>Ver</a></td></tr>";
                    }
                }


                ?>
            </table>
        </section>
    </main>
    <?php
    include("footer.php");
    ?>
</body>