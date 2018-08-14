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
.resulttable tbody tr:nth-child(30n+1), .resulttable tbody tr:nth-child(30n+2), .resulttable tbody tr td:nth-child(30n+2), .resulttable tbody tr td:nth-child(30n+10) , .resulttable tbody tr td:nth-child(30n+11) ,.resulttable tbody tr td:nth-child(30n+3), .resulttable tbody tr td:nth-child(30n+6){
display:none;
}
.resulttable tbody tr td:nth-child(30n+1), .resulttable tbody tr:nth-child(30n+3){
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
-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif" class="Estilo9 Estilo1 Estilo7"><strong><i>Carrera 1</i></strong></span></td>
  </tr>
</table> 

<?php

$twit = file_get_contents('http://www.touringcars.net/results/wtcc/2015/rd23.php');

$inicio = strpos($twit, '<div class="table-responsive">');

$final = strpos($twit, '<tr><td class="resultsubheading">');

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
$cadenaABuscar = str_replace('Laps</td><td', 'vueltas</td><td',$cadenaABuscar);
$cadenaABuscar = str_replace('Not classified</td><tr>', 'Abandonos</td><tr>',$cadenaABuscar);
$cadenaABuscar = str_replace('Fastest Lap</td></tr>', 'Récord de vuelta</td></tr>',$cadenaABuscar);
$cadenaABuscar = str_replace('TIME/GAP</td><td', 'Diferencia</td><td',$cadenaABuscar);
$cadenaABuscar = str_replace('<table class="resulttable">', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<tr><td class="resultsubheading">', '',$cadenaABuscar);

echo $cadenaABuscar;

?>
</body>


</html>