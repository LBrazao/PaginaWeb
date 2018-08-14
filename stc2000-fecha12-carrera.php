<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:17px;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<span class="Estilo1">Final   - <SPAN style="color:#FF0000; text-decoration:underline">FINALIZADO  </SPAN>                       </span><br />
<?php

$twit = file_get_contents('http://www.supertc2000.com.ar/carreras.php?accion=tiempos&id=273');

$inicio = strpos($twit, 'Carrera Final&nbsp;Domingo 17 de diciembre de 2017, 13:05hs 33 vueltas o un máx. de 55min.</h5>');

$final = strpos($twit, '&nbsp;<a href="tiempos_y_datos_items.php?id_evento=10319&id_carrera=273" class="celeste">- Ver tiempos</a><br />');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('Carrera Final&nbsp;Domingo 17 de diciembre de 2017, 13:05hs 33 vueltas o un máx. de 55min.</h5>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<h5><i class="fa fa-caret-down"></i>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<td width="22">', '<td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td width="119">', '<td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td width="91">', '<td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td width="21">', '<td>',$cadenaABuscar);
$cadenaABuscar = str_replace('00.000', '',$cadenaABuscar);
$cadenaABuscar = str_replace('00:', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Posici&oacute;n</td>', '<td>Pos.</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<div>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</div>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<p></p>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</p>', '<span>',$cadenaABuscar);
$cadenaABuscar = str_replace('style="font-size:11px; padding-top:20px;">', 'style="padding-top:20px;">',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Chevrolet&nbsp;Cruze</td>', '<td><img height="35" title="Chevrolet" src="/2016/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Citroen&nbsp;C4 Lounge</td>', '<td><img height="35" title="Citroen&nbsp;C4 Lounge" src="/2016/logos/citroen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Ford&nbsp;Focus II</td>', '<td><img height="35" title="Ford&nbsp;Focus II" src="/2016/logos/tc_ford.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Ford&nbsp;Focus III</td>', '<td><img height="35" title="Ford&nbsp;Focus III" src="/2016/logos/tc_ford.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Fiat&nbsp;Linea</td>', '<td><img height="35" title="Fiat&nbsp;Linea" src="/2016/logos/fiat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Renault&nbsp;Fluence</td>', '<td><img height="35" title="Renault&nbsp;Fluence" src="/2016/logos/renault.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Toyota&nbsp;Corolla</td>', '<td><img height="35" title="Toyota&nbsp;Corolla" src="/2016/logos/toyota.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Peugeot&nbsp;408</td>', '<td><img height="35" title="Peugeot&nbsp;408" src="/2016/logos/peugeot.png" border="0"></td>',$cadenaABuscar);



echo $cadenaABuscar;

?>-->


</body>
<head>
<style type="text/css">
<!--

.tabla_tiempos tbody:nth-child(odd){
	background-color:#E5E5E5;
}
.tabla_tiempos tbody:nth-child(even){
	background-color:#F8F8F8;
}

.tabla_tiempos tbody tr td, .tabla_tiempos thead tr td{
	padding:3px;
}
table {border:none;
border-spacing:none;
font-size:19px;
font-family:Oswald;
width:100%}

table tbody tr td:first-child{
font-weight:bold;
color:#FF0000;
text-align:center;
}
table tr td:nth-child(2){
font-weight:bold;
text-align:left;
}
table tr td:nth-child(3), table tr td:nth-child(4), table tr td:nth-child(5), table tr td:nth-child(6){
text-align:center;
}
table thead{
color:#FF0000;
font-weight:bold
}
.observaciones{
font-weight:bold;
color:#FF0000;
}
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
	font-size: 18px;
}
.celeste{
color:#FF0000;
font-weight: bold;
}
-->
</style>
</head>
</html>