<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
</head>

<body>
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <div class="position-relative p-0">
            <?php include('navbar.php'); ?>
            <div class="py-2 bg-dark hero-header">
                <div class="container my-5 py-5">
                    <div class="row align-items-center py-5">  
                        <div class="col-lg-7 text-center text-lg-start">
                            <h1 class="display-4 text-white animated slideInLeft text-center pb-2">Distribución y ventas al por mayor y menor</h1>
                            <p class="text-white animated slideInLeft my-4 pb-2">Todos los neumaticos cuentan con garantía de fábrica. En caso de surgir fallas, se encuentran a disposicion lineas de reclamos para peritajes y realizar devoluciones en caso de corresponder.</p>
                        </div>
                        <div class="col-lg-5 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid img-logo animated slideInRight" src="img/logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php') ?>
    </div>

    <!-- JavaScript Libraries -->
    <?php include("scripts.php") ?>
</body>

</html>