 <?php
  include("Conexion.php");
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
  <title>Contacto CSA</title>
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
          <li><a href="noticias.php">Noticias</a></li>
          <li><a class="activo" href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="headerimg2">

  </div>
  
  <section class="nosotros">
    <h1>Contáctanos</h1>
    <form action="contacto.php" method="post" onSubmit="MM_validateForm('name','','R','message','','R');return document.MM_returnValue;return document.MM_returnValue">
          <input class="input" name="Nombre" type="text" placeholder="Nombre"/>
          <input class="input" name="Mail" type="text" placeholder="E-mail"/>  
          <input class="input" name="Telefono" type="text" placeholder="Teléfono"/>
          <textarea name="Mensaje" id="Mensaje" class="mensaje" placeholder="Mensaje"></textarea>
          <input class="enviar" name="Enviar" type="submit" value="Enviar"/>
    </form>
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d849613.9902624615!2d-69.89919963671879!3d-33.71400345935247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCALLE+CENTRAL+N%C2%BA+55%2C+P-30+GRAN+AVENIDA+-+EL+BOSQUE+-+SANTIAGO!5e0!3m2!1ses!2scl!4v1410363175041" width="100%" height="350" frameborder="0" style="border:0"></iframe>
    <p>CALLE CENTRAL Nº 55, P-30 GRAN AVENIDA - EL BOSQUE - SANTIAGO</p>
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
    <a href="servicios.php">VER TODOS</a>
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
        $('.headerimg2').parallax({ "coeff":-0.2 });
    })
</script>
<!--efecto 3D-->

</body>
</html>
<?php
  if ($_POST["Enviar"]){
    $destinatario = "contacto@suempresa.cl"; // cambiar mail destinatario //
    $nombre = $_POST["Nombre"];
    $telefono = $_POST["Telefono"];
    $mail = $_POST["Mail"];
    $Telefono = $_POST["Telefono"];
    $Mensaje = $_POST["Mensaje"];
    $asunto = "Consulta sitio web"; 
    $cuerpo = "
    <table width=100% border=0 cellspacing=0 cellpadding=0>
      <tr><td>NOMBRE: $nombre</td></tr>
      <tr><td>TELEFONO: $telefono</td></tr>
      <tr><td>MAIL: $mail</td></tr>
      <tr><td>CONSULTA: $Mensaje</td></tr>
    </table>";
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
    $headers .= "From: $nombre <$mail>\r\n"; 
    mail($destinatario,$asunto,$cuerpo,$headers);
    echo "<script> alert('Su consulta fue enviada correctamente'); </script>";
    
    
  }
?>