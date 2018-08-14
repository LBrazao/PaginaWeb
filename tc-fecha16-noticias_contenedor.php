<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TC en La Plata | Tiempos en vivo, Fotos, Videos, Entrevistas</title>
<meta http-equiv="Pragma" content="no-cache" />
<script type="text/javascript" src="textanimation.js"></script>
<script type="text/javascript" src="indexanimation.js"></script>
<script type="text/javascript" src="appearimages.js"></script>
<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/lightbox-2.6.min.js"></script>
<script src="code_news.js"></script>
<script src="efectos.js"></script>
<link href="/css/lightbox2.css" rel="stylesheet" />
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
<link href="stylesheading.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="textpropierties.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="livestreamming.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="paddingsimulation.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="pluginsperformance.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link href="styleshead.css" type="text/css" rel="stylesheet" media="screen, projection" />
<link type="text/css" rel="stylesheet" href="estilos_nuevos.css" media="screen">
<link type="text/css" rel="stylesheet" href="estilo_marcador.css" media="screen">
<link type="text/css" rel="stylesheet" href="estilogaleria_nueva.css" media="screen">
<script type='text/javascript' src='lightbox_news.js'></script>
<script src="/SpryAssets/SpryEffects.js" type="text/javascript"></script>
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
body {
	background-color: #000000;
	background-image: url(cabeza%20tc%20fecha13.jpg);
	background-repeat: no-repeat;
	background-position:top;
}
-->
</style></head>

<body onload="MM_preloadImages('camara.png','boton fecha tcp activo.png','boton fecha wrc activo.png','up_noticias.jpg','down_noticias.jpg')">
<?php
$carga=file_get_contents('cabeza web1.html');
echo $carga;
?>
<div class="con_margen"><table width="100%" height="180" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="656"><div class="titlecategoria_new">Buenos Aires </div>
      <div class="subtitle_new">FECHA 16 | TURISMO CARRETERA </div></td>
    <td width="334"><table width="238" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="circuito la plata.png" width="238" height="108" border="0" /></td>
      </tr>
      <tr>
        <td><div style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF" align="center"><span style="font-weight:bold">RÉCORD:</span> M. Rossi (1'25&quot;503) 
        <br />
                <span style="font-weight:bold">EXTENSI&Oacute;N:</span> 4265  metros </div></td>
      </tr>
    </table></td>
  </tr>
</table>
  <table width="100%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td></td>
    </tr>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>
	  
	  
	  
	  
<script type="text/javascript">
   
  jQuery.ajaxSetup({
  beforeSend: function() {
	$('#loader').removeClass('desaparecido');
	$('#contenido').addClass('desaparecido');
  },
  success: function() {
  
	$('#loader').addClass('desaparecido');
	$('#contenido').removeClass('desaparecido');
	}
});
	   window.onload = function() {
   $('#contenido').load("tc-fecha16-noticias.php");
};
	function resultados() {
			$('#resultados').addClass('boton_activo');
			$('#fotos').removeClass('boton_activo');
			$('#videos').removeClass('boton_activo');
			$('#noticias').removeClass('boton_activo');
			$('#campeonato').removeClass('boton_activo');
            $('#contenido').load("tc-fecha16-resultados.php");
        
	};
	function fotos() {
			$('#resultados').removeClass('boton_activo');
			$('#fotos').addClass('boton_activo');
			$('#videos').removeClass('boton_activo');
			$('#noticias').removeClass('boton_activo');
			$('#campeonato').removeClass('boton_activo');
            $('#contenido').load("tc-fecha16-fotos.php");
	};
	function videos() {
			$('#resultados').removeClass('boton_activo');
			$('#fotos').removeClass('boton_activo');
			$('#videos').addClass('boton_activo');
			$('#noticias').removeClass('boton_activo');
			$('#campeonato').removeClass('boton_activo');
            $('#contenido').load("tc-fecha16-videos.php");
	};
	function noticias() {
			$('#resultados').removeClass('boton_activo');
			$('#fotos').removeClass('boton_activo');
			$('#videos').removeClass('boton_activo');
			$('#noticias').addClass('boton_activo');
			$('#campeonato').removeClass('boton_activo');
            $('#contenido').load("tc-fecha16-noticias.php");
	};
	function campeonato() {
			$('#resultados').removeClass('boton_activo');
			$('#fotos').removeClass('boton_activo');
			$('#videos').removeClass('boton_activo');
			$('#noticias').removeClass('boton_activo');
			$('#campeonato').addClass('boton_activo');
            $('#contenido').load("tc-posiciones_fecha.php");
        
		
	};
	
	$(document).ready(function(){
        setInterval(function() {
            $("#comentarios").load("onlineTCf13.php");
        }, 100000);
    });
	
	$(document).ready(function(){
        setInterval(function() {
            $("#resultados_contenedor").load("tc-fecha16-resultados.html");
        }, 60000);
    });
</script>

	  
	  
	  
	  
	  
	  
	  <table id="encabezado_monitoreo" width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td id="resultados" onclick="resultados()" width="20%" align="center">RESULTADOS</td>
          <td id="fotos" onclick="fotos()" width="20%" align="center">FOTOS</td>
          <td id="videos" onclick="videos()" width="20%" align="center">VIDEOS</td>
          <td id="noticias" class="boton_activo" onclick="noticias()" width="20%" align="center">NOTICIAS</td>
          <td id="campeonato" onclick="campeonato()" width="20%" align="center">CAMPEONATO</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="100%" height="760" border="0" cellpadding="0" cellspacing="0" class="centro_de_monitoreo">
    <tr>
      <td valign="top">
	  
	  <div align="center" id='loader'><img src="preloader.gif"/></div>
	  <div id="contenido" style="padding:20px"></div></td>
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
