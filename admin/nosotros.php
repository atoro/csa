<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Grabar"]){
	$editar="update  nosotros set titulo_nosotros  = '$_POST[titulo_nosotros]',contenido_nosotros  = '$_POST[contenido_nosotros]',mision  = '$_POST[mision]',contenido_mision  = '$_POST[contenido_mision]',vision  = '$_POST[vision]',contenido_vision  = '$_POST[contenido_vision]'
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
	$listado = "select * from nosotros";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$titulo_nosotros = $rs["titulo_nosotros"];
		$contenido_nosotros = $rs["contenido_nosotros"];
		$mision = $rs["mision"];
		$contenido_mision = $rs["contenido_mision"];
		$vision = $rs["vision"];
		$contenido_vision = $rs["contenido_vision"];
	}
	?>
  <form action="nosotros.php" method="post" name="form1" id="form1">
    
    <table width="45%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td colspan="3"><div align="center" class="titulos"><strong>Nosotros</strong></div></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td width="29%" height="30" align="right" valign="top" class="texto"><p>Nosotros: &nbsp;</p></td>
        <td width="65%" valign="top"><input name="titulo_nosotros" type="text" class="textopreguntas" id="titulo_nosotros" value="<?php echo $titulo_nosotros; ?> " size="50"></td>
        <td width="6%">&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Contenido: &nbsp;</p></td>
        <td valign="top"><textarea name="contenido_nosotros" id="nosotros5" cols="50" rows="5"><?php echo $contenido_nosotros; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" class="texto"><p>Misión: &nbsp;</p></td>
        <td valign="top"><input name="mision" type="text" class="textopreguntas" id="mision" value="<?php echo $mision; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Contenido: &nbsp;</p></td>
        <td valign="top"><textarea name="contenido_mision" id="contenido_inicio" cols="50" rows="5"><?php echo $contenido_mision; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" class="texto"><p>Visión: &nbsp;</p></td>
        <td valign="top"><input name="vision" type="text" class="textopreguntas" id="titulo_inicio3" value="<?php echo $vision; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Contenido: &nbsp;</p></td>
        <td valign="top"><textarea name="contenido_vision" id="contenido_vision" cols="50" rows="5"><?php echo $contenido_vision; ?> </textarea></td>
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