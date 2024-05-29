<?php

$ruta = Plantilla::ctrlRuta();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="<?php echo $ruta . "/" ?>favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo $ruta . "/" ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/tiny-slider.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/style.css" rel="stylesheet">
    <title>D'Italia</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <?php include "vista/modulos/cabecera.php"; ?>
    <!-- End Header/Navigation -->

    <?php
    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == "inicio" || $_GET["pagina"] == "shop" || $_GET["pagina"] == "about" || $_GET["pagina"] == "service" || $_GET["pagina"] == "blog" || $_GET["pagina"] == "contact" || $_GET["pagina"] == "cart") {
            include "modulos/" . $_GET["pagina"] . ".php";
        }
    } else {
        include "modulos/inicio.php";
    }
    ?>

    <!-- Start Footer Section -->
    <?php include "vista/modulos/footer.php"; ?>
    <!-- End Footer Section -->


    <script src="<?php echo $ruta . "/" ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/tiny-slider.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/custom.js"></script>
</body>

</html>