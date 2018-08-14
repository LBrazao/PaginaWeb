<?php
$carga=file_get_contents('tc-fecha16-videos.html');

if($carga != NULL || $carga == "")
	{$urlMasImportante=substr ( $carga , 9 , 50);}

$mostrarVideos="<body><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td width=\"75%\" valign=\"top\" style=\"border-right:1px dashed #999999; padding-right:8px\"><table width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"table-layout:fixed\">
        <tr>
          <td><div class=\"video_en_vivo\" style=\"border-bottom:3px solid #FF0000\"><iframe src=\"$urlMasImportante\" scrolling=\"no\" frameborder=\"0\" name=\"contenedor_videos_categoria\" id=\"contenedor_videos_categoria\">    </iframe></div></td>
        </tr>
		<tr>
		  <td style=\"padding-top:35px\"><span style=\"padding:8px;\">";
echo $mostrarVideos;
echo $carga;
?>
<!--
<body><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="75%" valign="top" style="border-right:1px dashed #999999; padding-right:8px"><table width="95%" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed">
        <tr>
          <td><div class="video_en_vivo" style="border-bottom:3px solid #FF0000"><iframe src="http://www.youtube.com/embed/1AERJk-GmEc" scrolling="no" frameborder="0" name="contenedor_videos_categoria" id="contenedor_videos_categoria">    </iframe></div></td>
        </tr>
		<tr>
		  <td style="padding-top:35px"><span style="padding:8px;">
		    <-?php // este menos esta demas
$carga=file_get_contents('tc-fecha16-videos.html');
echo $carga;
?>
-->
		  </span></td>
		</tr>
		<tr>
                      <td style="padding-top:10px">
                        <a href="/2017/tc-videos.php"><table class="inferior_videos" width="100%" border="0" cellpadding="6" cellspacing="0"><tr>
                          <td>ACCED&Eacute; A TODOS LOS VIDEOS +</td>
                        </tr></table></a></td>
                    </tr>
      </table>	</td>
	<td width="25%" valign="top" align="center">
	<div align="center">
          
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
      </div>
	</td>
  </tr>
</table>

</body>