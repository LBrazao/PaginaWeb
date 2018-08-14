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



.fonts12 tbody tr td:nth-child(10n+1){
width:24px;
}
.fonts13 tbody tr td:nth-child(10n+1){
width:24px;
}
.fonts12 tbody tr td:nth-child(10n+3){
width:130px;
}
.fonts13 tbody tr td:nth-child(10n+3){
width:130px;
}
.fonts12 tbody tr td:nth-child(10n+6){
width:100px;
}
.fonts13 tbody tr td:nth-child(10n+6){
width:100px;
}



.fonts13{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
.fonts13 thead{
font-weight:bold;
color:#FF0000;s
}
.fonts13 tbody tr td:nth-child(10n+1){
font-weight:bold;
color:#FF0000;
text-align:center;
}
.fonts13 tbody tr td:nth-child(10n+2){
display:none;
}
.fonts13 tbody tr td:nth-child(10n+3){
font-weight:bold;
text-align:left;
}
.fonts13 tbody tr td:nth-child(10n+5){
display:none;
}
.fonts13 tbody tr:nth-child(odd){
	background-color:#F8F8F8;
}
.fonts13 tbody tr:nth-child(even){
	background-color:#E5E5E5;
}
.fonts13 thead{
	background-color:#E5E5E5;
}
.fonts13 tbody tr:nth-child(20n+1){
display:none;
}
.fonts13 tbody tr:nth-child(20n+2){
display:none;
}
-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif" ><strong><i>Clasificación </i>           </strong></span></td>
  </tr>
</table> 


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php

$twit = file_get_contents('http://www.motogp.com/es/Results+Statistics/2016/VAL/MotoGP/Q2');

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
$cadenaABuscar = str_replace('<td>FRA</td>', '<td><img src="banderita de francia.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>COL</td>', '<td><img src="banderita colombia.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>JPN</td>', '<td><img src="banderita japon.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>USA</td>', '<td><img src="banderita canada.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>IRL</td>', '<td><img src="banderita gran bretaña.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>IRL</td>', '<td><img src="banderita gran bretaña.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>AUS</td>', '<td><img src="banderita australia.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>RSM</td>', '<td><img src="banderita san marino.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>GER</td>', '<td><img src="banderita alemania.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>CZE</td>', '<td><img src="banderita republica checa.JPG" /></td>',$cadenaABuscar);

echo $cadenaABuscar;

?></td>
  </tr>
  <tr>
    <td><?php

$twit = file_get_contents('http://www.motogp.com/es/Results+Statistics/2016/VAL/MotoGP/Q1');

$inicio = strpos($twit, '<table class="width100 marginbot10 fonts12">');

$final = strpos($twit, '<h4 class="padbot15">');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<h4 class="padbot15">', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<table class="width100 marginbot10 fonts12">', '<table class="fonts13" border="0" cellspacing="0" cellpadding="4">',$cadenaABuscar);
$cadenaABuscar = str_replace('<a', '<span',$cadenaABuscar);
$cadenaABuscar = str_replace('</a>', '</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<thead><tr align="center"><th>Pos.</th><th>Num.</th><th>Piloto</th><th>País</th><th>Equipo</th><th>Moto</th><th>Km/h</th><th>Tiempo</th><th class="alignright">Diferencia <span class="fonts10">1<span class="fonts10 valignt">st</span><span class="black">/</span>Prev.</span></th></tr></thead>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>SPA</td>', '<td><img src="banderita españa.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>ITA</td>', '<td><img src="banderita italia.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>GBR</td>', '<td><img src="banderita gran bretaña.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>FRA</td>', '<td><img src="banderita de francia.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>FRA</td>', '<td><img src="banderita de francia.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>COL</td>', '<td><img src="banderita colombia.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>USA</td>', '<td><img src="banderita canada.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>IRL</td>', '<td><img src="banderita gran bretaña.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>IRL</td>', '<td><img src="banderita gran bretaña.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>JPN</td>', '<td><img src="banderita japon.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>AUS</td>', '<td><img src="banderita australia.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>RSM</td>', '<td><img src="banderita san marino.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>GER</td>', '<td><img src="banderita alemania.JPG" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>CZE</td>', '<td><img src="banderita republica checa.JPG" /></td>',$cadenaABuscar);

$cadenaABuscar = str_replace('<td class="alignright">20</td>', '<td class="alignright">30</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">19</td>', '<td class="alignright">29</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">18</td>', '<td class="alignright">28</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">17</td>', '<td class="alignright">27</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">16</td>', '<td class="alignright">26</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">15</td>', '<td class="alignright">25</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">14</td>', '<td class="alignright">24</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">13</td>', '<td class="alignright">23</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">12</td>', '<td class="alignright">22</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">11</td>', '<td class="alignright">21</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">10</td>', '<td class="alignright">20</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">9</td>', '<td class="alignright">19</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">8</td>', '<td class="alignright">18</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">7</td>', '<td class="alignright">17</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">6</td>', '<td class="alignright">16</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">5</td>', '<td class="alignright">15</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">4</td>', '<td class="alignright">14</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="alignright">3</td>', '<td class="alignright">13</td>',$cadenaABuscar);

echo $cadenaABuscar;

?></td>
  </tr>
</table>
</body>


</html>