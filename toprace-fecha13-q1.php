<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="139" valign="top"><div align="left"><span style="font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:18px">Clasificación<br />
   <i> <span style="color:#FF0000">RONDA 1 (Q1)</span> </i></span></div></td>
    <td width="366"><table width="365" height="38" border="0" align="right" cellpadding="0" cellspacing="3">
      <tr>
        <td width="121" background="boton general.jpg"><div align="center"><a href="toprace-fecha13-q1.php" style="color:#FFFFFF; text-decoration:none; font-size:16px; font-weight:bold">Ronda 1 (Q1) </a></div></td>
        <td width="121" background="boton general.jpg"><div align="center"><a href="toprace-fecha13-q2.php" style="color:#FFFFFF; text-decoration:none; font-size:16px; font-weight:bold">Ronda 2 (Q2) </a></div></td>
        <td width="121" background="boton general.jpg"><div align="center"><a href="toprace-fecha13-q3.php" style="color:#FFFFFF; text-decoration:none; font-size:16px; font-weight:bold">Ronda 3 (Q3) </a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
<table><tr><td><?php

$twit = file_get_contents('http://toprace.com.ar/tr/carrera-on-line-resultados.ajax.php?intIDCarrera=36&intIDTanda=13');

$inicio = strpos($twit, '<table');

$final = strpos($twit, '</table>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
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
$cadenaABuscar = str_replace('<a href', '<span href',$cadenaABuscar);
$cadenaABuscar = str_replace('</a>', '</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src', '<img height="26" src',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>#</th>', '<th>Nº</th>',$cadenaABuscar);

echo $cadenaABuscar;

?></td></tr></table>

<table bgcolor="#FFFFFF" width="100%"><tr><td align="left"><?php

$twit = file_get_contents('http://toprace.com.ar/tr/carrera-on-line-resultados.ajax.php?intIDCarrera=36&intIDTanda=13');

$inicio = strpos($twit, '<div class="table-responsive">');

$final = strpos($twit, '</div><!-- /incidencias -->');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<h4>COMENTARIOS</h4>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<hr>', '',$cadenaABuscar);

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
table {border:0;
border-spacing:0}

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
.label-danger, .table-responsive {
	font-weight:bold;
	color:#FF0000;
}
table tr td:nth-child(7n+3){
	font-weight:bold;
	text-align:left;
	padding-left:3px;
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
-->
</style>
</head>
</html>