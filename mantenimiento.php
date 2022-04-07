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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Usos y mantenimiento</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Paginas</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Mantenimiento</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        

        <!-- Service Start -->
        <div class=" py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Neumáticos</h5>
                </div>
                <div class="container py-4">
                    <h5 class="animated fadeInUp wow text-center ">Si desea descargar el manual de fallas haga click aquí</h5>
                    <div class="animated fadeInUp wow pb-5 pt-2" data-wow-delay="0.1s">
                        <div class="container-catalog fadeInUp fw-normal">
                            <a class="btn btn-primary py-3 px-5 mt-2 fw-normal" href="pdf/ManualdeFallas.pdf" download="ManualDeFallas.pdf">Descargar Manual<i class="fa fa-solid fa-arrow-down px-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="fadeInUp wow" data-wow-delay="0.1s">
                    <h1 class="mb-5 text-center">Mantenimiento</h1>
                    <div class="row fadeInUp fw-normal">
                        <div class="col-md-12">
                            <div class="mb-4">
                                <h1 class="fw-normal text-center">Inflado de neumáticos</h1>
                                <hr class="line-title">
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Para garantizar la seguridad, utilice la cubierta protectora al inflar el neumático</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos nuevos deben inflarse según los estándares.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Antes de instalar el neumático nuevo, revise la cavidad de la llanta en busca de materias extrañas</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Apriete la tuerca de la válvula para evitar fugas de aire.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El aire a llenar debe estar seco y libre de humedad y aceite.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El barómetro debe ser preciso y debe inspeccionarse periódicamente.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Después de inflar el aire a presión estándar, espere 15 minutos antes de ajustar la presión de aire para evitar caídas en la temperatura del aire y la presión del aire del aire comprimido original.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El cambio de posición de los neumáticos tiene como objetivo evitar un desgaste desigual. Generalmente, dicho intercambio debe realizarse cada 8.000-12.000 km.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">En caso de conducción de larga distancia y alta velocidad o conducción en verano, verifique la presión del aire con frecuencia y aumente el número de paradas de manera adecuada. Si es necesario complementar la presión de aire, primero se debe enfriar el neumático antes de inflarlo. Si el neumático está caliente o la presión interna es alta, detenga el vehículo para disipar el calor. No desinfle para reducir la presión ni enfríe el neumático con agua fría.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Compruebe si la válvula de inflado presenta deformaciones o fugas.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row fadeInUp fw-normal mt-5">
                        <div class="mb-4">
                            <h1 class="fw-normal text-center">Mantenimiento de Neumáticos</h1>
                            <hr class="line-title">
                        </div>
                        <div class="col-md-6">
                            <h3 class="fw-normal text-center">Mantenimiento de nivel 1</h3>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Compruebe si la tuerca de fijación está floja, si la boca de la válvula tiene fugas y si la tapa de la válvula está presente.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Compruebe si las ranuras están mezcladas con escombros, si el neumático está deslaminado o si hay fallas en serie causadas por objetos extraños.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Compruebe si los neumáticos están correctamente emparejados y si los retenedores de la llanta están en condiciones normales</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Compruebe que la presión de aire de los neumáticos sea correcta o no.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Verificar el estado de la llanta de refacción.</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="fw-normal text-center">Mantenimiento de nivel 2</h3>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Desmontar el neumático y medir el diámetro exterior (para cambiar de posición y hacer coincidir).</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Desmontar el neumático y la llanta para comprobar si el neumático está deslaminado, si la puntera del talón está desgastada, si la cavidad del neumático tiene daños internos, si el tubo interno y la aleta del tubo están rotos, si la válvula de inflado está intacta, si el retenedor de la llanta está deformado. Quita el óxido y vuelve a pintar el neumático. Revise los orificios de los pernos de la llanta en busca de desgaste, grietas y elimine la suciedad en las ranuras.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El neumático debe estar montado e inflado correctamente, no se agache sobre el neumático cuando esté inflado.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Intercambia regularmente las posiciones de los neumáticos.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row fadeInUp fw-normal">
                        <div class="col-md-12">
                            <div class="mb-4">
                                <h1 class="fw-normal text-center mt-5">Desmontaje de neumáticos</h1>
                                <hr class="line-title">
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El desmontaje debe realizarse en un entorno limpio.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Desmontar el neumático con herramientas especiales.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Al desmontar la llanta sin cámara, el lubricante del talón debe seleccionarse correctamente para evitar daños mecánicos en el talón.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Las neumáticos del revestimiento exterior e interior deben cumplir con los requisitos relacionados antes del montaje.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Asegúrese de que la boquilla de la válvula esté alineada con la marca del punto de luz del neumático para reducir el desequilibrio entre la rueda y el conjunto del neumático.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Compruebe si hay humedad dentro del neumático.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El neumático con cámara debe inflarse favorablemente dos veces para evitar daños mecánicos al remolque del talón; los neumáticos y los anillos de apriete deben coincidir perfectamente.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row fadeInUp fw-normal">
                        <div class="col-md-12">
                            <div class="mb-4">
                                <h1 class="fw-normal text-center mt-5">Características de varios patrones</h1>
                                <hr class="line-title">
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Patrón de ranura vertical: excelente seguridad de manejo, baja resistencia a la rotación y bajo nivel de ruido, excelente rendimiento de drenaje, resistencia al deslizamiento lateral.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Patrón de ranuras horizontales: excelente rendimiento de conducción, frenado, tracción y resistencia al desgaste.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Patrón mixto: características combinadas de patrones de surco vertical y surco horizontal.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">patrón de campo traviesa: el patrón diseñado para caminos de montaña secos, húmedos y accidentados y caminos fangosos y arenosos.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Patrón dirigido: el patrón de algunos neumáticos es direccional, lo que a menudo se denomina
                                patrón direccional. Este patrón aborda principalmente el rendimiento de agarre y el rendimiento de
                                drenaje. Y hay marcas de dirección en la pared lateral. Al instalar dichos neumáticos, la instalación debe
                                realizarse a lo largo de la dirección de rodadura del neumático.
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row fadeInUp fw-normal mt-5">
                        <div class="mb-2">
                            <h1 class="fw-normal text-center">Uso y mantenimiento de neumáticos</h1>
                            <hr class="line-title">
                        </div>
                        <div class="col-md-6 col-sm-12 my-3">
                            <h5>I - Almacenamiento</h5>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos deben almacenarse en el almacén para evitar la luz solar directa y la lluvia.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos deben mantenerse alejados de fuentes de calor, equipos de generación de energía y lugares donde se genera ozono.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos no deben mezclarse con aceite, materiales inflamables y materiales químicamente corrosivos.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos deben colocarse verticalmente y no deben colocarse horizontalmente, apilados o colgados concéntricamente.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos deben usarse en forma FIFO de acuerdo con el tiempo de producción y almacenamiento, y el período de almacenamiento no debe exceder los tres años.</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 my-3">
                            <h5>II - Presión del aire</h5>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El neumático debe inflarse de acuerdo con la tabla de comparación de carga de presión de aire especificada en la norma nacional.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Después de inflar la llanta, revise todas las piezas en busca de fugas. Si encuentra fugas, repárelas inmediatamente.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Durante el uso del neumático, la presión interna debe ser normal. Cuando esté funcionando o funcionando durante mucho tiempo, la presión de los neumáticos debe comprobarse periódicamente. </h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">En caso de presión de aire del alquiler, la corona del neumático se desgastaría fácilmente o estallaría en la parte superior. Y en caso de baja presión de aire, los hombros de los neumáticos se desgastarían o deformarían fácilmente o sufrirían daños por aplastamiento.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Cuando se instalan dos neumáticos al mismo tiempo, el inflado de los dos neumáticos debe ser el mismo. Y está prohibido tener un neumático con alta presión de aire mientras que el otro con baja temperatura del aire.</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 my-3">
                            <h5>III - Velocidad</h5>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Varios neumáticos están sujetas a diferentes niveles de velocidad y la conducción a exceso de velocidad causaría daños prematuros a los neumáticos.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Cuando la carretera no sea buena, no conduzca demasiado rápido y trate de minimizar las frenadas bruscas y los giros bruscos como sea posible.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El neumático es fácil de calentar a alta velocidad. Una vez que la temperatura es demasiado alta, se deben tomar medidas a tiempo para evitar que la carcasa estalle.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Se debe revisar el conjunto de neumáticos y neumáticos de alta velocidad para verificar el equilibrio dinámico, el contrapeso y la corrección. La corona se desgastaría fácilmente o estallaría en la parte superior. Y en caso de baja presión de aire, los hombros de los neumáticos se desgastarían o deformarían fácilmente o sufrirían daños por aplastamiento.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Cuando se instalan dos neumáticos al mismo tiempo, el inflado de los dos neumáticos debe ser el mismo. Y está prohibido tener un neumático con alta presión de aire mientras que el otro con baja temperatura del aire.</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 my-3">
                            <h5>IV - Patrón</h5>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El patrón vertical tiene poca resistencia y alta velocidad, y es adecuado para pavimentos duros como cemento y asfalto.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El patrón horizontal tiene un fuerte agarre, buen rendimiento de ascenso y puede adaptarse a las características actuales de los pavimentos en Argentina.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El patrón mixto combina las características de los patrones horizontales y verticales.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El patrón de campo traviesa es adecuado para carreteras sin aceras o solo en malas condiciones.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Cuando el dibujo de la banda de rodadura está desgastado hasta la marca de desgaste, no debe usarse más.</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 my-3">
                            <h5>VI - Montaje</h5>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos deben montarse en los modelos y neumáticos de vehículos prescritos. Se necesitarán herramientas y equipos especiales para instalar y quitar los neumáticos. Está estrictamente prohibido hacer palanca o aplastarlos por la fuerza.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El mismo eje debe estar equipado con neumáticos del mismo tamaño, estructura, patrón y nivel.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">No se deben mezclar neumáticos diagonales y neumáticos radiales.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Cuando está equipado con la llanta estampada, la marca de la dirección de rotación de la llanta debe ser consistente con la dirección de conducción del vehículo.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos todo terreno y los neumáticos sin cámara deben montarse y desmontarse de acuerdo con las reglamentaciones relacionadas</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos equipados con cadenas para la nieve deben instalarse de manera simétrica y las cadenas para la nieve deben retirarse inmediatamente cuando no estén en uso.</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 my-3">
                            <h5>VII - Tubo interior</h5>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Haga coincidir la cámara de aire correspondiente según el tamaño del neumático.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">En caso de fuga de aire del tubo interior, se producirán daños tempranos en el tubo exterior.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">El tubo interior de caucho butílico tiene una excelente resistencia a la temperatura y un rendimiento de estanqueidad al aire. Y los neumáticos de alta velocidad deben estar equipados con cámaras de aire de caucho butílico.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Si es necesario almacenar la cámara de aire por separado, debe inflarse con una cantidad adecuada de aire y no debe colocarse horizontalmente ni doblarse. Si no se almacena por separado, debe colocarse en el tubo exterior e inflarse adecuadamente.</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 my-3">
                            <h5>VIII - Gestión de neumáticos gemelos</h5>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Debe minimizarse la diferencia en el diámetro exterior de los neumáticos gemelos. Si el diámetro exterior es diferente, el diámetro exterior más pequeño debe instalarse en el interior.</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 my-3">
                            <h5>IX - Intercambio de posición</h5>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Las posiciones de los neumáticos deben intercambiarse periódicamente.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Para los vehículos de turismo, generalmente el cambio de posición debe realizarse cada 8.000 km.</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos de camión y los neumáticos para uso fuera de la carretera deben recibir
                                mantenimiento con mantenimiento de Nivel 1, se debe realizar el mantenimiento de Nivel 1. Si
                                es necesario (como un desgaste unilateral severo), se debe realizar un cambio de posición para
                                mantener uniformemente el desgaste del dibujo de la banda de rodadura; Si la llanta se va a
                                mantener con el mantenimiento de Nivel II del vehículo, se debe realizar el mantenimiento de
                                Nivel II del neumático. Los problemas encontrados en el mantenimiento, si los hay, deben
                                registrarse y eliminarse de manera oportuna.
                                </h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="item-uses my-0"></p>
                                <h6 class="my-1 item-mantenimiento">Los neumáticos industriales y de minería deben intercambiarse sus posiciones (izquierda y derecha) a intervalos de tiempo fijos.</h6>
                            </div>
                        </div>
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