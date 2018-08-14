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
.resultados tbody tr:nth-child(odd){
	background-color:#E5E5E5;
}
.resultados tbody tr:nth-child(even){
	background-color:#F8F8F8;
}
.resultados{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
width:100%;
}
.resultados tbody tr:first-child{
display:none;
}
.resultados tbody tr:last-child{
background-color:#FFFFFF;
font-size:13px;
}
.resultados tbody tr:nth-child(50n+2), .resultados tbody tr td:first-child{
font-weight:bold;
color:#FF0000;
text-align:center;
}
.resultados tbody tr td:nth-child(10n+3){
font-weight:bold;
}
.resultados tr td:nth-child(10n+2), .resultados tr td:nth-child(10n+4), .resultados tr td:nth-child(10n+5), .resultados tr td:nth-child(10n+6), .resultados tr td:nth-child(10n+7){
text-align:center;
}

-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="457" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="457"><span style="font-family:Arial, Helvetica, sans-serif" class="Estilo9 Estilo1 Estilo7"><strong><i>2º Entrenamiento (Clase 3) </i>           </strong></span><span class="Estilo6"> - <u>FINALIZADO</u></span></td>
  </tr>
</table> 

<?php

$twit = file_get_contents('http://aptpweb.com.ar/resultados/2016/2016-06/c3e2.html');

$inicio = strpos($twit, '<table width=500');

$final = strpos($twit, '</html>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('</html>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<table width=500 border=0 align=center cellspacing=2 bgcolor=202050>', '<table class="resultados" border="0" cellspacing="0" cellpadding="3"',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor=202050', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor=750000', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor=333333', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor=000000', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor=003399', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="#202050"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="#750000"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="#333333"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="#000000"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="#003399"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="202050"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="750000"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="333333"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="000000"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="003399"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<div align="center"', '<div',$cadenaABuscar);
$cadenaABuscar = str_replace('<div align="right"', '<div',$cadenaABuscar);
$cadenaABuscar = str_replace('<div align="left"', '<div',$cadenaABuscar);
$cadenaABuscar = str_replace('Vtas</strong>', 'Vueltas</strong>',$cadenaABuscar);
$cadenaABuscar = str_replace('Pos</strong>', 'Pos.</strong>',$cadenaABuscar);
$cadenaABuscar = str_replace('Dif.</strong>', 'Diferencia</strong>',$cadenaABuscar);
$cadenaABuscar = str_replace('Dif</strong>', 'Diferencia</strong>',$cadenaABuscar);
$cadenaABuscar = str_replace('Auto</strong>', 'Nº</strong>',$cadenaABuscar);




echo $cadenaABuscar;

?>
</body>


</html>