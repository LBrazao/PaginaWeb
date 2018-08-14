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
.tablehead{
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
}
.tablehead tr:nth-child(odd){
	background-color:#E5E5E5;
}
.tablehead tr:nth-child(even){
	background-color:#F8F8F8;
}

.tablehead tr td:nth-child(11n+1), .tablehead tr:first-child{
font-weight:bold;
color:#FF0000;
text-align:center;
}
.tablehead tr td:nth-child(11n+2){
font-weight:bold;
}
.tablehead tr td:nth-child(11n+3), .tablehead tr td:nth-child(11n+6), .tablehead tr td:nth-child(11n+7), .tablehead tr td:nth-child(11n+9), .tablehead tr td:nth-child(11n+10), .tablehead tr td:nth-child(11n+11){
display:none;
}
.tablehead tr td:nth-child(11n+4), .tablehead tr td:nth-child(11n+5), .tablehead tr td:nth-child(11n+8){
text-align:center;
}
.tablehead tr td:nth-child(11n+4){
text-align:center;
}

-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif" class="Estilo9 Estilo1 Estilo7"><strong><i>Carrera </i>           </strong></span><span class="Estilo6"> - <u>FINALIZADO</u></span></td>
  </tr>
</table> 

<?php
header('Content-Type: text/html; charset=ISO-8859-1');
$twit = file_get_contents('http://espndeportes.espn.go.com/rpm/deportes/raceresults/_/series/sprint/raceId/201510100021');

$inicio = strpos($twit, '<table');

$final = strpos($twit, '</table>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<a', '<span',$cadenaABuscar);
$cadenaABuscar = str_replace('</a', '</span',$cadenaABuscar);
$cadenaABuscar = str_replace('<table cellspacing="1" cellpadding="3" class="tablehead">', '<table cellspacing="0" cellpadding="3" class="tablehead">',$cadenaABuscar);
$cadenaABuscar = str_replace('<tr class="stathead"><td colspan="11">Resultados de la Carrera</td></tr>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="left">POS</td>', '<td align="left">Pos.</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>PILOTO</td>', '<td>Piloto</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="right">VUELTAS</td>', '<td>Vueltas</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="right">LED</td>', '<td>Lider&#243</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Toyota</td>', '<td><img src="toyota_nascar.png" width="43" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Ford</td>', '<td><img src="ford_nascar.png" height="17" width="43" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Chevrolet</td>', '<td><img src="chevrolet_nascar.png" height="17" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>ESCUDERÍA</td>', '<td>Marca</td>',$cadenaABuscar);

echo $cadenaABuscar;

?>
</body>


</html>