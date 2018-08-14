<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>


<script>
function a(b) {
	var c= '';
	for(i=0; i<b.length; i++){
		if(b.charCodeAt(i)>127){ c += '&#' + b.charCodeAt(i) + ';'; }else{ c += b.charAt(i); }
  	}
  	document.forms.conversionForm.outputText.value = c;
}
</script>


<?php
if ($_FILES['userfile']['tmp_name']!=NULL)
{
$uploads_dir = '/home/tclarevista.com.ar/public_html/2017/';
        $tmp_name = $_FILES["userfile"]["tmp_name"];
        move_uploaded_file($tmp_name, $uploads_dir.$_FILES['userfile']['name']);
}

$carrera=$_POST["carrera"];

$categoria[1]=$_POST["categoria1"];
$categoria[2]=$_POST["categoria2"];
$categoria[3]=$_POST["categoria3"];
$categoria[4]=$_POST["categoria4"];
$categoria[5]=$_POST["categoria5"];
$categoria[6]=$_POST["categoria6"];
$categoria[7]=$_POST["categoria7"];
$categoria[8]=$_POST["categoria8"];
$categoria[9]=$_POST["categoria9"];
$categoria[10]=$_POST["categoria10"];
$categoria[11]=$_POST["categoria11"];
$categoria[12]=$_POST["categoria12"];
$categoria[13]=$_POST["categoria13"];
$categoria[14]=$_POST["categoria14"];
$categoria[15]=$_POST["categoria15"];
$categoria[16]=$_POST["categoria16"];
$categoria[17]=$_POST["categoria17"];
$categoria[18]=$_POST["categoria18"];
$categoria[19]=$_POST["categoria19"];
$categoria[20]=$_POST["categoria20"];
$categoria[21]=$_POST["categoria21"];
$categoria[22]=$_POST["categoria22"];
$categoria[23]=$_POST["categoria23"];
$categoria[24]=$_POST["categoria24"];
$categoria[25]=$_POST["categoria25"];
$categoria[24]=$_POST["categoria26"];
$categoria[25]=$_POST["categoria27"];
$etiquetas=$_POST["etiquetas"];

$onlinetwitter=$_POST["onlinetwitter"];

$titulo=$_POST["titulo"];
$titulotwitter=$_POST["titulo"];
$titulofacebook=$_POST["titulo"];

$foto=$_FILES['userfile']['name'];

$video=$_POST["video"];
$imagenvideo=$_POST["imagenvideo"];

$noticia=$_POST["noticia"];
$noticiatwitter=$_POST["noticia"];
$noticiafacebook=$_POST["noticia"];

$titulo = str_replace("\'", "'", $titulo );
$titulo = str_replace('\"', '"', $titulo );
$titulotwitter = str_replace("\'", "'", $titulotwitter );
$titulotwitter = str_replace('\"', '"', $titulotwitter );
$titulofacebook = str_replace("\'", "'", $titulofacebook );
$titulofacebook = str_replace('\"', '"', $titulofacebook );
$noticia = str_replace("\'", "'", $noticia );
$noticia = str_replace('\"', '"', $noticia );
$noticiatwitter = str_replace("\'", "'", $noticiatwitter );
$noticiatwitter = str_replace('\"', '"', $noticiatwitter );
$noticiafacebook = str_replace("\'", "'", $noticiafacebook );
$noticiafacebook = str_replace('\"', '"', $noticiafacebook );

$noticia = str_replace('
', '<br>', $noticia );
$noticiatwitter = str_replace('
', '<br>', $noticiatwitter );
$noticiafacebook = str_replace('
', '<br>', $noticiafacebook );

$web='/home/tclarevista.com.ar/public_html/2017/NOTICIASINICIO.php';

$numero=1;
$contador=1;







if (empty($carrera))
{
while (!empty($categoria[$numero]))
   {
    $numero++;
   }
$numero=$numero-1;
$contador1=$numero;


function asi($contador, $numero, $categoria)
   {$variable=NULL;
   
   while ($contador<$numero-1)
   {
   if ($contador==1)
   $variable=$variable.$categoria[$contador].', ';
   $contador++;
   }
   if ($contador==$numero-1)
   {
   $variable=$variable.$categoria[$contador]. ' y ';
   $contador++;
   $variable=$variable.$categoria[$contador].':';
   }
   if ($numero==1)
   {
   $variable=$categoria[$contador].':';
   }
   return $variable;
   };


$hola=asi ($contador, $numero, $categoria);


$hola1=$hola;
$hola=substr($hola,0,$hola-1);  
utf8_encode ($hola1);
utf8_encode ($titulotwitter);
utf8_encode ($noticiatwitter);
utf8_encode ($titulofacebook);
utf8_encode ($noticiafacebook);

$hola = str_replace("TCM", "TC Mouras", $hola );
$hola = str_replace("TCPM", "TC Pista Mouras", $hola );
$hola = str_replace("TCP", "TC Pista", $hola );
$hola = str_replace("TC", "Turismo Carretera", $hola );
$hola = str_replace("STC2000", "Súper TC2000", $hola );
$hola = str_replace("STurismo Carretera2000", "Súper TC2000", $hola );
$hola = str_replace("Turismo Carretera2000", "TC2000", $hola );
$hola = str_replace("Turismo Carretera Pista", "TC Pista", $hola );
$hola = str_replace("Turismo Carretera Mouras", "TC Mouras", $hola );
$hola = str_replace("Turismo Carretera Pista Mouras", "TC Pista Mouras", $hola );
$hola = str_replace("TRV6", "Top Race", $hola );
$hola = str_replace("TRS", "Top Race Series", $hola );
$hola = str_replace("TRJ", "Top Race Junior", $hola );
$hola = str_replace("TN", "Turismo Nacional", $hola );
$hola = str_replace("CARCC", "Rally CC Argentino", $hola );
$hola = str_replace("DESAYUNO", "Desayunos", $hola );
$hola = str_replace("RARG", "Rally Argentino", $hola );
$hola = str_replace("TP", "Turismo Pista", $hola );
$hola = str_replace("FR", "Fórmula Renault", $hola );
$hola = str_replace("T4000", "Turismo 4000 Argentino", $hola );
$hola = str_replace("TI", "Turismo Internacional", $hola );
$hola = str_replace("F1", "Fórmula 1", $hola );
$hola = str_replace("MOTOGP", "MotoGP", $hola );
$hola = str_replace("INDY", "IndyCar", $hola );
$hola = str_replace("INDYCARCAR", "IndyCar", $hola );
$hola = str_replace("WRCCC", "Rally CC mundial", $hola );
$hola = str_replace("WRC", "Rally Mundial", $hola );
$hola = str_replace("DAKAR", "Rally Dakar", $hola );
$hola = str_replace("FE", "Fórmula E", $hola );
$hola = str_replace("WTurismo CarreteraC", "WTCC", $hola );
$hola = str_replace("ARG", "Argentinos en el exterior", $hola);
$hola = str_replace("TECNICA", "Técnica Comentada", $hola);
$hola = str_replace("HISTORIA", "Esto es historia", $hola);

	  
$comienzo = strpos($noticia, ' @');
while ($comienzo!=FALSE)
{
$comienzo = strpos($noticia, ' @');
$termino = strpos($noticia, '_-',$comienzo);
$cadenaABuscar = substr($noticia, $comienzo, ($termino - $comienzo+2));
$noticia = str_replace($cadenaABuscar, ' ', $noticia );
$comienzo = strpos($noticia, ' @');
}

$comienzo = strpos($titulo, ' @');
while ($comienzo!=FALSE)
{
$comienzo = strpos($titulo, ' @');
$termino = strpos($titulo, '_-',$comienzo);
$cadenaABuscar = substr($titulo, $comienzo, ($termino - $comienzo+2));
$titulo = str_replace($cadenaABuscar, ' ', $titulo );
$comienzo = strpos($titulo, ' @');
}
$titulofacebook=$titulo;
$noticiafacebook=$noticia;

$comienzo = strpos($noticia, ' #');
while ($comienzo!=FALSE)
{
echo $comienzo;
$comienzo = strpos($noticia, ' #');
$termino = strpos($noticia, '_-', $comienzo);
$cadenaABuscar = substr($noticia, $comienzo, ($termino - $comienzo+2));
$noticia = str_replace($cadenaABuscar, ' ', $noticia );
$comienzo = strpos($noticia, ' #');
}
$comienzo = strpos($titulo, ' #');
while ($comienzo!=FALSE)
{
$comienzo = strpos($titulo, ' #');
$termino = strpos($titulo, '_-',$comienzo);
$cadenaABuscar = substr($titulo, $comienzo, ($termino - $comienzo+2));
$titulo = str_replace($cadenaABuscar, ' ', $titulo );
$comienzo = strpos($titulo, ' #');
}


$noticia = str_replace('-_', '', $noticia );
$titulo = str_replace('-_', '', $titulo );


setlocale(LC_ALL,"es_AR");
$fecha = strftime("%d de %B del %Y");

$obtenerlink=file_get_contents('/home/tclarevista.com.ar/public_html/2017/contador.php');
$aperturalink=fopen('/home/tclarevista.com.ar/public_html/2017/contador.php', 'w+');
$obtenerlink++;
fputs($aperturalink, $obtenerlink);
fclose ($aperturalink);



if ($_FILES['userfile']['name']!=NULL||$video!=NULL)
{

if ($_FILES['userfile']['name']!=NULL)
{
$armado = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3"><span class="Estilo5">'.$hola.'</span><br />'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td><a href="http://www.tclarevista.com.ar/2017/'.$_FILES['userfile']['name'].'"><img src="http://www.tclarevista.com.ar/2017/'.$_FILES['userfile']['name'].'" width="181"  border="0"/></a></td>
      </tr>
    </table><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}
else
{
$armado = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3"><span class="Estilo5">'.$hola.'</span><br />'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td>
		<a href="'.$video.'" rel="vidbox"><img src="'.$imagenvideo.'" alt="Miniatura" width="181"  border="0"/></a>
		</td>
      </tr>
    </table><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}
}

else
{
$armado = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3"><span class="Estilo5">'.$hola.'</span><br />'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}





$comienzo = strpos($armado, ">#");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado, ">#");
$termino = strpos($armado, '_-',$comienzo);
$cadenaABuscar = substr($armado, $comienzo+1, ($termino - $comienzo+1));
$armado = str_replace($cadenaABuscar, ' ', $armado);
$comienzo = strpos($armado, ">#");
}

$comienzo = strpos($armado, ">@");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado, ">@");
$termino = strpos($armado, '_-',$comienzo);
$cadenaABuscar = substr($armado, $comienzo+1, ($termino - $comienzo+1));
$armado = str_replace($cadenaABuscar, ' ', $armado );
$comienzo = strpos($armado, ">@");
}

if ($_FILES['userfile']['name']!=NULL||$video!=NULL)
{
if ($_FILES['userfile']['name']!=NULL)
{
$armado1 = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3">'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td><a href="http://www.tclarevista.com.ar/2017/'.$_FILES['userfile']['name'].'"><img src="http://www.tclarevista.com.ar/2017/'.$_FILES['userfile']['name'].'" width="181"  border="0"/></a></td>
      </tr>
    </table><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}

else
{
$armado1 = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3">'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td>
		<a href="'.$video.'" rel="vidbox"><img src="'.$imagenvideo.'" alt="Miniatura" width="181"  border="0"/></a>
		</td>
      </tr>
    </table><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}
}

else
{
$armado1 = '<a name="'.$obtenerlink.'" id="'.$obtenerlink.'"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350"><span class="Estilo3">'.$titulo.'</span></td>
    <td width="150" valign="top"><div align="right"><span class="Estilo4"> '.$fecha.' </span></div></td>
  </tr>
</table>
<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px"/>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="500"><span class="Estilo2">'.$noticia.'</span></td>
  </tr>
</table>
<table height="15"><tr><td></td></tr></table>';
}

$comienzo = strpos($armado1, ">#");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado1, ">#");
$termino = strpos($armado1, '_-',$comienzo);
$cadenaABuscar = substr($armado1, $comienzo+1, ($termino - $comienzo+1));
$armado1 = str_replace($cadenaABuscar, '', $armado1 );
$comienzo = strpos($armado1, ">#");
}

$comienzo = strpos($armado1, ">@");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado1, ">@");
$termino = strpos($armado1, '_-',$comienzo);
$cadenaABuscar = substr($armado1, $comienzo+1, ($termino - $comienzo+1));
$armado1 = str_replace($cadenaABuscar, '', $armado1 );
$comienzo = strpos($armado1, ">@");
}

$gestor=fopen($web, 'r+');
$final=file_get_contents('http://www.tclarevista.com.ar/2017/NOTICIASINICIO.php');
fputs($gestor, $armado);

fputs($gestor, $final);

fclose($gestor);

while ($contador1>=1)
{
$gestor1=fopen('/home/tclarevista.com.ar/public_html/2017/'.$categoria[$contador1].'.php', 'r+');
$final1=file_get_contents('http://www.tclarevista.com.ar/2017/'.$categoria[$contador1].'.php');
fputs($gestor1, $armado1);

fputs($gestor1, $final1);
fclose($gestor1);
$contador1--;
}



$hola1 = str_replace("TCPM", "#TCPM", $hola1 );
$hola1 = str_replace("TCM", "#TCM", $hola1 );
$hola1 = str_replace("TCP", "#TCPista", $hola1 );
$hola1 = str_replace("TC", "#TC", $hola1 );
$hola1 = str_replace("TC2000", "#TC2000", $hola1 );
$hola1 = str_replace("STC2000", "#SúperTC2000", $hola1 );
$hola1 = str_replace("S##TC2000", "#SúperTC2000", $hola1 );
$hola1 = str_replace("##TCPista", "#TCPista", $hola1 );
$hola1 = str_replace("##TCPM", "#TCPM", $hola1 );
$hola1 = str_replace("##TCM", "#TCM", $hola1 );
$hola1 = str_replace("##TC2000", "#TC2000", $hola1 );
$hola1 = str_replace("TRV6", "#TRV6", $hola1 );
$hola1 = str_replace("TRS", "#TRSeries", $hola1 );
$hola1 = str_replace("TRJ", "#TRJunior", $hola1 );
$hola1 = str_replace("TN", "#TurismoNacional", $hola1 );
$hola1 = str_replace("CARCC", "#CARCC", $hola1 );
$hola1 = str_replace("DESAYUNO", "#Desayuno", $hola1 );
$hola1 = str_replace("RARG", "#RallyArgentino", $hola1 );
$hola1 = str_replace("TP", "#TurismoPista", $hola1 );
$hola1 = str_replace("FR", "#FormulaRenault", $hola1 );
$hola1 = str_replace("T4000", "#Turismo4000", $hola1 );
$hola1 = str_replace("TI", "#TurismoInter", $hola1 );
$hola1 = str_replace("F1", "#F1", $hola1 );
$hola1 = str_replace("MOTOGP", "#MotoGP", $hola1 );
$hola1 = str_replace(", ", " ", $hola1 );
$hola1 = str_replace(" y ", " ", $hola1 );
$hola1 = str_replace("NASCAR", "#NASCAR", $hola1 );
$hola1 = str_replace("INDY", "#IndyCar", $hola1 );
$hola1 = str_replace("WRCCC", "#WorldRallyCC", $hola1 );
$hola1 = str_replace("WRC", "#WRC", $hola1 );
$hola1 = str_replace("DAKAR", "#Dakar", $hola1 );
$hola1 = str_replace("WTCC", "#WTCC", $hola1 );
$hola1 = str_replace("FE", "#FormulaE", $hola1 );
$hola1 = str_replace("ARG", "#Argentinos", $hola1);
$hola1 = str_replace("W#TCC", "#WTCC", $hola1);
$hola1 = str_replace("HISTORIA", "#Historia", $hola1 );
$hola1 = str_replace("TECNICA", "#Tecnica", $hola1 );

$ini = strpos($noticia, "<a style");
$fin = strpos($noticia, "<u>");
$longi = $fin-$ini;

$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;

while ($longi !=FALSE)
{
$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;
$longi1=$longi+3;
$extracto = substr ($noticiatwitter, $ini, $longi1);
$noticiatwitter = str_replace ($extracto,'',$noticiatwitter);
$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;
}

$ini = strpos($noticiafacebook, "<a style");
$fin = strpos($noticiafacebook, "<u>");
$longi = $fin-$ini;

while ($longi !=FALSE)
{
$ini = strpos($noticiafacebook, "<a style");
$fin = strpos($noticiafacebook, "<u>");
$longi = $fin-$ini;
$longi1=$longi+3;
$extracto = substr ($noticiafacebook, $ini, $longi1);
$noticiafacebook = str_replace ($extracto,'',$noticiafacebook);
$ini = strpos($noticiafacebook, "<a style");
$fin = strpos($noticiafacebook, "<u>");
$longi = $fin-$ini;
}

$noticiafacebook = str_replace('<br>', '', $noticiafacebook );
$noticiafacebook = str_replace('<i>', '', $noticiafacebook );
$noticiafacebook = str_replace('</i>', '', $noticiafacebook );
$noticiafacebook = str_replace('<b>', '', $noticiafacebook );
$noticiafacebook = str_replace('</b>', '', $noticiafacebook );
$noticiafacebook = str_replace('</u></a>', '', $noticiafacebook );
$noticiatwitter = str_replace('<br>', '', $noticiatwitter );
$noticiatwitter = str_replace('<i>', '', $noticiatwitter );
$noticiatwitter = str_replace('</i>', '', $noticiatwitter );
$noticiatwitter = str_replace('<b>', '', $noticiatwitter );
$noticiatwitter = str_replace('</b>', '', $noticiatwitter );
$noticiatwitter = str_replace('</u></a>', '', $noticiatwitter );



function getting_shorty($url, $format = '') {
    $username  = 'o_1c5adptiml';
    $apikey    = 'R_a491f528a2c7482e977281a1072208f9';
    $bitly_api = 'http://api.bit.ly/v3/shorten?login=' . $username . '&apiKey=' . $apikey . '&uri=' . urlencode( $url ) . '&format=' . $format;
    $curl_init = curl_init();
    curl_setopt($curl_init, CURLOPT_URL, $bitly_api);
    curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_init, CURLOPT_CONNECTTIMEOUT, 5);
    $data      = curl_exec($curl_init);
    curl_close($curl_init);
    return $data;
}


function set_shorten($text) {
    $match_url = preg_match_all('/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/', $text, $matches);
 
    $matches = $matches[0];
    if($match_url)
    {
        foreach($matches as $match)
        {
            $replace = getting_shorty($match);
            $text = str_replace($match, $replace, $text);
        }
    }
 $stringinicio=strpos($text,'j.mp\/');
 $stringfinal=strpos($text,'", "hash');
 $text=substr($text,$stringinicio,($stringfinal-$stringinicio));
 $text=str_replace('\/','/',$text);
 $text1=$text;
    return $text1;
}



$ancla='http://www.tclarevista.com.ar/2017/noticias-inicio.php#'.$obtenerlink;
$link=set_shorten($ancla);

$armadofacebook=substr($noticiafacebook,0,120);

$armadofacebook=$hola1." <span>".$titulofacebook."  <span>".$armadofacebook."... Ver nota: www.".$link;




$comienzo = strpos($armadofacebook, "<span>@");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armadofacebook, "<span>@");
$termino = strpos($armadofacebook, '_-',$comienzo);
$cadenaABuscar = substr($armadofacebook, $comienzo-1, (($termino - $comienzo)+3));
$armadofacebook = str_replace($cadenaABuscar, '', $armadofacebook );
$comienzo = strpos($armadofacebook, "<span>@");
}


$comienzo = strpos($armadofacebook, "_-");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armadofacebook, "_-");
$termino = strpos($armadofacebook, '-_',$comienzo);
$cadenaABuscar = substr($armadofacebook, $comienzo, (($termino - $comienzo)));
$armadofacebook = str_replace($cadenaABuscar, '', $armadofacebook );
$comienzo = strpos($armadofacebook, "_-");
}


$armadofacebook = str_replace('-_', '', $armadofacebook );
$armadofacebook = str_replace('-_', '', $armadofacebook );
$armadofacebook = str_replace('<span>', '', $armadofacebook );


$armadofacebook = htmlentities($armadofacebook, ENT_NOQUOTES,'UTF-8');



mail("axil682kalb@m.facebook.com",NULL,$armadofacebook,"FROM: tclarevista@ciudad.com.ar");

$comienzo = strpos($noticiatwitter, '_-');
while ($comienzo!=FALSE)
{
$comienzo = strpos($noticiatwitter, '_-');
$termino = strpos($noticiatwitter, '-_',$comienzo);
$cadenaABuscar = substr($noticiatwitter, $comienzo, ($termino - $comienzo+2));
$noticiatwitter = str_replace($cadenaABuscar, ' ', $noticiatwitter );
$comienzo = strpos($noticiatwitter, '_-');
}
$comienzo = strpos($titulotwitter, '_-');
while ($comienzo!=FALSE)
{
$comienzo = strpos($titulotwitter, '_-');
$termino = strpos($titulotwitter, '-_',$comienzo);
$cadenaABuscar = substr($titulotwitter, $comienzo, ($termino - $comienzo+2));
$titulotwitter = str_replace($cadenaABuscar, ' ', $titulotwitter );
$comienzo = strpos($titulotwitter, '_-');
}
$titulotwitter = str_replace('-_', '', $titulotwitter );

$armadotwitter=$hola1."\n".$titulotwitter.". Ver nota: ".$link;

$tamañotweet=strlen($armadotwitter);

while ($etiquetas!=NULL&&$tamañotweet<=140)
{
    $comienzo = strpos($etiquetas, '@');
    $termino = strpos($etiquetas, ' ',$comienzo);
    $cadenaABuscar = substr($etiquetas, $comienzo, ($termino+1 - $comienzo));
	$etiquetas = str_replace($cadenaABuscar, '', $etiquetas );
	$string2=strlen($cadenaABuscar);
	$tamañotweet=$tamañotweet+$string2;
	if ($tamañotweet<=140)
	{
	   $armadotwitter=$armadotwitter.' '.$cadenaABuscar;
    }
}


mail("trigger@applet.ifttt.com,lucas_barraza_2@hotmail.com",NULL,$armadotwitter,"FROM: tclarevista@ciudad.com.ar");




echo 'Las noticias subieron con &eacute;xito';

}



















else

{

while (!empty($categoria[$numero]))
   {
    $numero++;
   }
$numero=$numero-1;
$contador1=$numero;

function asi($contador, $numero, $categoria, $carrera)
   {$variable=NULL;
   
   while ($contador<$numero-1)
   {
   if ($contador==1)
       $variable=' - ';
   $variable=$variable.$categoria[$contador].', ';
   $contador++;
   }
   if ($contador==$numero-1)
   {
   if ($contador==1)
       $variable=' - ';
   $variable=$variable.$categoria[$contador]. ' y ';
   $contador++;
   $variable=$variable.$categoria[$contador].':';
   }
   if ($numero==1)
   {
   $variable=' - '.$categoria[$contador].':';
   }
   return $variable;
   };

      $date = new DateTime(null, new DateTimeZone('America/Argentina/Buenos_Aires'));
      $horario = $date->format('H:i');
   $hola=asi ($contador, $numero, $categoria, $carrera);

   $hola1=substr($hola, 3);   
utf8_encode ($hola1);
utf8_encode ($titulotwitter);
utf8_encode ($noticiatwitter);


$hola = str_replace("TCM", "TC Mouras", $hola );
$hola = str_replace("TCPM", "TC Pista Mouras", $hola );
$hola = str_replace("TCP", "TC Pista", $hola );
$hola = str_replace("TC", "Turismo Carretera", $hola );
$hola = str_replace("STC2000", "Súper TC2000", $hola );
$hola = str_replace("STurismo Carretera2000", "Súper TC2000", $hola );
$hola = str_replace("Turismo Carretera2000", "TC2000", $hola );
$hola = str_replace("Turismo Carretera Pista", "TC Pista", $hola );
$hola = str_replace("Turismo Carretera Mouras", "TC Mouras", $hola );
$hola = str_replace("Turismo Carretera Pista Mouras", "TC Pista Mouras", $hola );
$hola = str_replace("TRV6", "Top Race", $hola );
$hola = str_replace("TRS", "Top Race Series", $hola );
$hola = str_replace("TRJ", "Top Race Junior", $hola );
$hola = str_replace("TN", "Turismo Nacional", $hola );
$hola = str_replace("CARCC", "Rally CC Argentino", $hola );
$hola = str_replace("DESAYUNO", "Desayunos", $hola );
$hola = str_replace("RARG", "Rally Argentino", $hola );
$hola = str_replace("TP", "Turismo Pista", $hola );
$hola = str_replace("FR", "Fórmula Renault", $hola );
$hola = str_replace("T4000", "Turimso 4000 Argentino", $hola );
$hola = str_replace("TI", "Turismo Internacional", $hola );
$hola = str_replace("F1", "Fórmula 1", $hola );
$hola = str_replace("MOTOGP", "MotoGP", $hola );
$hola = str_replace(", ", " ", $hola );
$hola = str_replace(" y ", " ", $hola );
$hola = str_replace("INDY", "IndyCar", $hola );
$hola = str_replace("WRCCC", "Rally CC mundial", $hola );
$hola = str_replace("WRC", "Rally Mundial", $hola );
$hola = str_replace("DAKAR", "Rally Dakar", $hola );
$hola = str_replace("WTurismo CarreteraC", "WTCC", $hola );
$hola = str_replace("FE", "Fórmula E", $hola );
$hola = str_replace("ARG", "Argentinos en el exterior", $hola);
$hola = str_replace("TECNICA", "Técnica Comentada", $hola);
$hola = str_replace("HISTORIA", "Esto es historia", $hola);

$comienzo = strpos($noticia, ' #');
while ($comienzo!=FALSE)
{
$comienzo = strpos($noticia, ' #');
$termino = strpos($noticia, '_-',$comienzo);
$cadenaABuscar = substr($noticia, $comienzo, ($termino - $comienzo+2));
$noticia = str_replace($cadenaABuscar, ' ', $noticia );
$comienzo = strpos($noticia, ' #');
}

$comienzo = strpos($noticia, ' @');
while ($comienzo!=FALSE)
{
$comienzo = strpos($noticia, ' @');
$termino = strpos($noticia, '_-',$comienzo);
$cadenaABuscar = substr($noticia, $comienzo, ($termino - $comienzo+2));
$noticia = str_replace($cadenaABuscar, ' ', $noticia );
$comienzo = strpos($noticia, ' @');
}



$noticia = str_replace('-_', '', $noticia );   
$armado = '<span class="Estilo140">'.$horario.' - <span class="Estilo166">'.$noticia.'</span></span></span></span></span></span><hr />';

$comienzo = strpos($armado, ">#");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado, ">#");
$termino = strpos($armado, '_-',$comienzo);
$cadenaABuscar = substr($armado, $comienzo+1, ($termino - $comienzo+1));
$armado = str_replace($cadenaABuscar, '', $armado );
$comienzo = strpos($armado, ">#");
}

$comienzo = strpos($armado, ">@");
while ($comienzo!=FALSE)
{
$comienzo = strpos($armado, ">@");
$termino = strpos($armado, '_-',$comienzo);
$cadenaABuscar = substr($armado, $comienzo+1, ($termino - $comienzo+1));
$armado = str_replace($cadenaABuscar, '', $armado );
$comienzo = strpos($armado, ">@");
}   
   while ($contador1>=1)
{
$gestor1=fopen('/home/tclarevista.com.ar/public_html/2017/online'.$categoria[$contador1].'f'.$carrera.'.php', 'r+');
$final1=file_get_contents('http://www.tclarevista.com.ar/2017/online'.$categoria[$contador1].'f'.$carrera.'.php');
fputs($gestor1, $armado);

fputs($gestor1, $final1);
fclose($gestor1);
$contador1--;
}







if ($onlinetwitter==TRUE)
{
$comienzo = strpos($noticiatwitter, '_-');
while ($comienzo!=FALSE)
{
$comienzo = strpos($noticiatwitter, '_-');
$termino = strpos($noticiatwitter, '-_',$comienzo);
$cadenaABuscar = substr($noticiatwitter, $comienzo, ($termino - $comienzo+2));
$noticiatwitter = str_replace($cadenaABuscar, ' ', $noticiatwitter );
$comienzo = strpos($noticiatwitter, '_-');
}

   $noticiatwitter = str_replace('-_', '', $noticiatwitter ); 

$hola1 = str_replace("TCPM", "#TCPM", $hola1 );
$hola1 = str_replace("TCM", "#TCM", $hola1 );
$hola1 = str_replace("TCP", "#TCPista", $hola1 );
$hola1 = str_replace("TC", "#TC", $hola1 );
$hola1 = str_replace("TC2000", "#TC2000", $hola1 );
$hola1 = str_replace("STC2000", "#SúperTC2000", $hola1 );
$hola1 = str_replace("S##TC2000", "#SúperTC2000", $hola1 );
$hola1 = str_replace("##TCPista", "#TCPista", $hola1 );
$hola1 = str_replace("##TCPM", "#TCPM", $hola1 );
$hola1 = str_replace("##TCM", "#TCM", $hola1 );
$hola1 = str_replace("##TC2000", "#TC2000", $hola1 );
$hola1 = str_replace("TRV6", "#TRV6", $hola1 );
$hola1 = str_replace("TRS", "#TRSeries", $hola1 );
$hola1 = str_replace("TRJ", "#TRJunior", $hola1 );
$hola1 = str_replace("TN", "#TurismoNacional", $hola1 );
$hola1 = str_replace("CARCC", "#CARCC", $hola1 );
$hola1 = str_replace("DESAYUNO", "#Desayuno", $hola1 );
$hola1 = str_replace("RARG", "#RallyArgentino", $hola1 );
$hola1 = str_replace("TP", "#TurismoPista", $hola1 );
$hola1 = str_replace("FR", "#FormulaRenault", $hola1 );
$hola1 = str_replace("T4000", "#Turismo4000", $hola1 );
$hola1 = str_replace("TI", "#TurismoInter", $hola1 );
$hola1 = str_replace("WTCC", "#WTCC", $hola1 );
$hola1 = str_replace("FE", "#FormulaE", $hola1 );
$hola1 = str_replace("F1", "#F1", $hola1 );
$hola1 = str_replace("MOTOGP", "#MotoGP", $hola1 );
$hola1 = str_replace(", ", " ", $hola1 );
$hola1 = str_replace(" y ", " ", $hola1 );
$hola1 = str_replace("NASCAR", "#NASCAR", $hola1 );
$hola1 = str_replace("INDY", "#IndyCar", $hola1 );
$hola1 = str_replace("WRCCC", "#WorldRallyCC", $hola1 );
$hola1 = str_replace("WRC", "#WRC", $hola1 );
$hola1 = str_replace("DAKAR", "#Dakar", $hola1 );
$hola1 = str_replace("ARG", "#Argentinos", $hola1 );
$hola1 = str_replace("##TC2000", "#TC2000", $hola1 );
$hola1 = str_replace("W#TCC", "#WTCC", $hola1 );
$hola1 = str_replace("HISTORIA", "#Historia", $hola1 );
$hola1 = str_replace("TECNICA", "#Tecnica", $hola1 );

$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;

while ($longi !=FALSE)
{
$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;
$longi1=$longi+3;
$extracto = substr ($noticiatwitter, $ini, $longi1);
$noticiatwitter = str_replace ($extracto,'',$noticiatwitter);
$ini = strpos($noticiatwitter, "<a style");
$fin = strpos($noticiatwitter, "<u>");
$longi = $fin-$ini;
}

$noticiatwitter = str_replace('<br>', '', $noticiatwitter );
$noticiatwitter = str_replace('<i>', '', $noticiatwitter );
$noticiatwitter = str_replace('</i>', '', $noticiatwitter );
$noticiatwitter = str_replace('<b>', '', $noticiatwitter );
$noticiatwitter = str_replace('</b>', '', $noticiatwitter );
$noticiatwitter = str_replace('</u></a>', '', $noticiatwitter );   
   
   mail("trigger@recipe.ifttt.com",NULL,$hola1." \n".$noticiatwitter,"FROM: tclarevista@ciudad.com.ar");

   
}
   
   echo 'El online subió con &eacute;xito';
}



?>





</body>
</html>