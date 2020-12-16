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

    <!-- Favicon  -->
    <link href="<?php echo base_url(); ?>assets/img/favicon2.ico" rel="icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css" />
</head>

<body>
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
                        Muchas gracias.<br>
                        Con esta información un asesor se comunicará con usted a la brevedad.

                        <div class="circle-arrow-right">
                            <div class="rigth-arrow"></div>
                        </div>
                    </h1>
                </div>
            </div>

            <div class="col-12 d-md-none">
                <div class="circle-arrow">
                    <div class="bottom-arrow"></div>
                </div>
            </div>
        </div>
    </header>



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
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
</body>

</html>