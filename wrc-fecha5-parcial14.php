<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>


<meta http-equiv="refresh" content="60" />

<style type="text/css">
<!--
.scrolltable{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
color:#333333;
}
thead{
color:#FF0000;
font-weight:bold;
background-color:#E5E5E5;
}
.scrolltable table{
border-collapse:collapse;
width:100%
}
.scrolltable table tr:nth-child(odd){
	background-color:#E5E5E5;
}
.scrolltable table tr:nth-child(even){
	background-color:#F8F8F8;
}
.driver{
font-weight:bold;
}
.aright{
text-align:center;
}
.red{
color:#FF0000;
}
.green{
color:#009900;
font-weight:bold;
font-size:14px;
}
.highlight{

font-weight:bold;
font-size:14px;
}
.link{
color:#FFFFFF;
font-weight:bold;
text-decoration:none;
}
-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>




<table style="font-family:Arial, Helvetica, sans-serif" width="437" height="32" border="0" cellpadding="0">
  <tr>
    <td width="112">ESPECIAL 14: </td>
    <td width="101" background="boton general.jpg"><div align="center"><a class="link" href="wrc-fecha5-especial14.php">Especial</a></div></td>
    <td width="99" background="boton general.jpg"><div align="center"><a class="link" href="wrc-fecha5-general14.php">General</a></div></td>
    <td width="98" background="boton general activo.jpg"><div align="center"><em>Parciales</em></div></td>
  </tr>
</table>
<?php
$twit = file_get_contents('http://www.wrc.com/live-ticker/daten/2016/183/split.183.14.html');
$inicio = strpos($twit, '<h4 data-lang-en="Split Times" data-lang-de="Zwischenzeiten" data-lang-es="Tiempos Intermedios" data-lang-fr="Temps partiels" data-lang-po="międzyczasy">Split Times</h4>');

$cadenaABuscar = substr($twit, $inicio);
$cadenaABuscar = str_replace('<h4 data-lang-en="Split Times" data-lang-de="Zwischenzeiten" data-lang-es="Tiempos Intermedios" data-lang-fr="Temps partiels" data-lang-po="międzyczasy">Split Times</h4>', '', $cadenaABuscar);
$cadenaABuscar = str_replace('class="header_sort">Start</th>', 'class="header_sort"></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('00:', '',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="Kategoria">Eligibility</td>', 'data-lang-po="Kategoria"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('Driver', 'Piloto',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="#">#</td>', 'data-lang-po="#">N&deg;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="aright">1&nbsp;</td>', '<td class="aright">P1&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="aright">2&nbsp;</td>', '<td class="aright">P2&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="aright">3&nbsp;</td>', '<td class="aright">P3&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="aright">4&nbsp;</td>', '<td class="aright">P4&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="aright">5&nbsp;</td>', '<td class="aright">P5&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="aright">6&nbsp;</td>', '<td class="aright">P6&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="aright">7&nbsp;</td>', '<td class="aright">P7&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="aright">8&nbsp;</td>', '<td class="aright">P8&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="aright">9&nbsp;</td>', '<td class="aright">P9&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="aright">10&nbsp;</td>', '<td class="aright">P10&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="Czas odcinka">Stage Time</th>', 'data-lang-po="Czas odcinka">Total</th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class=""><img src', '<td class="" width="160px"><img src',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="highlight"><img src', '<td class="highlight" width="160px"><img src',$cadenaABuscar);
echo $cadenaABuscar;


?>
</body>
</html>