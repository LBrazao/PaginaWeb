<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	font-family:Oswald;
	font-weight:lighter;
	margin:0;
	padding:0;
}

@keyframes blink {
    0% {
	opacity:1
    }
    50% {
	opacity:0
    }
    100% {
	opacity:1
    }
}
.parpadeo{
animation:blink 1s;
animation-iteration-count: infinite;
}
-->
</style>

<script type="text/javascript">

if (screen.width >= 1280) { 

document.write('<link href="autos_grandes.css" type="text/css" rel="stylesheet"/>');

} 
else { 

document.write('<link href="autos_chicos.css" type="text/css" rel="stylesheet"/>');

} 
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<span class="Estilo1">1º Entrenamiento <img height="40" src="bandera_a_cuadros.png">  <img height="40" class="parpadeo" src="semaforo verde.png"></span>
<table><tr><td><?php

$twit = file_get_contents('http://actc.org.ar/v3/carrera-on-line-resultados.ajax.php?intIDCarrera=669&intIDTanda=8');

$inicio = strpos($twit, '<table');

$final = strpos($twit, '</table>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<th>N&uacute;mero</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Piloto</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Marca</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('Pos.', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<a href', '<span href',$cadenaABuscar);
$cadenaABuscar = str_replace('</a>', '</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="/vistas/iconos/ppcev_flag.gif" />', '',$cadenaABuscar);
$cadenaABuscar = str_replace('De Benedictis, Juan Bautista', 'De Benedictis, Juan',$cadenaABuscar);
$cadenaABuscar = str_replace('Catalán Magni, Juan Tomás', 'Catalán Magni, Juan',$cadenaABuscar);
$cadenaABuscar = str_replace('Di Palma, Luís José (H)', 'Di Palma, Josito',$cadenaABuscar);
$cadenaABuscar = str_replace('				157', '<img height="42" src="157_debenedictis.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				144', '<img height="42" src="144_savino.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				133', '<img height="42" src="133_aguirre.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				124', '<img height="42" src="124_pezzucchi.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				116', '<img height="42" src="116_ruggiero.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				113', '<img height="42" src="113_ventricelli.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				111', '<img height="42" src="111_silva.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				101', '<img height="42" src="101_ugalde.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				99', '<img height="42" src="99_jalaf.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				98', '<img height="42" src="98_bonelli.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				88', '<img height="42" src="88_trosset.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				79', '<img height="42" src="79_nolesi.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				77', '<img height="42" src="77_bruno.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				75', '<img height="42" src="75_alaux.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				68', '<img height="42" src="68_werner.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				63', '<img height="42" src="63_bonelli.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				55', '<img height="42" src="55_mangoni.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				53', '<img height="42" src="53_catalan.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				47', '<img height="42" src="47_mulet.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				44', '<img height="42" src="44_diruscio.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				43', '<img height="42" src="43_dose.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				36', '<img height="42" src="36_pernia.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				33', '<img height="42" src="33_echevarria.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				32', '<img height="42" src="32_gonzalez.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				27', '<img height="42" src="27_gianini.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				26', '<img height="42" src="26_ebarlin.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				24', '<img height="42" src="24_ponce.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				22', '<img height="42" src="22_santero.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				20', '<img height="42" src="20_okulovich.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				19', '<img height="42" src="19_fontana.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				18', '<img height="42" src="18_angelini.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				17', '<img height="42" src="17_moriatis.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				15', '<img height="42" src="15_rossi.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				14', '<img height="42" src="14_gini.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				12', '<img height="42" src="12_ortelli.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				10', '<img height="42" src="10_spataro.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				9', '<img height="42" src="9_castellano.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				8', '<img height="42" src="8_trucco.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				7', '<img height="42" src="7_urcera.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				6', '<img height="42" src="6_lambiris.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				5', '<img height="42" src="5_mazzacane.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				4', '<img height="42" src="4_ledesma.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				3', '<img height="42" src="3_dipalma.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				2', '<img height="42" src="2_ardusso.png" border="0" />',$cadenaABuscar);
$cadenaABuscar = str_replace('				1', '<img height="42" src="1_canapino.png" border="0" />',$cadenaABuscar);
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
$cadenaABuscar = str_replace('<img data-original="/vistas/v3/images/logos/logo-chevrolet-xs.png"', '<img height="35" title="Chevrolet" src="/2016/logos/tc_chevrolet.png"',$cadenaABuscar);
$cadenaABuscar = str_replace('<img data-original="/vistas/v3/images/logos/logo-ford-xs.png"', '<img height="35" title="Ford" src="/2016/logos/tc_ford.png"',$cadenaABuscar);
$cadenaABuscar = str_replace('<img data-original="/vistas/v3/images/logos/logo-dodge-xs.png"', '<img height="35" title="Dodge" src="/2016/logos/tc_dodge.png"',$cadenaABuscar);
$cadenaABuscar = str_replace('<img data-original="/vistas/v3/images/logos/logo-torino-xs.png"', '<img height="35" title="Torino" src="/2016/logos/tc_torino.png"',$cadenaABuscar);
$cadenaABuscar = str_replace('<table class="table">', '<table cellpadding="1" cellspacing="0" border="0" class="table">',$cadenaABuscar);

echo $cadenaABuscar;

?></td></tr></table>

<table bgcolor="#FFFFFF" width="100%"><tr><td align="left"><?php

$twit = file_get_contents('http://actc.org.ar/v3/carrera-on-line-resultados.ajax.php?intIDCarrera=669&intIDTanda=8');

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
border-spacing:none;
width:100%;
font-size:19px}

table tr td{
padding:3px;}
.Estilo4{
	color:#FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
}
.incidences{
	color:#FF0000;
	font-family:Arial, Helvetica, sans-serif;
	font-size:17px;
	font-weight:bold;
}
.numerostabla {
	font-weight:bold;
	color:#FF0000;
}
table td:nth-child(3) {
	font-weight:bold;
	color:#333333;
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
	font-weight:normal;
	font-size: 28px;
	text-align:left;
}
.pos {
	color:#FF0000;
	font-weight:bold;
}
-->
</style>
</head>
</html>