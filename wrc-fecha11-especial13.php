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
width:100%;
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
.link{
color:#FFFFFF;
font-weight:bold;
text-decoration:none;
}
.sintiempos{
background-color:#FFFFFF;
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
font-weight:bold;}
-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>




<table style="font-family:Arial, Helvetica, sans-serif" width="444" height="32" border="0" cellpadding="0">
  <tr>
    <td width="133">ESPECIAL 13: </td>
    <td width="98" background="boton general activo.jpg"><div align="center"><em>Especial</em></div></td>
    <td width="99" background="boton general.jpg"><div align="center"><a class="link" href="wrc-fecha11-general13.php">General</a></div></td>
    <td width="104" background="boton general.jpg"><div align="center"><a class="link" href="wrc-fecha11-parcial13.php">Parciales</a> </div></td>
  </tr>
</table>
<?php
$twit = file_get_contents('http://www.wrc.com/live-ticker/daten/2016/197/stage.197.13.html');
$inicio = strpos($twit, '<h4 data-lang-en="Stage"');
$fin = strpos($twit, '<h4 data-lang-en="Overall"');
$cadenaABuscar = substr($twit, $inicio, ($fin-$inicio));
$cadenaABuscar = str_replace('<h4 data-lang-en="Stage" data-lang-de="Sonderprüfung" data-lang-es="Tramo" data-lang-fr="Spéciale" data-lang-po="Odcinek">Stage<span class="toggle">-</span></h4>', '', $cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="#">#</td>', 'data-lang-po="#">N&deg;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('Pos', 'Pos.',$cadenaABuscar);
$cadenaABuscar = str_replace('Driver', 'Piloto',$cadenaABuscar);
$cadenaABuscar = str_replace('"Kierowca">Driver</td>', '"Kierowca">Piloto</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="Czas">Time</td>', 'data-lang-po="Czas">Tiempo</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="Do poprz.">Diff Prev</td>', 'data-lang-po="Do poprz.">Diferencia<br>
Anterior</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('style="margin-top:4px;">', 'style="margin-top:4px;"> <span class="driver">',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="Czas">Time</td>', 'data-lang-po="Czas">Tiempo</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="Do Lidera">Diff 1st</td>', 'data-lang-po="Do Lidera">Diferencia <br>1º</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="left" data-lang-en="No Data yet." data-lang-de="" data-lang-es="" data-lang-fr="" data-lang-po="">No Data yet.</td>', '<br><td class="sintiempos">No hay resultados por el momento...</td>',$cadenaABuscar);
echo $cadenaABuscar;

?>
</body>
<head>
<style type="text/css">
<!--
.result {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#000000;
	background:#EAEAEA;
	border:#000000;
	border:double;
}
.Estilo2{
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
	color:#FF0000;
	font-style:italic;
	font-weight:bold;
}
.Estilo4{
	color:#FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
}
.numerostabla {
	font-weight:bold;
	color:#FF0000;
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
.bg-a {
	font-family:Arial, Helvetica, sans-serif;
	color:#FFFF00;
	font-size:11px;
	background:#000000;
}

.Estilo100 {
	font-size: 25px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo200 {color: #FF0000}
body {
	background-color: #FFFFFF;
-->
</style>
</head>
</html>