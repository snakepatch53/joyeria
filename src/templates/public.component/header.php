<div class="header float">
    <div class="container">
        <div class="logo">
            <?= getLogo($DATA['info']['info_logo_url'], "alt='Logo " . $DATA['info']['info_name'] . "'") ?>
        </div>
        <nav>
            <ul>
                <li>
                    <a class="<?= $DATA['name'] == "home" ? "active" : '' ?>" href="<?= $DATA['http_domain'] ?>">Inicio</a>
                </li>
                <li>
                    <a class="<?= $DATA['name'] == "tienda" ? "active" : '' ?>" href="<?= $DATA['http_domain'] ?>tienda">Tienda</a>
                </li>
                <li>
                    <a class="<?= $DATA['name'] == "portafolio" ? "active" : '' ?>" href="<?= $DATA['http_domain'] ?>portafolio">Portafolio</a>
                </li>
                <li>
                    <a class="<?= $DATA['name'] == "nosotros" ? "active" : '' ?>" href="<?= $DATA['http_domain'] ?>nosotros">Nosotros</a>
                </li>
                <li class="more">
                    <button class="btn-darkmode" id="theme-toggle">
                        <i class="dark fas fa-moon"></i>
                        <i class="light fas fa-sun"></i>
                    </button>
                    <button class="contactus">Contactanos</button>
                </li>
            </ul>
        </nav>
        <button class="toggle-menu" id="burger-toggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</div>