<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>TC la revista</title>
</head>

<body>
<?php
		
	function console_log( $data ){
	  echo '<script>';
	  echo 'console.log('. json_encode( $data ) .')';
	  echo '</script>';
	}
	
	$titulo = $_POST['titulo'];
	$cantCategorias = 0;
	
	if(!isset($_POST['categoria']))
	{
		$categorias=" ";
		$categoria=" ";
		//console_log($_POST['categoria']);
	}
	else{
		$categorias = $_POST['categoria'];
		$cantCategorias = count($categorias);
		$categoria=$categorias[0];
	}
	
	$cuerpo = $_POST['cuerpo'];
	$fecha = date("d/m/Y");
	$fechaCarrera="";
	if(isset($_POST['fCarrera']))
	{
		$fechaCarrera = $_POST['fCarrera'];
		//echo "fecha carrera ".$fechaCarrera;
	}
	$foto="";
		
	function generar_noticia(){
		global $titulo, $categoria, $cuerpo, $fecha, $fechaCarrera, $foto, $archivo_categoria_zona_noticias,$linkNoticia;
		$i=1;
		while(file_exists($linkNoticia))
		{
			$linkNoticia=date("Ymd")." - ".$categoria.$fechaCarrera."-".$titulo.$i.".php";
			$i++;
		}
		
		$archivo=fopen($linkNoticia,"x")or die("Unable to open file!");
		
		$video="";
		if(isset($_POST['video'])&& $_POST['video']=="video") //si es video...
		{
			$video = "https://www.youtube.com/embed/".$_POST['videoURL'];
			$foto =	"https://i1.ytimg.com/vi/".$_POST['videoURL']."/mqdefault.jpg";	
			$html=file_get_contents("./modelos/modelo-LinkNoticia-video.php");
		}
		else
		{
			$foto = "./fotos/".$_FILES['fotofile']['name'];
			move_uploaded_file($_FILES['fotofile']['tmp_name'], $foto);
			$html=file_get_contents("./modelos/modelo-LinkNoticia-foto.php");
		}
		
		$html=str_replace("[[[[FOTO]]]]",$foto,$html);
		$html=str_replace("[[[[VIDEO-URL]]]]",$video,$html);
		$html=str_replace("[[[[FECHA]]]]",$fecha,$html);
		$html=str_replace("[[[[CATEGORIA]]]]",$categoria,$html);
		$html=str_replace("[[[[TITULO]]]]",$titulo,$html);
		$cuerpo=str_replace("\n","<br>",$cuerpo);
		$html=str_replace("[[[[CUERPO]]]]",$cuerpo,$html);
		$html=str_replace("[[[[NOTICIAS CATEGORIA]]]]",$archivo_categoria_zona_noticias,$html);
		
		fwrite($archivo,$html);
		fclose($archivo);
		echo "Se grabo correctamente el archivo: ".$linkNoticia."<br>";

	}
	
	function grabar($modelo,$grabar)
	{
		if($grabar!="no grabar")
		{
			global $titulo, $categoria, $cuerpo, $fecha, $fechaCarrera, $foto, $linkNoticia;
			$noticia= $grabar;
				
			$archivo=fopen($noticia,"w")or die("Unable to open file!");
			
			$html=file_get_contents("./modelos/".$modelo);
			
			$html=str_replace("[[[[FOTO]]]]",$foto,$html);
			$html=str_replace("[[[[FECHA]]]]",$fecha,$html);
			$html=str_replace("[[[[CATEGORIA]]]]",$categoria,$html);
			$html=str_replace("[[[[TITULO]]]]",$titulo,$html);
			$html=str_replace("[[[[CUERPO]]]]",$cuerpo,$html);
			$html=str_replace("[[[[LINK]]]]",$linkNoticia,$html);
			
			fwrite($archivo,$html);
			fclose($archivo);
			echo "Se grabo correctamente el archivo: ".$grabar."<br>";
		}
	}

	function grabar_convideo($modelo,$grabar)
	{
		if($grabar!="no grabar")
		{
			global $titulo, $categoria, $cuerpo, $fecha, $fechaCarrera, $foto, $video, $linkNoticia;
			$noticia= $grabar;
					
			$archivo=fopen($noticia,"w")or die("Unable to open file!");
			
			$html=file_get_contents("./modelos/".$modelo);
			
			$html=str_replace("[[[[FOTO]]]]",$foto,$html);
			$html=str_replace("[[[[FECHA]]]]",$fecha,$html);
			$html=str_replace("[[[[CATEGORIA]]]]",$categoria,$html);
			$html=str_replace("[[[[TITULO]]]]",$titulo,$html);
			$html=str_replace("[[[[VIDEO-URL]]]]",$video,$html);
			$html=str_replace("[[[[CUERPO]]]]",$cuerpo,$html);
			$html=str_replace("[[[[LINK]]]]",$linkNoticia,$html);
			
			fwrite($archivo,$html);
			fclose($archivo);
			
			echo "Se grabo correctamente el archivo: ".$grabar."<br>";
		}	
	}

	function grabar_agregando($modelo,$grabar)
	{
		if($grabar!="no grabar")
		{
			global $titulo, $categoria, $cuerpo, $fecha, $fechaCarrera, $foto, $linkNoticia;
			$noticia= $grabar;
			$temp="";
			if(file_exists($noticia))
			{
				$temp=file_get_contents($noticia);
			}		
			
			$archivo=fopen($noticia,"w")or die("Unable to open file!");
			
			$html=file_get_contents("./modelos/".$modelo);
			
			$html=str_replace("[[[[FOTO]]]]",$foto,$html);
			$html=str_replace("[[[[FECHA]]]]",$fecha,$html);
			$html=str_replace("[[[[CATEGORIA]]]]",$categoria,$html);
			$html=str_replace("[[[[TITULO]]]]",$titulo,$html);
			$html=str_replace("[[[[CUERPO]]]]",$cuerpo,$html);
			$html=str_replace("[[[[LINK]]]]",$linkNoticia,$html);
			
			fwrite($archivo,$html);
			fwrite($archivo,"\n");
			fwrite($archivo,$temp);
			fclose($archivo);
			
			echo "Se grabo correctamente el archivo: ".$grabar."<br>";
		}
	}

	function grabar_agregando_convideo($modelo,$grabar)
	{
		if($grabar!="no grabar")
		{
			global $titulo, $categoria, $cuerpo, $fecha, $fechaCarrera, $foto, $video, $linkNoticia;
			$noticia= $grabar;
			$temp="";
			if(file_exists($noticia))
			{
				$temp=file_get_contents($noticia);
			}	
			
			$archivo=fopen($noticia,"w")or die("Unable to open file!");
			
			$html=file_get_contents("./modelos/".$modelo);
			
			$html=str_replace("[[[[FOTO]]]]",$foto,$html);
			$html=str_replace("[[[[FECHA]]]]",$fecha,$html);
			$html=str_replace("[[[[CATEGORIA]]]]",$categoria,$html);
			$html=str_replace("[[[[TITULO]]]]",$titulo,$html);
			$html=str_replace("[[[[VIDEO-URL]]]]",$video,$html);
			$html=str_replace("[[[[CUERPO]]]]",$cuerpo,$html);
			$html=str_replace("[[[[LINK]]]]",$linkNoticia,$html);
			
			fwrite($archivo,$html);
			fwrite($archivo,"\n");
			fwrite($archivo,$temp);
			fclose($archivo);
			
			echo "Se grabo correctamente el archivo: ".$grabar."<br>";
		}
	}

	function grabaren_seccionvideo($modelo,$grabar)
	{
		if($grabar!="no grabar")
		{
			global $titulo, $categoria, $cuerpo, $fecha, $fechaCarrera, $foto, $video, $linkNoticia;
			$noticiaVideo= $grabar;
			$temp="";
			if(file_exists($noticiaVideo))
			{
				$temp=file_get_contents($noticiaVideo);
			}
			
			$archivoVideos=fopen($noticiaVideo,"w")or die("Unable to open file!"); 
			$htmlVideo=file_get_contents("./modelos/".$modelo);
			$htmlVideo=str_replace("[[[[FOTO]]]]",$foto,$htmlVideo);
			$htmlVideo=str_replace("[[[[FECHA]]]]",$fecha,$htmlVideo);
			$htmlVideo=str_replace("[[[[TITULO]]]]",$titulo,$htmlVideo);
			if(strcasecmp($modelo,"modelo-seccion-videosInsertados.html")==0)
			{
				$htmlVideo=str_replace("[[[[VIDEO-URL]]]]",$video,$htmlVideo);
			}
			else
			{
				$htmlVideo=str_replace("[[[[VIDEO-URL]]]]",$linkNoticia,$htmlVideo);
			}
			
			fwrite($archivoVideos, $htmlVideo);
			fwrite($archivoVideos, "\n");
			fwrite($archivoVideos, $temp);
			fclose($archivoVideos);
			
			echo "Se grabo correctamente el archivo: ".$grabar."<br>";
		}
	}

	function asignar_fecha($grabar,$fechaCarrera)
	{
		global $archivo_fecha_noticias, $archivo_fecha_videos;
		
		if(empty($fechaCarrera))
		{
			$archivo_fecha_noticias="no grabar";
			$archivo_fecha_videos="no grabar";
		}
		else
		{ 	
			$archivo_fecha_noticias=$grabar.$fechaCarrera."-noticias.html";
			$archivo_fecha_videos=$grabar.$fechaCarrera."-videos.html";
		}
	}
	
	function grabar_final($videos,$inicio_horizontal,$noticia_principal,$noticia_secundaria,$noticia_terciaria)
	{
		global $titulo, $categoria, $cuerpo, $fecha, $fechaCarrera, $foto, $video,$linkNoticia, $tipoNoticia;
		
		if(isset($_POST['video'])&& $_POST['video']=="video") //si es video...
		{
			$video = "https://www.youtube.com/embed/".$_POST['videoURL'];
			$foto =	"https://i1.ytimg.com/vi/".$_POST['videoURL']."/mqdefault.jpg";
			//Copiamos en el archivo de la seccion de videos, y en la seccion inicio-horizontal.

			grabaren_seccionvideo("modelo-seccion-video.html",$videos);
			
			
			grabar_agregando_convideo("modelo-video.html",$inicio_horizontal);

			//si es un tipo de noticia importante
			if(isset($_POST[$tipoNoticia]))
			{
				if($_POST[$tipoNoticia]=="Nprincipal")
				{
					if(isset($_POST['enVivo'])){
						grabar_convideo("modelo-noticiaPrimaria-convideo-enVivo.html",$noticia_principal);	
					}
					else
					{
						grabar_convideo("modelo-noticiaPrimaria-convideo.html",$noticia_principal);
					}
					
				}
				
				if($_POST[$tipoNoticia]=="Nsecundaria")
				{
					grabar_convideo("modelo-noticiaSecundaria-convideo.html",$noticia_secundaria);
				}
				
				if($_POST[$tipoNoticia]=="Nterciaria")
				{
					grabar_convideo("modelo-noticiaTerciaria-convideo.html",$noticia_terciaria);
				}
			}
		}
		else{  //si no es video...
			grabar_agregando("modelo-foto.html",$inicio_horizontal);
			echo $_POST[$tipoNoticia];
			if(isset($_POST[$tipoNoticia])) //si es un tipo de noticia importante
			{
				if($_POST[$tipoNoticia]=="Nprincipal")
				{
					if(isset($_POST['enVivo'])){
						grabar_convideo("modelo-noticiaPrimaria-enVivo.html",$noticia_principal);	
					}
					else
					{
						grabar_convideo("modelo-noticiaPrimaria.html",$noticia_principal);
					}						
				}
				
				if($_POST[$tipoNoticia]=="Nsecundaria")
				{
					grabar("modelo-noticiaSecundaria.html",$noticia_secundaria);
				}
				
				if($_POST[$tipoNoticia]=="Nterciaria")
				{
					grabar("modelo-noticiaTerciaria.html",$noticia_terciaria);
				}
			}
		}
	}

?>	
	
<?php
$i=0;

if($cantCategorias==0)
{
	$archivo_categoria_zona_noticias="noticias_insertadas.html";
}
else{
	switch($categorias[$i]){
	case"turismo carretera":
		$archivo_categoria_zona_noticias="tc-noticias-insertadas.html";
		break;
	case"tc pista":
		$archivo_categoria_zona_noticias="noticias_insertadas.html";
		break;
	}
}

$tipoNoticia='tiponoticia';

if(isset($_POST['vinculo'])&& $_POST['vinculo']=="vinculo"){
	$linkNoticia= $_POST['vinculoURL'];
}
else{
	$auxTitulo=str_replace("\"","",$titulo);
	$linkNoticia=date("Ymd")."-".$categoria.$fechaCarrera."-".$auxTitulo.".php";
	generar_noticia();
}

grabar_final("videos.html","inicio_horizontal.html","noticia_principal.html","noticia_secundaria.html","noticia_terciaria.html");

if(isset($_POST['video'])&& $_POST['video']=="video")
{
	$foto =	"https://i1.ytimg.com/vi/".$_POST['videoURL']."/mqdefault.jpg";
	grabaren_seccionvideo("modelo-seccion-videosInsertados.html","videos_insertados.html");
	grabar_agregando_convideo("modelo-video-conlink.html","noticias_insertadas.html");
}
else{
	grabar_agregando("modelo-foto-conlink.html","noticias_insertadas.html");
}
	
$i=0;

while($cantCategorias>0)
{

	switch($categorias[$i]){
		
	case " ":
		$archivo_categoria_principal="no grabar";
		$archivo_categoria_secundaria="no grabar";
		$archivo_categoria_terciaria="no grabar";
		$archivo_categoria_videos="no grabar";
		$archivo_categoria_zona_videos="no grabar";
		$archivo_categoria_zona_noticias="no grabar";
		$archivo_categoria_inicio_horizontal="no grabar";
		$archivo_fecha_noticias="no grabar";
		$archivo_fecha_videos="no grabar";

		break;
	case "turismo carretera":
		$archivo_categoria_principal="tc-principal.html";
		$archivo_categoria_secundaria="tc-secundaria.html";
		$archivo_categoria_terciaria="tc-terciaria.html";
		$archivo_categoria_videos="tc-videos.html";
		$archivo_categoria_zona_videos="tc-videos-insertados.html";
		$archivo_categoria_zona_noticias="tc-noticias-insertadas.html";
		$archivo_categoria_inicio_horizontal="tc-inicio-horizontal.html";
		
		asignar_fecha("tc-fecha",$fechaCarrera);

		break;
		
	case "tc pista":
		$archivo_categoria_principal="no grabar";
		$archivo_categoria_secundaria="no grabar";
		$archivo_categoria_terciaria="no grabar";
		$archivo_categoria_videos="no grabar";
		$archivo_categoria_zona_videos="no grabar";
		$archivo_categoria_zona_noticias="no grabar";
		$archivo_categoria_inicio_horizontal="no grabar";
		
		$archivo_fecha_noticias="no grabar";
		$archivo_fecha_videos="no grabar";
		//asignar_fecha("no grabar",$fechaCarrera);
		
		break;
	}
	
	$categoria=$categorias[$i];
	$tipoNoticia='tiponoticiaC';
	if($i>0)
	{
		if(isset($_POST['vinculo'])&& $_POST['vinculo']=="vinculo"){
			$linkNoticia= $_POST['vinculoURL'];
		}
		else{
			$auxTitulo=str_replace("\"","",$titulo);
			$linkNoticia=date("Ymd")."-".$categoria.$fechaCarrera."-".$auxTitulo.".php";
			generar_noticia();
		}
	}
	
	grabar_final($archivo_categoria_videos,$archivo_categoria_inicio_horizontal,$archivo_categoria_principal,$archivo_categoria_secundaria,$archivo_categoria_terciaria);

	if(isset($_POST['video'])&& $_POST['video']=="video")
	{
		$video = "https://www.youtube.com/embed/".$_POST['videoURL'];
		$foto =	"https://i1.ytimg.com/vi/".$_POST['videoURL']."/mqdefault.jpg";
		grabaren_seccionvideo("modelo-seccion-videosInsertados.html",$archivo_categoria_zona_videos);
		
		grabar_agregando_convideo("modelo-video-conlink.html",$archivo_categoria_zona_noticias);
		
		grabaren_seccionvideo("modelo-seccion-videosInsertados.html",$archivo_fecha_videos);
		
		grabar_agregando_convideo("modelo-video-conlink.html",$archivo_fecha_noticias);
		
	}
	else{
		grabar_agregando("modelo-foto-conlink.html",$archivo_categoria_zona_noticias);
		grabar_agregando("modelo-foto-conlink.html",$archivo_fecha_noticias);
	}
	
	$cantCategorias--;
	$i++;
}


?>
	
</body>

</html>