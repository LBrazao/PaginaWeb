<table width="100%" border="0" cellpadding="4" cellspacing="0" style="padding-bottom:4px">
  <tr>
    <td width="17%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tanda-completa" onclick="window.open('tc-fecha15-1entrenamiento.php','resultados')">
      <tr>
        <td>1&ordm; Entrenamiento</td>
      </tr>
    </table></td>
    <td width="17%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tanda-completa" onclick="window.open('tc-fecha15-1clasificacion.php','resultados')">
      <tr>
        <td>1&ordm; Clasificaci&oacute;n</td>
      </tr>
    </table></td>
    <td width="17%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tanda-completa" onclick="window.open('tc-fecha15-2entrenamiento.php','resultados')">
      <tr>
        <td>2&ordm; Entrenamiento</td>
      </tr>
    </table></td>
    <td width="17%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tanda-completa" onclick="window.open('tc-fecha15-clasificaciongeneral.php','resultados')">
      <tr>
        <td>Clasificaci&oacute;n Gral. </td>
      </tr>
    </table></td>
    <td width="17%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tanda-vivo" onclick="window.open('tc-fecha15-1serie.php','resultados')">
      <tr>
        <td>1&ordm; Serie</td>
      </tr>
    </table></td>
    <td width="17%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tanda-inactiva" nclick="window.open('tc-fecha15-2serie.php','resultados')">
      <tr>
        <td>2&ordm; Serie </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="17%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tanda-inactiva" nclick="window.open('tc-fecha15-3serie.php','resultados')">
      <tr>
        <td>3&ordm; Serie </td>
      </tr>
    </table></td>
    <td width="17%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tanda-inactiva" nclick="window.open('tc-fecha15-final.php','resultados')">
      <tr>
        <td>Final</td>
      </tr>
    </table></td>
    <td width="17%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tanda-horarios" onclick="window.open('tc-fecha15-cronograma.html','resultados')">
      <tr>
        <td>Horarios</td>
      </tr>
    </table></td>
	<td width="17%"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tanda-horarios" onclick="window.open('tc-fecha15-inscriptos.html','resultados')">
      <tr>
        <td>Pilotos</td>
      </tr>
    </table></td>
	<td width="17%">&nbsp;</td>
	<td width="17%"></td>
	
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="padding-right:4px" width="50%" valign="top">
	
		<script type="text/javascript">
		
		function mostrar_comentarios() {
			$('#video_en_vivo').addClass('video_en_vivo_contraido');
			$('#comentarios').addClass('directo_desplegado');
			$('#comentarios').removeClass('directo_contraido');
			$('#mostrar_comentarios').addClass('desaparecido');
			$('#mostrar_video').removeClass('desaparecido');
        
	};
		function mostrar_video() {
			$('#video_en_vivo').removeClass('video_en_vivo_contraido');
			$('#comentarios').removeClass('directo_desplegado');
			$('#comentarios').addClass('directo_contraido');
			$('#mostrar_comentarios').removeClass('desaparecido');
			$('#mostrar_video').addClass('desaparecido');
        
	};
	

</script>
		<iframe src="stc2000-fecha12-carrera.php" name="resultados" width="100%" height="1600" frameborder="0" id="resultados" allowfullscreen="allowfullscreen"></iframe></td>
    <td style="padding-left:4px" width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="padding-bottom:5px;">
		
		<div id="contenido_directo">
		
		<div id="video_en_vivo" class="video_en_vivo"><iframe src="http://www.youtube.com/embed/U6MEcnVzmEM?rel=0&amp;autoplay=1" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe></div>
		<div id="mostrar_comentarios" onClick="mostrar_comentarios()">MOSTRAR COMENTARIOS EN VIVO <img src="flechamenu-arriba.png" height="auto" border="0" /></div>
		<div id="mostrar_video" class="desaparecido" onClick="mostrar_video()">MOSTRAR VIDEO EN VIVO <img src="flechamenu.png" height="auto" border="0" /></div>
		<div id="comentarios" class="directo_contraido">
		 <?php
$cadena=file_get_contents('onlineTCf14.php');
echo $cadena;
?>
</div>
		</div>		</td>
      </tr>
      <tr>
        <td style="padding-top:5px;"><span class="directo_contraido">
         <?php
			$cadena=file_get_contents('tc-fecha16-noticias.html');
			echo $cadena;
		?>
        </span></td>
      </tr>
    </table></td>
  </tr>
</table>
</body></html>