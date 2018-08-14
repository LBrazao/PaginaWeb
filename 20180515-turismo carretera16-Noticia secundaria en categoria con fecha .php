<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Noticia secundaria en categoria con fecha </title>
	<meta http-equiv="Pragma" content="no-cache" />
	<script type="text/javascript" src="textanimation.js"></script>
	<script type="text/javascript" src="indexanimation.js"></script>
	<script src="/js/jquery-3.1.1.min.js"></script>
	<script src="/js/lightbox-2.6.min.js"></script>
	<script type="text/javascript" src="encuesta.js"></script>
	<script src="code_news.js"></script>
	<script src="efectos.js"></script>
	<link href="/css/lightbox2.css" rel="stylesheet" />
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

	<style>
		.tituloNoticia{
			color:black;
			font-size: 50px; 
			border-bottom:1px solid grey; 	
		}

		.seccionNoticia{
			border-radius:7px;  
			padding:10px;
			background-color:#FFFFFF;
			border-top:6px solid grey;
			border-bottom:6px solid grey;
			box-shadow: 1px 4px 5px 4px rgba(194,194,194,1);	
		}
		
		.cuerpoNoticia{
			font-size: 15px;
			line-height: 1.5;
			text-align:justify;
		}
		
		.encabezado{
			box-shadow: 0px 1px 3px 2px rgba(194,194,194,1);
			font-size:25px; 
			color:white; 
			background-color:grey;
			padding:5px;
		}
		
		.titulo_noticia{
			font-size:22px;
		}
			
	</style>
</head>

<body onload="MM_preloadImages('camara.png','boton resultados tcp activo.png','boton resultados wrc activo.png')" style="font-family: times new roman, times, serif;">
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
				
				while($i < $n)
				{
					$linea=fgets($file);
					//console_log($linea);
					echo $linea;
					while(strcasecmp($linea,"<!--FIN NOTA-->\n")!=0 && !feof($file))
					{
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

	
	<?php
		$carga=file_get_contents('cabeza web1.html');
		echo $carga;
	?>

	<div class="con_margen">
	
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td width="70%" valign="top" class="seccionNoticia"> <!--NOTICIA-->
				
				<div class="tituloNoticia">Noticia secundaria en categoria con fecha </div><br>
				
				<table style="font-size:25px;"> <tr> 
					<td width="700">15/05/2018</td> 
					<td width="700" style="color:red;text-align:right">turismo carretera</td>
				</tr></table><br>
				
				<div>
					<img id="imagen_noticia" src="./fotos/06.jpg" width="80%" style="display:block;margin:auto;" />
				</div><br>
				
				<div class="desarrollo_noticia cuerpoNoticia">
					Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha <br><br>Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha <br><br>Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha Noticia secundaria en categoria con fecha 
				</div>

			</td>
    
			<td width="30%" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="6">&nbsp;</td>
				<td class="encabezado"> Ultimas noticias
				</td>
			</tr>
			<tr height="5px"></tr>
			<tr>
				<td width="6">&nbsp;</td>
				<td width="209"  style="background-color:#FFFFFF; border-radius:7px;">
					<!--LISTA NOTICIAS CATEGORIA-->
					<?php
						mostrar_noticia(6,'tc-noticias-insertadas.html');
					?>

				</td>
			</tr>
			</table>
			</td>
		</tr>
	</table>
	
	</div><br> <br>

	<?php
		$carga=file_get_contents('pie web.html');
		echo $carga;
	?>
</body>	
</html>
