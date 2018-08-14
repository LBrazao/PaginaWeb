<table width="100%" height="91" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:7px">
  <tr>
    <td width="80%" valign="top" style="border-right: 1px dashed #999999"> <div style="padding:8px;">
      <span style="font-family:Oswald; font-size:22px">CUMPLIDA LA FECHA 10 (C&Oacute;RDOBA)</span>
	  <table border="0" width="100%" cellpadding="0" cellspacing="0"><tr>
	  <td width="25%"><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tabla1_campeonato" class="tanda-completa-hover" onclick="tabla1_aparece()">
      <tr>
        <td width="25%">Maxi Rally</td>
      </tr>
    </table></td>
	  <td width="25%"><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tabla2_campeonato" class="tanda-completa" onclick="tabla2_aparece()">
      <tr>
        <td width="25%">RC3</td>
      </tr>
    </table></td>
	<td width="25%"><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tabla3_campeonato" class="tanda-completa" onclick="tabla3_aparece()">
      <tr>
        <td width="25%">RC2N</td>
      </tr>
    </table></td>
	  <td width="25%"><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tabla4_campeonato" class="tanda-completa" onclick="tabla4_aparece()">
      <tr>
        <td width="25%">RC5</td>
      </tr>
    </table></td>
	  </tr></table><div id="tabla1_full" class="galeriauno">
	  <table cellpadding="0" cellspacing="0" border="0" class="rallyargentino_posiciones"><tr style="display:none"><td></td><?php

$twit = file_get_contents('http://www.rallyargentino.com/campeonato.php?anio=2017');

$inicio = strpos($twit, '<span class="texto_Azul"><strong>MAXI RALLY</strong></span></td>');

$final = strpos($twit, '<td height="35"><span class="texto_Azul"><strong>COPA SENIOR</strong></span></td>');
$cadenaABuscar = substr($twit, $inicio, ($final-17 - $inicio));
$cadenaABuscar = str_replace('<span class="texto_Azul"><strong>MAXI RALLY</strong></span></td>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<tr bgcolor="#00CCFF">', '<tr style="display:none" bgcolor="#00CCFF">',$cadenaABuscar);
$cadenaABuscar = str_replace('<td colspan="16" class="linea_ng">&nbsp;</td>', '<td colspan="16" style="display:none">&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#CCCCCC" class="titulo_blanco2"><span class="texto">', ' bgcolor="#CCCCCC" class="titulo_blanco2"><span class="texto">',$cadenaABuscar);
$cadenaABuscar = str_replace('<table width="1225"', '<table width="100%"',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#62ABBA"', '',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#CCCCCC"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<strong>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</strong>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('&nbsp;&nbsp;', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/mitsubishi.gif" alt="">', '<img height="35" src="/2018/logos/mitsubishi.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/chevrolet.gif" alt="">', '<img height="35" src="/2018/logos/tc_chevrolet.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/ford.gif" alt="">', '<img height="35" src="/2018/logos/tc_ford.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/vw.gif" alt="">', '<img height="35" src="/2018/logos/volkswagen.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/peugeot.gif" alt="">', '<img height="35" src="/2018/logos/peugeot.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/audi.gif" alt="">', '<img height="35" src="/2018/logos/audi.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/citroen.gif" alt="">', '<img height="35" src="/2018/logos/citroen.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/renault.gif" alt="">', '<img height="35" src="/2018/logos/renault.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/fiat.gif" alt="">', '<img height="35" src="/2018/logos/fiat.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/toyota.gif" alt="">', '<img height="35" src="/2018/logos/toyota.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/subaru.gif" alt="">', '<img height="35" src="/2018/logos/subaru.png" border="0">',$cadenaABuscar);

echo $cadenaABuscar;

?></td></tr></table></div>
	  
	  
	  <div id="tabla2_full" class="galeriacero">
	  <table cellpadding="0" cellspacing="0" border="0" class="rallyargentino_posiciones"><tr style="display:none"><td></td><?php

$twit = file_get_contents('http://www.rallyargentino.com/campeonato.php?anio=2017');

$inicio = strpos($twit, '<span class="texto_Azul"><strong>COPA SENIOR</strong></span></td>');

$final = strpos($twit, '<td height="35"> <span class="texto_Azul"><strong>RC2N</strong></span>');
$cadenaABuscar = substr($twit, $inicio, ($final-17 - $inicio));
$cadenaABuscar = str_replace('<span class="texto_Azul"><strong>COPA SENIOR</strong></span></td>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<tr bgcolor="#00CCFF">', '<tr style="display:none" bgcolor="#00CCFF">',$cadenaABuscar);
$cadenaABuscar = str_replace('<td colspan="16" class="linea_ng">&nbsp;</td>', '<td colspan="16" style="display:none">&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#CCCCCC" class="titulo_blanco2"><span class="texto">', ' bgcolor="#CCCCCC" class="titulo_blanco2"><span class="texto">',$cadenaABuscar);
$cadenaABuscar = str_replace('<table width="1225"', '<table width="100%"',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#62ABBA"', '',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#CCCCCC"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<strong>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</strong>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('&nbsp;&nbsp;', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/mitsubishi.gif" alt="">', '<img height="35" src="/2018/logos/mitsubishi.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/chevrolet.gif" alt="">', '<img height="35" src="/2018/logos/tc_chevrolet.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/ford.gif" alt="">', '<img height="35" src="/2018/logos/tc_ford.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/vw.gif" alt="">', '<img height="35" src="/2018/logos/volkswagen.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/peugeot.gif" alt="">', '<img height="35" src="/2018/logos/peugeot.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/audi.gif" alt="">', '<img height="35" src="/2018/logos/audi.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/citroen.gif" alt="">', '<img height="35" src="/2018/logos/citroen.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/renault.gif" alt="">', '<img height="35" src="/2018/logos/renault.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/fiat.gif" alt="">', '<img height="35" src="/2018/logos/fiat.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/toyota.gif" alt="">', '<img height="35" src="/2018/logos/toyota.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/subaru.gif" alt="">', '<img height="35" src="/2018/logos/subaru.png" border="0">',$cadenaABuscar);

echo $cadenaABuscar;

?></td></tr></table></div>

<div id="tabla3_full" class="galeriacero">
	  <table cellpadding="0" cellspacing="0" border="0" class="rallyargentino_posiciones_bis"><tr style="display:none"><td><?php

$twit = file_get_contents('http://www.rallyargentino.com/campeonato.php?anio=2017');

$inicio = strpos($twit, '<span class="texto_Azul"><strong>RC2N</strong></span>');

$final = strpos($twit, '<td height="35"> <span class="texto_Azul"><strong>RC5</strong></span>');
$cadenaABuscar = substr($twit, $inicio, ($final-17 - $inicio));
$cadenaABuscar = str_replace('<span class="texto_Azul"><strong>RC2N</strong></span>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<tr bgcolor="#00CCFF">', '<tr style="display:none" bgcolor="#00CCFF">',$cadenaABuscar);
$cadenaABuscar = str_replace('<td colspan="16" class="linea_ng">&nbsp;</td>', '<td colspan="16" style="display:none">&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#CCCCCC" class="titulo_blanco2"><span class="texto">', ' bgcolor="#CCCCCC" class="titulo_blanco2"><span class="texto">',$cadenaABuscar);
$cadenaABuscar = str_replace('<table width="1225"', '<table width="100%"',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#62ABBA"', '',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#CCCCCC"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<strong>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</strong>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('&nbsp;&nbsp;', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/mitsubishi.gif" alt="">', '<img height="35" src="/2018/logos/mitsubishi.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/chevrolet.gif" alt="">', '<img height="35" src="/2018/logos/tc_chevrolet.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/ford.gif" alt="">', '<img height="35" src="/2018/logos/tc_ford.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/vw.gif" alt="">', '<img height="35" src="/2018/logos/volkswagen.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/peugeot.gif" alt="">', '<img height="35" src="/2018/logos/peugeot.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/audi.gif" alt="">', '<img height="35" src="/2018/logos/audi.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/citroen.gif" alt="">', '<img height="35" src="/2018/logos/citroen.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/renault.gif" alt="">', '<img height="35" src="/2018/logos/renault.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/fiat.gif" alt="">', '<img height="35" src="/2018/logos/fiat.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/toyota.gif" alt="">', '<img height="35" src="/2018/logos/toyota.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/subaru.gif" alt="">', '<img height="35" src="/2018/logos/subaru.png" border="0">',$cadenaABuscar);

echo $cadenaABuscar;

?></table></div>

<div id="tabla4_full" class="galeriacero">
	  <table cellpadding="0" cellspacing="0" border="0" class="rallyargentino_posiciones_bis"><tr style="display:none"><td></td><?php

$twit = file_get_contents('http://www.rallyargentino.com/campeonato.php?anio=2017');

$inicio = strpos($twit, '<span class="texto_Azul"><strong>RC5</strong></span>');

$final = strpos($twit, '<a name="super" id="super"></a></td>');
$cadenaABuscar = substr($twit, $inicio, ($final-17 - $inicio));
$cadenaABuscar = str_replace('<span class="texto_Azul"><strong>RC5</strong></span>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<tr bgcolor="#00CCFF">', '<tr style="display:none" bgcolor="#00CCFF">',$cadenaABuscar);
$cadenaABuscar = str_replace('<td colspan="16" class="linea_ng">&nbsp;</td>', '<td colspan="16" style="display:none">&nbsp;</td>',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#CCCCCC" class="titulo_blanco2"><span class="texto">', ' bgcolor="#CCCCCC" class="titulo_blanco2"><span class="texto">',$cadenaABuscar);
$cadenaABuscar = str_replace('<table width="1225"', '<table width="100%"',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#62ABBA"', '',$cadenaABuscar);
$cadenaABuscar = str_replace(' bgcolor="#CCCCCC"', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<strong>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('</strong>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('&nbsp;&nbsp;', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/mitsubishi.gif" alt="">', '<img height="35" src="/2018/logos/mitsubishi.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/chevrolet.gif" alt="">', '<img height="35" src="/2018/logos/tc_chevrolet.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/ford.gif" alt="">', '<img height="35" src="/2018/logos/tc_ford.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/vw.gif" alt="">', '<img height="35" src="/2018/logos/volkswagen.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/peugeot.gif" alt="">', '<img height="35" src="/2018/logos/peugeot.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/audi.gif" alt="">', '<img height="35" src="/2018/logos/audi.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/citroen.gif" alt="">', '<img height="35" src="/2018/logos/citroen.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/renault.gif" alt="">', '<img height="35" src="/2018/logos/renault.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/fiat.gif" alt="">', '<img height="35" src="/2018/logos/fiat.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/toyota.gif" alt="">', '<img height="35" src="/2018/logos/toyota.png" border="0">',$cadenaABuscar);
$cadenaABuscar = str_replace('<img src="http://www.rallyargentino.org.ar.php56-7.dfw3-2.websitetestlink.com/elementos/subaru.gif" alt="">', '<img height="35" src="/2018/logos/subaru.png" border="0">',$cadenaABuscar);

echo $cadenaABuscar;

?></td>
</tr>
</table></td></tr></table></div>
      
    </div>
      </td>
    <td width="20%" valign="top"><div align="center">
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
</table>