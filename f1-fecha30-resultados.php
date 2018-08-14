
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="padding-right:4px" width="50%" valign="top">
	
	




	<div id="resultados_contenedor">
	<?php
$cadena=file_get_contents('f1-fecha30-resultados.html');
echo $cadena;
?>
	</div>
	
	</td>
    <td style="padding-left:4px" width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="padding-bottom:5px;">
		
		<div id="contenido_directo">
		
		
		<div id="comentarios_mostrados">COMENTARIOS <img src="flechamenu.png" height="auto" border="0" /></div>
		<div id="comentarios" class="directo_desplegado">
		 <?php
$cadena=file_get_contents('onlineF1f14.php');
echo $cadena;
?>
</div>
		
		</div>
		
		
		
		</td>
      </tr>
      <tr>
        <td style="padding-top:5px;"><span class="directo_contraido">
          <?php
$cadena=file_get_contents('noticias_insertadas.html');
echo $cadena;
?>
        </span></td>
      </tr>
    </table></td>
  </tr>
</table>
</body></html>