<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>


<meta http-equiv="refresh" content="60" />

<style type="text/css">
<!--
.scrolltable{
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
color:#333333;
}
thead{
color:#FF0000;
font-weight:bold;
background-color:#E5E5E5;
}
.scrolltable table{
border-collapse:collapse;
width:100%;
}
.scrolltable table tr:nth-child(odd){
	background-color:#E5E5E5;
}
.scrolltable table tr:nth-child(even){
	background-color:#F8F8F8;
}
.driver{
font-weight:bold;
}
.aright{
width:90px;
}

-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<?php
$twit = file_get_contents('http://www.wrc.com/live-ticker/daten/2014/85/stage.85.10.html');
$inicio = strpos($twit, '<h4 data-lang-en="Overall"');
$fin = strpos($twit, '</div>
      </div>
   </div>
</div>');
$cadenaABuscar = substr($twit, $inicio, ($fin-$inicio));
$cadenaABuscar = str_replace('<h4 data-lang-en="Overall" data-lang-de="Gesamt" data-lang-es="Total" data-lang-fr="Général" data-lang-po="Klasyfikacja generalna">Overall<span class="toggle">-</span></h4>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="#">#</td>', 'data-lang-po="#">N&deg;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('Driver', 'Piloto',$cadenaABuscar);
$cadenaABuscar = str_replace('Pos', 'Pos.',$cadenaABuscar);
$cadenaABuscar = str_replace('+', '',$cadenaABuscar);
$cadenaABuscar = str_replace('style="margin-top:4px;">', 'style="margin-top:4px;"> <span class="driver">',$cadenaABuscar);
$cadenaABuscar = str_replace('"Kierowca">Driver</td>', '"Kierowca">Piloto</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="Czas">Time</td>', 'data-lang-po="Czas">Tiempo</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="Do poprz.">Diff Prev</td>', 'data-lang-po="Do poprz.">Dif. Anterior</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="Czas">Time</td>', 'data-lang-po="Czas">Tiempo</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('data-lang-po="Do Lidera">Diff 1st</td>', 'data-lang-po="Do Lidera">Diferencia 1º</td>',$cadenaABuscar);

echo $cadenaABuscar;

?>
</body>
</html>