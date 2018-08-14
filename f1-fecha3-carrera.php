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
.table_results{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
.table_results thead tr{
	background-color:#E5E5E5;
	font-weight:bold;
	color:#FF0000;
}
.table_results tbody tr:nth-child(even){
	background-color:#E5E5E5;
}
.table_results tbody tr:nth-child(odd){
	background-color:#F8F8F8;
}
.first-name{
font-weight:bold;
}
.last-name{
font-weight:bold;
}
.position{
font-weight:bold;
color:#FF0000;
text-align:center;
}
.number{
text-align:center;
}
.time{
text-align:center;
}
.gap{
text-align:center;
}
.laps{
text-align:center;
}
.observaciones{
font-family:Arial, Helvetica, sans-serif;
color:#FF0000;
font-weight:bold;
font-size:13px;
}
.points{
text-align:center;
}

-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="341" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif; font-size:18px"><strong><i>Carrera </i>           </strong></span></td>
  </tr>
</table> 


<?php

$twit = file_get_contents('http://www.formula1.com/content/fom-website/en/championship/results/2016-race-results/2016-china-results/race.html');

$inicio = strpos($twit, '<table>');

$final = strpos($twit, '</table>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('+', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<table>', '<table class="table_results" border="0" cellpadding="4" cellspacing="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col" class="country">Country', '<th scope="col" class="country">',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col" class="name">Driver', '<th scope="col" class="name">Piloto',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col" class="team">Team', '<th scope="col" class="team">Equipo',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col" class="gap">Gap', '<th scope="col" class="gap">Diferencia',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col" class="laps">Laps', '<th scope="col" class="laps">Vueltas',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col" class="time">Time', '<th scope="col" class="time">Diferencia',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col" class="number"><abbr title="Number">No.', '<th scope="col" class="number"><abbr title="Number">Nº',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="suffix seconds">s</span>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="suffix"> laps', '<span class="suffix"> vueltas',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="time">DNF', '<td class="time">Abandono',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col" class="points">Points', '<th scope="col" class="points">Puntos',$cadenaABuscar);
$cadenaABuscar = str_replace('<th scope="col" class="time fastest">Fastest</th>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">BUT', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">HAM', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">ROS', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">RAI', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">RIC', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">KVY', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">VAN', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">CEL', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">VET', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">RSI', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">USA', '<td class="country"><img src="banderita canada.png" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">SAI', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">PER', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">BOT', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">VES', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">ALO', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">HUL', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">MAS', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">NAS', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">ERI', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">MAL', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">STE', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">LEI', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">PAL', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">GRO', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">MER', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">MAG', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">GUT', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">HAR', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="tla">WEH', '<span class="tla">',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">INA', '<td class="country"><img src="banderita indonesia.png" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">DEN', '<td class="country"><img src="banderita dinamarca.png" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">GER', '<td class="country"><img src="banderita alemania.JPG" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">RUS', '<td class="country"><img src="banderita rusia.JPG" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">AUS', '<td class="country"><img src="banderita australia.png" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">NED', '<td class="country"><img src="banderita holanda.JPG" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">ESP', '<td class="country"><img src="banderita españa.JPG" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">GBR', '<td class="country"><img src="banderita gran bretaña.png" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">FRA', '<td class="country"><img src="banderita de francia.JPG" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">SWE', '<td class="country"><img src="banderita suecia.JPG" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">BRA', '<td class="country"><img src="banderita brasil.png" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">FIN', '<td class="country"><img src="banderita finlandia.JPG" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">VEN', '<td class="country"><img src="banderita venezuela.png" />',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="country">MEX', '<td class="country"><img src="banderita mexico.png" />',$cadenaABuscar);


echo $cadenaABuscar;

?>
<table class="observaciones" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php

$twit = file_get_contents('http://www.caranddriverthef1.com/formula1/resultados/2016/gp-china-f1-2016-carrera');

$inicio = strpos($twit, '                      <div>');
$final = strpos($twit, '</p>            </div>');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
echo $cadenaABuscar;

?></td>
  </tr>
</table>
</body>


</html>