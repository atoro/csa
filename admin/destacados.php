<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Grabar"]){
	$editar="update  servicios_destacados set titulo_destacados  = '$_POST[titulo_destacados]',servicio1  = '$_POST[servicio1]',servicio2  = '$_POST[servicio2]',servicio3  = '$_POST[servicio3]',servicio4  = '$_POST[servicio4]'
	";
	$sentencia = mysql_query($editar,$conn)or die("Error al grabar: ".mysql_error);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Span/Letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<title>Admin</title>

</head>

<body>
  <?php
	$listado = "select * from servicios_destacados";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$titulo_destacados = $rs["titulo_destacados"];
		$servicio1 = $rs["servicio1"];
		$servicio2 = $rs["servicio2"];
		$servicio3 = $rs["servicio3"];
		$servicio4 = $rs["servicio4"];
	}
	?>
  <form action="destacados.php" method="post" name="form1" id="form1">
    
    <table width="45%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td colspan="3"><div align="center" class="titulos"><strong>Servicios Destacados</strong></div></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td width="29%" height="30" align="right" valign="top" class="texto"><p>Titulo: &nbsp;</p></td>
        <td width="65%" valign="top"><input name="titulo_destacados" type="text" class="textopreguntas" id="titulo_destacados" value="<?php echo $titulo_destacados; ?> " size="50"></td>
        <td width="6%">&nbsp;</td>
      </tr>
      <tr>
        <td height="215" align="right" valign="top" class="texto"><a href="../imagenes/destacados/Upload_foto.php?id=1" class="texto">Cambiar Imagen:</a> &nbsp;</td>
        <td valign="top"><img src="../imagenes/destacados/1.jpg" width="200" height="200"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Contenido 1: &nbsp;</p></td>
        <td valign="top"><textarea name="servicio1" id="nosotros5" cols="50" rows="5"><?php echo $servicio1; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="218" align="right" valign="top" class="texto"><a href="../imagenes/destacados/Upload_foto.php?id=2" class="texto">Cambiar Imagen:</a> &nbsp;</td>
        <td valign="top"><img src="../imagenes/destacados/2.jpg" width="200" height="200"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Contenido 2: &nbsp;</p></td>
        <td valign="top"><textarea name="servicio2" id="contenido_inicio" cols="50" rows="5"><?php echo $servicio2; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="216" align="right" valign="top" class="texto"><a href="../imagenes/destacados/Upload_foto.php?id=3" class="texto">Cambiar Imagen:</a> &nbsp;</td>
        <td valign="top"><img src="../imagenes/destacados/3.jpg" width="200" height="200"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Contenido 3: &nbsp;</p></td>
        <td valign="top"><textarea name="servicio3" id="servicio3" cols="50" rows="5"><?php echo $servicio3; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="218" align="right" valign="top" class="texto"><a href="../imagenes/destacados/Upload_foto.php?id=4" class="texto">Cambiar Imagen:</a> &nbsp;</td>
        <td valign="top"><img src="../imagenes/destacados/4.jpg" width="200" height="200"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Contenido 4: &nbsp;</p></td>
        <td valign="top"><textarea name="servicio4" id="contenido_inicio3" cols="50" rows="5"><?php echo $servicio4; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="right" valign="top" class="texto"><p>&nbsp;</p></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="18" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="49" colspan="3"><div align="center">
          <label>
          <input name="Grabar" type="submit" class="textobox3" id="Grabar" value="Grabar" />
          </label>
        </div></td>
      </tr>
    </table>
    <p align="center"><a href="sesion.php" class="texto">Volver</a></p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
</form>
</body>
</html>
<?php } ?>