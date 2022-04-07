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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Reclamos</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Páginas</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Reclamos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="pt-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Neumáticos</h5>
                </div>
                <h3 class="mb-3 mt-5 text-center wow fadeInUp">Para realizar un reclamo</h3>
                <h6 class="text-center wow fadeInUp">Descargue el siguiente formulario y envielo a info@martiarenahnos.com.ar</h6>
                <div class="fadeInUp wow pb-5 pt-2" data-wow-delay="0.1s">
                    <div class="container-catalog fadeInUp fw-normal">
                        <a class="btn btn-primary py-3 px-5 mt-2 fw-normal" href="pdf/FormularioReclamos.pdf" download="FormularioReclamo.pdf">Descargar formulario<i class="fa fa-solid fa-arrow-down px-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <h3 class="mb-3 mt-5 text-center wow fadeInUp">Diagrama Reclamos</h3>
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-pdf">
                    <object class="pdfView" type="application/pdf" data="pdf/DiagramaReclamos.pdf"></object>
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