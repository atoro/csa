<?php
  include("Conexion.php");
  $listado = "select * from contacto_pie";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $mail = $rs["mail"];
    $direccion = $rs["direccion"];
    $fono = $rs["fono"];
  }

  $listado = "select * from servicios where id = '$_GET[id]' ";
  $sentencia = mysql_query($listado,$conn);
  if($rs=mysql_fetch_array($sentencia,$mibase)){
    $id= $rs["id"];
    $titulo_servicio = str_replace("\r\n","<br>",$rs["titulo_servicio"]); 
    $completo_servicio = str_replace("\r\n","<br>",$rs["completo_servicio"]);
  }

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Detalle Servicios CSA</title>
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
          <li><a class="activo" href="servicios.php">Servicios</a></li>
          <li><a href="noticias.php">Noticias</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="headerimg3">

  </div>
  
  <section class="servicios">
    <div class="servicios_dentro">
      <div class="img_detalle">
        <img src="imagenes/servicios/<?php echo $rs["id"]; ?>.jpg">
      </div>
      <div class="contenido_texto">
        <h3><?php $texto = str_replace("\r\n","<br>",$rs["titulo_servicio"]); echo $texto ?></h3>
        <p><?php $texto = str_replace("\r\n","<br>",$rs["completo_servicio"]); echo $texto ?></p>
        

        galeria


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
        $('.headerimg3').parallax({ "coeff":-0.2 });
    })
</script>
<!--efecto 3D-->

  

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquerypp.custom.js"></script>
  <script type="text/javascript" src="js/jquery.elastislide.js"></script>
  <script type="text/javascript">
      
    // example how to integrate with a previewer

    var current = 0,
      $preview = $( '#preview' ),
      $carouselEl = $( '#carousel' ),
      $carouselItems = $carouselEl.children(),
      carousel = $carouselEl.elastislide( {
        current : current,
        minItems : 4,
        onClick : function( el, pos, evt ) {

          changeImage( el, pos );
          evt.preventDefault();

        },
        onReady : function() {

          changeImage( $carouselItems.eq( current ), current );
            
        }
      } );

    function changeImage( el, pos ) {

      $preview.attr( 'src', el.data( 'preview' ) );
      $carouselItems.removeClass( 'current-img' );
      el.addClass( 'current-img' );
      carousel.setCurrent( pos );

    }

  </script>

  


</body>
</html>