
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TC Pista en Trelew | Tiempos en vivo, Fotos, Videos, Entrevistas</title>
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
    <td width="654"><div class="titlecategoria">Trelew <br />
    </div>
    <div class="subtitle">FECHA 14 | TC PISTA </div></td>
    <td width="336"><div align="right">
      <table width="238" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="circuito trelew.png" width="238" height="108" border="0" /></td>
        </tr>
        <tr>
          <td><div style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center"><span style="font-weight:bold">RÉCORD:</span> J. Urcera (1'20&quot;064)  <br />
                    <span style="font-weight:bold">EXTENSI&Oacute;N:</span> 3916 metros </div></td>
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
$cadena=file_get_contents('tcpista-fecha14-resultados.php');
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
	<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#actualizacion").load("onlineTCPf14.php");
        }, 100000);
    });
</script>

<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#resultados").load("tcpista-fecha14-resultados.php");
        }, 60000);
    });
</script> 

<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#actualizacion_videos").load("tcpista-fecha14-videos.php");
        }, 60000);
    });
</script> 
<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#noticias").load("tcpista-fecha14-noticias.php");
        }, 60000);
    });
</script> 
     

<div style="margin-left:5px;">
      <li class="cabezarelatos"><span class="textoenvivo">COMENTARIOS</span></li>
    
      <table width="314" height="333" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td valign="top">
		 
<div id="tv1" class="tv1-change">
<div id="actualizacion" class="news-tc"><?php
$cadena=file_get_contents('onlineTCPf14.php');
echo $cadena;
?>
          </div></div>
		  <div align="center" id="tv2" class="tv2-change">
		  
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
              <div id="TT_thjgLBdhtfj9dTvA1frlm23FmtnALEd2rdEd1ZC5aEz">Pronóstico de Tutiempo.net</div>
            <script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_thjgLBdhtfj9dTvA1frlm23FmtnALEd2rdEd1ZC5aEz"></script></td>
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
        <li class="cabezanoticias"><span class="textoenvivo" >VIDEOS</span></li>         
            <table width="508" border="0" cellpadding="5" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td valign="top"><table width="498" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><iframe src="http://www.youtube.com/embed/dKnsDp6bapY" name="contenedor" width="498" height="280" frameborder="0" id="contenedor" allowfullscreen="allowfullscreen"></iframe></td>
                    </tr>
                    <tr>
                      <td valign="top"><table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td></td>
                          </tr>
                        </table>
                          <div id="actualizacion_videos">
                            <?php
$cadena=file_get_contents('tcpista-fecha14-videos.php');
echo $cadena;
?>
                          </div>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="30"><hr size="2" noshade="noshade" /></td>
                              <td nowrap="nowrap" width="38%"><div id="despliegue-videos" name="despliegue-videos" class="desplegado"><a href="javascript:;" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF0000; font-weight:bold" onclick="desplegar_videos()" >DESPLEGAR MÁS VIDEOS <img src="mas multimedia.png" width="18" border="0" height="18" /></a></div>
                                  <div id="contraccion-videos" name="contraccion-videos" class="contraido"><a href="javascript:;" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF0000; font-weight:bold" onclick="contraer_videos()" >REDUCIR EL MENÚ <img src="menos multimedia.png" width="18" border="0" height="18" /></a></div></td>
                              <td width="30"><hr size="2" noshade="noshade" /></td>
                            </tr>
                        </table></td>
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
                                <td width="222" height="27"><span class="Estilo125">Tomás Urretavizcaya (Previa)</span></td>
                                <td width="78"><div align="right" class="Verdanamarron">
                                    <table width="49" height="23" border="0" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="49"><table width="46" height="19" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFF00">
                                            <tr>
                                              <td><div align="center" class="Estilo126">51</div></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                    </table>
                                </div></td>
                              </tr>
                              <tr>
                                <td height="111" colspan="2" valign="top"><table width="58" border="0" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td><img src="urretavizcaya.jpg" width="120" height="154" /></td>
                                    </tr>
                                  </table>
                                    <span class="Verdanachico">&quot;A pesar de que tuvimos algunos traspiés que fueron duros, vamos muy motivados a Trelew, sabiendo que la victoria en las últimas dos carreras se nos escaparon por nada, por detalles mínimos. Independientemente de ello estamos pasando por un gran momento con el auto y el equipo, y por eso vamos a ir por lo que se nos escapó en las carreras anteriores. Hay que ganar para llegar con chances, y eso trataremos de hacer. Es la única opcion que me queda si queremos luchar en la última el campeonato, ya que necesitamos descontar fuerte a la punta para llegar con posibilidades reales. Es muy difícil, pero a la vez también es difícil pasar por el buen momento que estamos viviendo a nivel competitivo, y no lo vamos a dejar pasar&quot;</span><span class="Verdanachico"></span></td>
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
                            <div style="padding:4px"> <a href="tc-fecha14.php"><img src="boton fecha tc.png" width="187" height="34" border="0" /></a><br />
                                <a href="tc2000-fecha11.php"><img src="boton fecha tc2000.png" width="187" height="34" border="0" /></a><br />
                                <a href="aptp-fecha10.php"><img src="boton fecha aptp.png" width="187" height="34" border="0" /></a><br />
                                <a href="f1-fecha20.php"><img src="boton fecha f1.png" width="187" height="34" border="0" /></a><br />
                                <a href="motogp-fecha18.php"><img src="boton fecha motogp.png" width="187" height="34" border="0" /></a><br />
                                <a href="/2017/fe-fecha2.php"><img src="boton fecha fe.png" width="187" height="34" border="0" /></a><br />
                                <a href="nascar-fecha35.php"><img src="boton fecha nascar.png" width="187" height="34" border="0" /></a><br />
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
