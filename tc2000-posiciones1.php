<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TC2000 | Campeonato</title>
<meta http-equiv="Pragma" content="no-cache" />
<script src="/js/jquery-3.1.1.min.js"></script>
<script src="../js/lightbox-2.6.min.js"></script>
<script src="funciones_campeonato.js"></script>
<script type="text/javascript" src="textanimation.js"></script>
<script type="text/javascript" src="propiertiesvideos.js"></script>
<script type="text/javascript" src="propiertiesimages.js"></script>
<script src="code_news.js"></script>
<script src="efectos.js"></script>
<link href="../css/lightbox2.css" rel="stylesheet" />
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
<link href="stylesheading.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="textpropierties.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="livestreamming.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="paddingsimulation.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="pluginsperformance.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="styleshead.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link type="text/css" rel="stylesheet" href="estilos_nuevos.css" media="screen">
<!--[if IE]>
<style type="text/css">
html .menuenvivo{margin-left:8px;}
html .alternativo1{margin-top:-15px;}
html .alternativo2{margin-top:-30px;}
html .alternativo3{margin-top:-45px; margin-left:333px;}
html .alternativo4{margin-top:-60px; margin-left:444px;}
html .cabezanoticias{margin-left:-16px;}
html .cabezavideos{margin-left:-16px;}
html .imagenvideo_btn{margin-left:15px;}
html .masvideos{margin-left:-15px;}
html .textomasvideos{margin-left:-55px;}
html .nav {margin-top:0px;}
html .nav li ul {padding:33px; margin-left:-160px;}
html .nav1 {margin-top:0px;}
html .nav1 li ul {padding:33px; margin-left:-213px;}
html .nrPanel0 {margin-top:-34px;}
html .nrPanel1 {margin-top:-28px;}
</style>

<![endif]-->


<style type="text/css">
<!--
.Estilo8:hover {text-decoration:underline}
.noticias1 {	height: 311px;
	width: 273px;
	overflow: auto;
}
body {
	background-color: #EEEEEE;
	background-image: url(fondotc1.jpg);
	background-repeat: no-repeat;
	background-position:top;
}
-->
</style>
</head>
<script>

</script>
<body onload="MM_preloadImages('camara.png')">
<?php
$carga=file_get_contents('cabeza web1.html');
echo $carga;
?>
<div class="con_margen">
<?php
$carga=file_get_contents('cabezatc2000.html');
echo $carga;
?>
<table width="100%" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="100%" height="91" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:7px">
  <tr>
    <td width="80%" valign="top" style="border-right: 1px dashed #999999"> <div style="padding:8px;">
      <span style="font-family:Oswald; font-size:22px">CUMPLIDA LA FECHA 12 (ALTA GRACIA)</span>
	  <?php

$twit = file_get_contents('http://www.tc2000.com.ar/estadisticas.php?accion=posiciones');

$inicio = strpos($twit, '<!-- LISTA DE PILOTOS -->');

$final = strpos($twit, '<div class="separador_azul"></div>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<!-- LISTA DE PILOTOS -->', '<table cellpadding="0" cellspacing="0" border="0" class="posiciones_stc2000">',$cadenaABuscar);
$cadenaABuscar = str_replace('<div>', '<tr>',$cadenaABuscar);
$cadenaABuscar = str_replace('</div>', '</tr>',$cadenaABuscar);
$cadenaABuscar = str_replace('<ul class="puntajes">', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</ul>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<li ', '<td ',$cadenaABuscar);
$cadenaABuscar = str_replace('</li>', '</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('&deg;</td>', '</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_chevrolet.png"></td>', '<td class="marca"><img height="35" title="Chevrolet" src="/2018/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_citroen.png"></td>', '<td class="marca"><img height="35" title="Citroen&nbsp;C4 Lounge" src="/2018/logos/citroen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_ford.png"></td>', '<td class="marca"><img height="35" title="Ford&nbsp;Focus" src="/2018/logos/tc_ford.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_fiat.png"></td>', '<td class="marca"><img height="35" title="Fiat&nbsp;Linea" src="/2018/logos/fiat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_renault.png"></td>', '<td class="marca"><img height="35" title="Renault&nbsp;Fluence" src="/2018/logos/renault.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_toyota.png"></td>', '<td class="marca"><img height="35" title="Toyota&nbsp;Corolla" src="/2018/logos/toyota.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_peugeot.png"></td>', '<td class="marca"><img height="35" title="Peugeot&nbsp;408" src="/2018/logos/peugeot.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_honda.png"></td>', '<td class="marca"><img height="35" title="Peugeot&nbsp;408" src="/2018/logos/honda.png" border="0"></td>',$cadenaABuscar);


echo $cadenaABuscar;

?></table>
      
    </div>
      </td>
    <td width="20%" valign="top"><div align="center">
      <p><span style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-size:11px;">PUBLICIDAD</span> <br />
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
            <param name="movie" value="publicidad dakar columna.swf" />
            <param name="quality" value="high" />
            <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
          </object>
      </p>
      <p>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
          <param name="movie" value="publicidad dakar columna.swf" />
          <param name="quality" value="high" />
          <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
        </object>
      </p>
      <p>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
          <param name="movie" value="publicidad dakar columna.swf" />
          <param name="quality" value="high" />
          <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
        </object>
      </p>
      <p>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
          <param name="movie" value="publicidad dakar columna.swf" />
          <param name="quality" value="high" />
          <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
        </object>
      </p>
      <p>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
          <param name="movie" value="publicidad dakar columna.swf" />
          <param name="quality" value="high" />
          <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
        </object>
      </p>
    </div></td>
  </tr>
</table>
 <table width="990" height="6" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table></div>
<?php
$carga=file_get_contents('pie web.html');
echo $carga;
?>
</body>
</html>
