<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php include("navbar.php") ?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Quienes somos</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Páginas</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Quienes somos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center animated slideInUp">Sobre Nosotros</h1>
                <hr class="line-title">
                <div class="row align-items-center section-nosotros">  
                    <div class="col-lg-12 text-center text-lg-start pt-4">
                        <p class="item-nosotros animated slideInLeft my-4 pb-2">Nos dedicamos a la venta al por mayor de neumáticos para la industria, agricultura, transporte y 
                            construcción. Ofrecemos una una amplia gama de neumáticos para camiones, llantas de acero para camiones, neumáticos para autobuses, neumáticos para 
                            tractores, neumáticos para máquinas viales, neumáticos industriales y neumáticos especiales a precios favorables para todas las áreas de aplicación en 
                            el sector de vehículos comerciales.</p>
                    </div>
                    <h5 class="title-nosotros my-2 animated slideInUp">Nuestros productos destacados para neumáticos de camiones y neumáticos de vehículos comerciales incluyen:</h5>
                    <div class="col-lg-12 animated slideInRight container-prod-destacados">
                        <div class="d-flex align-items-center">
                            <p class="item-nosotros-destacados my-0"></p>
                            <h6 class="my-1 item-nosotros-info">Neumáticos para tráfico de carga, tránsito de pasajeros,  tránsito   de obra, Tránsito  de distribución o  tránsito  de larga distancia.</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="item-nosotros-destacados my-0"></p>
                            <h6 class="my-1 item-nosotros-info">Amplia selección de marcas premium: Ling Long, Triangle, Zetum, Kumho Michelin, Bridgestone, Continental, Austone, Goodyear, Hankook, Fate, Pirelli.</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="item-nosotros-destacados my-0"></p>
                            <h6 class="my-1 item-nosotros-info">Venta directa de la marca de calidad LINGLONG.</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="item-nosotros-destacados my-0"></p>
                            <h6 class="my-1 item-nosotros-info">Envío gratis a partir de 12 neumáticos.</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="item-nosotros-destacados my-0"></p>
                            <h6 class="my-1 item-nosotros-info">Llantas de acero para camiones a pedido.</h6>
                        </div>
                    </div>
                    <div class="col-lg-12 py-5 animated slideInLeft">
                        <p class="item-nosotros-calidad">Si está buscando alta <b>calidad</b>, buena <b>disponibilidad</b>, <b>precios atractivos</b> y plazos de entrega cortos, entonces está en buenas manos.</p>
                    </div>
                    <div class="col-lg-12 text-center overflow-hidden ">
                        <img class="img-fluid img-linglong animated slideInDown" src="img/linglong.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        <?php include("footer.php") ?>
        <!-- Back to Top -->
        <a href="https://api.whatsapp.com/send?phone=542994048604" target="_blank" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa-brands fa-whatsapp fa-2x text-primary icon-wpp m-auto"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php include("scripts.php") ?>
</body>

</html>