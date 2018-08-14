
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="75%" valign="top" style="border-right:1px dashed #999999; padding-right:8px"> <div style="padding:8px;">
      <span style="font-family:Oswald; font-size:22px">CUMPLIDA LA FECHA 12 (ALTA GRACIA)</span>
	  <?php

$twit = file_get_contents('http://www.supertc2000.com.ar/estadisticas.php?accion=posiciones');

$inicio = strpos($twit, '<!-- LISTA DE PILOTOS -->');

$final = strpos($twit, '<div class="separador_rojo"></div>');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<!-- LISTA DE PILOTOS -->', '<table cellpadding="0" cellspacing="0" border="0" class="posiciones_stc2000">',$cadenaABuscar);
$cadenaABuscar = str_replace('<div>', '<tr>',$cadenaABuscar);
$cadenaABuscar = str_replace('</div>', '</tr>',$cadenaABuscar);
$cadenaABuscar = str_replace('<ul class="puntajes">', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</ul>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<li ', '<td ',$cadenaABuscar);
$cadenaABuscar = str_replace('</li>', '</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('&deg;</td>', '</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_chevrolet.png"></td>', '<td class="marca"><img height="35" title="Chevrolet" src="/2018/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_citroen.png"></td>', '<td class="marca"><img height="35" title="Citroen&nbsp;C4 Lounge" src="/2018/logos/citroen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_ford.png"></td>', '<td class="marca"><img height="35" title="Ford&nbsp;Focus" src="/2018/logos/tc_ford.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_fiat.png"></td>', '<td class="marca"><img height="35" title="Fiat&nbsp;Linea" src="/2018/logos/fiat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_renault.png"></td>', '<td class="marca"><img height="35" title="Renault&nbsp;Fluence" src="/2018/logos/renault.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_toyota.png"></td>', '<td class="marca"><img height="35" title="Toyota&nbsp;Corolla" src="/2018/logos/toyota.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="marca"><img src="assets/images/logo_peugeot.png"></td>', '<td class="marca"><img height="35" title="Peugeot&nbsp;408" src="/2018/logos/peugeot.png" border="0"></td>',$cadenaABuscar);


echo $cadenaABuscar;

?></table>
      
    </div>	</td>
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
</body></html>