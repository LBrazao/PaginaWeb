<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	font-family:Oswald;
	font-size:22px;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<b><span class="Estilo1">1º Clasificación (Clase 2)  - <SPAN style="color:#FF0000; text-decoration:underline">FINALIZADO  </SPAN>                       </span></b><br />
<table border="0" cellpadding="0" cellspacing="0"><?php

$twit = file_get_contents('http://www.apat.org.ar/resultados/2/2017-12-03');

$inicio = strpos($twit, '<td colspan="7" class="TabResTitulo">1&deg; CLASIFICACI&Oacute;N <strong>C2</strong></td>');

$final = strpos($twit, '<td colspan="7" class="TabResTitulo">2&deg; CLASIFICACI&Oacute;N <strong>C2</strong></td>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<td align="center">Puesto</td>', '<td align="center">Pos.</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">Nro</td>', '<td align="center">Nº</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">Vtas</td>', '<td align="center">Vueltas</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Dif.</td>', '<td>Diferencia</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<h6>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</h6>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">CLIO</td>', '<td align="center"><img height="35" title="Renault Clío" src="/2018/logos/renault.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">208</td>', '<td align="center"><img height="35" title="Peugeot 208" src="/2018/logos/peugeot.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">TREND</td>', '<td align="center"><img height="35" title="Volkswagen Gol Trend" src="/2018/logos/volkswagen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">ETIOS</td>', '<td align="center"><img height="35" title="Toyota Etios" src="/2018/logos/toyota.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">CORSA</td>', '<td align="center"><img height="35" title="Chevrolet Corsa" src="/2018/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">KINETIC</td>', '<td align="center"><img height="35" title="Ford Fiesta Kinetic" src="/2018/logos/tc_ford.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">PALIO</td>', '<td align="center"><img height="35" title="Fiat Palio" src="/2018/logos/fiat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">DS3</td>', '<td align="center"><img height="35" title="Citroen DS3" src="/2018/logos/citroen.png" border="0"></td>',$cadenaABuscar);



echo $cadenaABuscar;

?>

</body>
<head>
<style type="text/css">
<!--

table tr:nth-child(odd){
	background-color:#E5E5E5;
}
.table-bordered, .lista_resultados, .separador, .row, .rbnNera{
display:none;
}
table tr:nth-child(even){
	background-color:#F8F8F8;
}

table {border:none;
border-spacing:none;
font-size:19px;
font-family:Oswald;
width:100%}

table tbody tr:first-child{
display:none;
}
table tr td:first-child{
color:#FF0000;
font-weight:bold;
}
table tr:last-child{
background-color:#FFFFFF;
}
table tr td:nth-child(3){
font-weight:bold;
text-align:left;
}
.TabResHeads{
font-weight:bold;
color:#FF0000;
}
table tr td{
padding:3px;
}
-->
</style>
</head>
</html>