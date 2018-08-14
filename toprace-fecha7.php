<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Top Race en San Juan | Tiempos en vivo, Fotos, Videos, Entrevistas</title>
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
	background-image: url(fondotrv6.jpg);
	background-repeat: no-repeat;
	background-position:top;
}
.Estilo125 {font-family: Arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; color: #000000; }
.Estilo126 {color: #000000;
	font-size: 15px;
	font-weight: bold;
}
.Verdanachico {font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
}
.Verdanamarron {font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
	color:#663300;
}
-->
</style></head>

<body onload="MM_preloadImages('camara.png','boton fecha tcp activo.png','boton fecha wrc activo.png')">
<?php
$carga=file_get_contents('cabeza web.html');
echo $carga;
?>
<table width="990" height="168" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="501"><div class="titlecategoria">San Juan  </div>
        <div class="subtitle">FECHA 7 | TOP RACE </div></td>
    <td width="489"><div align="right">
      <table width="238" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="circuito san juan.png" width="238" height="108" border="0" /></td>
        </tr>
        <tr>
          <td><div style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center"><span style="font-weight:bold">EXTENSI&Oacute;N:</span> 3240 metros </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
<table width="990" height="91" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="671" valign="top"><div class="cabezatiempos"><span class="textoenvivo">TIEMPOS Y RESULTADOS </span></div> 
      <table width="671" height="405" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td valign="bottom">
		  <div id="resultados"><?php
$cadena=file_get_contents('toprace-fecha7-resultados.php');
echo $cadena;
?>
          </div>
		  </td>
        </tr>
      </table>
      <table width="671" height="8" border="0" cellpadding="0" cellspacing="0" background="pie tiempos.png">
        <tr>
          <td></td>
        </tr>
    </table></td>
    <td width="319" valign="top">
     

<div style="margin-left:5px;">
      <li class="cabezarelatos"><span class="textoenvivo">COMENTARIOS </span></li>
    
      <table width="314" height="333" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td valign="top">
		  <script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#actualizacion").load("onlineTRV6f7.php");
        }, 100000);
    });
</script>

<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#resultados").load("toprace-fecha7-resultados.php");
        }, 60000);
    });
</script> 

<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#actualizacion_videos").load("toprace-fecha7-videos.php");
        }, 60000);
    });
</script> 
<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#noticias").load("toprace-fecha7-noticias.php");
        }, 60000);
    });
</script> 

<div id="tv1" class="tv1-change">
<div id="actualizacion" class="news-tc"><?php
$cadena=file_get_contents('onlineTRV6f7.php');
echo $cadena;
?>
          </div></div>
		  <div align="center" id="tv2" class="tv2-change">
		  
		  
		  </div>
            <table width="309" height="37" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><table width="151" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:4px">
                  <tr>
                    <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="toprace-posiciones.php">CAMPEONATO</a></li></td>
                  </tr>
                </table></td>
                <td><table width="151" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:4px">
                  <tr>
                    <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="toprace-calendario.php">CARRERAS</a></li></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <table width="314" height="8" border="0" cellpadding="0" cellspacing="0" background="pie relatos.png">
        <tr>
          <td></td>
        </tr>
      </table></div>
	  <table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
	  <table width="314" height="120" border="0" cellpadding="0" cellspacing="0" background="fondo clima.jpg" style="margin-left:5px">
        <tr>
          <td><!-- www.TuTiempo.net - Ancho:312px - Alto:120px -->
<div id="TT_vhjArxtxtfhadMvALfrl525lotlATEElrtkd1syIK1D">Pronóstico de Tutiempo.net</div>
<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_vhjArxtxtfhadMvALfrl525lotlATEElrtkd1syIK1D"></script></td>
        </tr>
      </table></td>
  </tr>
</table>
 <table height="8" width="990" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><a name="videos" id="videos"></a></td>
  </tr>
</table>
 <table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="777" valign="top"><table width="777" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="508" valign="top">
           <li class="cabezanoticias"><span class="textoenvivo" >FOTOS</span></li>
            <table width="508" border="0" cellpadding="5" cellspacing="0" bgcolor="#F4F4F4">
            <tr>
              <td valign="top"><div id="mas_fotos" class="fotos">
                <table width="498" height="170" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="50%" height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="toprace-fecha7-domingo.jpg" width="233" height="136" border="0"/><br />
                                  <div class="playfoto"><a href="toprace-fecha7-domingo.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                          </div></td>
                        </tr>
                        <tr>
                          <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="toprace-fecha7-domingo.php">Actividad del domingo </a></td>
                        </tr>
                    </table></td>
                    <td width="50%" height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="toprace-fecha7-sabado.jpg" width="233" height="136" border="0"/><br />
                                <div class="playfoto"><a href="toprace-fecha7-sabado.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="toprace-fecha7-sabado.php">Actividad del viernes y sábado</a></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td></td>
                  </tr>
                </table>
              </div>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="30"><hr size="2" noshade="noshade" /></td>
                      <td nowrap="nowrap" width="38%"><div id="despliegue-fotos" name="despliegue-fotos" class="desplegado"><a href="javascript:;" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF0000; font-weight:bold" onclick="desplegar_fotos()" >DESPLEGAR MÁS GALERÍAS <img src="mas multimedia.png" width="18" border="0" height="18" /></a></div>
                          <div id="contraccion-fotos" name="contraccion-fotos" class="contraido"><a href="javascript:;" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF0000; font-weight:bold" onclick="contraer_fotos()" >REDUCIR EL MENÚ <img src="menos multimedia.png" width="18" border="0" height="18" /></a></div></td>
                      <td width="30"><hr size="2" noshade="noshade" /></td>
                    </tr>
                  </table></td>
            </tr>
          </table>
            <table width="508" height="8" border="0" cellpadding="0" cellspacing="0" background="pie noticias.png">
                <tr>
                  <td></td>
                </tr>
            </table>
			<table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td><a name="videos" id="videos"></a></td>
               </tr>
            </table>
			<li class="cabezanoticias"><span class="textoenvivo" >NOTICIAS</span></li>         
            
            <table width="508" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td valign="top"><div class="newsfecha">
                    <?php
$cadena=file_get_contents('TRV6.php');
echo $cadena;
?>
                  </div>
                    <table style="margin-top:4px; margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                      <tr>
                        <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="toprace-noticias.php">MAS NOTICIAS</a></li></td>
                      </tr>
                  </table></td>
              </tr>
            </table>
            <table width="508" height="8" border="0" cellpadding="0" cellspacing="0" background="pie noticias.png">
              <tr>
                <td></td>
              </tr>
            </table>
			

			 
			 
          </td>
        <td width="269" valign="top"><table width="265" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td><li class="cabezafechas"><span class="textoenvivovinculos" >DECLARACIONES</span></li>
                    <table width="265" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                      <tr>
                        <td valign="top"><table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td></td>
                            </tr>
                          </table>
                            <table width="97%" height="160" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:4px;">
                              <tr>
                                <td width="207" height="27"><span class="Estilo125">Josito Di Palma (Ganador) </span></td>
                                <td width="50"><div align="right" class="Verdanamarron">
                                    <table width="49" height="23" border="0" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="49"><table width="46" height="19" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFF00">
                                            <tr>
                                              <td><div align="center" class="Estilo126">13</div></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                    </table>
                                </div></td>
                              </tr>
                              <tr>
                                <td height="111" colspan="2" valign="top"><table width="58" border="0" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td><img src="josito4.jpg" width="120" height="157" /></td>
                                    </tr>
                                  </table>
                                    <span class="Verdanachico">&quot;Es un triunfo muy bueno porque nos permite entrar en la etapa final, pero de todas maneras tenemos los pies sobre la tierra y sabemos que gran parte de la victoria se debe al sistema de inversión de grilla. El Zonda se brindó para dar un espectáculo muy bueno, pudimos defendernos de los ataques de distintos pilotos y eso da confianza, pero nos sigue faltando para poder entender el compuesto nuevo&quot;</span><span class="Verdanachico"></span></td>
                              </tr>
                            </table>
                            <table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td></td>
                              </tr>
                          </table></td>
                      </tr>
                    </table>
              <table width="265" height="6" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                      <tr>
                        <td></td>
                      </tr>
                    </table>
              <li class="cabezacampeonato"><span class="textoenvivo">OTRAS COMPETENCIAS </span></li>
              <table width="265" height="211" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                      <tr>
                        <td valign="top"><table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td></td>
                            </tr>
                          </table>
                          <div style="padding:4px"> 
                              <a href="topraceseries-fecha7.php"><img src="boton fecha tr series.png" width="187" height="34" border="0" /></a> <br />
                              <a href="f1-fecha11.php"><img src="boton fecha f1.png" width="187" height="34" border="0" /></a> <br />
                              <a href="nascar-fecha20.php"><img src="boton fecha nascar.png" width="187" height="34" border="0" /></a><br />
                              <a href="crosscountry1-fecha6.php"><img src="boton fecha cross country mundial.png" width="187" height="34" border="0" /></a><br />
                          </div></td>
                      </tr>
                    </table>
              <table width="265" height="8" border="0" cellpadding="0" cellspacing="0" background="pie fechas.png">
                      <tr>
                        <td></td>
                      </tr>
                    </table>
              <table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td></td>
                      </tr>
                  </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td width="213" valign="top"><table width="205" height="94" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:3px;">
      <tr>
        <td height="8" background="cabeza publicidad.png"></td>
      </tr>
      <tr>
        <td height="600" valign="top" bgcolor="#F4F4F4"><div align="center">
          <p><span style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-size:11px;">PUBLICIDAD</span> <br />
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
                    <param name="movie" value="publicidad dakar columna.swf" /> <param name="quality" value="high" />
                    <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
                  </object>
          </p>
          <p>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
              <param name="movie" value="publicidad dakar columna.swf" /> <param name="quality" value="high" />
              <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
            </object>
          </p>
          <p>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
              <param name="movie" value="publicidad dakar columna.swf" /> <param name="quality" value="high" />
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
$carga=file_get_contents('pie web.html');
echo $carga;
?>
</body>
</html>
