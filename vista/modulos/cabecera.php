<?php
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'inicio';
?>

<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item <?php echo $pagina == 'inicio' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=inicio">Home</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'shop' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=shop">Shop</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'about' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=about">About us</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'services' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=services">Services</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'blog' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=blog">Blog</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'contact' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=contact">Contact us</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="<?php echo $ruta . "/" ?>images/user.svg"></a></li>
                <li class="nav-item <?php echo $pagina == 'cart' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=cart"><img src="<?php echo $ruta . "/" ?>images/cart.svg"></a>
                </li>
            </ul>
        </div>
    </div>

</nav>