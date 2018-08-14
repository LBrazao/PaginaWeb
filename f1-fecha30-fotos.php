 <script type="text/javascript">
				if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

	$('#deslizador').addClass('');

}
else{

$('#deslizador').addClass('deslizador_web');

}</script>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="75%" valign="top" style="border-right:1px dashed #999999; padding-right:8px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><?php
$cadena=file_get_contents('f1-fecha30-fotosviernes.html');
echo $cadena;
?></td>
        </tr>
		<tr>
		<td style="padding-top:35px"> 	<?php
$cadena=file_get_contents('f1-fecha30-listadofotos.html');
echo $cadena;
?>	</td>
		</tr>
      </table>	</td>
	<td width="25%" valign="top" align="center"><div align="center" style="padding:10px">
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
	  <br />
      <br />
      <?php
$carga=file_get_contents('f1-noticias_insertadas_vertical.html');
echo $carga;
?>
    </div></td>
  </tr>
</table>
</body></html>