<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TC La Revista | Tiempos en vivo, Fotos, Videos, Entrevistas, Novedades</title>
<meta http-equiv="Pragma" content="no-cache" />
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/lightbox-2.6.min.js"></script>
<script type="text/javascript" src="textanimation.js"></script>
<script type="text/javascript" src="indexanimation.js"></script>
<link rel='stylesheet' id='rs-settings-css'  href='stylehead.css' type='text/css' media='all' />
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
	background-image: url(fondotc.jpg);
	background-repeat: no-repeat;
	background-position:top;
}
-->
</style>
</head>


<body>
<?php
$carga=file_get_contents('cabeza web.html');
echo $carga;
?>
<?php
$carga=file_get_contents('cabezatc.html');
echo $carga;
?>
<table width="990" height="91" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="571" valign="top"><div class="cabezaultima"><span class="textoenvivo">LA ÚLTIMA COMPETENCIA   </span></div>
        <table width="571" height="173" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
          <tr>
            <td valign="top"><table width="571" height="180" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="301" width="571" valign="bottom">
				  
				  <a href="tc-fecha4.php">	
				   <div class="fechaenvivo">FECHA 4 </div>
                   <div class="categoriaenvivo"> REVIVI <br />
                  Concordia</div>
			       <div align="center"><img src="tc-inicio-1.jpg?23920" width="556" height="291" border="0" style="border:#999999 solid 1px"/></div>
				  </a> </td>
                </tr>
                <tr>
                  <td height="10" valign="top">
				  <ul class="menuenvivo">
						  <li><a href="tc-fecha4.php">Resultados</a></li>
						  <li><a class="alternativo1" href="tc-fecha4.php#fotos">Fotos</a></li>
						  <li><a class="alternativo2" href="tc-fecha4.php#videos">Videos</a></li>
						  <li><a class="alternativo3" href="tc-posiciones.php">Campeonato</a></li>
						  <li><a class="alternativo4" style="border-right:1px solid #999999;" href="tc-fecha4.php">Más</a></li>
				    </ul>	</td>
                </tr>
            </table></td>
          </tr>
        </table>
      <table width="571" height="8" border="0" cellpadding="0" cellspacing="0" background="pie ultima competencia.png">
          <tr>
            <td></td>
          </tr>
      </table></td>
    <td width="419" valign="top"><div style="margin-left:10px;">
      <li class="cabezanews"><a class="textoenvivovinculos" href="tc-noticias.php">NOTICIAS</a></li>
      <table width="409" height="333" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td valign="top"><div class="news"><span class="noticias1">
            <?php
$cadena=file_get_contents('TC.php');
echo $cadena;
?>
          </span></div>
                <table style="margin-top:4px; margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                  <tr>
                    <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="tc-noticias.php">MAS NOTICIAS</a></li></td>
                  </tr>
              </table></td>
        </tr>
      </table>
      <table width="409" height="8" border="0" cellpadding="0" cellspacing="0" background="pie news.png">
        <tr>
          <td></td>
        </tr>
      </table>
    </div></td>
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
        <td width="490"><li class="cabezanoticias"><a class="textoenvivovinculos" href="tc-fotos.php">GALER&Iacute;AS</a></li>
              <table width="490" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                <tr>
                  <td valign="top" style="padding:5px;"><table width="498" height="402" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="249" height="161" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="tc-fecha4-domingo.jpg" width="233" height="136" border="0"/><br />
                                  <div class="playfoto"><a href="tc-fecha4-domingo.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                          </div></td>
                        </tr>
                        <tr>
                          <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="tc-fecha4-domingo.php">Concordia - Domingo </a></td>
                        </tr>
                      </table>
                      </td>
                      <td width="249" height="161" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="publico-concordia.jpg" width="233" height="136" border="0"/><br />
                                  <div class="playfoto"><a href="publico-concordia.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                          </div></td>
                        </tr>
                        <tr>
                          <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="publico-concordia.php">Los fanáticos del TC en Concordia </a></td>
                        </tr>
                      </table>
                        </td>
                    </tr>
                      <tr>
                        <td height="161" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="tc-fecha4-viernes.jpg" width="233" height="136" border="0"/><br />
                                      <div class="playfoto"><a href="tc-fecha4-viernes.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                              </div></td>
                            </tr>
                            <tr>
                              <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="tc-fecha4-viernes.php">Concordia - Jueves y viernes </a></td>
                            </tr>
                          </table></td>
                        <td height="161" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="tc-fecha3-domingo.jpg" width="233" height="136" border="0"/><br />
                                    <div class="playfoto"><a href="tc-fecha3-domingo.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                            </div></td>
                          </tr>
                          <tr>
                            <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="tc-fecha3-domingo.php">La Pampa - Domingo </a></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
                      <table style="margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                        <tr>
                          <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasfotos" href="tc-fotos.php">MAS FOTOS </a></li></td>
                        </tr>
                    </table>
                    <a name="videos" id="videos"></a></td>
                </tr>
            </table>
          <table width="508" height="8" border="0" cellpadding="0" cellspacing="0" background="pie noticias.png">
                <tr>
                  <td></td>
                </tr>
          </table></td>
        <td width="269" valign="top"><table width="265" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td><li class="cabezafechas"><a class="textoenvivovinculos" href="tc-posiciones.php">CAMPEONATO </a></li>
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
                                <td width="61%" height="15"><img src="banderita argentina.JPG" width="20" height="13" /> Agustín Canapino </td>
                                <td width="26%" height="15"><div align="center">126</div></td>
                              </tr>
                              <tr>
                                <td height="15">2.</td>
                                <td height="15"><img src="banderita argentina.JPG" width="20" height="13" /> Guillermo Ortelli </td>
                                <td height="15"><div align="center">124</div></td>
                              </tr>
                              <tr>
                                <td height="15">3.</td>
                                <td height="15"><img src="banderita argentina.JPG" width="20" height="13" /> Facundo Ardusso </td>
                                <td height="15"><div align="center">112.5</div></td>
                              </tr>
                            </table>
                          <table width="265" height="6" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td></td>
                              </tr>
                          </table>
                          <table style="margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                              <tr>
                                <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasfotos" href="tc-posiciones.php">COMPLETO </a></li></td>
                              </tr>
                          </table></td>
                      </tr>
                    </table>
              <table width="265" height="6" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                      <tr>
                        <td></td>
                      </tr>
                  </table>
              <li class="cabezacampeonato"><a class="textoenvivovinculos" href="tc-calendario.php">CARRERAS</a></li>
              <table width="265" height="211" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                      <tr>
                        <td valign="top"><table width="265" height="6" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td></td>
                            </tr>
                          </table>
                            <table width="257" height="270" class="tablafechas" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="16%" height="18"><div align="center"><span class="Estilo4">21.2</span></div></td>
                                <td height="18"><a class="Estilo8" href="tc-fecha1.php">VIEDMA</a></td>
                                <td height="18"><div align="center" class="Estilo4"><a href="tc-fecha1.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">06.3</span></div></td>
                                <td height="18"><a class="Estilo8" href="tc-fecha2.php">NEUQUÉN</a></td>
                                <td height="18"><div align="center" class="Estilo4"><a href="tc-fecha2.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">27.3</span></div></td>
                                <td height="18"><a class="Estilo8" href="tc-fecha3.php">LA PAMPA </a></td>
                                <td height="18"><div align="center" class="Estilo4"><a href="tc-fecha3.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">17.4</span></div></td>
                                <td height="18"><a class="Estilo8" href="tc-fecha4.php">CONCORDIA</a></td>
                                <td height="18"><div align="center" class="Estilo4"><a href="tc-fecha4.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">01.5</span></div></td>
                                <td height="18"><span class="Estilo6">Olavarría</span></td>
                                <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">22.5</span></div></td>
                                <td height="18"><span class="Estilo6">Termas de Río Hondo </span></td>
                                <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">12.6</span></div></td>
                                <td height="18"><span class="Estilo6">Posadas</span></td>
                                <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">26.6</span></div></td>
                                <td height="18"><span class="Estilo6">Concepción del Uruguay </span></td>
                                <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">14.8</span></div></td>
                                <td height="18"><span class="Estilo6">Rafaela</span></td>
                                <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">28.8</span></div></td>
                                <td height="18"><span class="Estilo6">Paraná</span></td>
                                <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">11.9</span></div></td>
                                <td height="18"><span class="Estilo6">San Luis </span></td>
                                <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">02.10</span></div></td>
                                <td height="18"><span class="Estilo6">San Juan </span></td>
                                <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">30.10</span></div></td>
                                <td height="18"><span class="Estilo6">La Pampa </span></td>
                                <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">13.11</span></div></td>
                                <td height="18"><span class="Estilo6">Trelew</span></td>
                                <td height="18"><div align="center" class="Estilo4"><img src="play inactivo.png" width="18" height="18" /></div></td>
                              </tr>
                              <tr>
                                <td height="18"><div align="center"><span class="Estilo4">04.12</span></div></td>
                                <td height="18"><span class="Estilo6">La Plata (A confirmar) </span></td>
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
        </table></td>
      </tr>
    </table>
        <table height="7" width="773" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td></td>
          </tr>
        </table>
      <table width="777" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><li class="cabezavideos"><a class="textoenvivovinculos" href="tc-videos.php">VIDEOS</a></li>
                <table width="775" height="322" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                  <tr>
                    <td style="padding:10px;" width="520" align="center" valign="top"><table width="508" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><iframe src="http://www.youtube.com/embed/bHvv5qIET0s" name="contenedor" width="520" height="292" frameborder="0" id="contenedor" allowfullscreen="allowfullscreen"></iframe></td>
                        </tr>
                        <tr>
                          <td></td>
                        </tr>
                    </table></td>
                    <td width="242"><div style="height:292px; overflow:auto; margin-top:10px">
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/bHvv5qIET0s/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/bHvv5qIET0s?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/bHvv5qIET0s?rel=0&amp;autoplay=1">Berta - Actualidad de motores </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/Zcg3EwE8K7w/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/Zcg3EwE8K7w?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/Zcg3EwE8K7w?rel=0&amp;autoplay=1">¿Volver a las rutas? </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/rseIto1fmc4/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/rseIto1fmc4?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/rseIto1fmc4?rel=0&amp;autoplay=1">Callejero de Montevideo </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/wV7HFQ4d0yk/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/wV7HFQ4d0yk?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/wV7HFQ4d0yk?rel=0&amp;autoplay=1">Silva preocupado </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/8q8bzweSW8k/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/8q8bzweSW8k?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/8q8bzweSW8k?rel=0&amp;autoplay=1">Echevarría corre en Neuquén </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/wpKCL3YU3D0/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/wpKCL3YU3D0?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/wpKCL3YU3D0?rel=0&amp;autoplay=1">Pernía no se confía </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/PzUMU-w9LhI/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/PzUMU-w9LhI?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/PzUMU-w9LhI?rel=0&amp;autoplay=1">500km: Altuna y los invitados </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/rseIto1fmc4/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/rseIto1fmc4?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/rseIto1fmc4?rel=0&amp;autoplay=1">Preparadores desmotivados </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/LuTSajx6e3s/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/LuTSajx6e3s?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/LuTSajx6e3s?rel=0&amp;autoplay=1">¿Vuelve Marcos Di Palma? </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/UlSYyA2HZCY/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/UlSYyA2HZCY?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/UlSYyA2HZCY?rel=0&amp;autoplay=1">Canapino rompió el 12º motor </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/n1S30KgWTig/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/n1S30KgWTig?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/n1S30KgWTig?rel=0&amp;autoplay=1">Final TC - Resumen </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/iAJu-GDF1mw/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/iAJu-GDF1mw?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/iAJu-GDF1mw?rel=0&amp;autoplay=1">Mariano Altuna  - Previo TC </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/Bd6_ankayKA/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/Bd6_ankayKA?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/Bd6_ankayKA?rel=0&amp;autoplay=1">Manu Urcera  - Previo TC</a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/Sw2uEFs4Ttw/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/Sw2uEFs4Ttw?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/Sw2uEFs4Ttw?rel=0&amp;autoplay=1">Pernía - Previo TC </a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/wG30FV5-xg8/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/wG30FV5-xg8?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/wG30FV5-xg8?rel=0&amp;autoplay=1">Camilo Echevarría - Previo TC</a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/8T0GJvU0wVM/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" onclick="ponervideo3()" href="http://www.youtube.com/embed/8T0GJvU0wVM?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo3" width="194" height="109" border="0" id="botonvideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" /></a></div>
                            <a target="contenedor" id="textovideo3" onmouseover="changeview3()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/8T0GJvU0wVM?rel=0&amp;autoplay=1">Esteban Gini - Previo TC</a></td>
                        </tr>
                      </table>
                      <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/hh8FPHNl7PY/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                              <div class="playvideo"><a target="contenedor" href="http://www.youtube.com/embed/hh8FPHNl7PY?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo1" width="194" height="109" border="0" id="botonvideo1"/></a></div>
                            <a id="textovideo1" class="imagenvideo_btn" target="contenedor" href="http://www.youtube.com/embed/hh8FPHNl7PY?rel=0&amp;autoplay=1">Callejero de Montevideo </a></td>
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
    <td width="213" valign="top"><table width="205" height="847" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:3px;">
      <tr>
        <td height="8" background="cabeza publicidad.png"></td>
      </tr>
      <tr>
        <td height="831" valign="top" bgcolor="#F4F4F4"><div align="center">
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
