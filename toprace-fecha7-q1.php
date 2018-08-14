<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<span class="Estilo1">1º Entrenamiento - <SPAN style="color:#FF0000; text-decoration:underline">FINALIZADO  </SPAN>                       </span><br />
<table><tr><td><?php

$twit = file_get_contents('http://186.159.120.203:8082/upload/htmls/ppcev/tanda_7_16.htm');

$inicio = strpos($twit, '<table class="table table-bordered table-striped table-condensed table-hover">');

$final = strpos($twit, '</table>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('Nro</th>', 'N&ordm;</th>',$cadenaABuscar);
$cadenaABuscar = str_replace('Vtas</th>', 'Vueltas</th>',$cadenaABuscar);
$cadenaABuscar = str_replace('Pos.', '',$cadenaABuscar);
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
table tr td:nth-child(7n+3){
text-align:left;
font-weight:bold;
}
.numerostabla {
	font-weight:bold;
	color:#FF0000;
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
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
	font-size: 18px;
}
-->
</style>
</head>
</html>