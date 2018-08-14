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
<b><span class="Estilo1">1º Entrenamiento (Clase 3)  - <SPAN style="color:#FF0000; text-decoration:underline">FINALIZADO  </SPAN>                       </span></b><br />
<table border="0" cellpadding="0" cellspacing="0"><?php

$twit = file_get_contents('http://www.apat.org.ar/resultados/3/2017-12-03');

$inicio = strpos($twit, '<td colspan="7" class="TabResTitulo">1&deg; ENTRENAMIENTO <strong>C2</strong></td>');

$final = strpos($twit, '<td colspan="7" class="TabResTitulo">2&deg; ENTRENAMIENTO <strong>C2</strong></td>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<td align="center">Puesto</td>', '<td align="center">Pos.</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">Nro</td>', '<td align="center">Nº</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">Vtas</td>', '<td align="center">Vueltas</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Dif.</td>', '<td>Diferencia</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<h6>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</h6>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>CRUZE</td>', '<td><img height="35" title="Chevrolet Cruze" src="/2018/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>FOCUS</td>', '<td><img height="35" title="Ford Focus" src="/2018/logos/tc_ford.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>308</td>', '<td><img height="35" title="Peugeot 308" src="/2018/logos/peugeot.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>LINEA</td>', '<td><img height="35" title="Fiat Línea" src="/2018/logos/fiat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>ALL NEW CIVIC</td>', '<td><img height="35" title="Honda All New Civic" src="/2018/logos/honda.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>CIVIC</td>', '<td><img height="35" title="Honda New Civic" src="/2018/logos/honda.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>NEW CIVIC</td>', '<td><img height="35" title="Honda New Civic" src="/2018/logos/honda.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>VELOSTER</td>', '<td><img height="35" title="Hyundai Veloster" src="/2018/logos/hyundai.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>VENTO</td>', '<td><img height="35" title="Volkswagen Vento" src="/2018/logos/volkswagen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>COROLLA</td>', '<td><img height="35" title="Toyota Corolla" src="/2018/logos/toyota.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>147</td>', '<td><img height="35" title="Alfa Romeo 147" src="/2018/logos/alfa.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>C4 LOUNGE</td>', '<td><img height="35" title="Citroen C4 Lounge" src="/2018/logos/citroen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>LEON</td>', '<td><img height="35" title="Seat Leon" src="/2018/logos/seat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>CERATO</td>', '<td><img height="35" title="KIA Cerato" src="/2018/logos/kia.png" border="0"></td>',$cadenaABuscar);



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