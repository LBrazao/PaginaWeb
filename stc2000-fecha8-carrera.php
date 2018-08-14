<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Documento sin t&iacute;tulo</title>








<style type="text/css">

<!--

body {

	margin-left: 4px;

	margin-top: 4px;

	background-color: #FFFFFF;

}


.tabla_resultados tbody:nth-child(odd){
	background-color:#E5E5E5;
}
.tabla_resultados tbody:nth-child(even){
	background-color:#F8F8F8;
}
.tabla_resultados tr{
height:22px;
}
.tabla_resultados thead{
	background-color:#E5E5E5;
	font-weight:bold;
	color:#FF0000;
}
.tabla_resultados{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
text-align:center;
}
.tabla_resultados tbody tr td:nth-child(10n+1){
font-weight:bold;
color:#FF0000;
}
.tabla_resultados tbody tr td:nth-child(10n+2){
font-weight:bold;
text-align:left;
}
.tabla_resultados tbody tr td:nth-child(10n+3){
text-align:left;
}
.observaciones{
margin-top:10px; color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold}
-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif" class="Estilo9 Estilo1 Estilo7"><strong><i>Carrera</i></strong></span></td>
  </tr>
</table> 


<?php

$twit = file_get_contents('http://www.super-tc2000.com.ar/tiempos_y_datos_items.php?id_evento=10068&id_carrera=209');

$inicio = strpos($twit, '<table border="0" cellpadding="0" cellspacing="0" class="tabla_resultados">');

$final = strpos($twit, '                                                                </table>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<td width="22">Posici&oacute;n</td>', '<td width="30">Pos.</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td width="119">Piloto</td>', '<td width="150">Piloto</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('00:', '',$cadenaABuscar);

$cadenaABuscar = str_replace('                                    00.000', '                                    ',$cadenaABuscar);
$cadenaABuscar = str_replace('                                    00.', '                                    0.',$cadenaABuscar);
$cadenaABuscar = str_replace('                                    01.', '                                    1.',$cadenaABuscar);
$cadenaABuscar = str_replace('                                    02.', '                                    2.',$cadenaABuscar);
$cadenaABuscar = str_replace('                                    03.', '                                    3.',$cadenaABuscar);
$cadenaABuscar = str_replace('                                    04.', '                                    4.',$cadenaABuscar);
$cadenaABuscar = str_replace('                                    05.', '                                    5.',$cadenaABuscar);
$cadenaABuscar = str_replace('                                    06.', '                                    6.',$cadenaABuscar);
$cadenaABuscar = str_replace('                                    07.', '                                    7.',$cadenaABuscar);
$cadenaABuscar = str_replace('                                    08.', '                                    8.',$cadenaABuscar);
$cadenaABuscar = str_replace('                                    09.', '                                    9.',$cadenaABuscar);

echo $cadenaABuscar;

?>
<table class="observaciones" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php

$twit = file_get_contents('http://www.super-tc2000.com.ar/tiempos_y_datos_items.php?id_evento=10068&id_carrera=209');

$inicio = strpos($twit, '<p class="celeste" style="font-size:11px; padding-top:20px;">');

$final = strpos($twit, '</p></td>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<p', '<span',$cadenaABuscar);
$cadenaABuscar = str_replace('</p', '</span',$cadenaABuscar);
$cadenaABuscar = str_replace('style="font-size:11px; padding-top:20px;"', '',$cadenaABuscar);
echo $cadenaABuscar;

?></td>
  </tr>
</table>
</body>

<head>



</head>

</html>