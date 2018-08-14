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
.lista_resultados{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
width:100%;
}
.lista_resultados tr:nth-child(odd){
	background-color:#E5E5E5;
}
.lista_resultados tr:nth-child(even){
	background-color:#F8F8F8;
}
.TabResHeads{
color:#FF0000;
font-weight:bold;
}
h6{
color:#FF0000;
font-weight:bold;
text-align:left;
background-color:#FFFFFF;
font-size:13px;
}
.lista_resultados tr td:first-child{
color:#FF0000;
font-weight:bold;
text-align:center;
}
.lista_resultados tr td:nth-child(10n+3){
font-weight:bold;
text-align:left;
}
.lista_resultados tr td:nth-child(10n+4){
text-align:left;
}
.lista_resultados tr td:nth-child(10n+5){
text-align:center;
}
.lista_resultados tr td:nth-child(10n+6){
text-align:center;
}
.lista_resultados tr td:nth-child(10n+7){
text-align:center;
}

-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif"><strong><i>1º Entrenamiento (Clase 2) </i>           </strong></span><span class="Estilo6"> </span></td>
  </tr>
</table> 
<table border="0" cellspacing="0" cellpadding="2" class="lista_resultados"><tr>
<?php

$twit = file_get_contents('http://www.apat.org.ar/resultados/2/2016-06-05');

$inicio = strpos($twit, '<td colspan="7" class="TabResTitulo">1&deg; ENTRENAMIENTO <strong>C2</strong></td>');

$final = strpos($twit, '<td colspan="7" class="TabResTitulo">2&deg; ENTRENAMIENTO <strong>C2</strong></td>');

$cadenaABuscar = substr($twit, $inicio, (($final-200) - $inicio));

$cadenaABuscar = str_replace('<td colspan="7" class="TabResTitulo">1&deg; ENTRENAMIENTO <strong>C2</strong></td>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">Puesto</td>', '<td align="center">Pos.</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">Nro</td>', '<td align="center">Nº</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="center">Vtas</td>', '<td align="center">Vueltas</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Dif.</td>', '<td>Diferencia</td>',$cadenaABuscar);


echo $cadenaABuscar;

?>
</body>

</html>