<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TC en Viedma | Tiempos en vivo, Fotos, Videos, Entrevistas</title>
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
	background-image: url(fondotc.jpg);
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
.Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; }
-->
</style></head>

<body onload="MM_preloadImages('camara.png','boton fecha tcp activo.png','boton fecha wrc activo.png','up_noticias.jpg','down_noticias.jpg')">
<?php
$carga=file_get_contents('cabeza web.html');
echo $carga;
?>
<table width="990" height="168" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="501"><div class="titlecategoria">Viedma<br />
    </div>
        <div class="subtitle">FECHA 1 | TURISMO CARRETERA </div></td>
    <td width="489"><div align="right">
      <table width="238" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="circuito viedma.png" width="238" height="108" border="0" /></td>
        </tr>
        <tr>
          <td><div style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center"><span style="font-weight:bold">RÉCORD:</span> M. Rossi (1'30&quot;000) <br />
                    <span style="font-weight:bold">EXTENSI&Oacute;N:</span> 4118 metros </div></td>
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
$cadena=file_get_contents('tc-fecha1-resultados.php');
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
            $("#actualizacion").load("onlineTCf1.php");
        }, 100000);
    });
</script>

<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#resultados").load("tc-fecha1-resultados.php");
        }, 60000);
    });
</script> 

<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#actualizacion_videos").load("tc-fecha1-videos.php");
        }, 60000);
    });
</script> 
<script type="text/javascript">
$(document).ready(function(){
        setInterval(function() {
            $("#noticias").load("tc-fecha1-noticias.php");
        }, 60000);
    });
</script> 
<div style="margin-left:5px;">
      <li class="cabezarelatos"><span class="textoenvivo">NOTICIAS</span></li>
    
      
      <table width="314" height="6" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                      <tr>
                        <td valign="top"><table width="314" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                              <tr>
                                <td valign="top"><a href="javascript:;"><img src="up_noticias_transparente.jpg" width="314" height="22" border="0" id="up" onmouseover="MM_swapImage('up','','up_noticias.jpg',1)" onmouseout="MM_swapImgRestore()" /></a>
                                    <div id="noticias" class="nota_fecha">
                                      <?php
$cadena=file_get_contents('tc-fecha1-noticias.php');
echo $cadena;
?>
                                    </div>
                                  <a href="javascript:;"><img src="down_noticias_transparente.jpg" width="314" height="22" border="0" id="down" onmouseover="MM_swapImage('down','','down_noticias.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
                              </tr>
                            </table>
                          <table width="314" height="6" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                            <tr>
                              <td><table width="309" height="37" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td><table width="151" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:4px">
                                      <tr>
                                        <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="tc-posiciones.php">CAMPEONATO</a></li></td>
                                      </tr>
                                  </table></td>
                                  <td><table width="151" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:4px">
                                      <tr>
                                        <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="tc-calendario.php">CARRERAS</a></li></td>
                                      </tr>
                                  </table></td>
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
    <td> <!-- www.TuTiempo.net - Ancho:312px - Alto:120px -->
<div id="TT_vBnArBdBYtl9n1DKLAwEz1D1jtaKL44lbdEYEci5Kkz"><a href="http://www.tutiempo.net/viedma.html">Viedma</a></div>
<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_vBnArBdBYtl9n1DKLAwEz1D1jtaKL44lbdEYEci5Kkz"></script></td>
  </tr>
</table>
    
</td>
  </tr>
</table>
 <table height="8" width="990" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><a name="videos" id="videos"></a></td>
  </tr>
</table>
<table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="828" valign="top"><table width="828" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="508" valign="top"><li class="cabezanoticias"><span class="textoenvivo" >VIDEOS</span></li>         
            <table width="508" border="0" cellpadding="5" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td valign="top"><table width="498" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><iframe src="http://www.youtube.com/embed/n1S30KgWTig" name="contenedor" width="498" height="280" frameborder="0" id="contenedor" allowfullscreen="allowfullscreen"></iframe></td>
                  </tr>
                  <tr>
                    <td valign="top"><table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td></td>
                      </tr>
                    </table><div id="actualizacion_videos">
                              <?php
$cadena=file_get_contents('tc-fecha1-videos.php');
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
            <li class="cabezanoticias"><span class="textoenvivo" >FOTOS</span></li>
            <table width="508" border="0" cellpadding="5" cellspacing="0" bgcolor="#F4F4F4">
            <tr>
              <td valign="top"><div id="mas_fotos" class="fotos">
                <table width="498" height="170" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="50%" height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="tc-fecha1-domingo.jpg" width="233" height="136" border="0"/><br />
                                <div class="playfoto"><a href="tc-fecha1-domingo.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="tc-fecha1-domingo.php">Actividad del domingo </a></td>
                      </tr>
                    </table></td>
                    <td width="50%" height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="publico-viedma.jpg" width="233" height="136" border="0"/><br />
                                <div class="playfoto"><a href="publico-viedma.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="publico-viedma.php">Los fanáticos en Viedma </a></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="498" height="170" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="50%" height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="tc-fecha1-sabado.jpg" width="233" height="136" border="0"/><br />
                                <div class="playfoto"><a href="tc-fecha1-sabado.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="tc-fecha1-sabado.php">Actividad del viernes y sábado </a></td>
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
            </table></td>
          <td width="320" valign="top"><table width="314" border="0" align="right" cellpadding="0" cellspacing="0">
            <tr>
              <td><li class="cabezacronicas"><span class="textoenvivo">DECLARACIONES</span></li>         
                <table width="100%" height="6" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                  <tr>
                    <td></td>
                  </tr>
                </table>
                
				
                
                <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                  <tr>
                    <td valign="top"><table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td></td>
                        </tr>
                      </table>
                        <table width="97%" height="160" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:4px;">
                          <tr>
                            <td width="208" height="27"><span class="Estilo125">Leonel Pernía (Ganador) </span></td>
                            <td width="49"><div align="right" class="Verdanamarron">
                                <table width="49" height="23" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="49"><table width="46" height="19" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFF00">
                                        <tr>
                                          <td><div align="center" class="Estilo126">9</div></td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                </table>
                            </div></td>
                          </tr>
                          <tr>
                            <td height="111" colspan="2" valign="top"><table width="58" border="0" align="right" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td><img src="pernia.jpg" width="120" height="158" /></td>
                                </tr>
                              </table>
                                <span class="Estilo2">&quot;Muy feliz, otro triunfo consecutivo ahora en el TC. Son cosas muy difíciles de conseguir por más que uno trabaje todos los días. El equipo laburó sin dormir para llegar a armar el auto para esta carrera. La última vuelta realmente lo más difícil es quedarse concentrado porque se acuerdan de todos los que hacen fuerza&quot;</span><span class="Estilo2"></span></td>
                          </tr>
                        </table>
                      <table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td></td>
                          </tr>
                      </table></td>
                  </tr>
                </table>
                <table width="314" height="6" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td></td>
              </tr>
            </table>
            <li class="otrascategorias"><span class="textoenvivo">OTRAS COMPETENCIAS </span></li>
			<table width="314" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td valign="top"><table width="100%" height="6" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td></td>
                  </tr>
                </table>
                  <div style="padding:4px"> 
                      <a href="tcpista-fecha1.php"><img src="boton fecha tc pista.png" width="187" height="34" border="0" /></a><br />
                     <a href="nascar-fecha1.php"><img src="boton fecha nascar.png" width="187" height="34" border="0" /></a></div></td>
              </tr>
            </table>
			<table width="314" height="8" border="0" cellpadding="0" cellspacing="0" background="pie relatos.png">
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
          </table></td></tr>
      </table>
    </td>
    <td width="162" valign="top"><table width="156" height="94" border="0" align="right" cellpadding="0" cellspacing="0" style="padding:3px;">
      <tr>
        <td height="8" background="cabeza publicidad fecha.png"></td>
      </tr><tr>
        <td height="600" valign="top" bgcolor="#F4F4F4"><div align="center">
          <p><span style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-size:11px;">PUBLICIDAD</span>
            <br />
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
<script type="text/javascript">
      $(document).ready( function() {
        $("#up").click( function() {
          var pos = $("#noticias").scrollTop()-68;
          $("#noticias").scrollTop(pos);
        });
        $("#down").click( function() {
          var pos = $("#noticias").scrollTop()+68;
          $("#noticias").scrollTop(pos);
        });
      });
    </script>
        </div></td>
      </tr>
	  <tr>
        <td height="8" background="pie publicidad fecha.png"></td>
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
