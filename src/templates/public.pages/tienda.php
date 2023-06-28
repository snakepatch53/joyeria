<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <!-- <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/slider.css"> -->
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/tienda.css">
</head>

<body>

    <header id="section-header">
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">

        <!-- <slider>
            <?php include('./src/templates/public.component/slider.php') ?>
        </slider> -->

        <section class="shop">
            <form class="container" onsubmit="return false" id="form">
                <div class="search">
                    <h3>¿Con que te podemos ayudar?</h3>
                    <div class="input">
                        <label for="search">Buscar</label>
                        <input type="text" placeholder="Reloj, collar, anillo, etc.." id="search" name="search">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="order">
                        <div class="cart">
                            <button id="btn-shopping-cart">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <div class="cart-list" id="shopping-cart-list">
                                <h3>Carrito</h3>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Subtotal</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 5; $i++) { ?>
                                            <tr>
                                                <td>
                                                    <div class="name">
                                                        <img src="<?= $DATA['http_domain'] ?>public/img.products/1.jpg" alt="">
                                                        <p>Reloj</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="number" min="1" value="10" placeholder="Cantidad">
                                                </td>
                                                <td>
                                                    <p>$ 100.00</p>
                                                </td>
                                                <td>
                                                    <p>$ 100.00</p>
                                                </td>
                                                <td>
                                                    <button>
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>
                                                <b>Total:</b>
                                            </td>
                                            <td>
                                                <p>$ 1000.00</p>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <button class="btn-submit-shop">
                                    <span>Comprar</span>
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                        <input type="radio" name="layout" id="layout-to-square" checked>
                        <label id="btn-order-square" name="to_square" data-layout="square" for="layout-to-square">
                            <i class="fas fa-th-large"></i>
                        </label>
                        <input type="radio" name="layout" id="layout-to-list">
                        <label id="btn-order-list" name="to_list" data-layout="list" for="layout-to-list">
                            <i class="fas fa-th-list"></i>
                        </label>
                    </div>
                </div>
                <div class="filter">
                    <div class="container">
                        <div class="type" id="form-filter">
                            <h3>PRECIO</h3>
                            <div class="row">
                                <input type="number" min="0" placeholder="Desde" name="from">
                                <span>-</span>
                                <input type="number" min="0" placeholder="Hasta" name="to">
                            </div>
                        </div>
                        <div class="type">
                            <h3>CATEGORIAS</h3>
                            <div class="options">
                                <div class="option">
                                    <input type="radio" name="category" id="form-option-all">
                                    <label for="form-option-all">Todos</label>
                                </div>
                                <div class="option">
                                    <input type="radio" name="category" id="form-option-reloj">
                                    <label for="form-option-reloj">Reloj</label>
                                </div>
                                <div class="option">
                                    <input type="radio" name="category" id="form-option-collar">
                                    <label for="form-option-collar">Collar</label>
                                </div>
                                <div class="option">
                                    <input type="radio" name="category" id="form-option-anillo">
                                    <label for="form-option-anillo">Anillo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entries" id="data-entries">
                    <?php for ($j = 1; $j < 3; $j++) { ?>
                        <?php for ($i = 1; $i < 9; $i++) { ?>
                            <div class="item">
                                <div class="head">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.products/<?= $i ?>.jpg" alt="">
                                </div>
                                <div class="foot">
                                    <h4>Reloj</h4>
                                    <p><b>$</b> 100.00</p>
                                    <div class="actions">
                                        <button>
                                            <span>Agregar</span>
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                        <button>
                                            <span>Detalles</span>
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </form>
        </section>

        <a href="#section-header" class="btn-to_top_vh">
            <i class="fas fa-chevron-up"></i>
        </a>
    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/tienda.js"></script>
    <!-- <script src="<?= $DATA['http_domain'] ?>public/js.public/slider.component.js"></script> -->
</foot>

</html>