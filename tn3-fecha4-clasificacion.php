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

.Estilo6 {font-family:Arial, Helvetica, sans-serif;

	font-size:18px;

	color:#FF0000;

	font-style:italic;

	font-weight:bold;

}
.tabla_resultados{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
width:100%;
}
.tabla_resultados tr:nth-child(odd){
	background-color:#E5E5E5;
}
.tabla_resultados tr:nth-child(even){
	background-color:#F8F8F8;
}
.tabla_resultados tr:first-child{
color:#FF0000;
font-weight:bold;
}
.tabla_resultados tr:last-child{
color:#FF0000;
font-weight:bold;
text-align:left;
background-color:#FFFFFF;
}
.tabla_resultados tr td:first-child{
color:#FF0000;
font-weight:bold;
text-align:center;
}
.tabla_resultados tr td:nth-child(10n+3){
font-weight:bold;
}
.tabla_resultados tr td:nth-child(10n+5){
text-align:center;
}
.tabla_resultados tr td:nth-child(10n+6){
text-align:center;
}
.tabla_resultados tr td:nth-child(10n+7){
text-align:center;
}

-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif"><strong><i>Clasificación (Clase 3) </i>           </strong></span><span class="Estilo6"> </span></td>
  </tr>
</table> 

<?php

$twit = file_get_contents('http://www.apat.org.ar/tiemposlistar.php?id=3&idc=3&idcr=160');

$inicio = strpos($twit, '<div class="grid_11 alpha" style="margin-bottom:10px;">');

$final = strpos($twit, '<h4 class="tipo_ap">DESCARGAS DE:<br />');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<div class="clear"></div>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<div class="grid_11 alpha">', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<table width="98%" border="0" align="center" cellpadding="3" cellspacing="2" bgcolor="#313131">', '<table class="tabla_resultados" border="0" cellpadding="3" cellspacing="0" bgcolor="#313131">',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#000000"', '',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#313131"', '',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#666666"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Puesto</td>', '<td>Pos.</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Nro</td>', '<td>Nº</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Vtas</td>', '<td>Vueltas</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Dif.</td>', '<td>Diferencia</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<h6>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</h6>', '',$cadenaABuscar);

echo $cadenaABuscar;

?>
</body>

</html>