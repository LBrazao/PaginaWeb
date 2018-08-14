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
.fonts12{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
.fonts12 thead{
font-weight:bold;
color:#FF0000;s
}
.fonts12 tbody tr td:nth-child(10n+1){
font-weight:bold;
color:#FF0000;
text-align:center;
}
.fonts12 tbody tr td:nth-child(10n+2){
display:none;
}
.fonts12 tbody tr td:nth-child(10n+3){
font-weight:bold;
text-align:left;
}
.fonts12 tbody tr td:nth-child(10n+5){
display:none;
}
.fonts12 tbody tr:nth-child(odd){
	background-color:#F8F8F8;
}
.fonts12 tbody tr:nth-child(even){
	background-color:#E5E5E5;
}
.fonts12 thead{
	background-color:#E5E5E5;
}
-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif" ><strong><i>3º Entrenamiento</i></strong></span></td>
  </tr>
</table> 


<?php

$twit = file_get_contents('http://www.motogp.com/es/Results+Statistics/2016/FRA/MotoGP/FP3');

$inicio = strpos($twit, '<table class="width100 marginbot10 fonts12">');

$final = strpos($twit, '<h4 class="padbot15">');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<h4 class="padbot15">', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<table class="width100 marginbot10 fonts12">', '<table class="fonts12" border="0" cellspacing="0" cellpadding="4">',$cadenaABuscar);
$cadenaABuscar = str_replace('<a', '<span',$cadenaABuscar);
$cadenaABuscar = str_replace('</a>', '</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Num.</th>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Equipo</th>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>País</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th class="alignright">Diferencia <span class="fonts10">1<span class="fonts10 valignt">st</span><span class="black">/</span>Prev.</span></th></tr></thead>', '<th class="alignright">Diferencia</th></tr></thead>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>SPA</td>', '<td><img src="banderita españa.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>ITA</td>', '<td><img src="banderita italia.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>GBR</td>', '<td><img src="banderita gran bretaña.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>FRA</td>', '<td><img src="banderita de francia.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>JPN</td>', '<td><img src="banderita japon.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>FRA</td>', '<td><img src="banderita de francia.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>COL</td>', '<td><img src="banderita colombia.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>USA</td>', '<td><img src="banderita canada.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>IRL</td>', '<td><img src="banderita gran bretaña.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>IRL</td>', '<td><img src="banderita gran bretaña.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>AUS</td>', '<td><img src="banderita australia.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>RSM</td>', '<td><img src="banderita san marino.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>GER</td>', '<td><img src="banderita alemania.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>CZE</td>', '<td><img src="banderita republica checa.JPG" /></td>',$cadenaABuscar);

echo $cadenaABuscar;

?>
</body>


</html>