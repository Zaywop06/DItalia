<?php
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'inicio';
?>

<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $ruta . "/" ?>index.html">D'Italia<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item <?php echo $pagina == 'inicio' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'tienda' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=tienda">Tienda</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'sobreNosotros' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=sobreNosotros">Sobre Nosotros</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'servicios' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=servicios">Servicios</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'blog' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=blog">Blog</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'contacto' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=contacto">Contacto</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="<?php echo $ruta . "/" ?>images/user.svg"></a></li>
                <li class="nav-item <?php echo $pagina == 'carrito' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=carrito"><img src="<?php echo $ruta . "/" ?>images/cart.svg"></a>
                </li>
            </ul>
        </div>
    </div>

</nav>