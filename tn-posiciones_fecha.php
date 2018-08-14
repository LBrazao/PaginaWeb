<div style="padding:8px;">
      <span style="font-family:Oswald; font-size:22px">CUMPLIDA LA FECHA 12 (ROSARIO)</span>
	  <table border="0" width="100%" cellpadding="0" cellspacing="0"><tr>
	  <td><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tabla1_campeonato" class="tanda-completa-hover" onclick="tabla1_aparece()">
      <tr>
        <td width="25%">Clase 3</td>
      </tr>
    </table></td>
	  <td><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tabla2_campeonato" class="tanda-completa" onclick="tabla2_aparece()">
      <tr>
        <td width="25%">Clase 2</td>
      </tr>
    </table></td>
	
	  </tr></table><div id="tabla1_full" class="galeriauno"><?php

$twit = file_get_contents('http://www.apat.org.ar/posiciones/3');

$inicio = strpos($twit, '<table border="0" cellspacing="0" cellpadding="2" class="lista_resultados">');

$final = strpos($twit, '<!-- /box4 --> ');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('</div>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<table border="0" cellspacing="0" cellpadding="2" class="lista_resultados">', '<table border="0" cellspacing="0" cellpadding="0" class="lista_resultados" id="posiciones_tn">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="desk">Posicion</span>', '<span class="desk">Pos.</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="desk">Ranking</span>', '<span class="desk">N&ordm;</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td align="left">Auto</td>', '<td align="left">Marca</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Cruze</td>', '<td><img height="35" title="Chevrolet Cruze" src="/2018/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Focus</td>', '<td><img height="35" title="Ford Focus" src="/2018/logos/tc_ford.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>308</td>', '<td><img height="35" title="Peugeot 308" src="/2018/logos/peugeot.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Linea</td>', '<td><img height="35" title="Fiat Línea" src="/2018/logos/fiat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>All New Civic</td>', '<td><img height="35" title="Honda All New Civic" src="/2018/logos/honda.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Civic</td>', '<td><img height="35" title="Honda New Civic" src="/2018/logos/honda.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>New Civic</td>', '<td><img height="35" title="Honda New Civic" src="/2018/logos/honda.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Veloster</td>', '<td><img height="35" title="Hyundai Veloster" src="/2018/logos/hyundai.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Vento</td>', '<td><img height="35" title="Volkswagen Vento" src="/2018/logos/volkswagen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Corolla</td>', '<td><img height="35" title="Toyota Corolla" src="/2018/logos/toyota.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>147</td>', '<td><img height="35" title="Alfa Romeo 147" src="/2018/logos/alfa.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>C4 Lounge</td>', '<td><img height="35" title="Citroen C4 Lounge" src="/2018/logos/citroen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Leon</td>', '<td><img height="35" title="Seat Leon" src="/2018/logos/seat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Cerato</td>', '<td><img height="35" title="KIA Cerato" src="/2018/logos/kia.png" border="0"></td>',$cadenaABuscar);


echo $cadenaABuscar;

?></div>
	  <div id="tabla2_full" class="galeriacero">
	  <?php

$twit = file_get_contents('http://www.apat.org.ar/posiciones/2');

$inicio = strpos($twit, '<table border="0" cellspacing="0" cellpadding="2" class="lista_resultados">');

$final = strpos($twit, '<!-- /box4 --> ');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('</div>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<table border="0" cellspacing="0" cellpadding="2" class="lista_resultados">', '<table border="0" cellspacing="0" cellpadding="0" class="lista_resultados" id="posiciones_tn">',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="desk">Posicion</span>', '<span class="desk">Pos.</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<span class="desk">Ranking</span>', '<span class="desk">N&ordm;</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Auto</td>', '<td align="left">Marca</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Clio</td>', '<td><img height="35" title="Renault Clío" src="/2018/logos/renault.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>208</td>', '<td><img height="35" title="Peugeot 208" src="/2018/logos/peugeot.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Trend</td>', '<td><img height="35" title="Volkswagen Gol Trend" src="/2018/logos/volkswagen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Etios</td>', '<td><img height="35" title="Toyota Etios" src="/2018/logos/toyota.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Corsa</td>', '<td><img height="35" title="Chevrolet Corsa" src="/2018/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Fiesta Kinetic</td>', '<td><img height="35" title="Ford Fiesta Kinetic" src="/2018/logos/tc_ford.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Palio</td>', '<td><img height="35" title="Fiat Palio" src="/2018/logos/fiat.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>DS3</td>', '<td><img height="35" title="Citroen DS3" src="/2018/logos/citroen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Gol Trend</td>', '<td><img height="35" title="Volkswagen Gol Trend" src="/2018/logos/volkswagen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Gol</td>', '<td><img height="35" title="Volkswagen Gol" src="/2018/logos/volkswagen.png" border="0"></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>Classic</td>', '<td><img height="35" title="Chevrolet Classic" src="/2018/logos/tc_chevrolet.png" border="0"></td>',$cadenaABuscar);


echo $cadenaABuscar;

?></div>

      
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