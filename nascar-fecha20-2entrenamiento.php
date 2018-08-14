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
.tabla_tiempos{
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
}
.tabla_tiempos thead{
color:#FF0000;
font-weight:bold;
background-color:#E5E5E5;
}
.tabla_tiempos tbody tr th{
color:#FF0000;
text-align:center;
width:35px;
}
.tabla_tiempos tbody tr:nth-child(odd){
	background-color:#F8F8F8;
}
.tabla_tiempos tbody tr:nth-child(even){
	background-color:#E5E5E5;
}
.tabla_tiempos tr td:nth-child(10n+2){
text-align:center;
width:25px;
}
.tabla_tiempos tr td:nth-child(10n+3){
font-weight:bold;
}
.tabla_tiempos tr td:nth-child(10n+4){
text-align:center;
width:80px;
}
.tabla_tiempos tr td:nth-child(10n+5){
display:none;
}
.tabla_tiempos tr td:nth-child(10n+6){
text-align:center;
}
.tabla_tiempos tr td:nth-child(10n+7){
text-align:center;
}
.tabla_tiempos tr td:nth-child(10n+8){
text-align:center;
}
.tabla_tiempos thead th:nth-child(10n+5){
display:none;
}

-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif" class="Estilo9 Estilo1 Estilo7"><strong><i>2º Entrenamiento  </i>           </strong></span><span class="Estilo6"> - <u>FINALIZADO</u></span></td>
  </tr>
</table> 

<table class="tabla_tiempos" cellpadding="3" cellspacing="0">
<?php

$twit = file_get_contents('http://www.nascar.com/en_us/sprint-cup-series/standings/results/2016/crown-royal-presents-the-combat-wounded-coalition-400-at-the-brickyard.raceResults.practice2.html');

$inicio = strpos($twit, '<thead>');

$final = strpos($twit, '</table>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<a', '<span',$cadenaABuscar);
$cadenaABuscar = str_replace('</a', '</span',$cadenaABuscar);
$cadenaABuscar = str_replace('<img', '<img height="20"',$cadenaABuscar);
$cadenaABuscar = str_replace('                     Leader', '',$cadenaABuscar);
$cadenaABuscar = str_replace('             --', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col" class="first firstCol">POS.', '<th scope="col" class="first firstCol">Pos.',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col">Car #', '<th scope="col">Nº',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col">Driver', '<th scope="col">Piloto',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col">Manufacturer', '<th scope="col">Marca',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col">Best Speed', '<th scope="col">Mph',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col">Best Time', '<th scope="col">Tiempo',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col">Behind', '<th scope="col">Diferencia',$cadenaABuscar);
$cadenaABuscar = str_replace('height="20" src="http://static.nascar.com/content/dam/nascar/articles/sidebar content/Chevy.png"', 'src="chevrolet_nascar.png" height="17"',$cadenaABuscar);
$cadenaABuscar = str_replace('src="http://static.nascar.com/content/dam/nascar/articles/sidebar content/Toyota.png"', 'src="toyota_nascar.png"',$cadenaABuscar);
$cadenaABuscar = str_replace('height="20" src="http://static.nascar.com/content/dam/nascar/articles/sidebar content/Ford.png"', 'src="ford_nascar.png" height="17" width="43"',$cadenaABuscar);

echo $cadenaABuscar;

?>
</body>

</html>