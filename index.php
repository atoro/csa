<?php
  include("Conexion.php");
  $listado = "select * from inicio";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $titulo_inicio = $rs["titulo_inicio"];
    $contenido_inicio = $rs["contenido_inicio"];
  }

  $listado = "select * from slide";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $titulo_slide1 = $rs["titulo_slide1"];
    $contenido_slide1 = $rs["contenido_slide1"];
    $titulo_slide2 = $rs["titulo_slide2"];
    $contenido_slide2 = $rs["contenido_slide2"];
    $titulo_slide3 = $rs["titulo_slide3"];
    $contenido_slide3 = $rs["contenido_slide3"];
  }

  $listado = "select * from servicios_destacados";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $titulo_destacados = $rs["titulo_destacados"];
    $servicio1 = $rs["servicio1"];
    $servicio2 = $rs["servicio2"];
    $servicio3 = $rs["servicio3"];
    $servicio4 = $rs["servicio4"];
  }

  $listado = "select * from contacto_pie";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $mail = $rs["mail"];
    $direccion = $rs["direccion"];
    $fono = $rs["fono"];
  }

?>
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
              <h2><?php echo $titulo_slide1 ?></h2>
              <p><?php echo $contenido_slide1 ?> </p>
            </figcaption>
            <img src="imagenes/slide/1.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <figcaption>
              <h2><?php echo $titulo_slide2 ?></h2>
              <p><?php echo $contenido_slide2 ?> </p>
            </figcaption>
            <img src="imagenes/slide/2.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <figcaption>
              <h2><?php echo $titulo_slide3 ?></h2>
              <p><?php echo $contenido_slide3 ?> </p>
            </figcaption>
            <img src="imagenes/slide/3.jpg">
          </figure>
        </li>
      </ul>
    </div>
  </div>
  
  <section class="nosotros">
    <h1><?php echo $titulo_inicio ?></h1>
    <p><?php echo $contenido_inicio ?></p>
    <a href="nosotros.php">VER CONTENIDO</a>
  </section>

  <section class="servicios">
    <div class="servicios_dentro">
      <h3><?php echo $titulo_destacados ?></h3>
      <div class="servicio">
        <div class="img_servicio">
          <img src="imagenes/destacados/1.jpg">
        </div>
        <p><?php echo $servicio1 ?></p>
      </div>
      <div class="servicio">
        <div class="img_servicio">
          <img src="imagenes/destacados/2.jpg">
        </div>
        <p><?php echo $servicio2 ?></p>
      </div>
      <div class="servicio">
        <div class="img_servicio">
          <img src="imagenes/destacados/3.jpg">
        </div>
        <p><?php echo $servicio3 ?></p>
      </div>
      <div class="servicio">
        <div class="img_servicio">
          <img src="imagenes/destacados/4.jpg">
        </div>
        <p><?php echo $servicio4 ?></p>
      </div>
    </div>
    <a class="a" href="servicios.php">VER TODOS</a>
  </section>

  <footer>
    <div class="footer_dentro">
      <div class="servicios_footer">
        <h3>Servicios</h3>
        <?php 
          $listado = "select * from servicios_pie";
          $sentencia = mysql_query($listado,$conn);
          while($rs=mysql_fetch_array($sentencia,$mibase)){
        ?>
        <p><?php $texto = str_replace("\r\n","<br>",$rs["servicio_pie"]); echo $texto ?></p>
        <?php } ?>
      </div>
      <div class="servicios_footer">
        <h3>Redes Sociales</h3>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Youtube</a>
      </div>
      <div class="servicios_footer">
        <h3>Contacto</h3>
        <p><?php echo $mail ?></p>
        <p><?php echo $direccion ?></p>
        <p><?php echo $fono ?></p>
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