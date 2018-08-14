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

-->

</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>



<body>

<table width="341" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="535"><span style="font-family:Arial, Helvetica, sans-serif"><strong><i>1º Entrenamiento (Clase 3) </i>           </strong></span><span class="Estilo6"> </span></td>
  </tr>
</table> 

<?php

$twit = file_get_contents('http://www.touringcars.net/results/wtcc/2016/frtest.php');

$inicio = strpos($twit, 'class="resultsubheading"><td');

$final = strpos($twit, '</td></tr></TABLE><table');

$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('class="resultsubheading"><td', '<tr class="resultsubheading"><td',$cadenaABuscar);
$cadenaABuscar = str_replace('</td></tr></TABLE><table', '</td></tr></TABLE>',$cadenaABuscar);
echo $cadenaABuscar;

?>
</body>

</html>