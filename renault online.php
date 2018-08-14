<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Documento sin t&iacute;tulo</title>







<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	background-color: #FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;

}
table tr:nth-child(odd){
	background-color:#E5E5E5;
	height:20px;
}
table tr:nth-child(even){
	background-color:#F8F8F8;
	height:20px;
}
table {
width:100%;
border:none;
border-spacing:0px;
}
-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>
<span class="Estilo1">	Entrenamiento </span><span class="Estilo6"> - <u class="Estilo2">EN VIVO</u></span><br />
<?php

$twit = file_get_contents('http://www.formulas-argentinas.com.ar/tiempos/index.php');

$inicio = strpos($twit, '<table border=1');

$final = strpos($twit, '</td></tr></table>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('Auto', 'Nº',$cadenaABuscar);
$cadenaABuscar = str_replace('<font size=2 face=Arial>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</font>', '',$cadenaABuscar);

echo $cadenaABuscar;

?>
</body>

<head>

<style type="text/css">

<!--

.result {

	font-family:Arial, Helvetica, sans-serif;

	font-size:13px;

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

-->

</style>

</head>

</html>