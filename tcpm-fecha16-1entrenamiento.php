<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	font-family:Oswald;
	font-weight:lighter;
	margin:0;
	padding:0;
}

@keyframes blink {
    0% {
	opacity:1
    }
    50% {
	opacity:0
    }
    100% {
	opacity:1
    }
}
.parpadeo{
animation:blink 1s;
animation-iteration-count: infinite;
}
-->
</style>

<script type="text/javascript">

if (screen.width >= 1280) { 

document.write('<link href="autos_grandes.css" type="text/css" rel="stylesheet"/>');

} 
else { 

document.write('<link href="autos_chicos.css" type="text/css" rel="stylesheet"/>');

} 
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<span class="Estilo1">1º Entrenamiento <img height="40" src="bandera_a_cuadros.png">  <img height="40" class="parpadeo" src="semaforo verde.png"></span>
<table><tr><td><?php

$twit = file_get_contents('http://actc.org.ar/v3/carrera-on-line-resultados.ajax.php?intIDCarrera=627&intIDTanda=31');

$inicio = strpos($twit, '<table');

$final = strpos($twit, '</table>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<th>N&uacute;mero</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Piloto</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Marca</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('Pos.', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<a href', '<span href',$cadenaABuscar);
$cadenaABuscar = str_replace('</a>', '</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="/vistas/iconos/ppcev_flag.gif" />', '',$cadenaABuscar);
$cadenaABuscar = str_replace('&deg;', '',$cadenaABuscar);
$cadenaABuscar = str_replace('01:', '1:',$cadenaABuscar);
$cadenaABuscar = str_replace('02:', '2:',$cadenaABuscar);
$cadenaABuscar = str_replace('03:', '3:',$cadenaABuscar);
$cadenaABuscar = str_replace('04:', '4:',$cadenaABuscar);
$cadenaABuscar = str_replace('05:', '5:',$cadenaABuscar);
$cadenaABuscar = str_replace('06:', '6:',$cadenaABuscar);
$cadenaABuscar = str_replace('07:', '7:',$cadenaABuscar);
$cadenaABuscar = str_replace('08:', '8:',$cadenaABuscar);
$cadenaABuscar = str_replace('09:', '9:',$cadenaABuscar);
$cadenaABuscar = str_replace('<img data-original="/vistas/v3/images/logos/logo-chevrolet-xs.png"', '<img height="35" title="Chevrolet" src="/2016/logos/tc_chevrolet.png"',$cadenaABuscar);
$cadenaABuscar = str_replace('<img data-original="/vistas/v3/images/logos/logo-ford-xs.png"', '<img height="35" title="Ford" src="/2016/logos/tc_ford.png"',$cadenaABuscar);
$cadenaABuscar = str_replace('<img data-original="/vistas/v3/images/logos/logo-dodge-xs.png"', '<img height="35" title="Dodge" src="/2016/logos/tc_dodge.png"',$cadenaABuscar);
$cadenaABuscar = str_replace('<img data-original="/vistas/v3/images/logos/logo-torino-xs.png"', '<img height="35" title="Torino" src="/2016/logos/tc_torino.png"',$cadenaABuscar);
$cadenaABuscar = str_replace('<table class="table">', '<table cellpadding="1" cellspacing="0" border="0" class="table">',$cadenaABuscar);

echo $cadenaABuscar;

?></td></tr></table>

<table bgcolor="#FFFFFF" width="100%"><tr><td align="left"><?php

$twit = file_get_contents('http://actc.org.ar/v3/carrera-on-line-resultados.ajax.php?intIDCarrera=627&intIDTanda=31');

$inicio = strpos($twit, '<div class="incidences">');

$final = strpos($twit, '</div><!-- /incidencias -->');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<h2>Comentarios</h2>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<ul>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</ul>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<li>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</li>', '',$cadenaABuscar);

echo $cadenaABuscar;

?></td></tr></table>

</body>
<head>
<style type="text/css">
<!--

.table tbody tr:nth-child(odd){
	background-color:#E5E5E5;
}
.table tbody tr:nth-child(even){
	background-color:#F8F8F8;
}
table {border:none;
border-spacing:none;
width:100%}

.Estilo4{
	color:#FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
}
.incidences{
	color:#FF0000;
	font-family:Arial, Helvetica, sans-serif;
	font-size:17px;
	font-weight:bold;
}
.numerostabla {
	font-weight:bold;
	color:#FF0000;
}
table td:nth-child(10n+3) {
	font-weight:bold;
	color:#333333;
}
.piloto{
text-align:left;
}
table{
text-align:center;
color:#333333;
}
thead{color:#FF0000}
.lazy{
text-align:left;
}
.Estilo3 {
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
	font-style:italic;
	font-weight:bold;
}
.Estilo1 {
	font-weight:normal;
	font-size: 28px;
	text-align:left;
}
.pos {
	color:#FF0000;
	font-weight:bold;
}
-->
</style>
</head>
</html>