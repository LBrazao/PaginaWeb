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
.resulttable tbody tr:nth-child(50n+1), .resulttable tbody tr:nth-child(50n+2), .resulttable tbody tr td:nth-child(50n+2),.resulttable tbody tr td:nth-child(50n+3), .resulttable tbody tr td:nth-child(50n+6), .resulttable tbody tr:nth-child(50n+9),
.resulttable tbody tr:nth-child(50n+10),
.resulttable tbody tr:nth-child(50n+11),
.resulttable tbody tr:nth-child(50n+12),
.resulttable tbody tr:nth-child(50n+13),
.resulttable tbody tr:nth-child(50n+14),
.resulttable tbody tr:nth-child(50n+15),
.resulttable tbody tr:nth-child(50n+16),
.resulttable tbody tr:nth-child(50n+17),
.resulttable tbody tr:nth-child(50n+18),
.resulttable tbody tr:nth-child(50n+19),
.resulttable tbody tr:nth-child(50n+20),
.resulttable tbody tr:nth-child(50n+21),
.resulttable tbody tr:nth-child(50n+22),
.resulttable tbody tr:nth-child(50n+23),
.resulttable tbody tr:nth-child(50n+3),
.resulttable tbody tr:nth-child(50n+4),
.resulttable tbody tr:nth-child(50n+5),
.resulttable tbody tr:nth-child(50n+6),
.resulttable tbody tr:nth-child(50n+7),
.resulttable tbody tr:nth-child(50n+8)
{
display:none;
}
.resulttable tbody tr td:nth-child(50n+1), .resulttable tbody tr:nth-child(50n+3), .resulttable tbody tr:nth-child(50n+10), .resulttable tbody tr:nth-child(50n+24){
font-weight:bold;
color:#FF0000;
text-align:center;
}
.resulttable tbody tr td:nth-child(15n+4){
font-weight:bold;
}
.resulttable tbody tr td:nth-child(15n+8), .resulttable tbody tr td:nth-child(15n+9), .resulttable tbody tr td:nth-child(15n+10){
text-align:center;
}

.resulttable{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
width:100%;
}
.resulttable tbody tr:nth-child(odd){
	background-color:#F8F8F8;
}
.resulttable tbody tr:nth-child(even){
	background-color:#E5E5E5;
}
.Estilo8 {	color: #FFFFFF;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo9 {color: #FF0000}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="139" valign="top"><span style="font-family:Arial, Helvetica, sans-serif" class="Estilo1"><strong><i>Clasificación<br />
              <span class="Estilo9">RONDA 1 (Q1)</span> </i></strong></span></td>
    <td width="366"><table width="365" height="38" border="0" align="right" cellpadding="0" cellspacing="3">
      <tr>
        <td width="121" background="boton general.jpg"><div align="center"><a href="wtcc-fecha1-q1.php" class="Estilo8">Ronda 1 (Q1) </a></div></td>
        <td width="121" background="boton general.jpg"><div align="center"><a href="wtcc-fecha1-q2.php" class="Estilo8">Ronda 2 (Q2) </a></div></td>
        <td width="121" background="boton general.jpg"><div align="center"><a href="wtcc-fecha1-q3.php" class="Estilo8">Ronda 3 (Q3) </a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php

$twit = file_get_contents('http://www.touringcars.net/results/wtcc/2016/qual1.php');

$inicio = strpos($twit, '<div class="table-responsive">');

$final = strpos($twit, '</div><!-- End of post div--></div><div>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<table class="resulttable">', '<table class="resulttable" border="0" cellspacing="0" cellpadding="3">',$cadenaABuscar);
$cadenaABuscar = str_replace('</div><div>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<a', '<span',$cadenaABuscar);
$cadenaABuscar = str_replace('</a', '</span',$cadenaABuscar);
$cadenaABuscar = str_replace('>0.000', '>',$cadenaABuscar);
$cadenaABuscar = str_replace('>POS</td>', '>Pos.</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('>NO</td>', '>Nº</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('>DRIVER</td>', '>Piloto</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('>NAT</td>', '></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('>CAR</td>', '>Marca</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('>LAPS</td>', '>Vueltas</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('>TIME</td>', '>Tiempo</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('>GAP</td>', '>Diferencia</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('src="../../flag', 'src="http://www.touringcars.net/results/flag',$cadenaABuscar);
$cadenaABuscar = str_replace(' WTCC</td><td', '</td><td',$cadenaABuscar);
$cadenaABuscar = str_replace(' TC1</td>', '</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('No time', 'Sin tiempos',$cadenaABuscar);
$cadenaABuscar = str_replace('N/A', '',$cadenaABuscar);

echo $cadenaABuscar;

?>
</body>


</html>