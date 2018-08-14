<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>


<script>
function a(b) {
	var c= '';
	for(i=0; i<b.length; i++){
		if(b.charCodeAt(i)>127){ c += '&#' + b.charCodeAt(i) + ';'; }else{ c += b.charAt(i); }
  	}
  	document.forms.conversionForm.outputText.value = c;
}
</script>


<?php
if ($_FILES['userfile']['tmp_name']!=NULL)
{
$uploads_dir = '/home/tclarevista.com.ar/public_html/2016/';
        $tmp_name = $_FILES["userfile"]["tmp_name"];
        move_uploaded_file($tmp_name, $uploads_dir.$_FILES['userfile']['name']);
}

$fecha=$_POST["carrera"];

$autor=$_POST["autor"];

$categoria=$_POST["categoria"];
$categoriacorto=$_POST["categoria"];

$titulo=$_POST["titulo"];
$titulomodificado=$_POST["titulo"];

$foto=$_FILES['userfile']['name'];

$video=$_POST["video"];

$noticia=$_POST["noticia"];

$categoria = str_replace("TCM", "TC MOURAS", $categoria );
$categoria = str_replace("TCPM", "TC PISTA MOURAS", $categoria );
$categoria = str_replace("TCP", "TC PISTA", $categoria );
$categoria = str_replace("TC", "TURISMO CARRETERA", $categoria );
$categoria = str_replace("STC2000", "SÚPER TC2000", $categoria );
$categoria = str_replace("STurismo Carretera2000", "SÚPER TC2000", $categoria );
$categoria = str_replace("Turismo Carretera2000", "TC2000", $categoria );
$categoria = str_replace("Turismo Carretera Pista", "TC PISTA", $categoria );
$categoria = str_replace("Turismo Carretera Mouras", "TC MOURAS", $categoria );
$categoria = str_replace("Turismo Carretera Pista Mouras", "TC PISTA MOURAS", $categoria );
$categoria = str_replace("TRV6", "TOP RACE", $categoria );
$categoria = str_replace("TRS", "TOP RACE SERIES", $categoria );
$categoria = str_replace("TRJ", "TOP RACE JUNIOR", $categoria );
$categoria = str_replace("TN", "TURISMO NACIONAL", $categoria );
$categoria = str_replace("CARCC", "RALLY CC ARGENTINO", $categoria );
$categoria = str_replace("DESAYUNO", "DESAYUNOS", $categoria );
$categoria = str_replace("RARG", "RALLY ARGENTINO", $categoria );
$categoria = str_replace("TP", "TURISMO PISTA", $categoria );
$categoria = str_replace("FR", "FÓRMULA RENAULT", $categoria );
$categoria = str_replace("T4000", "TURISMO 4000 ARGENTINO", $categoria );
$categoria = str_replace("TI", "TURISMO INTERNACIONAL", $categoria );
$categoria = str_replace("F1", "FÓRMULA 1", $categoria );
$categoria = str_replace("MOTOGP", "MOTOGP", $categoria );
$categoria = str_replace("INDY", "INDYCAR", $categoria );
$categoria = str_replace("INDYCARCAR", "INDYCAR", $categoria );
$categoria = str_replace("WRCCC", "RALLY CC MUNDIAL", $categoria );
$categoria = str_replace("WRC", "RALLY MUNDIAL", $categoria );
$categoria = str_replace("DAKAR", "RALLY DAKAR", $categoria );
$categoria = str_replace("FE", "FÓRMULA E", $categoria );
$categoria = str_replace("WTurismo CarreteraC", "WTCC", $categoria );
$categoria = str_replace("ARG", "ARGENTINOS EN EL EXTERIOR", $categoria);
$categoria = str_replace("TECNICA", "TÉCNICA COMENTADA", $categoria);
$categoria = str_replace("HISTORIA", "ESTO ES HISTORIA", $categoria);

$titulomodificado = str_replace(" ", "%20", $titulomodificado);
$titulo = str_replace("\'", "'", $titulo );
$titulo = str_replace('\"', '"', $titulo );
/*
$titulotwitter = str_replace("\'", "'", $titulotwitter );
$titulotwitter = str_replace('\"', '"', $titulotwitter );
$titulofacebook = str_replace("\'", "'", $titulofacebook );
$titulofacebook = str_replace('\"', '"', $titulofacebook );
*/
$noticia = str_replace("\'", "'", $noticia );
$noticia = str_replace('\"', '"', $noticia );
/*
$noticiatwitter = str_replace("\'", "'", $noticiatwitter );
$noticiatwitter = str_replace('\"', '"', $noticiatwitter );
$noticiafacebook = str_replace("\'", "'", $noticiafacebook );
$noticiafacebook = str_replace('\"', '"', $noticiafacebook );
*/
$noticia = str_replace('
', '<br>', $noticia );
/*
$noticiatwitter = str_replace('
', '<br>', $noticiatwitter );
$noticiafacebook = str_replace('
', '<br>', $noticiafacebook );
*/
if (empty($video))
   {$fotoovideo='<img style="border:#999999 1px solid" src="'.$foto.'" width="754" height="425" />';}
else
   {$fotoovideo='<iframe src="http://www.youtube.com/embed/'.$video.'" width="754" height="425" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';}

$web='/home/tclarevista.com.ar/public_html/2016/'.$categoriacorto.'-fecha'.$fecha.'-'.$titulo.'.php';

$numero=1;
$contador=1;

setlocale(LC_ALL,"es_AR");
$dia = strftime("%e de %B del %Y");

$gestor=fopen($web, 'w');

$armado=' <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>'.$titulo.' | TC La Revista</title>
<meta http-equiv="Pragma" content="no-cache" />
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/lightbox-2.6.min.js"></script>
<script type="text/javascript" src="textanimation.js"></script>
<script type="text/javascript" src="propiertiesvideos.js"></script>
<script type="text/javascript" src="propiertiesimages.js"></script>
<link href="../css/lightbox2.css" rel="stylesheet" />
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
<link href="stylesheading.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="textpropierties.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="livestreamming.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="paddingsimulation.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="pluginsperformance.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="styleshead.css" type="text/css" rel="stylesheet" media="screen, projection" />
<!--[if IE]>
<style type="text/css">
html .menuenvivo{margin-left:8px;}
html .alternativo1{margin-top:-15px;}
html .alternativo2{margin-top:-30px;}
html .alternativo3{margin-top:-45px; margin-left:333px;}
html .alternativo4{margin-top:-60px; margin-left:444px;}
html .cabezanoticias{margin-left:-16px;}
html .cabezavideos{margin-left:-16px;}
html .imagenvideo_btn{margin-left:15px;}
html .masvideos{margin-left:-15px;}
html .textomasvideos{margin-left:-55px;}
html .nav {margin-top:0px;}
html .nav li ul {padding:33px; margin-left:-160px;}
html .nav1 {margin-top:0px;}
html .nav1 li ul {padding:33px; margin-left:-213px;}
html .nrPanel0 {margin-top:-34px;}
html .nrPanel1 {margin-top:-28px;}
</style>

<![endif]-->


<style type="text/css">
<!--
.Estilo8:hover {text-decoration:underline}
.noticias1 {	height: 311px;
	width: 273px;
	overflow: auto;
}
body {
	background-color: #000000;
	background-image: url(cabeza%20tc%20fecha16.jpg);
	background-repeat: no-repeat;
	background-position:top;
}
.Verdanachico {font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
}
.Verdanamarron {font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
	color:#663300;
}
.Estilo9 {
	font-family: "Arial Narrow";
	font-size: 25px;
}
.Estilo11 {
	font-size: 15px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<style type="text/css">
<!--
.excel1 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel6 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel8 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel7 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel9 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel10 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
-->
</style>
<style type="text/css">
<!--
.excel2 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel12 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel14 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel13 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel15 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel16 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
-->
</style>
<style type="text/css">
<!--
.excel3 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel4 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel11 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel5 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel17 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel18 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
-->
</style>
<style type="text/css">
<!--
.excel19 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel20 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel22 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel21 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel23 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel24 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
-->
</style>
<style type="text/css">
<!--
.excel25 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel26 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel28 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel27 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel29 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel30 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
-->
</style>
<style type="text/css">
<!--
.excel31 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel32 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel34 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel33 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel35 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel36 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
-->
</style>
<style type="text/css">
<!--
.excel37 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel38 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel40 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel39 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel41 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel42 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
-->
</style>
<style type="text/css">
<!--
.excel43 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel47 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel48 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel44 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel45 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel46 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
-->
</style>
<style type="text/css">
<!--
.excel49 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel53 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel54 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel50 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel51 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel52 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
-->
</style>
<style type="text/css">
<!--
.excel55 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel59 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel60 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel56 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel57 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel58 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
-->
</style>
<style type="text/css">
<!--
.excel61 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel66 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel67 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel63 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel64 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel65 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
-->
</style>
<style type="text/css">
<!--
.excel62 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"MS Sans Serif";
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel68 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel70 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel71 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel69 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel73 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:green;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel74 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:green;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel72 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:blue;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel75 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:blue;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
-->
</style>
<style type="text/css">
<!--
.excel76 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel85 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:yellow;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
background:#1D1B11;
}
.excel81 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:green;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel78 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:9.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel79 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:9.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel80 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:9.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel83 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:green;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel77 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel82 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
-->
</style>
<style type="text/css">
<!--
.excel84 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel94 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:yellow;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
background:#1D1B11;
}
.excel90 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:green;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel87 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:9.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel88 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:9.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel89 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:9.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel92 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:green;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel86 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel91 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
-->
</style>
<style type="text/css">
<!--
.excel93 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel102 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:yellow;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
background:#1D1B11;
}
.excel98 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:green;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel96 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:9.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel97 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:9.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel100 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:green;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel95 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel99 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
-->
</style>
<style type="text/css">
<!--
.excel101 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel110 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:yellow;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
background:#1D1B11;
}
.excel106 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:green;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel104 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:9.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel105 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:windowtext;
font-size:9.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel108 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:green;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel103 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:normal;
}
.excel107 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:normal;
}
.stylling table table tr:nth-child(odd){
	background-color:#CDCDCD;
}
.stylling table table tr:nth-child(even){
	background-color:#E1E1E1;
}
-->
</style>
<style type="text/css">
<!--
.excel109 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel114 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
background:#D8D8D8;
}
.excel115 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
background:#D8D8D8;
}
.excel116 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
background:#D8D8D8;
}
.excel117 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
background:#F2F2F2;
}
.excel118 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
background:#F2F2F2;
}
.excel119 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
background:#F2F2F2;
}
-->
</style>
<style type="text/css">
<!--
.excel111 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel112 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
background:#D8D8D8;
}
.excel113 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
background:#D8D8D8;
}
.excel120 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
background:#F2F2F2;
}
.excel121 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:red;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
background:#F2F2F2;
}
.Estilo15 {
	font-size: 18px;
	color: #666666;
}
-->
</style>
</head>

<body onload="MM_preloadImages("camara.png","boton fecha tcp activo.png","boton fecha wrc activo.png")">
<?php
$carga=file_get_contents("cabeza web.html");
echo $carga;
$carga=file_get_contents("cabeza fecha '.$categoriacorto.' '.$fecha.'.html");
echo $carga;
?>
<table width="990" height="91" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="775" valign="top"><table width="775" height="8" border="0" cellpadding="0" cellspacing="0" background="cabeza carreras en vivo.png">
      <tr>
        <td></td>
      </tr>
    </table>
    <table width="775" height="819" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr>
    <td height="819" valign="top"><div style="padding:8px;">
      <p><span class="Estilo9">'.$titulo.'</span></p>
          <table style="font-family:Arial, Helvetica, sans-serif; font-size:14px" width="100%" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td width="65%" height="19"><span style="color:#666666">'.$dia.' |</span> <span style="color:#DD0005; font-weight:bold">'.$categoria.'</span> </td>
              <td width="35%"><div align="right" class="Estilo15">Por '.$autor.' </div></td>
            </tr>
            <tr>
              <td colspan="2"><span class="Estilo11">'.$fotoovideo.'</span></td>
            </tr>
            <tr>
              <td colspan="2"><table width="704" height="44" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="190"><a href="'.$categoriacorto.'-fecha'.$fecha.'.php" class="buttons_propierties"> <img src="boton noticias.png" border="0" width="190" height="38" />
                        <div class="buttons_align">RESULTADOS</div>
                  </a></td>
                  <td width="190"><a href="'.$categoriacorto.'-posiciones.php" class="buttons_propierties"> <img src="boton noticias.png" border="0" width="190" height="38" />
                        <div class="buttons_align">CAMPEONATO</div>
                  </a></td>
                  <td width="190"><a href="'.$categoriacorto.'-fecha'.$fecha.'.php" class="buttons_propierties"> <img src="boton noticias.png" border="0" width="190" height="38" />
                        <div class="buttons_align">NOTICIAS</div>
                  </a></td>
                  <td width="134"><div class="fb-like" data-href="http://www.tclarevista.com.ar/2016/'.$categoriacorto.'-fecha'.$fecha.'-'.$titulo.'php" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div> <iframe
  src="https://platform.twitter.com/widgets/tweet_button.html?size=l&via=TCLAREVISTA&text='.$titulo.'"
  width="140"
  height="28"
  scrolling="no"
  title="Twitter Tweet Button"
  style="border: 0; overflow: hidden;">
</iframe></td>  		  
                </tr>
              </table></td>
            </tr>
          </table>
          <p><span class="Estilo11">'.$noticia.'</span><span class="Estilo11"></span></p>
          <div id="fb-root"></div>
		  

		  
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>
<div class="fb-comments" data-href="http://www.tclarevista.com.ar/2016/'.$categoriacorto.'-fecha'.$fecha.'-'.$titulo.'php" data-width="504" data-numposts="5" data-colorscheme="light"></div>

      </div></td>
  </tr>
</table>
      <table width="775" height="8" border="0" cellpadding="0" cellspacing="0" background="pie carreras en vivo.png">
        <tr>
          <td></td>
        </tr>
    </table></td>
    <td valign="top"><table width="205" height="638" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:3px;">
          <tr>
            <td height="8" background="cabeza publicidad.png"></td>
          </tr>
          <tr>
            <td height="622" valign="top" bgcolor="#F4F4F4"><div align="center">
                <table width="100%" height="66" border="0" cellpadding="4" cellspacing="0">
                  <tr>
                    <td width="29%">&nbsp;</td>
                    <td width="71%" valign="top"><a href="'.$categoriacorto.'-fecha'.$fecha.'.php"><img src="volver.png" width="168" height="58" border="0" />
                          <table width="120" class="pedido">
                            <tr>
                              <td align="right">VOLVER A LA FECHA</td>
                            </tr>
                          </table>
                    </a></td>
                  </tr>
                </table>
                <p><span style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-size:11px;">PUBLICIDAD</span> <br />
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
                      <param name="movie" value="publicidad dakar columna.swf" />
                      <param name="quality" value="high" />
                      <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
                    </object>
                </p>
              <p>
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
                    <param name="movie" value="publicidad dakar columna.swf" />
                    <param name="quality" value="high" />
                    <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
                  </object>
              </p>
              <p>
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
                    <param name="movie" value="publicidad dakar columna.swf" />
                    <param name="quality" value="high" />
                    <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
                  </object>
              </p>
            </div></td>
          </tr>
          <tr>
            <td height="8" background="pie publicidad.png"></td>
          </tr>
      </table></td>
  </tr>
</table>	
<table width="990" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php
$carga=file_get_contents("pie web.html");
echo $carga;
?>
</body>
</html>';



fputs($gestor, $armado);

fclose($gestor);




























/*


if (empty($carrera))
{
while (!empty($categoria[$numero]))
   {
    $numero++;
   }
$numero=$numero-1;
$contador1=$numero;


function asi($contador, $numero, $categoria)
   {$variable=NULL;
   
   while ($contador<$numero-1)
   {
   if ($contador==1)
   $variable=$variable.$categoria[$contador].', ';
   $contador++;
   }
   if ($contador==$numero-1)
   {
   $variable=$variable.$categoria[$contador]. ' y ';
   $contador++;
   $variable=$variable.$categoria[$contador].':';
   }
   if ($numero==1)
   {
   $variable=$categoria[$contador].':';
   }
   return $variable;
   };


$hola=asi ($contador, $numero, $categoria);


$hola1=$hola;
$hola=substr($hola,0,$hola-1);  
utf8_encode ($hola1);
utf8_encode ($titulotwitter);
utf8_encode ($noticiatwitter);
utf8_encode ($titulofacebook);
utf8_encode ($noticiafacebook);

$categoria = str_replace("TCM", "TC Mouras", $categoria );
$categoria = str_replace("TCPM", "TC Pista Mouras", $categoria );
$categoria = str_replace("TCP", "TC Pista", $categoria );
$categoria = str_replace("TC", "Turismo Carretera", $categoria );
$categoria = str_replace("STC2000", "Súper TC2000", $categoria );
$categoria = str_replace("STurismo Carretera2000", "Súper TC2000", $categoria );
$categoria = str_replace("Turismo Carretera2000", "TC2000", $categoria );
$categoria = str_replace("Turismo Carretera Pista", "TC Pista", $categoria );
$categoria = str_replace("Turismo Carretera Mouras", "TC Mouras", $categoria );
$categoria = str_replace("Turismo Carretera Pista Mouras", "TC Pista Mouras", $categoria );
$categoria = str_replace("TRV6", "Top Race", $categoria );
$categoria = str_replace("TRS", "Top Race Series", $categoria );
$categoria = str_replace("TRJ", "Top Race Junior", $categoria );
$categoria = str_replace("TN", "Turismo Nacional", $categoria );
$categoria = str_replace("CARCC", "Rally CC Argentino", $categoria );
$categoria = str_replace("DESAYUNO", "Desayunos", $categoria );
$categoria = str_replace("RARG", "Rally Argentino", $categoria );
$categoria = str_replace("TP", "Turismo Pista", $categoria );
$categoria = str_replace("FR", "Fórmula Renault", $categoria );
$categoria = str_replace("T4000", "Turismo 4000 Argentino", $categoria );
$categoria = str_replace("TI", "Turismo Internacional", $categoria );
$categoria = str_replace("F1", "Fórmula 1", $categoria );
$categoria = str_replace("MOTOGP", "MotoGP", $categoria );
$categoria = str_replace("INDY", "IndyCar", $categoria );
$categoria = str_replace("INDYCARCAR", "IndyCar", $categoria );
$categoria = str_replace("WRCCC", "Rally CC mundial", $categoria );
$categoria = str_replace("WRC", "Rally Mundial", $categoria );
$categoria = str_replace("DAKAR", "Rally Dakar", $categoria );
$categoria = str_replace("FE", "Fórmula E", $categoria );
$categoria = str_replace("WTurismo CarreteraC", "WTCC", $categoria );
$categoria = str_replace("ARG", "Argentinos en el exterior", $categoria);
$categoria = str_replace("TECNICA", "Técnica Comentada", $categoria);
$categoria = str_replace("HISTORIA", "Esto es historia", $categoria);

	  
$comienzo = strpos($noticia, ' @');
while ($comienzo!=FALSE)
{
$comienzo = strpos($noticia, ' @');
$termino = strpos($noticia, '_-',$comienzo);
$cadenaABuscar = substr($noticia, $comienzo, ($termino - $comienzo+2));
$noticia = str_replace($cadenaABuscar, ' ', $noticia );
$comienzo = strpos($noticia, ' @');
}

$comienzo = strpos($titulo, ' @');
while ($comienzo!=FALSE)
{
$comienzo = strpos($titulo, ' @');
$termino = strpos($titulo, '_-',$comienzo);
$cadenaABuscar = substr($titulo, $comienzo, ($termino - $comienzo+2));
$titulo = str_replace($cadenaABuscar, ' ', $titulo );
$comienzo = strpos($titulo, ' @');
}
$titulofacebook=$titulo;
$noticiafacebook=$noticia;

$comienzo = strpos($noticia, ' #');
while ($comienzo!=FALSE)
{
echo $comienzo;
$comienzo = strpos($noticia, ' #');
$termino = strpos($noticia, '_-', $comienzo);
$cadenaABuscar = substr($noticia, $comienzo, ($termino - $comienzo+2));
$noticia = str_replace($cadenaABuscar, ' ', $noticia );
$comienzo = strpos($noticia, ' #');
}
$comienzo = strpos($titulo, ' #');
while ($comienzo!=FALSE)
{
$comienzo = strpos($titulo, ' #');
$termino = strpos($titulo, '_-',$comienzo);
$cadenaABuscar = substr($titulo, $comienzo, ($termino - $comienzo+2));
$titulo = str_replace($cadenaABuscar, ' ', $titulo );
$comienzo = strpos($titulo, ' #');
}


$noticia = str_replace('-_', '', $noticia );
$titulo = str_replace('-_', '', $titulo );


setlocale(LC_ALL,"es_AR");
$fecha = strftime("%d de %B del %Y");

$obtenerlink=file_get_contents('/home/tclarevista.com.ar/public_html/2015/contador.php');
$aperturalink=fopen('/home/tclarevista.com.ar/public_html/2015/contador.php', 'w+');
$obtenerlink++;
fputs($aperturalink, $obtenerlink);
fclose ($aperturalink);



if ($_FILES['userfile']['name']!=NULL||$video!=NULL)
{

if ($_FILES['userfile']['name']!=NULL)
{
$armado = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3"><span class="Estilo5">'.$hola.'</span><br />'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2015/'.$_FILES['userfile']['name'].'"><img src="http://www.tclarevista.com.ar/2015/'.$_FILES['userfile']['name'].'" width="181"  border="0"/></a></td>
      </tr>
    </table><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}
else
{
$armado = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3"><span class="Estilo5">'.$hola.'</span><br />'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td>
		<a href="'.$video.'" rel="vidbox"><img src="'.$imagenvideo.'" alt="Miniatura" width="181"  border="0"/></a>
		</td>
      </tr>
    </table><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}
}

else
{
$armado = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3"><span class="Estilo5">'.$hola.'</span><br />'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}





$comienzo = strpos($armado, ">#");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado, ">#");
$termino = strpos($armado, '_-',$comienzo);
$cadenaABuscar = substr($armado, $comienzo+1, ($termino - $comienzo+1));
$armado = str_replace($cadenaABuscar, ' ', $armado);
$comienzo = strpos($armado, ">#");
}

$comienzo = strpos($armado, ">@");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado, ">@");
$termino = strpos($armado, '_-',$comienzo);
$cadenaABuscar = substr($armado, $comienzo+1, ($termino - $comienzo+1));
$armado = str_replace($cadenaABuscar, ' ', $armado );
$comienzo = strpos($armado, ">@");
}

if ($_FILES['userfile']['name']!=NULL||$video!=NULL)
{
if ($_FILES['userfile']['name']!=NULL)
{
$armado1 = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3">'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2015/'.$_FILES['userfile']['name'].'"><img src="http://www.tclarevista.com.ar/2015/'.$_FILES['userfile']['name'].'" width="181"  border="0"/></a></td>
      </tr>
    </table><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}

else
{
$armado1 = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3">'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td>
		<a href="'.$video.'" rel="vidbox"><img src="'.$imagenvideo.'" alt="Miniatura" width="181"  border="0"/></a>
		</td>
      </tr>
    </table><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}
}

else
{
$armado1 = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3">'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px"/>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}

$comienzo = strpos($armado1, ">#");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado1, ">#");
$termino = strpos($armado1, '_-',$comienzo);
$cadenaABuscar = substr($armado1, $comienzo+1, ($termino - $comienzo+1));
$armado1 = str_replace($cadenaABuscar, '', $armado1 );
$comienzo = strpos($armado1, ">#");
}

$comienzo = strpos($armado1, ">@");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado1, ">@");
$termino = strpos($armado1, '_-',$comienzo);
$cadenaABuscar = substr($armado1, $comienzo+1, ($termino - $comienzo+1));
$armado1 = str_replace($cadenaABuscar, '', $armado1 );
$comienzo = strpos($armado1, ">@");
}

$gestor=fopen($web, 'r+');
$final=file_get_contents('http://www.tclarevista.com.ar/2015/NOTICIASINICIO.php');
fputs($gestor, $armado);

fputs($gestor, $final);

fclose($gestor);

while ($contador1>=1)
{
$gestor1=fopen('/home/tclarevista.com.ar/public_html/2015/'.$categoria[$contador1].'.php', 'r+');
$final1=file_get_contents('http://www.tclarevista.com.ar/2015/'.$categoria[$contador1].'.php');
fputs($gestor1, $armado1);

fputs($gestor1, $final1);
fclose($gestor1);
$contador1--;
}



$hola1 = str_replace("TCPM", "#TCPM", $hola1 );
$hola1 = str_replace("TCM", "#TCM", $hola1 );
$hola1 = str_replace("TCP", "#TCPista", $hola1 );
$hola1 = str_replace("TC", "#TC", $hola1 );
$hola1 = str_replace("TC2000", "#TC2000", $hola1 );
$hola1 = str_replace("STC2000", "#SúperTC2000", $hola1 );
$hola1 = str_replace("S##TC2000", "#SúperTC2000", $hola1 );
$hola1 = str_replace("##TCPista", "#TCPista", $hola1 );
$hola1 = str_replace("##TCPM", "#TCPM", $hola1 );
$hola1 = str_replace("##TCM", "#TCM", $hola1 );
$hola1 = str_replace("##TC2000", "#TC2000", $hola1 );
$hola1 = str_replace("TRV6", "#TRV6", $hola1 );
$hola1 = str_replace("TRS", "#TRSeries", $hola1 );
$hola1 = str_replace("TRJ", "#TRJunior", $hola1 );
$hola1 = str_replace("TN", "#TurismoNacional", $hola1 );
$hola1 = str_replace("CARCC", "#CARCC", $hola1 );
$hola1 = str_replace("DESAYUNO", "#Desayuno", $hola1 );
$hola1 = str_replace("RARG", "#RallyArgentino", $hola1 );
$hola1 = str_replace("TP", "#TurismoPista", $hola1 );
$hola1 = str_replace("FR", "#FormulaRenault", $hola1 );
$hola1 = str_replace("T4000", "#Turismo4000", $hola1 );
$hola1 = str_replace("TI", "#TurismoInter", $hola1 );
$hola1 = str_replace("F1", "#F1", $hola1 );
$hola1 = str_replace("MOTOGP", "#MotoGP", $hola1 );
$hola1 = str_replace(", ", " ", $hola1 );
$hola1 = str_replace(" y ", " ", $hola1 );
$hola1 = str_replace("NASCAR", "#NASCAR", $hola1 );
$hola1 = str_replace("INDY", "#IndyCar", $hola1 );
$hola1 = str_replace("WRCCC", "#WorldRallyCC", $hola1 );
$hola1 = str_replace("WRC", "#WRC", $hola1 );
$hola1 = str_replace("DAKAR", "#Dakar", $hola1 );
$hola1 = str_replace("WTCC", "#WTCC", $hola1 );
$hola1 = str_replace("FE", "#FormulaE", $hola1 );
$hola1 = str_replace("ARG", "#Argentinos", $hola1);
$hola1 = str_replace("W#TCC", "#WTCC", $hola1);
$hola1 = str_replace("HISTORIA", "#Historia", $hola1 );
$hola1 = str_replace("TECNICA", "#Tecnica", $hola1 );

$ini = strpos($noticia, "<a style");
$fin = strpos($noticia, "<u>");
$longi = $fin-$ini;

$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;

while ($longi !=FALSE)
{
$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;
$longi1=$longi+3;
$extracto = substr ($noticiatwitter, $ini, $longi1);
$noticiatwitter = str_replace ($extracto,'',$noticiatwitter);
$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;
}

$ini = strpos($noticiafacebook, "<a style");
$fin = strpos($noticiafacebook, "<u>");
$longi = $fin-$ini;

while ($longi !=FALSE)
{
$ini = strpos($noticiafacebook, "<a style");
$fin = strpos($noticiafacebook, "<u>");
$longi = $fin-$ini;
$longi1=$longi+3;
$extracto = substr ($noticiafacebook, $ini, $longi1);
$noticiafacebook = str_replace ($extracto,'',$noticiafacebook);
$ini = strpos($noticiafacebook, "<a style");
$fin = strpos($noticiafacebook, "<u>");
$longi = $fin-$ini;
}

$noticiafacebook = str_replace('<br>', '', $noticiafacebook );
$noticiafacebook = str_replace('<i>', '', $noticiafacebook );
$noticiafacebook = str_replace('</i>', '', $noticiafacebook );
$noticiafacebook = str_replace('<b>', '', $noticiafacebook );
$noticiafacebook = str_replace('</b>', '', $noticiafacebook );
$noticiafacebook = str_replace('</u></a>', '', $noticiafacebook );
$noticiatwitter = str_replace('<br>', '', $noticiatwitter );
$noticiatwitter = str_replace('<i>', '', $noticiatwitter );
$noticiatwitter = str_replace('</i>', '', $noticiatwitter );
$noticiatwitter = str_replace('<b>', '', $noticiatwitter );
$noticiatwitter = str_replace('</b>', '', $noticiatwitter );
$noticiatwitter = str_replace('</u></a>', '', $noticiatwitter );



function getting_shorty($url, $format = '') {
    $username  = 'o_1c5adptiml';
    $apikey    = 'R_a491f528a2c7482e977281a1072208f9';
    $bitly_api = 'http://api.bit.ly/v3/shorten?login=' . $username . '&apiKey=' . $apikey . '&uri=' . urlencode( $url ) . '&format=' . $format;
    $curl_init = curl_init();
    curl_setopt($curl_init, CURLOPT_URL, $bitly_api);
    curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_init, CURLOPT_CONNECTTIMEOUT, 5);
    $data      = curl_exec($curl_init);
    curl_close($curl_init);
    return $data;
}


function set_shorten($text) {
    $match_url = preg_match_all('/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/', $text, $matches);
 
    $matches = $matches[0];
    if($match_url)
    {
        foreach($matches as $match)
        {
            $replace = getting_shorty($match);
            $text = str_replace($match, $replace, $text);
        }
    }
 $stringinicio=strpos($text,'j.mp\/');
 $stringfinal=strpos($text,'", "hash');
 $text=substr($text,$stringinicio,($stringfinal-$stringinicio));
 $text=str_replace('\/','/',$text);
 $text1=$text;
    return $text1;
}



$ancla='http://www.tclarevista.com.ar/2015/noticias-inicio.php#'.$obtenerlink;
$link=set_shorten($ancla);

$armadofacebook=substr($noticiafacebook,0,120);

$armadofacebook=$hola1." <span>".$titulofacebook."  <span>".$armadofacebook."... Ver nota: www.".$link;




$comienzo = strpos($armadofacebook, "<span>@");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armadofacebook, "<span>@");
$termino = strpos($armadofacebook, '_-',$comienzo);
$cadenaABuscar = substr($armadofacebook, $comienzo-1, (($termino - $comienzo)+3));
$armadofacebook = str_replace($cadenaABuscar, '', $armadofacebook );
$comienzo = strpos($armadofacebook, "<span>@");
}


$comienzo = strpos($armadofacebook, "_-");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armadofacebook, "_-");
$termino = strpos($armadofacebook, '-_',$comienzo);
$cadenaABuscar = substr($armadofacebook, $comienzo, (($termino - $comienzo)));
$armadofacebook = str_replace($cadenaABuscar, '', $armadofacebook );
$comienzo = strpos($armadofacebook, "_-");
}


$armadofacebook = str_replace('-_', '', $armadofacebook );
$armadofacebook = str_replace('-_', '', $armadofacebook );
$armadofacebook = str_replace('<span>', '', $armadofacebook );


$armadofacebook = htmlentities($armadofacebook, ENT_NOQUOTES,'UTF-8');



mail("axil682kalb@m.facebook.com",NULL,$armadofacebook,"FROM: tclarevista@ciudad.com.ar");

$comienzo = strpos($noticiatwitter, '_-');
while ($comienzo!=FALSE)
{
$comienzo = strpos($noticiatwitter, '_-');
$termino = strpos($noticiatwitter, '-_',$comienzo);
$cadenaABuscar = substr($noticiatwitter, $comienzo, ($termino - $comienzo+2));
$noticiatwitter = str_replace($cadenaABuscar, ' ', $noticiatwitter );
$comienzo = strpos($noticiatwitter, '_-');
}
$comienzo = strpos($titulotwitter, '_-');
while ($comienzo!=FALSE)
{
$comienzo = strpos($titulotwitter, '_-');
$termino = strpos($titulotwitter, '-_',$comienzo);
$cadenaABuscar = substr($titulotwitter, $comienzo, ($termino - $comienzo+2));
$titulotwitter = str_replace($cadenaABuscar, ' ', $titulotwitter );
$comienzo = strpos($titulotwitter, '_-');
}
$titulotwitter = str_replace('-_', '', $titulotwitter );

$armadotwitter=$hola1."\n".$titulotwitter.". Ver nota: ".$link;

$tamañotweet=strlen($armadotwitter);

while ($etiquetas!=NULL&&$tamañotweet<=140)
{
    $comienzo = strpos($etiquetas, '@');
    $termino = strpos($etiquetas, ' ',$comienzo);
    $cadenaABuscar = substr($etiquetas, $comienzo, ($termino+1 - $comienzo));
	$etiquetas = str_replace($cadenaABuscar, '', $etiquetas );
	$string2=strlen($cadenaABuscar);
	$tamañotweet=$tamañotweet+$string2;
	if ($tamañotweet<=140)
	{
	   $armadotwitter=$armadotwitter.' '.$cadenaABuscar;
    }
}


mail("trigger@recipe.ifttt.com,lucas_barraza_2@hotmail.com",NULL,$armadotwitter,"FROM: tclarevista@ciudad.com.ar");




echo 'Las noticias subieron con &eacute;xito';

}



















else

{

while (!empty($categoria[$numero]))
   {
    $numero++;
   }
$numero=$numero-1;
$contador1=$numero;

function asi($contador, $numero, $categoria, $carrera)
   {$variable=NULL;
   
   while ($contador<$numero-1)
   {
   if ($contador==1)
       $variable=' - ';
   $variable=$variable.$categoria[$contador].', ';
   $contador++;
   }
   if ($contador==$numero-1)
   {
   if ($contador==1)
       $variable=' - ';
   $variable=$variable.$categoria[$contador]. ' y ';
   $contador++;
   $variable=$variable.$categoria[$contador].':';
   }
   if ($numero==1)
   {
   $variable=' - '.$categoria[$contador].':';
   }
   return $variable;
   };

      $date = new DateTime(null, new DateTimeZone('America/Argentina/Buenos_Aires'));
      $horario = $date->format('H:i');
   $hola=asi ($contador, $numero, $categoria, $carrera);

   $hola1=substr($hola, 3);   
utf8_encode ($hola1);
utf8_encode ($titulotwitter);
utf8_encode ($noticiatwitter);


$hola = str_replace("TCM", "TC Mouras", $hola );
$hola = str_replace("TCPM", "TC Pista Mouras", $hola );
$hola = str_replace("TCP", "TC Pista", $hola );
$hola = str_replace("TC", "Turismo Carretera", $hola );
$hola = str_replace("STC2000", "Súper TC2000", $hola );
$hola = str_replace("STurismo Carretera2000", "Súper TC2000", $hola );
$hola = str_replace("Turismo Carretera2000", "TC2000", $hola );
$hola = str_replace("Turismo Carretera Pista", "TC Pista", $hola );
$hola = str_replace("Turismo Carretera Mouras", "TC Mouras", $hola );
$hola = str_replace("Turismo Carretera Pista Mouras", "TC Pista Mouras", $hola );
$hola = str_replace("TRV6", "Top Race", $hola );
$hola = str_replace("TRS", "Top Race Series", $hola );
$hola = str_replace("TRJ", "Top Race Junior", $hola );
$hola = str_replace("TN", "Turismo Nacional", $hola );
$hola = str_replace("CARCC", "Rally CC Argentino", $hola );
$hola = str_replace("DESAYUNO", "Desayunos", $hola );
$hola = str_replace("RARG", "Rally Argentino", $hola );
$hola = str_replace("TP", "Turismo Pista", $hola );
$hola = str_replace("FR", "Fórmula Renault", $hola );
$hola = str_replace("T4000", "Turimso 4000 Argentino", $hola );
$hola = str_replace("TI", "Turismo Internacional", $hola );
$hola = str_replace("F1", "Fórmula 1", $hola );
$hola = str_replace("MOTOGP", "MotoGP", $hola );
$hola = str_replace(", ", " ", $hola );
$hola = str_replace(" y ", " ", $hola );
$hola = str_replace("INDY", "IndyCar", $hola );
$hola = str_replace("WRCCC", "Rally CC mundial", $hola );
$hola = str_replace("WRC", "Rally Mundial", $hola );
$hola = str_replace("DAKAR", "Rally Dakar", $hola );
$hola = str_replace("WTurismo CarreteraC", "WTCC", $hola );
$hola = str_replace("FE", "Fórmula E", $hola );
$hola = str_replace("ARG", "Argentinos en el exterior", $hola);
$hola = str_replace("TECNICA", "Técnica Comentada", $hola);
$hola = str_replace("HISTORIA", "Esto es historia", $hola);

$comienzo = strpos($noticia, ' #');
while ($comienzo!=FALSE)
{
$comienzo = strpos($noticia, ' #');
$termino = strpos($noticia, '_-',$comienzo);
$cadenaABuscar = substr($noticia, $comienzo, ($termino - $comienzo+2));
$noticia = str_replace($cadenaABuscar, ' ', $noticia );
$comienzo = strpos($noticia, ' #');
}

$comienzo = strpos($noticia, ' @');
while ($comienzo!=FALSE)
{
$comienzo = strpos($noticia, ' @');
$termino = strpos($noticia, '_-',$comienzo);
$cadenaABuscar = substr($noticia, $comienzo, ($termino - $comienzo+2));
$noticia = str_replace($cadenaABuscar, ' ', $noticia );
$comienzo = strpos($noticia, ' @');
}



$noticia = str_replace('-_', '', $noticia );   
$armado = '<span class="Estilo140">'.$horario.' - <span class="Estilo166">'.$noticia.'</span></span></span></span></span></span><hr />';

$comienzo = strpos($armado, ">#");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado, ">#");
$termino = strpos($armado, '_-',$comienzo);
$cadenaABuscar = substr($armado, $comienzo+1, ($termino - $comienzo+1));
$armado = str_replace($cadenaABuscar, '', $armado );
$comienzo = strpos($armado, ">#");
}

$comienzo = strpos($armado, ">@");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado, ">@");
$termino = strpos($armado, '_-',$comienzo);
$cadenaABuscar = substr($armado, $comienzo+1, ($termino - $comienzo+1));
$armado = str_replace($cadenaABuscar, '', $armado );
$comienzo = strpos($armado, ">@");
}   
   while ($contador1>=1)
{
$gestor1=fopen('/home/tclarevista.com.ar/public_html/2015/online'.$categoria[$contador1].'f'.$carrera.'.php', 'r+');
$final1=file_get_contents('http://www.tclarevista.com.ar/2015/online'.$categoria[$contador1].'f'.$carrera.'.php');
fputs($gestor1, $armado);

fputs($gestor1, $final1);
fclose($gestor1);
$contador1--;
}







if ($onlinetwitter==TRUE)
{
$comienzo = strpos($noticiatwitter, '_-');
while ($comienzo!=FALSE)
{
$comienzo = strpos($noticiatwitter, '_-');
$termino = strpos($noticiatwitter, '-_',$comienzo);
$cadenaABuscar = substr($noticiatwitter, $comienzo, ($termino - $comienzo+2));
$noticiatwitter = str_replace($cadenaABuscar, ' ', $noticiatwitter );
$comienzo = strpos($noticiatwitter, '_-');
}

   $noticiatwitter = str_replace('-_', '', $noticiatwitter ); 

$hola1 = str_replace("TCPM", "#TCPM", $hola1 );
$hola1 = str_replace("TCM", "#TCM", $hola1 );
$hola1 = str_replace("TCP", "#TCPista", $hola1 );
$hola1 = str_replace("TC", "#TC", $hola1 );
$hola1 = str_replace("TC2000", "#TC2000", $hola1 );
$hola1 = str_replace("STC2000", "#SúperTC2000", $hola1 );
$hola1 = str_replace("S##TC2000", "#SúperTC2000", $hola1 );
$hola1 = str_replace("##TCPista", "#TCPista", $hola1 );
$hola1 = str_replace("##TCPM", "#TCPM", $hola1 );
$hola1 = str_replace("##TCM", "#TCM", $hola1 );
$hola1 = str_replace("##TC2000", "#TC2000", $hola1 );
$hola1 = str_replace("TRV6", "#TRV6", $hola1 );
$hola1 = str_replace("TRS", "#TRSeries", $hola1 );
$hola1 = str_replace("TRJ", "#TRJunior", $hola1 );
$hola1 = str_replace("TN", "#TurismoNacional", $hola1 );
$hola1 = str_replace("CARCC", "#CARCC", $hola1 );
$hola1 = str_replace("DESAYUNO", "#Desayuno", $hola1 );
$hola1 = str_replace("RARG", "#RallyArgentino", $hola1 );
$hola1 = str_replace("TP", "#TurismoPista", $hola1 );
$hola1 = str_replace("FR", "#FormulaRenault", $hola1 );
$hola1 = str_replace("T4000", "#Turismo4000", $hola1 );
$hola1 = str_replace("TI", "#TurismoInter", $hola1 );
$hola1 = str_replace("WTCC", "#WTCC", $hola1 );
$hola1 = str_replace("FE", "#FormulaE", $hola1 );
$hola1 = str_replace("F1", "#F1", $hola1 );
$hola1 = str_replace("MOTOGP", "#MotoGP", $hola1 );
$hola1 = str_replace(", ", " ", $hola1 );
$hola1 = str_replace(" y ", " ", $hola1 );
$hola1 = str_replace("NASCAR", "#NASCAR", $hola1 );
$hola1 = str_replace("INDY", "#IndyCar", $hola1 );
$hola1 = str_replace("WRCCC", "#WorldRallyCC", $hola1 );
$hola1 = str_replace("WRC", "#WRC", $hola1 );
$hola1 = str_replace("DAKAR", "#Dakar", $hola1 );
$hola1 = str_replace("ARG", "#Argentinos", $hola1 );
$hola1 = str_replace("##TC2000", "#TC2000", $hola1 );
$hola1 = str_replace("W#TCC", "#WTCC", $hola1 );
$hola1 = str_replace("HISTORIA", "#Historia", $hola1 );
$hola1 = str_replace("TECNICA", "#Tecnica", $hola1 );

$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;

while ($longi !=FALSE)
{
$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;
$longi1=$longi+3;
$extracto = substr ($noticiatwitter, $ini, $longi1);
$noticiatwitter = str_replace ($extracto,'',$noticiatwitter);
$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;
}

$noticiatwitter = str_replace('<br>', '', $noticiatwitter );
$noticiatwitter = str_replace('<i>', '', $noticiatwitter );
$noticiatwitter = str_replace('</i>', '', $noticiatwitter );
$noticiatwitter = str_replace('<b>', '', $noticiatwitter );
$noticiatwitter = str_replace('</b>', '', $noticiatwitter );
$noticiatwitter = str_replace('</u></a>', '', $noticiatwitter );   
   
   mail("trigger@recipe.ifttt.com",NULL,$hola1." \n".$noticiatwitter,"FROM: tclarevista@ciudad.com.ar");

   
}
   
   echo 'El online subió con &eacute;xito';
}

*/

?>





</body>
</html>