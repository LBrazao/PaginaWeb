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
.Estilo8 {color: #FFFFFF;
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

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="139" valign="top"><span style="font-family:Arial, Helvetica, sans-serif" class="Estilo1"><strong><i>Especial 10 <br />
              <span class="Estilo9">Especial</span> </i></strong></span></td>
    <td width="366"><table width="251" height="38" border="0" align="right" cellpadding="0" cellspacing="3">
      <tr>
        <td width="121" background="boton general.jpg"><div align="center"><a href="rallyargentino-fecha3-especial10.php" class="Estilo8">Especial</a></div></td>
        <td width="121" background="boton general.jpg"><div align="center"><a href="rallyargentino-fecha3-general10.php" class="Estilo8">General</a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table class="tabla_tiempos" cellpadding="0" cellspacing="0" border="0">
<?php

$twit = file_get_contents('http://www.rallyargentino.org.ar.php53-7.dfw1-2.websitetestlink.com/tiempos2010/2016/carrera03/GRAL_PE10.HTM');

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