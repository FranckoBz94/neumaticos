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
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php include("navbar.php") ?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Pagos</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Paginas</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Pagos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class=" py-5">
            <div class="container mb-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Neumáticos</h5>
                    <h2 class="mb-2">Medios de Pago</h2>
                    <hr class="line-title mb-3">
                </div>
                <div class="row spacing wow fadeInUp" data-wow-delay="0.1s" >
                    <div class="col-md-4 col-sm-12 my-3">
                        <div class=" d-block card-payment">
                            <div class="info-card">
                                <i class="fa-solid fa-arrow-right-arrow-left px-3"></i><h4 class="m-0">Transferencia</h4> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 my-3 border-pago">
                        <div class=" d-block card-payment">
                            <div class="info-card border-left">
                                <i class="fa-solid fa-money-bill px-3"></i><h4 class="m-0">E-cheq o cheque</h4> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 my-3 border-pago">
                        <div class=" d-block card-payment">
                            <div class="info-card border-left">
                                <i class="fa fa-credit-card px-3" aria-hidden="true"></i><h4 class="m-0">Tarjetas de creditos</h4> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-2">Formas de envío</h2>
                    <hr class="line-title mb-3">
                </div>
                <div class="row spacing wow fadeInUp" data-wow-delay="0.1s" >
                    <div class="col-md-4 col-sm-12 my-2 col-img-envio">
                        <img src="./img/via-cargo.png" alt="" class="img-envio"/>
                    </div>
                    <div class="col-md-4 col-sm-12 my-2 col-img-envio">
                        <img src="./img/andreani.png" alt="" class="img-envio"/>
                    </div>
                    <div class="col-md-4 col-sm-12 my-2 col-img-envio oca">
                        <img src="./img/oca.png" alt="" class="img-envio"/>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        <?php include("footer.php"); ?>
    </div>

    <!-- JavaScript Libraries -->
    <?php include("scripts.php") ?>
</body>

</html>