<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TC Pista en La Pampa | Tiempos en vivo, Fotos, Videos, Entrevistas</title>
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
	background-image: url(fondotcp.jpg);
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
    <td width="501"><div class="titlecategoria">La Pampa <br />
    </div>
        <div class="subtitle">FECHA 2 | TC PISTA </div></td>
    <td width="489"><div align="right">
      <table width="238" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="circuito santa rosa.png" width="238" height="108" border="0" /></td>
        </tr>
        <tr>
          <td><div style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center"><span style="font-weight:bold">R&Eacute;CORD:</span> J. Urcera (1'16&quot;398) <br />
                    <span style="font-weight:bold">EXTENSI&Oacute;N:</span> 4148 metros </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
<table width="990" height="91" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="671" valign="top"><div class="cabezatiempos"><span class="textoenvivo">TIEMPOS EN VIVO  </span></div> 
      <table width="671" height="405" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td valign="bottom">
		  <div id="resultados"><?php
$cadena=file_get_contents('tcpista-fecha2-resultados.php');
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
      <li class="cabezarelatos"><span class="textoenvivo">RELATOS EN VIVO </span></li>
    
      <table width="314" height="38" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td><table width="305" height="31" border="1" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="150" style="cursor:pointer" onclick="putcoments()" bordercolor="#FFFFFF" background="boton resultados.jpg"><div class="botonresultados" align="center">VER COMENTARIOS </div></td>
                <td>&nbsp;</td>
                <td width="150" style="cursor:pointer" onclick="puttv()" bordercolor="#FFFFFF" background="boton resultados.jpg"><div class="botonresultados" align="center">VER TV </div></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="314" height="333" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td valign="top">
		  <script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#actualizacion").load("onlineTCPf2.php");
        }, 100000);
    });
</script>

<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#resultados").load("tcpista-fecha2-resultados.php");
        }, 60000);
    });
</script> 

<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#actualizacion_videos").load("tcpista-fecha2-videos.php");
        }, 60000);
    });
</script> 
<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#noticias").load("tcpista-fecha2-noticias.php");
        }, 60000);
    });
</script> 

<div id="tv1" class="tv1">
<div id="actualizacion" class="news"><?php
$cadena=file_get_contents('onlineTCPf2.php');
echo $cadena;
?>
          </div></div>
		  <div align="center" id="tv2" class="tv2">
		  <center><link href="deportv.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="http://vjs.zencdn.net/4.12/video.js"></script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "http://streambox.fr/HLSProvider/videojs/video-js.swf";
  </script>
</head>
<body>

  <video id="example_video_1" class="video-js vjs-default-skin" controls preload="true" autoplay="true" width="640" height="680" 
      poster=""
      data-setup='{"techOrder": ["flash","html5"]}'>
    <!-- <source src="rtmp://edge02.dcarsat.com.ar/DXTV/DXTV/" type='video/mp4' /> -->
    <source src="rtmp://edge02.dcarsat.com.ar/DXTV/DXTV/" type='rtmp/mp4' />

  </video></center>

<style>
 
 .video-js {
 width: 100% !important;
 height: auto !important;
}
.video-js:after {
 content: '.';
 display: block;
 position: relative;
 padding: 0;
 padding-top: 40.1%; /* set this to (height/width)*100% (eg. 56%=16:9, 75%=4:3) */
 margin: 0 0 0 -100%;
 visibility: hidden;
 height: 0;
}
.vjs-poster {
 position: absolute;
 top: 0;
 bottom: 0;
 right: 0;
 left: 0;
}

 .vjs-default-skin .vjs-big-play-button { display:none }
  </style>




<img border="0" src="http://4.bp.blogspot.com/-sIqiin6H19g/U_eOJdBFxMI/AAAAAAAABdw/fHxOBk-ZG-4/s1600/deportv%2Ben%2Bvivo%2Bonline%2Bon%2Bline.png" Style="display:none"/>
<div style="display:none">Ver Depor TV en vivo online Depor TV noticias, futbol para todos y toda la ... Acceso no autorizado desde esta página. Toggle navigation DeporTV.</div>
		  
		  </div>
            <table width="309" height="37" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><table width="151" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:4px">
                  <tr>
                    <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="tcpista-posiciones.php">CAMPEONATO</a></li></td>
                  </tr>
                </table></td>
                <td><table width="151" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:4px">
                  <tr>
                    <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="tcpista-calendario.php">CARRERAS</a></li></td>
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
              <div id="TT_tynArBYBtlp9nLpKLfr2IlI2otnKM4n2rt1Y1cyoKkD"><a href="http://www.tutiempo.net/argentina/santa-rosa.html">El Tiempo en Santa Rosa</a></div>
            <script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_tynArBYBtlp9nLpKLfr2IlI2otnKM4n2rt1Y1cyoKkD"></script></td>
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
        <td width="508" valign="top"><li class="cabezanoticias"><span class="textoenvivo" >VIDEOS</span></li>
              <table width="508" border="0" cellpadding="5" cellspacing="0" bgcolor="#F4F4F4">
                <tr>
                  <td valign="top"><table width="498" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><iframe src="http://www.youtube.com/embed/Hsvd1XDbNUI" name="contenedor" width="498" height="280" frameborder="0" id="contenedor" allowfullscreen="allowfullscreen"></iframe></td>
                      </tr>
                      <tr>
                        <td valign="top"><table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td></td>
                            </tr>
                          </table><div id="actualizacion_videos">
                              <?php
$cadena=file_get_contents('tcpista-fecha2-videos.php');
echo $cadena;
?>
                            </div><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="30"><hr size="2" noshade="noshade" /></td>
                                <td nowrap="nowrap" width="38%"><div id="despliegue-videos" name="despliegue-videos" class="desplegado"><a href="javascript:;" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF0000; font-weight:bold" onclick="desplegar_videos()" >DESPLEGAR MÁS VIDEOS <img src="mas multimedia.png" width="18" border="0" height="18" /></a></div>
                                    <div id="contraccion-videos" name="contraccion-videos" class="contraido"><a href="javascript:;" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF0000; font-weight:bold" onclick="contraer_videos()" >REDUCIR EL MENÚ <img src="menos multimedia.png" width="18" border="0" height="18" /></a></div></td>
                                <td width="30"><hr size="2" noshade="noshade" /></td>
                              </tr>
                            </table>
                        </td>
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
                <td valign="top" style="padding:5px;"><table width="498" height="170" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="50%" height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="../tcpista-fecha14-final.jpg" width="233" height="136" border="0"/><br />
                                <div class="playfoto"><a href="../tcpista-fecha14-final.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="../tcpista-fecha14-final.php">La última del TC Pista en La Pampa </a></td>
                      </tr>
                    </table></td>
                    <td width="50%" height="170" valign="top">&nbsp;</td>
                  </tr>
                </table>
                  <table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          <table width="508" height="8" border="0" cellpadding="0" cellspacing="0" background="pie noticias.png">
                <tr>
                  <td></td>
                </tr>
            </table></td>
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
                                <td width="208" height="27"><span class="Estilo125">Juan José Ebarlin (Previa) </span></td>
                                <td width="49"><div align="right" class="Verdanamarron">
                                    <table width="49" height="23" border="0" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="49"><table width="46" height="19" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFF00">
                                            <tr>
                                              <td><div align="center" class="Estilo126">5</div></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                    </table>
                                </div></td>
                              </tr>
                              <tr>
                                <td height="111" colspan="2" valign="top"><table width="58" border="0" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td><img src="ebarlin.jpg" width="120" height="147" /></td>
                                    </tr>
                                  </table>
                                    <span class="Verdanachico">&quot;Venimos de tener un fin de semana de menor a mayor en Concordia y ahora viajamos a un circuito en el que anduvimos muy bien el año pasado, así que tengo confianza de que vamos a funcionar bien en La Pampa&quot;</span><span class="Verdanachico"></span></td>
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
              <table width="265" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                      <tr>
                        <td valign="top"><table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td></td>
                            </tr>
                          </table>
                            <div style="padding:4px"> <a href="tc-fecha2.php"><img src="boton fecha tc.png" width="187" height="34" border="0" /></a><br />
                                <a href="fe-fcha6.php"><img src="boton fecha fe.png" width="187" height="34" border="0" /></a><br />
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