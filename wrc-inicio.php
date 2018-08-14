<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WRC | Tiempos en vivo, Fotos, Videos, Entrevistas, Novedades</title>
<meta http-equiv="Pragma" content="no-cache" />
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/lightbox-2.6.min.js"></script>
<script type="text/javascript" src="textanimation.js"></script>
<script type="text/javascript" src="indexanimation.js"></script>
<link href="../css/lightbox2.css" rel="stylesheet" />
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
<link rel='stylesheet' id='rs-settings-css'  href='stylehead.css' type='text/css' media='all' />
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
.Estilo4 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.Estilo8{font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; color:#000000 }
.Estilo6{font-size: 12px; font-family: Arial, Helvetica, sans-serif; color:#666666; }
.Estilo8:hover {text-decoration:underline}
.noticias1 {	height: 311px;
	width: 273px;
	overflow: auto;
}
body {
	background-color: #000000;
	background-image: url(fondowrc.jpg);
	background-repeat: no-repeat;
	background-position:top;
}
-->
</style></head>

<body onload="MM_preloadImages('camara.png')">

<?php
$carga=file_get_contents('cabeza web.html');
echo $carga;
?>
<?php
$carga=file_get_contents('cabezawrc.html');
echo $carga;
?>
<table width="990" height="91" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="571" valign="top"><div class="cabezaultima"><span class="textoenvivo">LA &Uacute;LTIMA COMPETENCIA </span></div> <table width="571" height="173" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr>
    <td valign="top"><table width="571" height="180" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="301" width="571" valign="bottom">
		
		<a href="wrc-fecha11.php">
		<div class="fechaenvivo">FECHA 11 </div>	
		<div class="categoriaenvivo">REVIVI<br />
                  España</div>
        <div align="center"><img src="wrc-inicio-1.jpg?8384093" width="556" height="293" border="0" style="border:#999999 solid 1px"/></div>
</a>	</td>
        
      </tr>
      <tr>
        <td height="10" valign="top"> <ul class="menuenvivo">
						  <li><a href="wrc-fecha11.php">Resultados</a></li>
						  <li><a class="alternativo1" href="wrc-fecha11-fotos.php">Fotos</a></li>
						  <li><a class="alternativo2" href="wrc-fecha11.php#videos">Videos</a></li>
						  <li><a class="alternativo3" href="wrc-posiciones.php">Campeonato</a></li>
						  <li><a class="alternativo4" style="border-right:1px solid #999999;" href="wrc-fecha11.php">Más</a></li>
						  </ul>			    </td>
      </tr>
    </table></td>
  </tr>
</table>
      <table width="571" height="8" border="0" cellpadding="0" cellspacing="0" background="pie ultima competencia.png">
        <tr>
          <td></td>
        </tr>
    </table></td>
    <td width="419" valign="top">
      <div style="margin-left:10px;"><li class="cabezanews"><a class="textoenvivovinculos" href="wrc-noticias.php">NOTICIAS</a></li>
    
      <table width="409" height="333" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td valign="top"><div class="news"><span class="noticias1">
            <?php
$cadena=file_get_contents('WRC.php');
echo $cadena;
?>
          </span></div>
          <table style="margin-top:4px; margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="wrc-noticias.php">MAS NOTICIAS</a></li></td>
                </tr>
            </table></td>
        </tr>
      </table>
      <table width="409" height="8" border="0" cellpadding="0" cellspacing="0" background="pie news.png">
        <tr>
          <td></td>
        </tr>
      </table></div>
    
</td>
  </tr>
</table>
 <table height="8" width="990" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="777" valign="top"><table width="777" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="508">
            <li class="cabezanoticias"><a class="textoenvivovinculos" href="wrc-fotos.php">GALER&Iacute;AS</a></li>         
            <table width="508" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td valign="top" style="padding:5px;"><table width="498" height="370" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><a href="wrc-fecha3-jueves.php"><img style="border:#999999 solid 1px" src="wrc-fecha3-jueves.jpg" width="233" height="136" border="0"/></a><br />
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="wrc-fecha3-jueves.php">Rally de México - Jueves </a></td>
                      </tr>
                    </table>
                    </td>
                    <td height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="wrc-fecha14-domingo.jpg" width="233" height="136" border="0"/><br />
                                  <div class="playfoto"><a href="wrc-fecha14-domingo.php"><img src="camarainactivo.png" name="camara2" width="233" height="136" border="0" id="camara2"/></a></div>
                          </div></td>
                        </tr>
                        <tr>
                          <td height="27"><a id="textofoto2" class="imagenfoto_btn" href="wrc-fecha14-domingo.php">Rally de Monte Carlo </a></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td width="249" height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="/2015/wrc-fecha13-domingo.jpg" width="233" height="136" border="0"/><br />
                                  <div class="playfoto"><a href="/2015/wrc-fecha13-domingo.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                          </div></td>
                        </tr>
                        <tr>
                          <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="/2015/wrc-fecha13-domingo.php">WRC en Gales </a></td>
                        </tr>
                      </table></td>
                    <td width="249" height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="/2015/wrc-fecha11-domingo.jpg" width="233" height="136" border="0"/><br />
                                <div class="playfoto"><a href="/2015/wrc-fecha11-domingo.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="/2015/wrc-fecha11-domingo.php">Rally de Francia - Córcega </a></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                  <table style="margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                      <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasfotos" href="tcpista-fotos.php">MAS FOTOS </a></li></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
            <table width="508" height="8" border="0" cellpadding="0" cellspacing="0" background="pie noticias.png">
              <tr>
                <td></td>
              </tr>
            </table></td>
          <td width="269" valign="top"><table width="265" border="0" align="right" cellpadding="0" cellspacing="0">
            <tr>
              <td><li class="cabezafechas"><a class="textoenvivovinculos" href="wrc-posiciones.php">CAMPEONATO</a></li>         
            <table width="265" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td valign="top"><table width="265" height="6" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td></td>
                  </tr>
                </table>
                <table width="257" height="45" border="0" align="center" cellpadding="0" cellspacing="0" class="tablacalendario">
  <tr>
    <td width="13%" height="15">1.</td>
    <td width="61%" height="15"><img src="banderita de francia.JPG" width="20" height="13" />  Sebastien Ogier </td>
    <td width="26%" height="15"><div align="center">222</div></td>
  </tr>
  <tr>
    <td height="15">2.</td>
    <td height="15"><img src="banderita noruega.png" width="20" height="15" /> Andreas Mikkelsen </td>
    <td height="15"><div align="center">127</div></td>
  </tr>
  <tr>
    <td height="15">3.</td>
    <td height="15"><img src="banderita belgica.JPG" width="20" height="13" /> Thierry Neuville </td>
    <td height="15"><div align="center">127</div></td>
  </tr>
</table>
                  <table width="265" height="6" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td></td>
                    </tr>
                  </table>
                  <table style="margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                      <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasfotos" href="wrc-posiciones.php">COMPLETO </a></li></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
            <table width="265" height="6" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td></td>
              </tr>
            </table>
            <li class="cabezacampeonato"><a class="textoenvivovinculos" href="wrc-calendario.php">CARRERAS</a></li>
			<table width="265" height="240" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td valign="top"><table width="265" height="6" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td></td>
                  </tr>
                </table>
                  <table width="257" height="234" class="tablafechas" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="18"><div align="center"><span class="Estilo4">24.1</span></div></td>
                    <td width="73%" height="18"><a class="Estilo8" href="wrc-fecha1.php">MONTE CARLO </a></td>
                    <td width="11%" height="18"><div align="center" class="Estilo4"><a href="wrc-fecha1.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">14.2</span></div></td>
                    <td height="18"><a class="Estilo8" href="wrc-fecha2.php">SUECIA</a></td>
                    <td height="18"><div align="center" class="Estilo4"><a href="wrc-fecha2.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">06.3</span></div></td>
                    <td height="18"><a class="Estilo8" href="wrc-fecha3.php">MÉXICO</a></td>
                    <td height="18"><div align="center" class="Estilo4"><a href="wrc-fecha3.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">24.4</span></div></td>
                    <td height="18"><a class="Estilo8" href="wrc-fecha4.php">ARGENTINA</a></td>
                    <td height="18"><div align="center" class="Estilo4"><a href="wrc-fecha4.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">22.5</span></div></td>
                    <td height="18"><a class="Estilo8" href="wrc-fecha5.php">PORTUGAL</a></td>
                    <td height="18"><div align="center" class="Estilo4"><a href="wrc-fecha5.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">12.6</span></div></td>
                    <td height="18"><a class="Estilo8" href="wrc-fecha6.php">ITALIA</a></td>
                    <td height="18"><div align="center" class="Estilo4"><a href="wrc-fecha6.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                  </tr>
                  
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">03.7</span></div></td>
                    <td height="18"><span class="Estilo6">Polonia</span></td>
                    <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">31.7</span></div></td>
                    <td height="18"><a class="Estilo8" href="wrc-fecha8.php">FINLANDIA</a></td>
                    <td height="18"><div align="center" class="Estilo4"><a href="wrc-fecha8.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">21.8</span></div></td>
                    <td height="18"><a class="Estilo8" href="wrc-fecha9.php">ALEMANIA</a></td>
                    <td height="18"><div align="center" class="Estilo4"><a href="wrc-fecha9.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">02.10</span></div></td>
                    <td height="18"><a class="Estilo8" href="wrc-fecha10.php">FRANCIA</a></td>
                    <td height="18"><div align="center" class="Estilo4"><a href="wrc-fecha10.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">16.10</span></div></td>
                    <td height="18"><a class="Estilo8" href="wrc-fecha11.php">ESPAÑA</a></td>
                    <td height="18"><div align="center" class="Estilo4"><a href="wrc-fecha11.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">30.10</span></div></td>
                    <td height="18"><span class="Estilo6">Gales</span></td>
                    <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                  </tr>
                  <tr>
                    <td height="18"><div align="center"><span class="Estilo4">20.11</span></div></td>
                    <td height="18"><span class="Estilo6">Australia</span></td>
                    <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                  </tr>
                </table></td>
              </tr>
            </table>
			<table width="265" height="8" border="0" cellpadding="0" cellspacing="0" background="pie fechas.png">
              <tr>
                <td></td>
              </tr>
            </table></td>
            </tr>
          </table></td></tr>
      </table>
      <table height="7" width="773" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="775" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="775"><li class="cabezavideos"><a class="textoenvivovinculos" href="wrc-videos.php">VIDEOS</a></li>
              <table width="775" height="312" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                <tr>
                  <td width="533" height="312" align="center" valign="top" style="padding:10px;"><table width="508" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><iframe src="http://www.youtube.com/embed/lra__-v4ol0" name="contenedor" width="520" height="292" frameborder="0" id="contenedor" allowfullscreen="allowfullscreen"></iframe></td>
                      </tr>
                      <tr>
                        <td>
                            
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width="242"><div style="height:292px; overflow:auto; margin-top:10px">
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/lra__-v4ol0/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/lra__-v4ol0?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/lra__-v4ol0?rel=0&amp;autoplay=1">Rally  España - Resumen </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/oOO18z02RD4/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/oOO18z02RD4?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/oOO18z02RD4?rel=0&amp;autoplay=1">Rally  Francia - Resumen </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/u_UoI60TbV8/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/u_UoI60TbV8?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/u_UoI60TbV8?rel=0&amp;autoplay=1">Rally  Australia - Resumen </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/QPbyTR162d0/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/QPbyTR162d0?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/QPbyTR162d0?rel=0&amp;autoplay=1">Rally  Alemania - Resumen </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/Qyl6fXWK5fs/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/Qyl6fXWK5fs?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/Qyl6fXWK5fs?rel=0&amp;autoplay=1">Rally  Finlandia - Resumen </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/NzyhB_bqbQI/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/NzyhB_bqbQI?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/NzyhB_bqbQI?rel=0&amp;autoplay=1">Resumen Rally de Polonia </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/m7F30CSt7EE/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/m7F30CSt7EE?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/m7F30CSt7EE?rel=0&amp;autoplay=1">Resumen Rally de Italia  </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/ZW-7xyCviog/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/ZW-7xyCviog?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/ZW-7xyCviog?rel=0&amp;autoplay=1">Etapa 2 - Italia </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/o3y_1zzEXig/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/o3y_1zzEXig?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/o3y_1zzEXig?rel=0&amp;autoplay=1">Etapa 1 - Italia </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/wJQpFSgD83s/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/wJQpFSgD83s?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/wJQpFSgD83s?rel=0&amp;autoplay=1">Accidente con 6 heridos </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/oLlkEI86_-8/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/oLlkEI86_-8?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/oLlkEI86_-8?rel=0&amp;autoplay=1">Etapa 1 - Rally Argentina </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/zvKlYbbrexQ/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/zvKlYbbrexQ?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/zvKlYbbrexQ?rel=0&amp;autoplay=1">Etapa 2 - Rally México </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/49rTRmTW2sc/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/49rTRmTW2sc?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/49rTRmTW2sc?rel=0&amp;autoplay=1">Tanak al agua - Rally México </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/I6xU5gDu4Bw/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/I6xU5gDu4Bw?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/I6xU5gDu4Bw?rel=0&amp;autoplay=1">Shakedown - México </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/-hBR4jUbFU0/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/-hBR4jUbFU0?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/-hBR4jUbFU0?rel=0&amp;autoplay=1">Resumen  - Rally Suecia </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/ecO7k1kx4dQ/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/ecO7k1kx4dQ?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/ecO7k1kx4dQ?rel=0&amp;autoplay=1">Etapa 2  - Rally Suecia </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/lL2Do9-5KjU/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/lL2Do9-5KjU?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/lL2Do9-5KjU?rel=0&amp;autoplay=1">Etapa 1  - Rally Suecia </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/cwcjJ5QqrRw/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/cwcjJ5QqrRw?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/cwcjJ5QqrRw?rel=0&amp;autoplay=1">Shakedown - Rally Suecia </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/lxk-a8RM2JU/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/lxk-a8RM2JU?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/lxk-a8RM2JU?rel=0&amp;autoplay=1">Resumen Rally de Gales </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/yFMChjz5Myk/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/yFMChjz5Myk?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/yFMChjz5Myk?rel=0&amp;autoplay=1">Etapa 2  - Gales </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/DfW6E6po2Pw/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/DfW6E6po2Pw?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/DfW6E6po2Pw?rel=0&amp;autoplay=1">Etapa 1  - Gales </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/ERZ47tNZ_j8/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/ERZ47tNZ_j8?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/ERZ47tNZ_j8?rel=0&amp;autoplay=1">Shakedown - Gales </a></td>
                      </tr>
                    </table>
                    </div></td>
                </tr>
            </table>
            <table width="775" height="8" border="0" cellpadding="0" cellspacing="0" background="pie carreras en vivo.png">
                <tr>
                  <td></td>
                </tr>
          </table></td>
        </tr>
      </table></td>
    <td width="213" valign="top"><table width="205" height="94" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:3px;">
      <tr>
        <td height="8" background="cabeza publicidad.png"></td>
      </tr><tr>
        <td height="917" valign="top" bgcolor="#F4F4F4"><div align="center">
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
          <p>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="141" height="190">
              <param name="movie" value="publicidad dakar columna.swf" />
              <param name="quality" value="high" />
              <embed src="publicidad dakar columna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="141" height="190"></embed>
            </object></p>
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
$carga=file_get_contents('pie web.html');
echo $carga;
?>
</body>
</html>