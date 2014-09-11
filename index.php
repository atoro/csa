<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>CSA</title>
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
          <li><a class="activo" href="index.php">Inicio</a></li>
          <li><a href="quienessomos.php">Quienes Somos</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="noticias.php">Noticias</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- slide -->
  <div id="w">
    <div class="slider">
      <ul class="slides">
        <li class="slide">
          <figure>
            <figcaption>
              <h2>Corte y Plegado</h2>
              <p>Lorem upsum simply is dummy </p>
            </figcaption>
            <img src="imagenes/slide/1.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <figcaption>
              <h2>Carpinteria Metálica</h2>
              <p>Lorem upsum simply is dummy </p>
            </figcaption>
            <img src="imagenes/slide/2.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <figcaption>
              <h2>Pintura Electroestática</h2>
              <p>Lorem upsum simply is dummy </p>
            </figcaption>
            <img src="imagenes/slide/3.jpg">
          </figure>
        </li>
      </ul>
    </div>
  </div>
  
  <section class="nosotros">
    <h1>CSA - Servicios Industriales</h1>
    <p>La EXPERIENCIA de nuestros técnicos nos permite ofrecer un amplio rango de productos desde la fabricación de estructuras metálicas, muebles, soportes y todo lo necesario para la EXPOSICIÓN DE PRODUCTOS. <br>

    La utilización de materias primas de calidad nos permite enfrentar todo tipo de proyectos en acero, Inox, aluminio, planchas de acero, plegables, terminaciones en madera, trupán, melamina, terciado, vidrio, acrílico y maderas nativas.</p>
    <a href="nosotros.php">VER CONTENIDO</a>
  </section>

  <section class="servicios">
    <div class="servicios_dentro">
      <h3>Servicios Destacados CSA</h3>
      <div class="servicio">
        <div class="img_servicio">
          <img src="imagenes/servicios/1.jpg">
        </div>
        <p>Lorem Ipsum es 
        simplemente el texto 
        de relleno de las 
        imprentas y archivos</p>
      </div>
      <div class="servicio">
        <div class="img_servicio">
          <img src="imagenes/servicios/2.jpg">
        </div>
        <p>Lorem Ipsum es 
        simplemente el texto 
        de relleno de las 
        imprentas y archivos</p>
      </div>
      <div class="servicio">
        <div class="img_servicio">
          <img src="imagenes/servicios/3.jpg">
        </div>
        <p>Lorem Ipsum es 
        simplemente el texto 
        de relleno de las 
        imprentas y archivos</p>
      </div>
      <div class="servicio">
        <div class="img_servicio">
          <img src="imagenes/servicios/4.jpg">
        </div>
        <p>Lorem Ipsum es 
        simplemente el texto 
        de relleno de las 
        imprentas y archivos</p>
      </div>
    </div>
    <a href="servicios.php">VER TODOS</a>
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

</body>
</html>