<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TC Pista | Tiempos en vivo, Fotos, Videos, Entrevistas, Novedades</title>
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
	background-image: url(fondotcp.jpg);
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
$carga=file_get_contents('cabezatcp.html');
echo $carga;
?>	
<table width="990" height="91" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="571" valign="top"><div class="cabezaultima"><span class="textoenvivo">LA &Uacute;LTIMA COMPETENCIA </span></div> <table width="571" height="173" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr>
    <td valign="top"><table width="571" height="180" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="301" width="571" valign="bottom">
		
		
		
		 <a href="tcpista-fecha15.php">
				  <div class="fechaenvivo">FECHA 15 </div>	
		          <div class="categoriaenvivo">REVIVI<br />
                  La Plata</div>
			      <div align="center"><img src="tcpista-inicio-1.jpg?23920" width="556" height="291" border="0" style="border:#999999 solid 1px"/></div>
		 </a>	</td>
        
      </tr>
      <tr>
        <td height="10" valign="top"> <ul class="menuenvivo">
						  <li><a href="tcpista-fecha15.php">Resultados</a></li>
						  <li><a class="alternativo1" href="tcpista-fecha15.php#fotos">Fotos</a></li>
						  <li><a class="alternativo2" href="tcpista-fecha15.php#videoos">Videos</a></li>
						  <li><a class="alternativo3" href="tcpista-posiciones.php">Campeonato</a></li>
						  <li><a class="alternativo4" style="border-right:1px solid #999999;" href="tcpista-fecha15.php">Más</a></li>
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
      <div style="margin-left:10px;"><li class="cabezanews"><a class="textoenvivovinculos" href="tcpista-noticias.php">NOTICIAS</a></li>
    
      <table width="409" height="333" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td valign="top"><div class="news"><span class="noticias1">
            <?php
$cadena=file_get_contents('TCP.php');
echo $cadena;
?>
          </span></div>
          <table style="margin-top:4px; margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="tcpista-noticias.php">MAS NOTICIAS</a></li></td>
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
            <li class="cabezanoticias"><a class="textoenvivovinculos" href="tcpista-fotos.php">GALER&Iacute;AS</a></li>         
            <table width="508" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td valign="top" style="padding:5px;"><table width="498" height="384" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="tcpista-fecha12-sabado.jpg" width="233" height="136" border="0"/><br />
                                <div class="playfoto"><a href="tcpista-fecha12-sabado.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="tcpista-fecha12-sabado.php">Concepción del Uruguay - Series </a></td>
                      </tr>
                    </table>
                    </td>
                    <td height="170" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="tcpista-fecha10-domingo.jpg" width="233" height="136" border="0"/><br />
                                  <div class="playfoto"><a href="tcpista-fecha10-domingo.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                          </div></td>
                        </tr>
                        <tr>
                          <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="tcpista-fecha10-domingo.php">La victoria de  Ruggiero en Paraná </a></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td width="249" height="192" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="tcpista-fecha9-domingo.jpg" width="233" height="136" border="0"/><br />
                                  <div class="playfoto"><a href="tcpista-fecha9-domingo.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                          </div></td>
                        </tr>
                        <tr>
                          <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="tcpista-fecha9-domingo.php">Rafaela - Domingo </a></td>
                        </tr>
                      </table></td>
                    <td width="249" height="192" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="tcpista-fecha5-sabado.jpg" width="233" height="136" border="0"/><br />
                                <div class="playfoto"><a href="tcpista-fecha5-sabado.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="tcpista-fecha5-sabado.php">Olavarría - Sábado </a></td>
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
              <td><li class="cabezafechas"><a class="textoenvivovinculos" href="tcpista-posiciones.php">CAMPEONATO</a></li>         
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
    <td width="61%" height="15"><img src="banderita argentina.JPG" width="20" height="13" /> Nicolás Cotignola </td>
    <td width="26%" height="15"><div align="center">221.5</div></td>
  </tr>
  <tr>
    <td height="15">2.</td>
    <td height="15"><img src="banderita argentina.JPG" width="20" height="13" /> Valentín Aguirre </td>
    <td height="15"><div align="center">208.5</div></td>
  </tr>
  <tr>
    <td height="15">3.</td>
    <td height="15"><img src="banderita argentina.JPG" width="20" height="13" /> Sebastián Diruscio </td>
    <td height="15"><div align="center">207.5</div></td>
  </tr>
</table>
                  <table width="265" height="6" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td></td>
                    </tr>
                  </table>
                  <table style="margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                      <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasfotos" href="tcpista-posiciones.php">COMPLETO </a></li></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
            <table width="265" height="6" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td></td>
              </tr>
            </table>
            <li class="cabezacampeonato"><a class="textoenvivovinculos" href="tcpista-calendario.php">CARRERAS</a></li>
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
                      <td width="70%" height="18"><a class="Estilo8" href="tcpista-fecha1.php">VIEDMA</a></td>
                      <td width="14%" height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha1.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">06.3</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha2.php">NEUQUÉN</a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha2.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">27.3</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha3.php">LA PAMPA </a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha3.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">17.4</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha4.php">CONCORDIA</a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha4.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">01.5</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha5.php">OLAVARRÍA</a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha5.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">22.5</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha6.php">TERMAS DE RÍO HONDO </a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha6.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">12.6</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha7.php">POSADAS</a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha7.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">26.6</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha8.php">CONCEPCIÓN DEL URUGUAY </a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha8.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">14.8</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha9.php">RAFAELA</a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha9.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">28.8</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha10.php">PARANÁ</a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha10.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">11.9</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha11.php">SAN LUIS </a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha11.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">02.10</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha12.php">CONCEPCIÓN DEL URUGUAY </a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha12.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">30.10</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha13.php">LA PAMPA </a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha13.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">13.11</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha14.php">TRELEW</a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha14.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                    </tr>
                    <tr>
                      <td height="18"><div align="center"><span class="Estilo4">04.12</span></div></td>
                      <td height="18"><a class="Estilo8" href="tcpista-fecha15.php">LA PLATA </a></td>
                      <td height="18"><div align="center" class="Estilo4"><a href="tcpista-fecha15.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
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
      <table width="777" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><li class="cabezavideos"><a class="textoenvivovinculos" href="tcpista-videos.php">VIDEOS</a></li>
              <table width="775" height="312" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
                <tr>
                  <td style="padding:10px;" width="520" align="center" valign="top"><table width="508" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><iframe src="http://www.youtube.com/embed/_cLCyPFgCp8" name="contenedor" width="520" height="292" frameborder="0" id="contenedor" allowfullscreen="allowfullscreen"></iframe></td>
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
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/_cLCyPFgCp8/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/_cLCyPFgCp8?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/_cLCyPFgCp8?rel=0&amp;autoplay=1">Final TC Pista - San Luis </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/Kyt-hbK0B5Y/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/Kyt-hbK0B5Y?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/Kyt-hbK0B5Y?rel=0&amp;autoplay=1">Final San Luis - Resumen </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/4wbzI2Cvl-4/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/4wbzI2Cvl-4?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/4wbzI2Cvl-4?rel=0&amp;autoplay=1">1º Clasificación - San Luis </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/jvtcgVVLRBU/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/jvtcgVVLRBU?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/jvtcgVVLRBU?rel=0&amp;autoplay=1">Final Rafaela - Resumen </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/YJXlN0-i6Jc/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/YJXlN0-i6Jc?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/YJXlN0-i6Jc?rel=0&amp;autoplay=1">Final Rafaela - Protagonistas </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/27nX6Ro6-E8/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/27nX6Ro6-E8?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/27nX6Ro6-E8?rel=0&amp;autoplay=1">Final Olavarría - Conferencia </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/6VIIT_C_3OA/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/6VIIT_C_3OA?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/6VIIT_C_3OA?rel=0&amp;autoplay=1">Final Resumen - Conferencia </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/L6951MdQCZM/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/L6951MdQCZM?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/L6951MdQCZM?rel=0&amp;autoplay=1">Final Paraná - Resumen </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/17M5SvNMvPY/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/17M5SvNMvPY?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/17M5SvNMvPY?rel=0&amp;autoplay=1">Urreta vuelve con triunfo </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/2yeun1Bbd1g/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/2yeun1Bbd1g?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/2yeun1Bbd1g?rel=0&amp;autoplay=1">Final 2 Termas - Resumen </a></td>
                      </tr>
                    </table>
                    <table height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top"><div align="center"><img src="https://i1.ytimg.com/vi/m1k6sx0ADEA/mqdefault.jpg" width="194" height="109" border="0" class="imagenvideo" /></div>
                            <div class="playvideo"><a target="contenedor" onclick="ponervideo2()" href="http://www.youtube.com/embed/m1k6sx0ADEA?rel=0&amp;autoplay=1"><img src="playvideos.png" name="botonvideo2" width="194" height="109" border="0" id="botonvideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" /></a></div>
                          <a target="contenedor" id="textovideo2" onmouseover="changeview2()" onmouseout="changeviewsalir()" class="imagenvideo_btn" href="http://www.youtube.com/embed/m1k6sx0ADEA?rel=0&amp;autoplay=1">Final 1 Termas - Conferencia </a></td>
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
      </tr><tr>
        <td height="831" valign="top" bgcolor="#F4F4F4"><div align="center">
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
