<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	margin-left: 5px;
	margin-top: 5px;
}
.Estilo6 {font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
	font-size: 18px;
}
.Estilo6 {font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
	color:#FF0000;
	font-style:italic;
	font-weight:bold;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<table width="100%" height="24" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="929" valign="top"><span class="Estilo1">Final                    - </span><span class="Estilo6"> <u>EN VIVO</u></span></td>
    <td width="190" height="24">&nbsp;</td>
  </tr>
</table>
<?php

$twit = file_get_contents('http://www.actc.org.ar/tc/carrera-online/2015/tanda-finalizada/fecha-3-centenario_448_8.html');

$inicio = strpos($twit, '<body id="tc">');

$final = strpos($twit, '</body>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));

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
	border:#000000;
	border:double;
}
#tableCalendar tr:nth-child(odd){
	background-color:#E5E5E5;
}
#tableCalendar tr:nth-child(even){
	background-color:#F8F8F8;
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
.nombrecolumna {
	font-family:Arial, Helvetica, sans-serif;
	color:#FF0000;
	font-weight:bold;
	font-size:12px;
}
-->
</style>
</head>
</html>