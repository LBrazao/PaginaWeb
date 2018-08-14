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

.Estilo6 {font-family: Arial, Helvetica, sans-serif;

	font-weight: bold;

	font-style: italic;

	font-size: 18px;

}

.nombrecolumna {

	font-family:Arial, Helvetica, sans-serif;

	font-size:11px;

	color:#FFFF00;

	background:#000000;

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

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif" class="Estilo9 Estilo1 Estilo7"><strong><i>Final </i>           </strong></span><span class="Estilo6"> - <u>EN VIVO</u></span></td>
  </tr>
</table> 

<table class="tabla_tiempos" cellpadding="0" cellspacing="0">
<?php

$twit = file_get_contents('http://tc2000.com.ar/tiempos_online.php');

$inicio = strpos($twit, '<thead');

$final = strpos($twit, '</table>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));

echo $cadenaABuscar;

?>

</body>

<head>

<style type="text/css">

<!--

.tabla_tiempos { width:100%; font-family:Arial, Helvetica, sans-serif; font-size:12px; }
.tabla_tiempos thead td { height:20px; color:#FF0000; background-color:#E5E5E5; text-align:center; font-weight:bold; }
.tabla_tiempos tbody td { height:20px;}
.tabla_tiempos tr:nth-child(odd){
	background-color:#F8F8F8;
}
.tabla_tiempos tr:nth-child(even){
	background-color:#E5E5E5;
}
-->

</style>

</head>

</html>