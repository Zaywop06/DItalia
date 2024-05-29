<?php

$ruta = Plantilla::ctrlRuta();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Blue Cloud">
    <link rel="shortcut icon" href="<?php echo $ruta . "/" ?>favicon.png">

    <meta name="description" content="Sitio Web de comercio electronico acerca de una tienda de vestidos para XV años" />
    <meta name="keywords" content="vestidos, XV" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo $ruta . "/" ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="<?php echo $ruta . "/" ?>css/tiny-slider.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/cabecera.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/pie.css" rel="stylesheet">
    <title>D'Italia</title>
</head>

<body>
    <!-- Inicio Navigation -->
    <?php include "vista/modulos/cabecera.php"; ?>
    <!-- Final Navigation -->

    <?php
    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == "inicio" || $_GET["pagina"] == "tienda" || $_GET["pagina"] == "sobreNosotros" || $_GET["pagina"] == "servicios" || $_GET["pagina"] == "blog" || $_GET["pagina"] == "contacto" || $_GET["pagina"] == "carrito" || $_GET["pagina"] == "verificar") {
            include "modulos/" . $_GET["pagina"] . ".php";
        }
    } else {
        include "modulos/inicio.php";
    }
    ?>

    <!-- Inicio Footer -->
    <?php include "vista/modulos/pie.php"; ?>
    <!-- Final Footer -->

    <script src="<?php echo $ruta . "/" ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/tiny-slider.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/custom.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jQuery UI (opcional, para 'easeInOutExpo') -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo $ruta . "/" ?>js/main.js"></script>
</body>

</html>