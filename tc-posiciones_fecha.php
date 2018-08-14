
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="75%" valign="top" style="border-right:1px dashed #999999; padding-right:8px"><div style="padding:8px;">
      <span style="font-family:Oswald; font-size:22px">CUMPLIDA LA FECHA 15 (LA PLATA)</span>
	  <table border="0" width="100%" cellpadding="0" cellspacing="0"><tr>
	  <td><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tabla1_campeonato" class="tanda-completa-hover" onclick="tabla1_aparece()">
      <tr>
        <td>Copa de Oro</td>
      </tr>
    </table></td>
	  <td><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tabla2_campeonato" class="tanda-completa" onclick="tabla2_aparece()">
      <tr>
        <td>Tabla regular</td>
      </tr>
    </table></td>
	  </tr></table><div id="tabla1_full" class="galeriauno"><?php

$twit = file_get_contents('http://actc.org.ar/tc/copa-de-oro.html');

$inicio = strpos($twit, '<table id="table-hidden-content"');

$final = strpos($twit, '</div><!-- /tabla campeonato -->');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<a href', '<span href',$cadenaABuscar);
$cadenaABuscar = str_replace('</a>', '</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<span>&deg;</span>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('id="table-hidden-content"', 'border="0" cellspacing="0" cellpadding="5" id="copa" width="100%"',$cadenaABuscar);
$cadenaABuscar = str_replace('<th></th>', '<th align="center"><img title="Victorias" src="copa_icono.png"/></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Pos.</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="copas"></td>', '<td class="copas">0</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Marca</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Piloto</th>', '<th align="left">Piloto</th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Ptos.</th>', '<th align="center">Puntos</th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>N&uacute;mero</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<div class="info"><span></span>Pilotos que ganaron durante el presente calendario (requisito para ser campe&oacute;n)</div>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>151</td>', '<td><img height="35" src="ppcev_urcera.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>144</td>', '<td><img height="35" src="ppcev_savino.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>129</td>', '<td><img height="35" src="ppcev_giallombardo.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>116</td>', '<td><img height="35" src="ppcev_ruggiero.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>111</td>', '<td><img height="35" src="ppcev_silva.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>107</td>', '<td><img height="35" src="ppcev_cotignola.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>101</td>', '<td><img height="35" src="ppcev_ugalde.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>100</td>', '<td><img height="35" src="ppcev_diruscio.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>99</td>', '<td><img height="35" src="ppcev_jalaf.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>82</td>', '<td><img height="35" src="ppcev_lambiris.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>79</td>', '<td><img height="35" src="ppcev_nolesi.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>77</td>', '<td><img height="35" src="ppcev_bruno.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>72</td>', '<td><img height="35" src="ppcev_serrano.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>69</td>', '<td><img height="35" src="ppcev_gentile.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>68</td>', '<td><img height="35" src="ppcev_santero.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>63</td>', '<td><img height="35" src="ppcev_pbonelli.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>55</td>', '<td><img height="35" src="ppcev_mangoni.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>52</td>', '<td><img height="35" src="ppcev_okulovich.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>46</td>', '<td><img height="35" src="ppcev_dodge.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>45</td>', '<td><img height="35" src="ppcev_gilbicella.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>43</td>', '<td><img height="35" src="ppcev_ledesma.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>42</td>', '<td><img height="35" src="ppcev_gini.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>40</td>', '<td><img height="35" src="ppcev_dose.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>39</td>', '<td><img height="35" src="ppcev_echevarria.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>38</td>', '<td><img height="35" src="ppcev_decarlo.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>33</td>', '<td><img height="35" src="ppcev_ebarlin.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>31</td>', '<td><img height="35" src="ppcev_pernia.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>30</td>', '<td><img height="35" src="ppcev_gonzalez.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>28</td>', '<td><img height="35" src="ppcev_spataro.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>27</td>', '<td><img height="35" src="ppcev_martinez.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>24</td>', '<td><img height="35" src="ppcev_nbonelli.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>23</td>', '<td><img height="35" src="ppcev_ponce.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>19</td>', '<td><img height="35" src="ppcev_gianini.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>18</td>', '<td><img height="35" src="ppcev_dipalma.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>17</td>', '<td><img height="35" src="ppcev_moriatis.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>15</td>', '<td><img height="35" src="ppcev_ponte.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>14</td>', '<td><img height="35" src="ppcev_fontana.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>11</td>', '<td><img height="35" src="ppcev_castellano.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>10</td>', '<td><img height="35" src="ppcev_mazzacane.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>9</td>', '<td><img height="35" src="ppcev_trucco.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>8</td>', '<td><img height="35" src="ppcev_alaux.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>7</td>', '<td><img height="35" src="ppcev_angelini.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>6</td>', '<td><img height="35" src="ppcev_canapino.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>5</td>', '<td><img height="35" src="ppcev_ardusso.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>3</td>', '<td><img height="35" src="ppcev_werner.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>2</td>', '<td><img height="35" src="ppcev_rossi.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>1</td>', '<td><img height="35" src="ppcev_ortelli.png" /></td>',$cadenaABuscar);


echo $cadenaABuscar;

?></div>
	  <div id="tabla2_full" class="galeriacero">
	  <?php

$twit = file_get_contents('http://actc.org.ar/tc/campeonato.html');

$inicio = strpos($twit, '<table id="table-hidden-content"');

$final = strpos($twit, '</div><!-- /tabla campeonato -->');
$cadenaABuscar = substr($twit, $inicio, ($final - $inicio));
$cadenaABuscar = str_replace('<a href', '<span href',$cadenaABuscar);
$cadenaABuscar = str_replace('</a>', '</span>',$cadenaABuscar);
$cadenaABuscar = str_replace('<span>&deg;</span>', '',$cadenaABuscar);
$cadenaABuscar = str_replace('id="table-hidden-content"', 'border="0" cellspacing="0" cellpadding="5" id="copa" width="100%"',$cadenaABuscar);
$cadenaABuscar = str_replace('<th></th>', '<th align="center"><img title="Victorias" src="copa_icono.png"/></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Pos.</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td class="copas"></td>', '<td class="copas">0</td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Marca</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Piloto</th>', '<th align="left">Piloto</th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>Ptos.</th>', '<th align="center">Puntos</th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<th>N&uacute;mero</th>', '<th></th>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>151</td>', '<td><img height="35" src="ppcev_urcera.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>144</td>', '<td><img height="35" src="ppcev_savino.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>129</td>', '<td><img height="35" src="ppcev_giallombardo.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>116</td>', '<td><img height="35" src="ppcev_ruggiero.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>111</td>', '<td><img height="35" src="ppcev_silva.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>107</td>', '<td><img height="35" src="ppcev_cotignola.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>101</td>', '<td><img height="35" src="ppcev_ugalde.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>100</td>', '<td><img height="35" src="ppcev_diruscio.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>99</td>', '<td><img height="35" src="ppcev_jalaf.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>82</td>', '<td><img height="35" src="ppcev_lambiris.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>79</td>', '<td><img height="35" src="ppcev_nolesi.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>77</td>', '<td><img height="35" src="ppcev_bruno.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>72</td>', '<td><img height="35" src="ppcev_serrano.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>69</td>', '<td><img height="35" src="ppcev_gentile.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>68</td>', '<td><img height="35" src="ppcev_santero.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>63</td>', '<td><img height="35" src="ppcev_pbonelli.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>55</td>', '<td><img height="35" src="ppcev_mangoni.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>52</td>', '<td><img height="35" src="ppcev_okulovich.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>46</td>', '<td><img height="35" src="ppcev_dodge.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>45</td>', '<td><img height="35" src="ppcev_gilbicella.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>43</td>', '<td><img height="35" src="ppcev_ledesma.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>42</td>', '<td><img height="35" src="ppcev_gini.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>40</td>', '<td><img height="35" src="ppcev_dose.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>39</td>', '<td><img height="35" src="ppcev_echevarria.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>38</td>', '<td><img height="35" src="ppcev_decarlo.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>33</td>', '<td><img height="35" src="ppcev_ebarlin.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>31</td>', '<td><img height="35" src="ppcev_pernia.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>30</td>', '<td><img height="35" src="ppcev_gonzalez.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>28</td>', '<td><img height="35" src="ppcev_spataro.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>27</td>', '<td><img height="35" src="ppcev_martinez.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>24</td>', '<td><img height="35" src="ppcev_nbonelli.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>23</td>', '<td><img height="35" src="ppcev_ponce.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>19</td>', '<td><img height="35" src="ppcev_gianini.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>18</td>', '<td><img height="35" src="ppcev_dipalma.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>17</td>', '<td><img height="35" src="ppcev_moriatis.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>15</td>', '<td><img height="35" src="ppcev_ponte.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>14</td>', '<td><img height="35" src="ppcev_fontana.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>11</td>', '<td><img height="35" src="ppcev_castellano.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>10</td>', '<td><img height="35" src="ppcev_mazzacane.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>9</td>', '<td><img height="35" src="ppcev_trucco.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>8</td>', '<td><img height="35" src="ppcev_alaux.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>7</td>', '<td><img height="35" src="ppcev_angelini.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>6</td>', '<td><img height="35" src="ppcev_canapino.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>5</td>', '<td><img height="35" src="ppcev_ardusso.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>3</td>', '<td><img height="35" src="ppcev_werner.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>2</td>', '<td><img height="35" src="ppcev_rossi.png" /></td>',$cadenaABuscar);
$cadenaABuscar = str_replace('<td>1</td>', '<td><img height="35" src="ppcev_ortelli.png" /></td>',$cadenaABuscar);


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