<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Prueba para la princi</title>
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
				
				<div class="tituloNoticia">Prueba para la princi</div><br>
				
				<table style="font-size:25px;"> <tr> 
					<td width="700">06/06/2018</td> 
					<td width="700" style="color:red;text-align:right">turismo carretera</td>
				</tr></table><br>
				
				<div>
					<div class="video_en_vivo" style="border-bottom:3px solid #FF0000"><iframe src="https://www.youtube.com/embed/DIm2cqy7-AI" scrolling="no" frameborder="0" name="contenedor_videos_categoria" id="contenedor_videos_categoria">    </iframe></div>
				</div><br>
				
				<div class="desarrollo_noticia cuerpoNoticia">
					Los manifestantes habían ido con carteles y camisetas de Messi manchadas de pintura roja, simulando ser sangre. Según explicaron, no se trató de una amenaza contra Leo sino como un símbolo de lo que estaban reclamando. ​Pedían que la Argentina no fuera a jugar contra Israel. De acuerdo a su óptica, con este acto, la Selección se iba a transformar en cómplice del “blanqueo de crímenes de la ocupación israelí”, tal como había expresado el domingo el presidente de la Federación Palestina de Fútbol, Jibril Rajoub, quien además avisó que si el duelo se llevaba a cabo podría haber actos de repudio como quemar camisetas de Messi. El reclamo terminó teniendo un papel clave en la suspensión.<br><br>¿Qué pasó? De pronto, salió una voz clara que se escuchó más potente a través de un megáfono en perfecto castellano. Y eso sí llegó del otro lado de las paredes del predio del Barcelona. “¡No laven la imagen de Israel! ¡Como dijo Maradona, la pelota no se mancha!”, escucharon los futbolistas mientras se movían a las órdenes de Jorge Sampaoli.
				</div> <br>
				
				<div>
					<img id="imagen_noticia" src="./fotos/bicentenario003chico.jpg" width="80%" style="display:block;margin:auto;" />
				</div><br>

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
