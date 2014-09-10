<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Noticias CSA</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="shortcut icon" href="imagenes/icon.png">
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
</head>

<body>
  <header>
    <div class="centro_header">
      <div class="logo">
        <a href="index.php">
          <img src="imagenes/logo.png">
        </a>
      </div>
      <nav id="menu">
        <a href="#" class="nav-mobile" id="nav-mobile"></a>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="quienessomos.php">Quienes Somos</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a class="activo" href="noticias.php">Noticias</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="headerimg4">

  </div>
  
  <section class="servicios">
    <div class="servicios_dentro">
      <div class="noticias">
        <div class="img_detalle">
          <img src="imagenes/noticias/1.jpg">
        </div>
        <div class="contenido_texto">
          <h3>Nombre la noticia</h3>
          <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
          <a href="detallenoticia.php"> VER DETALLE </a>
        </div>
      </div>
      <div class="noticias">
        <div class="img_detalle">
          <img src="imagenes/noticias/2.jpg">
        </div>
        <div class="contenido_texto">
          <h3>Nombre la noticia</h3>
          <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
          <a href="detallenoticia.php"> VER DETALLE </a>
        </div>
      </div>
      <div class="noticias">
        <div class="img_detalle">
          <img src="imagenes/noticias/3.jpg">
        </div>
        <div class="contenido_texto">
          <h3>Nombre la noticia</h3>
          <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
          <a href="detallenoticia.php"> VER DETALLE </a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer_dentro">
      <div class="servicios_footer">
        <h3>Servicios</h3>
        <p>Servicios Industriales</p>
        <p>Pintura Electroestática</p>
        <p>Corte y Plegado</p>
        <p>Carpintería Metálica</p>
        <p>Carpintería Metálica</p>
      </div>
      <div class="servicios_footer">
        <h3>Redes Sociales</h3>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Youtube</a>
      </div>
      <div class="servicios_footer">
        <h3>Contacto</h3>
        <p>info@suempresa.cl</p>
        <p>Calle Central Nº55 esquina Gran Avenida, P30 - El Bosque - Santiago</p>
        <p>Fono (2) 559 02 05</p>
      </div>
      <div class="logo_footer">
        <img src="imagenes/pie.png">
      </div>
    </div>
  </footer>

  <div class="emagenic">
    - Todos los derechos reservados - <a href="http://www.emagenic.cl" target="new">desarrollado por emagenic.cl</a>
  </div>

  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.glide.min.js"></script>
  <script type="text/javascript">
  $(function(){
    $('.slider').glide({
      autoplay: 3500,
      hoverpause: true, // set to false for nonstop rotate
      arrowRightText: '&rarr;',
      arrowLeftText: '&larr;'
    });
  });
  </script>
  <script>
    $(function() {
        var btn_movil = $('#nav-mobile'),
            menu = $('#menu').find('ul');
        btn_movil.on('click', function (e) {
            e.preventDefault();
            var el = $(this);
            el.toggleClass('nav-active');
            menu.toggleClass('open-menu');
        })
    });
</script>

<!--efecto 3D-->
  <script>
    $(function() {
        $.fn.parallax = function(options){
            var $$ = $(this);
            offset = $$.offset();
            var defaults = {
                "start": 0,
                "stop": offset.top + $$.height(),
                "coeff": -0.2
            };
            var opts = $.extend(defaults, options);
            return this.each(function(){
                $(window).bind('scroll', function() {
                    windowTop = $(window).scrollTop();  
                    if((windowTop >= opts.start) && (windowTop <= opts.stop)) {
                        newCoord = windowTop * opts.coeff;
                         
                        $$.css({
                            "background-position": "0 "+ newCoord + "px"
                        });
                    } 
                });
            });
        };
        $('.headerimg4').parallax({ "coeff":-0.2 });
    })
</script>
<!--efecto 3D-->

</body>
</html>