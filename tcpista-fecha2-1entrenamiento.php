<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	margin-left: 5px;
	margin-top: 5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}
.Estilo6 {font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
	font-size: 18px;
}
.Estilo6 {font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
	color:#FF0000;
	font-style:italic;
	font-weight:bold;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<span class="Estilo1">1º Entrenamiento</span> <span class="Estilo1">- </span><span class="Estilo6"> <u>FINALIZADO</u></span><br />
<table><tr><td><?php

$twit = file_get_contents('http://actc.org.ar/v3/carrera-on-line-resultados.ajax.php?intIDCarrera=522&intIDTanda=9');

$inicio = strpos($twit, '<table');

$final = strpos($twit, '</table>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<th>N&uacute;mero</th>', '<th>Nº</th>',$cadenaABuscar);
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
$cadenaABuscar = str_replace('<img data-original=', '<img height="22" src=',$cadenaABuscar);
$cadenaABuscar = str_replace('<table class="table">', '<table cellpadding="1" cellspacing="0" border="0" class="table">',$cadenaABuscar);

echo $cadenaABuscar;

?></td></tr></table>

<table bgcolor="#FFFFFF" width="100%"><tr><td align="left"><?php

$twit = file_get_contents('http://actc.org.ar/v3/carrera-on-line-resultados.ajax.php?intIDCarrera=522&intIDTanda=9');

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
border-spacing:none}

.Estilo4{
	color:#FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
}
.incidences{
	color:#FF0000;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	font-weight:bold;
}
.numerostabla {
	font-weight:bold;
	color:#FF0000;
}
a {
	font-weight:bold;
	color:#333333;
	text-decoration:none;
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
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
	font-size: 18px;
}
.pos {
	color:#FF0000;
	font-weight:bold;
}
-->
</style>
</head>
</html>