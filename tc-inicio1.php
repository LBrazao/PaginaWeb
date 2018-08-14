<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TC La Revista | Tiempos en vivo, Fotos, Videos, Entrevistas, Novedades</title>
<meta http-equiv="Pragma" content="no-cache" />
<script type="text/javascript" src="textanimation.js"></script>
<script type="text/javascript" src="indexanimation.js"></script>
<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/lightbox-2.6.min.js"></script>
<script type="text/javascript" src="encuesta.js"></script>
<script src="code_news.js"></script>
<script src="efectos.js"></script>
<link href="css/lightbox2.css" rel="stylesheet" />
<link rel='stylesheet' id='rs-settings-css'  href='stylehead.css' type='text/css' media='all' />
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
<link href="encuesta.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="stylesheading.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="textpropierties.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="livestreamming.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="paddingsimulation.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="pluginsperformance.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="styleshead.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link type="text/css" rel="stylesheet" href="estilo_marcador.css" media="screen">
<link type="text/css" rel="stylesheet" href="estilos_nuevos.css" media="screen">
<script type='text/javascript' src='lightbox_news.js'></script>
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
	background-color: #EEEEEE;
	background-image: url(fondotc1.jpg);
	background-repeat: no-repeat;
	background-position:top;
}
-->
</style>
</head>


<body>
<?php
$carga=file_get_contents('cabeza web1.html');
echo $carga;
?>

<div class="con_margen">
<?php
$carga=file_get_contents('cabezatc1.html');
echo $carga;
?>
<table width="100%" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>





<!-- INICIO DEL ENCABEZADO -->
<?php
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

function mostrar_noticia($n,$arch)
{
	$file=fopen($arch,"r")or die("Unable to open file!"); 
	$i=0;
	$cad="";
	$cadena=file_get_contents($arch);
	if(substr_count($cadena,"<!--FIN NOTA-->")>$n)
	{
		//echo substr_count($cadena,"<!--FIN NOTA-->");
		while($i < $n)
		{
			$linea=fgets($file);
			//console_log($linea);
			echo $linea;
			while(strcasecmp($linea,"<!--FIN NOTA-->\n")!=0 && !feof($file))
			{
				//echo strcasecmp($linea,"<!--FIN NOTA-->\n");
				//echo "\"".$linea."\"";
				console_log($linea);
				$cad=$cad.$linea;
				$linea=fgets($file);
			}
			
			$i=$i+1;
				
		}
		
		echo $cad;
		fclose($file);
	}
	else
		echo $cadena;		
}

?>





<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="775" valign="top">
	<?php
		$carga=file_get_contents('tc-principal.html');
		echo $carga;
	?>
	</td>
	
    <td width="215" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="6">&nbsp;</td>
        <td width="209">
			<?php
				$carga=file_get_contents('tc-secundaria.html');
				echo $carga;
			?>
		
			<?php
				$carga=file_get_contents('tc-terciaria.html');
				echo $carga;
			?>
	
		  </td>
      </tr>
    </table>
     
    </td>
  </tr>
</table>


<!-- FIN DEL ENCABEZADO -->


 <table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="82%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
              <table width="100%" height="349" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" valign="top" >
				  
				  
				  
				  
				   <script type="text/javascript">

if (screen.width < 1200) { 

document.write('<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td width="50%" valign="top" style="padding-right:5px"><a href="/2016/tc-campeonato.php"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td class="cabeza_de_seccion">CAMPEONATO</td></tr></table></a><table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td></td></tr></table><table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF"><tr><td><div id="campeonato_1200"></div></td></tr></table></td><td width="50%" valign="top" style="padding-left:5px"><a href="/2016/tc-calendario.php"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td class="cabeza_de_seccion">CARRERAS</td></tr></table></a><table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td></td></tr></table><table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF"><tr><td><img src="up_noticias.jpg" width="100%" height="22" border="0" id="up" /><div id="calendario_1200"></div><img src="down_noticias.jpg" width="100%" height="22" border="0" id="down" /></td></tr></table></td></tr></table><table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" ><tr><td></td></tr></table>');

} 


</script>

<script type="text/javascript">

if (screen.width < 1200) { 

$(document).ready(function(){
            $("#campeonato_1200").load("tc-posiciones.html");
        });
		}
		
if (screen.width < 1200) { 

$(document).ready(function(){
            $("#calendario_1200").load("tc-calendario.html");
        });
		}
</script>
				  
  
				 <div class="body" style="background-color:#FFFFFF; border-radius:7px">
				  
					<?php
					/*$cadena=file_get_contents('tc-inicio-horizontal.html');
					echo $cadena;*/
					
					mostrar_noticia(3,"tc-inicio-horizontal.html");
					?>
				  
                    					
				</div>
				  
				  
				  <table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" ><tr><td></td></tr></table>

				  <table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:7px; padding:10px; table-layout:fixed">
                    <tr>
                      <td><a href="/2016/videos.php"><div class="titulo_videos">Videos</div></a></td>
                    </tr>
					<tr>
                      <td class="contenido_videos">
                       <div class="scrollcontent"><div style="padding: 0px 40px 0px 40px;">
<?php
$cadena=file_get_contents('tc-videos.html');
echo $cadena;
?>
		

</div></div></td>
                    </tr>
					<tr>
                      <td style="margin-top:10px">
                        <a href="/2016/tc-videos1.php">
                        <table class="inferior_videos" width="100%" border="0" cellpadding="6" cellspacing="0"><tr>
                          <td>ACCEDÉ A TODOS LOS VIDEOS DE TC +</td>
                        </tr></table></a></td>
                    </tr>
                  </table>
				  <table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
				    <tr>
				      <td></td>
				      </tr>
				    </table>
					
					
					<script type="text/javascript">

if (screen.width < 1200) { 

document.write('<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td bgcolor="#FFFFFF"><div id="galeria_1200"></div></td></tr></table><table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" ><tr><td></td></tr></table>');

} 


</script>


<script type="text/javascript">

if (screen.width < 1200) { 

$(document).ready(function(){
            $("#galeria_1200").load("tc-fotos_1200.html");
        });
		}
</script>

				  
				  
				  
				  </td>
					<script type="text/javascript">

if (screen.width >= 1200) { 

document.write('<td valign="top" width="28%" style="padding:0px 0px 0px 8px"><a href="/2016/tc-campeonato.php"><table width="100%" cellpadding="0" cellspacing="0" border="0" ><tr><td class="cabeza_de_seccion">CAMPEONATO</td></tr></table></a><table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td></td></tr></table><table   width="100%" cellpadding="10" cellspacing="0" border="0"><tr><td bgcolor="#FFFFFF"><div id="campeonato"></div></td></tr></table><table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td></td></tr></table><a href="/2016/tc-calendario.php"><table width="100%" cellpadding="0" cellspacing="0" border="0" ><tr><td class="cabeza_de_seccion">CARRERAS</td></tr></table></a><table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td></td></tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0" ><tr><td bgcolor="#FFFFFF"><div id="calendario"></div></td></tr></table><table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td></td></tr></table><a href="/2016/tc-fotos.php"><table width="100%" cellpadding="0" cellspacing="0" border="0" ><tr><td class="cabeza_de_seccion">ÚLTIMAS GALERÍAS</td></tr></table></a><table height="8" width="100%" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td></td></tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0" ><tr><td bgcolor="#FFFFFF"><div id="galeria"></div><table border="0" cellpadding="6" cellspacing="0" width="100%"><tr><td><a href="/2016/tc-fotos.php"><table align="center" class="inferior_videos" width="100%" border="0" cellpadding="6" cellspacing="0"><tr><td>M&Aacute;S FOTOS +</td></tr></table></a></td></tr></table></td></tr></table></td>');

} 


</script>

<script type="text/javascript">

if (screen.width >= 1200) { 

$(document).ready(function(){
            $("#campeonato").load("tc-posiciones.html");
        });
		}
</script>

<script type="text/javascript">

if (screen.width >= 1200) { 

$(document).ready(function(){
            $("#calendario").load("tc-calendario.html");
        });
		}
</script>


<script type="text/javascript">

if (screen.width >= 1200) { 

$(document).ready(function(){
            $("#galeria").load("tc-fotos.html");
        });
		}
</script>




                </tr>
            </table>
            </td>
        </tr>
      </table>
      <table height="7" width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td></td>
        </tr>
      </table>
      </td><td width="15%" valign="top" style="padding:0px 0px 0px 8px"><table height="5" width="209" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="100%" height="831" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="padding:3px;; border-radius:7px"><tr>
        <td height="831" valign="top"><div align="center">
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
    </table></td>
  </tr>
</table>
<table width="100%" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table></div>
<?php
$carga=file_get_contents('pie web.html');
echo $carga;
?>
</body>
</html>
