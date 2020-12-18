<?php
$csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash()
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        ANK Solutions. Especialistas en conectividad con 15 años de experiencia
        acumulada.
    </title>
    <!-- Código de instalación Cliengo para ank.mkt@gmail.com -->
    <script type="text/javascript">
    (function() {
        var ldk = document.createElement('script');
        ldk.type = 'text/javascript';
        ldk.async = true;
        ldk.src =
            'https://s.cliengo.com/weboptimizer/5f72b18824193f002abaca3c/5f72b18924193f002abaca3f.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ldk, s);
    })();
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 573095134 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-573095134"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-573095134');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180131416-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-180131416-1');
    </script>

    <!-- Favicon  -->
    <link href="<?php echo base_url(); ?>assets/img/favicon2.ico" rel="icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="preload" as="style" href="<?php echo base_url(); ?>assets/css/style.min.css" />
</head>

<body>

    <div class="container-loader d-none" id="loader-page">
        <div class="loader"></div>
    </div>
    <nav class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-auto">
                <img src="<?php echo base_url(); ?>assets/img/ank-logo.png" width="100px" alt="Logo de ANK solutions" />
            </div>
            <div class="col-auto">
                <img src="<?php echo base_url(); ?>assets/img/sd-track-logo2.png" width="100px" alt="S|D TRACK" />
            </div>
        </div>
    </nav>
    <header class="container-fluid hero">
        <div class="row hero__bg pos-r">
            <div class="col-12 col-md-5 hero__content">
                <div>
                    <h1 class="title">
                        Controla el COVID-19 con
                        <span>distanciamiento social</span>
                        y rastreo de contactos
                        <div class="circle-arrow-right">
                            <div class="rigth-arrow"></div>
                        </div>
                    </h1>
                </div>
            </div>
            <div class="hero__form">
                <h2>Déjanos tus datos y te enviaremos más información:</h2>
                <form action="<?php echo base_url(); ?>enviar" method="POST"
                    class="row form-group justify-content-center" id="form">
                    <div class="col-11 form-group">
                        <input type="text" name="nombre" class="form-control input" placeholder="Nombre*" id="nombre" />
                    </div>
                    <div class="col-11 form-group">
                        <input type="number" name="telefono" class="form-control input" placeholder="Celular*"
                            id="celular" />
                    </div>
                    <div class="col-11 form-group">
                        <input type="email" name="correo" class="form-control input" placeholder="Email corporativo*"
                            id="email" />
                    </div>
                    <div class="col-11 form-group">
                        <select name="empresaSize" id="tamaño" class="form-control input">
                            <option value="">Tamaño de empresa</option>
                            <option value="1 - 10 empleados">1 - 10 empleados</option>
                            <option value="11-50 empleados">11-50 empleados</option>
                            <option value="51-200 empleados">51-200 empleados</option>
                            <option value="+200 empleados">+200 empleados</option>
                        </select>
                    </div>
                    <div>
                        <input type="hidden" name="utm_source" id="utm_source" />
                        <input type="hidden" name="utm_content" id="utm_content" />
                        <input type="hidden" name="utm_campaign" id="utm_campaign" />
                        <input type="hidden" name="utm_term" id="utm_term" />
                        <input type="hidden" name="utm_medium" id="utm_medium" />
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                    </div>
                    <div class="col-11 form-group">
                        <button class="button-verde w-100" type="button" data-form='form' id="enviar">SOLICITAR
                            INFORMACIÓN</button>
                    </div>
                </form>
            </div>
            <div class="col-12 d-md-none">
                <div class="circle-arrow">
                    <div class="bottom-arrow"></div>
                </div>
            </div>
        </div>
    </header>

    <section class="container form d-md-none">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Déjanos tus datos y te enviaremos<br />
                    más información:
                </h2>
                <form action="<?php echo base_url(); ?>enviar" method="POST"
                    class="row form-group justify-content-center" id="form-movil">
                    <div class="col-11 form-group">
                        <input type="text" class="form-control input" placeholder="Nombre*" name="nombre" id="nombre" />
                    </div>
                    <div class="col-11 form-group">
                        <input type="number" class="form-control input" placeholder="Celular*" name="telefono"
                            id="telefono" />
                    </div>
                    <div class="col-11 form-group">
                        <input type="email" class="form-control input" placeholder="Email corporativo*" name="correo"
                            id="correo" />
                    </div>
                    <div class="col-11 form-group">
                        <select name="empresaSize" id="tamaño" class="form-control input">
                            <option value="">Tamaño de empresa</option>
                            <option value="1 - 10 empleados">1 - 10 empleados</option>
                            <option value="11-50 empleados">11-50 empleados</option>
                            <option value="51-200 empleados">51-200 empleados</option>
                            <option value="+200 empleados">+200 empleados</option>
                        </select>
                    </div>
                    <div>
                        <input type="hidden" name="utm_source" id="utm_source-m" />
                        <input type="hidden" name="utm_content" id="utm_content-m" />
                        <input type="hidden" name="utm_campaign" id="utm_campaign-m" />
                        <input type="hidden" name="utm_term" id="utm_term-m" />
                        <input type="hidden" name="utm_medium" id="utm_medium-m" />
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                    </div>
                    <div class="col-11 form-group">
                        <button class="button-verde w-100" type="button" data-form='form-movil' id="enviar">SOLICITAR
                            INFORMACIÓN</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="container info">
        <div class="row">
            <div class="col-12 text-center">
                <h2>
                    Detección y alerta de<br class="d-md-none" />
                    distanciamiento, registro<br class="d-none d-md-block" />
                    y rastreo<br class="d-md-none" />
                    de contactos de riesgo
                </h2>
            </div>
            <div class="col-12 text-center">
                <img src="<?php echo base_url(); ?>assets/img/sdtrack.jpg" alt="S|D TRACK" width="150px" class="mb-3" />
            </div>

            <div class="col-12 text-center">
                <p class="text">
                    Es un sistema de apoyo para el distanciamiento social y rastreo de
                    contactos que facilita la pre-vención y control de la propagación
                    del COVID-19.
                </p>
                <h3 class="subtite">
                    Mantén la seguridad y productividad<br class="d-md-none" />
                    en tu empresa.
                </h3>
            </div>

            <div class="col-12">
                <div class="circle-arrow">
                    <div class="bottom-arrow"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid items">
        <div class="row justify-content-center">
            <div class="col-12 video__container">
                <div class="video">
                    <div class="youtube-video-place embed-responsive embed-responsive-4by3 "
                        data-yt-url="https://www.youtube.com/embed/AoTl5VbGR54?rel=0&showinfo=0&autoplay=1">
                        <img src="<?php echo base_url(); ?>assets/img/thumbnail-movil.jpg" alt="Video"
                            class="h-100 d-block  d-md-none m-auto play-youtube-video" async>
                        <img src="<?php echo base_url(); ?>assets/img/thumbnail-desktop.jpg" alt="Video"
                            class="h-100 d-none d-md-block  m-auto play-youtube-video" async>
                    </div>


                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-11 col-md-6 col-lg-4">
                    <div class="items__card">
                        <div>
                            <h3>1. Distanciamiento</h3>
                            <p>
                                El sistema avisa al personal cuando la distancia de seguridad
                                se ha violado.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4">
                    <div class="items__card">
                        <div>
                            <h3>2. Registro</h3>
                            <p>
                                Cada instancia de contacto de riesgo se registra en la base de
                                datos del sistema.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4">
                    <div class="items__card">
                        <div>
                            <h3>3. Rastreo</h3>
                            <p>
                                Cuando alguien resulta contagiado, es fácil rastrear los
                                contactos de riesgo que la persona ha tenido para contener y
                                prevenir mayores contagios.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-11 col-md-5 col-lg-4 mt-4">
                    <button class="button-verde w-100 cta">ESTOY INTERESADO</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid px-0 circle">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="title">
                        La solución SD Track está lista para<br class="d-none d-md-block" />
                        operar en 3 sencillos pasos
                    </h2>
                </div>

                <div class="col-12 col-md-5 col-lg-4 mb-4">
                    <div class="card-grid">
                        <div class="front">
                            <a class="flip" id="first">
                                <div class="cont">
                                    <img src="<?php echo base_url(); ?>assets/img/gafete-icon.png" alt="" />
                                </div>
                            </a>
                        </div>
                        <div class="back">
                            <a class="unflip">
                                <div class="cont">
                                    <p>Recibe los gafetes inteligentes ya congurados.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h4 class="subtitle">Recibe</h4>
                </div>

                <div class="col-12 col-md-5 col-lg-4 mb-4">
                    <div class="card-grid">
                        <div class="front">
                            <a class="flip">
                                <div class="cont">

                                    <img src="<?php echo base_url(); ?>assets/img/asigna-icon.png" alt="" />
                                </div>
                            </a>
                        </div>
                        <div class="back">
                            <a class="unflip">
                                <div class="cont">
                                    <p>
                                        Asigna un gafete a cada persona en el sistema para tener registros precisos.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h4 class="subtitle" id="super">Asigna</h4>
                </div>

                <div class="col-12 col-md-5 col-lg-4 mb-4">
                    <div class="card-grid">
                        <div class="front">
                            <a class="flip">
                                <div class="cont">
                                    <img src="<?php echo base_url(); ?>assets/img/reporte-icon.png" alt="" />
                                </div>
                            </a>
                        </div>
                        <div class="back">
                            <a class="unflip">
                                <div class="cont">
                                    <p>
                                        Consulta reportes de contactos de riesgo para tomar
                                        acciones.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h4 class="subtitle">Supervisa</h4>
                </div>
            </div>
        </div>
    </section>

    <div class="container sliderSection">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-9 mb-3 d-md-none">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-ride="false">
                    <ol class="carousel-indicators indicators__bottom">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo base_url(); ?>assets/img/corporativo.jpg" class="d-block w-100"
                                alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url(); ?>assets/img/educacion.jpg" class="d-block w-100"
                                alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url(); ?>assets/img/industrial.jpg" class="d-block w-100"
                                alt="..." />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-2 text-alt d-md-none">
                <p id="corpo">Corporativo</p>
                <p id="edu">Educativo</p>
                <p id="ind">Industrial</p>
            </div>

            <div class="col-3 d-none d-md-block">
                <div class="sliderSection__item">
                    <img src="<?php echo base_url(); ?>assets/img/corporativo.jpg" alt="" class="img-fluid" />
                    <h4 class="text-center">Corporativo</h4>
                </div>
            </div>
            <div class="col-3 d-none d-md-block">
                <div class="sliderSection__item">
                    <img src="<?php echo base_url(); ?>assets/img/industrial.jpg" alt="" class="img-fluid" />
                    <h4 class="text-center">Industrial</h4>
                </div>
            </div>
            <div class="col-3 d-none d-md-block">
                <div class="sliderSection__item">
                    <img src="<?php echo base_url(); ?>assets/img/educacion.jpg" alt="" class="img-fluid" />
                    <h4 class="text-center">Educación</h4>
                </div>
            </div>
            <div class="col-10">
                <button class="button-verde cta">SOLICITAR COTIZACIÓN</button>
            </div>
        </div>
    </div>

    <section class="container diagrama">
        <div class="row">
            <div class="col-12 col-md-6 top">
                <div class="diagrama__content">
                    <p>
                        El distanciamiento social es recomendado como la acción más eficaz
                        para pre-venir el contagio de patógenos como el COVID-19.
                    </p>
                    <p class="pie">
                        El sistema de registro y reporte de contactos de riesgo permite
                        conocer la actividad del personal y tomar acciones si alguien
                        resulta contagiado.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center diag">
                <div>
                    <img src="<?php echo base_url(); ?>assets/img/diagrama-ank.png" alt="Diagrama" width="100%" />
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid renta">
        <div class="container px-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class="title">Plan de Renta</h3>
                </div>

                <div class="col-md-4 col-lg-3 d-none d-md-block mx-lg-3">
                    <div class="planes">
                        <div>
                            <h4 class="planes__title">Renta Mensual</h4>
                            <p>
                                Renta de la solución completa (contrato mínimo de 6 meses)
                                desde
                                <b>$475.00</b> + iva <br />por unidad.
                            </p>
                        </div>
                        <div class="check">
                            <div></div>
                            <!-- <div></div> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 d-none d-md-block mx-lg-3">
                    <div class="planes">
                        <div class="bange__best">
                            <p>BEST SELLER</p>
                        </div>
                        <div>
                            <h4 class="planes__title">Renta Semestral</h4>
                            <p>
                                Renta de la solución completa.<br />
                                <b>Paga 6 meses y obtén un descuento del 5%</b>
                            </p>
                        </div>
                        <div class="check">
                            <div></div>
                            <!-- <div></div> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 d-none d-md-block mx-lg-3">
                    <div class="planes">
                        <div>
                            <h4 class="planes__title">Renta Anual</h4>
                            <p>
                                Renta de la solución completa.
                                <b>Paga 12 meses y obtén un 10% de descuento.</b>
                            </p>
                        </div>
                        <div class="check">
                            <div></div>
                            <!-- <div></div> -->
                        </div>
                    </div>
                </div>

                <div class="col-10 col-sm-9 mb-3 d-md-none">
                    <div id="planesrenta" class="carousel slide" data-ride="carousel" data-ride="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active planes-car">
                                <div class="planes">
                                    <div>
                                        <h4 class="planes__title">Renta mensual</h4>
                                        <p>
                                            Renta de la solución completa (contrato mínimo de 6
                                            meses) desde <b>$475.00</b> + iva <br />por unidad.
                                        </p>
                                    </div>
                                    <div class="check">
                                        <div></div>
                                        <!-- <div></div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item planes-car">
                                <div class="planes">
                                    <div>
                                        <h4 class="planes__title">Renta semestral</h4>
                                        <p>
                                            Renta de la solución completa.<br />
                                            <b>Paga 6 meses y obtén un descuento del 5%</b>
                                        </p>
                                    </div>
                                    <div class="check">
                                        <div></div>
                                        <!-- <div></div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item planes-car">
                                <div class="planes">
                                    <div>
                                        <h4 class="planes__title">Renta anual</h4>
                                        <p>
                                            Renta de la solución completa.
                                            <b>Paga 12 meses y obtén un 10% de descuento.</b>
                                        </p>
                                    </div>
                                    <div class="check">
                                        <div></div>
                                        <!-- <div></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#planesrenta" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#planesrenta" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-12 text-center d-md-none">
                    <button class="button-verde cta">SOLICITAR COTIZACIÓN</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid servicios">
        <div class="container px-0">
            <div class="row">
                <div class="col-12">
                    <h3 class="title">Servicio disponible para:</h3>
                </div>
                <div class="col-12">
                    <div class="servicios__list">
                        <div class="servicios__list-item">
                            <p>
                                <img src="<?php echo base_url(); ?>assets/img/icon-1.png" width="30px"
                                    alt="corporativo" />Corporativo
                            </p>
                        </div>
                        <div class="servicios__list-item">
                            <p>
                                <img src="<?php echo base_url(); ?>assets/img/icon-2.png" width="30px"
                                    alt="corporativo" />Industrial
                            </p>
                        </div>
                        <div class="servicios__list-item">
                            <p>
                                <img src="<?php echo base_url(); ?>assets/img/icon-3.png" width="30px"
                                    alt="corporativo" />Retail
                            </p>
                        </div>
                        <div class="servicios__list-item">
                            <p>
                                <img src="<?php echo base_url(); ?>assets/img/icon-5.png" width="30px"
                                    alt="corporativo" />Educacion
                            </p>
                        </div>
                        <div class="servicios__list-item">
                            <p>
                                <img src="<?php echo base_url(); ?>assets/img/icon-4.png" width="30px"
                                    alt="corporativo" />PyMEs
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="container-fluid px-0 footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-md-3 offset-md-1">
                    <h5 class="title text-md-left">ANK SOLUTIONS S.A. DE C.V.</h5>
                    <p class="direccion text-md-left">
                        Revolución 2703-2, Col.<br />Ladrillera, Monterrey,<br />
                        NuevoLeón, México, 64380.
                    </p>
                </div>

                <div class="col-12 col-md-3 ml-md-auto text-center">
                    <a href="https://anks.mx/aviso-de-privacidad.html" target="_blank">Aviso de privacidad</a>
                </div>

                <div class="col-12">
                    <p class="copyright">© Copyright.Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.1.2/jquery.flip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/form.js"></script>
    <script src="https://www.youtube.com/iframe_api" async></script>
    <script src="<?php echo base_url(); ?>assets/js/app.js" async></script>
</body>

</html>