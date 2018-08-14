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

.tabla_tiempos > tbody > tr:nth-child(odd){
	background-color:#E5E5E5;
}
.tabla_tiempos > tbody > tr:nth-child(even){
	background-color:#F8F8F8;
}

.tabla_tiempos > tbody > tr:first-child{
color:#FF0000;
font-weight:bold;
}
.tabla_tiempos tbody tr td table tbody tr td:first-child{
color:#FF0000;
font-weight:bold;
}
.tabla_tiempos tbody tr td table tbody tr td:nth-child(13n+2), .tabla_tiempos tbody tr td table tbody tr td:nth-child(13n+4), .tabla_tiempos tbody tr td table tbody tr td:nth-child(13n+5), .tabla_tiempos tbody tr td table tbody tr td:nth-child(13n+6){
text-align:center;
}

.tabla_tiempos > tbody > tr > td:nth-child(2n+2){
display:none;
}
.tabla_tiempos > tbody > tr > td:nth-child(2n+1){
width:505px;
}
.tabla_tiempos tbody tr td table tbody tr td:nth-child(13n+3){
font-weight:bold;
}
.tabla_tiempos{
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
}


-->

</style>
</head>



<body>

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif" class="Estilo9 Estilo1 Estilo7"><strong><i>Especial 1  </i>           </strong></span><span class="Estilo6"> - <u>EN VIVO</u></span></td>
  </tr>
</table> 

<table class="tabla_tiempos" cellpadding="0" cellspacing="0" border="0">
<?php

$twit = file_get_contents('http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/tiempos2010/2016/carrera09/ARGGR_PE01.HTM');

$inicio = strpos($twit, '<tr bgcolor="#4694A5">');

$final = strpos($twit, '</body>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('</body>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<div align="center">', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="#FFFFFF"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="#666666"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('bgcolor="#A4CFD9"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('height="20"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('height="40"', 'height="37"',$cadenaABuscar);
$cadenaABuscar = str_replace('POS.', 'Pos.',$cadenaABuscar);
$cadenaABuscar = str_replace('N&ordm;', 'Nº',$cadenaABuscar);
$cadenaABuscar = str_replace('PILOTO / NAVEGANTE', 'Piloto <br> Navegante',$cadenaABuscar);
$cadenaABuscar = str_replace('TIEMPO', 'Tiempo',$cadenaABuscar);
$cadenaABuscar = str_replace('DIF. 1&ordm;', 'Diferencia',$cadenaABuscar);
$cadenaABuscar = str_replace('PROM.', 'Km/h',$cadenaABuscar);
$cadenaABuscar = str_replace('          </div></td>', '          </td>',$cadenaABuscar);

echo $cadenaABuscar;

?>
</body>



</html>