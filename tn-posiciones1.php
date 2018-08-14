<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Turismo Nacional | Campeonato</title>
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
$carga=file_get_contents('cabezatn.html');
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
      <span style="font-family:Oswald; font-size:22px">CUMPLIDA LA FECHA 12 (ROSARIO)</span>
	  <table border="0" width="100%" cellpadding="0" cellspacing="0"><tr>
	  <td><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tabla1_campeonato" class="tanda-completa-hover" onclick="tabla1_aparece()">
      <tr>
        <td width="25%">Clase 3</td>
      </tr>
    </table></td>
	  <td><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tabla2_campeonato" class="tanda-completa" onclick="tabla2_aparece()">
      <tr>
        <td width="25%">Clase 2</td>
      </tr>
    </table></td>
	
	  </tr></table><div id="tabla1_full" class="galeriauno"><?php

$twit = file_get_contents('http://www.apat.org.ar/posiciones/3');

$inicio = strpos($twit, '<table border="0" cellspacing="0" cellpadding="2" class="lista_resultados">');

$final = strpos($twit, '<!-- /box4 --> ');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('</div>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<table border="0" cellspacing="0" cellpadding="2" class="lista_resultados">', '<table border="0" cellspacing="0" cellpadding="0" class="lista_resultados" id="posiciones_tn">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="desk">Posicion</span>', '<span class="desk">Pos.</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="desk">Ranking</span>', '<span class="desk">N&ordm;</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="left">Auto</td>', '<td align="left">Marca</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Cruze</td>', '<td><img height="35" title="Chevrolet Cruze" src="/2018/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Focus</td>', '<td><img height="35" title="Ford Focus" src="/2018/logos/tc_ford.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>308</td>', '<td><img height="35" title="Peugeot 308" src="/2018/logos/peugeot.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Linea</td>', '<td><img height="35" title="Fiat Línea" src="/2018/logos/fiat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>All New Civic</td>', '<td><img height="35" title="Honda All New Civic" src="/2018/logos/honda.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Civic</td>', '<td><img height="35" title="Honda New Civic" src="/2018/logos/honda.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>New Civic</td>', '<td><img height="35" title="Honda New Civic" src="/2018/logos/honda.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Veloster</td>', '<td><img height="35" title="Hyundai Veloster" src="/2018/logos/hyundai.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Vento</td>', '<td><img height="35" title="Volkswagen Vento" src="/2018/logos/volkswagen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Corolla</td>', '<td><img height="35" title="Toyota Corolla" src="/2018/logos/toyota.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>147</td>', '<td><img height="35" title="Alfa Romeo 147" src="/2018/logos/alfa.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>C4 Lounge</td>', '<td><img height="35" title="Citroen C4 Lounge" src="/2018/logos/citroen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Leon</td>', '<td><img height="35" title="Seat Leon" src="/2018/logos/seat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Cerato</td>', '<td><img height="35" title="KIA Cerato" src="/2018/logos/kia.png" border="0"></td>',$cadenaABuscar);


echo $cadenaABuscar;

?></div>
	  <div id="tabla2_full" class="galeriacero">
	  <?php

$twit = file_get_contents('http://www.apat.org.ar/posiciones/2');

$inicio = strpos($twit, '<table border="0" cellspacing="0" cellpadding="2" class="lista_resultados">');

$final = strpos($twit, '<!-- /box4 --> ');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('</div>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<table border="0" cellspacing="0" cellpadding="2" class="lista_resultados">', '<table border="0" cellspacing="0" cellpadding="0" class="lista_resultados" id="posiciones_tn">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="desk">Posicion</span>', '<span class="desk">Pos.</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="desk">Ranking</span>', '<span class="desk">N&ordm;</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Auto</td>', '<td align="left">Marca</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Clio</td>', '<td><img height="35" title="Renault Clío" src="/2018/logos/renault.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>208</td>', '<td><img height="35" title="Peugeot 208" src="/2018/logos/peugeot.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Trend</td>', '<td><img height="35" title="Volkswagen Gol Trend" src="/2018/logos/volkswagen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Etios</td>', '<td><img height="35" title="Toyota Etios" src="/2018/logos/toyota.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Corsa</td>', '<td><img height="35" title="Chevrolet Corsa" src="/2018/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Fiesta Kinetic</td>', '<td><img height="35" title="Ford Fiesta Kinetic" src="/2018/logos/tc_ford.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Palio</td>', '<td><img height="35" title="Fiat Palio" src="/2018/logos/fiat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>DS3</td>', '<td><img height="35" title="Citroen DS3" src="/2018/logos/citroen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Gol Trend</td>', '<td><img height="35" title="Volkswagen Gol Trend" src="/2018/logos/volkswagen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Gol</td>', '<td><img height="35" title="Volkswagen Gol" src="/2018/logos/volkswagen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Classic</td>', '<td><img height="35" title="Chevrolet Classic" src="/2018/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);


echo $cadenaABuscar;

?></div>

      
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
