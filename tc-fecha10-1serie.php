<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<span class="Estilo1">1º Serie - <SPAN style="color:#FF0000; text-decoration:underline">FINALIZADO  </SPAN>                       </span><br />
<table><tr><td><?php

$twit = file_get_contents('http://actc.org.ar/v3/carrera-on-line-resultados.ajax.php?intIDCarrera=515&intIDTanda=5');

$inicio = strpos($twit, '<table');

$final = strpos($twit, '</table>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<th>N&uacute;mero</th>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('Pos.', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="/vistas/iconos/ppcev_flag.gif" />', '',$cadenaABuscar);
$cadenaABuscar = str_replace('De Benedictis, Juan Bautista', 'De Benedictis, Juan',$cadenaABuscar);
$cadenaABuscar = str_replace('					157', '<img src="ppcev_debenedictis.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					151', '<img src="ppcev_urcera.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					144', '<img src="ppcev_savino.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					129', '<img src="ppcev_giallombardo.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					115', '<img src="ppcev_echevarria.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					113', '<img src="ppcev_decarlo.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					112', '<img src="ppcev_gini.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					111', '<img src="ppcev_silva.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					107', '<img src="ppcev_sotro.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					101', '<img src="ppcev_ugalde.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					99', '<img src="ppcev_jalaf.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					93', '<img src="ppcev_rodriguez.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					91', '<img src="ppcev_campanera.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					82', '<img src="ppcev_lambiris.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					79', '<img src="ppcev_nolesi.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					77', '<img src="ppcev_ebarlin.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					75', '<img src="ppcev_alaux.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					69', '<img src="ppcev_gentile.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					63', '<img src="ppcev_pbonelli.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					54', '<img src="ppcev_gonzalez.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					43', '<img src="ppcev_dose.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					40', '<img src="ppcev_serrano.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					46', '<img src="ppcev_mulet.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					30', '<img src="ppcev_mazzacane.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					28', '<img src="ppcev_spataro.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					26', '<img src="ppcev_castellano.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					25', '<img src="ppcev_martinez.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					24', '<img src="ppcev_ponte.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					22', '<img src="ppcev_fontana.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					18', '<img src="ppcev_ponce.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					16', '<img src="ppcev_trucco.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					15', '<img src="ppcev_altuna.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					14', '<img src="ppcev_mangoni.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					12', '<img src="ppcev_angelini.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					11', '<img src="ppcev_nbonelli.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					10', '<img src="ppcev_ledesma.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					9', '<img src="ppcev_pernia.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					8', '<img src="ppcev_gianini.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					7', '<img src="ppcev_werner.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					6', '<img src="ppcev_ortelli.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					5', '<img src="ppcev_canapino.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					4', '<img src="ppcev_dipalma.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					3', '<img src="ppcev_ardusso.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					2', '<img src="ppcev_rossi.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('					1', '<img src="ppcev_martinez.png">',$cadenaABuscar);
$cadenaABuscar = str_replace('&deg;', '',$cadenaABuscar);
$cadenaABuscar = str_replace('01:', '1:',$cadenaABuscar);
$cadenaABuscar = str_replace('02:', '2:',$cadenaABuscar);
$cadenaABuscar = str_replace('03:', '3:',$cadenaABuscar);
$cadenaABuscar = str_replace('04:', '4:',$cadenaABuscar);
$cadenaABuscar = str_replace('05:', '5:',$cadenaABuscar);
$cadenaABuscar = str_replace('06:', '6:',$cadenaABuscar);
$cadenaABuscar = str_replace('07:', '7:',$cadenaABuscar);
$cadenaABuscar = str_replace('08:', '8:',$cadenaABuscar);
$cadenaABuscar = str_replace('09:', '9:',$cadenaABuscar);
$cadenaABuscar = str_replace('<img data-original=', '<img height="22" src=',$cadenaABuscar);
$cadenaABuscar = str_replace('<table class="table">', '<table cellpadding="1" cellspacing="0" border="0" class="table">',$cadenaABuscar);

echo $cadenaABuscar;

?></td></tr></table>

<table bgcolor="#FFFFFF" width="100%"><tr><td align="left"><?php

$twit = file_get_contents('http://actc.org.ar/v3/carrera-on-line-resultados.ajax.php?intIDCarrera=515&intIDTanda=5');

$inicio = strpos($twit, '<div class="incidences">');

$final = strpos($twit, '</div><!-- /incidencias -->');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<h2>Comentarios</h2>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<ul>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</ul>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<li>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</li>', '',$cadenaABuscar);

echo $cadenaABuscar;

?></td></tr></table>

</body>
<head>
<style type="text/css">
<!--

.table tbody tr:nth-child(odd){
	background-color:#E5E5E5;
}
.table tbody tr:nth-child(even){
	background-color:#F8F8F8;
}
table {border:none;
border-spacing:none}

.Estilo4{
	color:#FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
}
.incidences{
	color:#FF0000;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	font-weight:bold;
}
.numerostabla {
	font-weight:bold;
	color:#FF0000;
}
a {
	font-weight:bold;
	color:#333333;
	text-decoration:none;
}
.piloto{
text-align:left;
}
table{
text-align:center;
color:#333333;
}
thead{color:#FF0000}
.lazy{
text-align:left;
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
.pos {
	color:#FF0000;
	font-weight:bold;
}
-->
</style>
</head>
</html>