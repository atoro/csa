<?php
  include("Conexion.php");
  $listado = "select * from contacto_pie";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $mail = $rs["mail"];
    $direccion = $rs["direccion"];
    $fono = $rs["fono"];
  }

  $listado = "select * from noticias where id = '$_GET[id]' ";
  $sentencia = mysql_query($listado,$conn);
  if($rs=mysql_fetch_array($sentencia,$mibase)){
    $id= $rs["id"];
    $titulo_noticia = str_replace("\r\n","<br>",$rs["titulo_noticia"]); 
    $completo_noticia = str_replace("\r\n","<br>",$rs["completo_noticia"]);
  }

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Detalle Noticias CSA</title>
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
      <div class="img_detalle">
        <img src="imagenes/noticias/<?php echo $rs["id"]; ?>.jpg">
      </div>
      <div class="contenido_texto">
        <h3><?php $texto = str_replace("\r\n","<br>",$rs["titulo_noticia"]); echo $texto ?></h3>
        <p><?php $texto = str_replace("\r\n","<br>",$rs["completo_noticia"]); echo $texto ?></p>
        <!-- REDES SOCIALES -->
        <div style="margin-top:30px;">
          <div class="fb-like" data-href="http://www.csaserviciosindustriales.cl/detallenoticia.php?id=<?php echo $rs["id"]; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" style="vertical-align: top; margin: 0 0 10px 0;"></div>
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.csaserviciosindustriales.cl/detallenoticia.php?id=<?php echo $_GET["id"]; ?>" data-lang="es" data-size="large" data-hashtags="CSA" data-dnt="true" style="vertical-align:top;">Twittear</a>  
        </div>
      </div>
    </div>
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
        $('.headerimg4').parallax({ "coeff":-0.2 });
    })
</script>

<!-- REDES SOCIALES -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
  </script>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  </script>

</body>
</html>