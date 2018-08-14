<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MotoGP | Tiempos en vivo, Fotos, Videos, Entrevistas, Novedades</title>
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
	background-image: url(fondomotogp.jpg);
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
$carga=file_get_contents('cabezamotogp.html');
echo $carga;
?>
	
<table width="990" height="91" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="571" valign="top"><div class="cabezaultima"><span class="textoenvivo">LA &Uacute;LTIMA COMPETENCIA </span></div> <table width="571" height="173" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr>
    <td valign="top"><table width="571" height="180" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="301" width="571" valign="bottom">
		
		
		
		 
		<a href="motogp-fecha18.php">
		<div class="fechaenvivo">FECHA 18 </div>	
		<div class="categoriaenvivo">REVIVI<br />
                  Valencia</div>
				 <div align="center"><img src="motogp-inicio-1.jpg?927392" width="556" height="293" border="0" style="border:#999999 solid 1px"/></div>
		</a>
			</td>
        
      </tr>
      <tr>
        <td height="10" valign="top"> <ul class="menuenvivo">
						  <li><a href="motogp-fecha18.php">Resultados</a></li>
						  <li><a class="alternativo1" href="motogp-fecha18.php#fotos">Fotos</a></li>
						  <li><a class="alternativo2" href="motogp-fecha18.php">Horarios</a></li>
						  <li><a class="alternativo3" href="motogp-posiciones.php">Campeonato</a></li>
						  <li><a class="alternativo4" style="border-right:1px solid #999999;" href="motogp-fecha18.php">Más</a></li>
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
      <div style="margin-left:10px;"><li class="cabezanews"><a class="textoenvivovinculos" href="motogp-noticias.php">NOTICIAS</a></li>
    
      <table width="409" height="333" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
        <tr>
          <td valign="top"><div class="news"><span class="noticias1">
            <?php
$cadena=file_get_contents('MOTOGP.php');
echo $cadena;
?>
          </span></div>
          <table style="margin-top:4px; margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasnoticias" href="motogp-noticias.php">MAS NOTICIAS</a></li></td>
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
            <li class="cabezanoticias"><a class="textoenvivovinculos" href="motogp-fotos.php">GALER&Iacute;AS</a></li>         
            <table width="508" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td valign="top" style="padding:5px;"><table width="498" height="420" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="249" height="210" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="motogp-fecha15-viernes.jpg" width="233" height="136" border="0"/><br />
                                <div class="playfoto"><a href="motogp-fecha15-viernes.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="motogp-fecha15-viernes.php">Japón - Viernes y Sábado </a></td>
                      </tr>
                    </table>
                    </td>
                    <td width="249" height="210" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="motogp-fecha14-domingo.jpg" width="233" height="136" border="0"/><br />
                                  <div class="playfoto"><a href="motogp-fecha14-domingo.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                          </div></td>
                        </tr>
                        <tr>
                          <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="motogp-fecha14-domingo.php">Aragón - Domingo </a></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td width="249" height="210" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="motogp-fecha14-viernes.jpg" width="233" height="136" border="0"/><br />
                                  <div class="playfoto"><a href="motogp-fecha14-viernes.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                          </div></td>
                        </tr>
                        <tr>
                          <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="motogp-fecha14-viernes.php">Aragón - Viernes </a></td>
                        </tr>
                      </table></td>
                    <td width="249" height="210" valign="top"><table width="220" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="100"><div align="center"><img style="border:#999999 solid 1px" src="motogp-fecha13-domingo.jpg" width="233" height="136" border="0"/><br />
                                <div class="playfoto"><a href="motogp-fecha13-domingo.php"><img src="camarainactivo.png" name="camara1" width="233" height="136" border="0" id="camara1" /></a></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="27"><a id="textofoto1" class="imagenfoto_btn" href="motogp-fecha13-domingo.php">Misano</a></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table style="margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                      <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasfotos" href="motogp-fotos.php">MAS FOTOS </a></li></td>
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
              <td><li class="cabezafechas"><a class="textoenvivovinculos" href="motogp-posiciones.php">CAMPEONATO</a></li>         
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
    <td width="61%" height="15"><img src="banderita españa.JPG" width="20" height="13" /> Marc Márquez </td>
    <td width="26%" height="15"><div align="center">298</div></td>
  </tr>
  <tr>
    <td height="15">2.</td>
    <td height="15"><img src="banderita italia.JPG" width="20" height="13" /> Valentino Rossi </td>
    <td height="15"><div align="center">249</div></td>
  </tr>
  <tr>
    <td height="15">3.</td>
    <td height="15"><img src="banderita españa.JPG" width="20" height="13" /> Jorge Lorenzo </td>
    <td height="15"><div align="center">233</div></td>
  </tr>
</table>
                  <table width="265" height="6" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td></td>
                    </tr>
                  </table>
                  <table style="margin-right:8px" width="151" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                      <td background="boton mas videos.jpg"><li class="masvideos"><a class="textomasfotos" href="motogp-posiciones.php">COMPLETOS </a></li></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
            <table width="265" height="6" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td></td>
              </tr>
            </table>
            <li class="cabezacampeonato"><a class="textoenvivovinculos" href="motogp-calendario.php">CARRERAS</a></li>
			<table width="265" height="211" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td valign="top"><table width="265" height="6" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td></td>
                  </tr>
                </table>
                  <div style="height:288px; overflow:auto">
                    <table width="100%" height="342" class="tablafechas" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="16%" height="19"><div align="center"><span class="Estilo4">20.3</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha1.php">LOSAIL</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha1.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">03.4</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha2.php">TERMAS DE RÍO HONDO </a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha2.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">10.4</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha3.php">AUSTIN</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha3.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">24.4</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha4.php">JEREZ</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha4.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">08.5</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha5.php">LE MANS </a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha5.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">2.5</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha6.php">MUGELLO</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha6.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">05.6</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha7.php">CATALUNYA</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha7.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">26.6</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha8.php">ASSEN</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha8.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">17.7</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha9.php">SACHSENRING</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha9.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">14.8</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha10.php">AUSTRIA</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha10.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">21.8</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha11.php">BRNO</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha11.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">04.9</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha12.php">SILVERSTONE</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha12.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">11.9</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha13.php">MISANO</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha13.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">25.9</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha14.php">ARAGÓN</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha14.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">16.10</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha15.php">MOTEGI</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha15.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">23.10</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha16.php">PHILLIP ISLAND </a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha16.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">30.10</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha17.php">MALASIA</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha17.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td height="18"><div align="center"><span class="Estilo4">13.11</span></div></td>
                        <td height="19"><a class="Estilo8" href="motogp-fecha18.php">VALENCIA</a></td>
                        <td height="19"><div align="center" class="Estilo4"><a href="motogp-fecha17.php"><img src="play.png" width="18" height="18" border="0" /></a></div></td>
                      </tr>
                    </table>
                  </div></td>
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
      
	  
    </td>
    <td width="213" valign="top"><table width="205" height="429" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:3px;">
      <tr>
        <td height="8" background="cabeza publicidad.png"></td>
      </tr><tr>
        <td height="413" valign="top" bgcolor="#F4F4F4"><div align="center">
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
            </object></p>
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
