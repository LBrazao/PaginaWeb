<a name="136" id="136"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">TC2000 y Turismo Pista</span><br />RUMBO A ALTA GRACIA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 05 de marzo del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Se viene la primera competencia del TC2000 durante este 2014 que se iniciará este fin de semana en el Cabalén de Córdoba. Ya se han confirmado 24 autos para el parque y de concretarse podrían ser un total de 26.<br>Habrá modificaciones en el sistema y horarios, ya que <b>el día viernes comenzarán a hacerse pruebas comunitarias de 2 horas para cada uno de los pilotos y equipos. Además de ello se clasificará el sábado (este fin de semana de 14 a 15 horas) y se eliminará el sistema de Súper 8 para correrse 2 series clasificatorias.</b><br>Volverá a haber nombres importantes ya que <b>debutará Carlos Merlo (Campeón Fórmula Renault 2012), Facundo Della Motta, ingresa el Sportteam que deja el Súper TC2000 para ingresar en la categoría menor</b>. También es de destacar la continuidad del Pro Racing con sus 5 unidades Fiat Línea.<br><b>Se ha confirmado la participación conjunta con la categoría Turismo Pista durante 6 competencias</b>: La Plata (30/3), Junín (20/4), Concepción del Uruguay (31/8), Buenos Aires (21/9), San Luis o Río Cuarto (12/10) y La Plata (23/11) para cerrar su campeonato.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><html>
    <head>
        <title>  </title>

        <script type="text/javascript">
            function bredir(domain, url, ref, landerView, landerUrl, ldr, ifc) {
                var widthDiff, heightDiff, banner;
                var width = 0;
                var height = 0;
                var match = false;
                var l = false;

                // width, height, mystery 3rd value
                var bannerSizes = [
                    [300, 250, false],
                    [250, 250, false],
                    [240, 400, false],
                    [336, 280, false],
                    [180, 150, false],
                    [468, 60, false],
                    [234, 60, false],
                    [88, 31, false],
                    [120, 90, false],
                    [120, 60, false],
                    [120, 240, false],
                    [125, 125, false],
                    [728, 90, false],
                    [160, 600, false],
                    [120, 600, false],
                    [300, 600, false],
                    [300, 125, false],
                    [530, 300, false],
                    [190, 200, false],
                    [470, 250, false],
                    [720, 300, true],
                    [500, 350, true],
                    [550, 480, true],
                    //YouTube:
                    [560, 315, true],
                    [640, 360, true],
                    [853, 480, true],
                    [1280, 720, true],
                    //Vimeo:
                    [400, 300, true],
                    [500, 281, true],
                    //Hulu:
                    [480, 270, true],
                    [512, 288, true],
                    //metacafe:
                    [440, 248, true],
                    [460, 284, true],
                    [540, 304, true],
                    [600, 338, true],
                    //Other dimensions (metacafe, myspace video, yahoo video, break.com, ustream, vevo, justin.tv, etc):
                    [210, 120, true],
                    [400, 300, true],
                    [425, 350, true],
                    [425, 360, true],
                    [435, 251, true],
                    [435, 271, true],
                    [500, 300, true],
                    [525, 295, true],
                    [575, 324, true],
                    [620, 389, true],
                    [624, 351, true],
                    [630, 381, true],
                    [640, 385, true],
                    [650, 368, true],
                    [1000, 562, true],
                    [1000, 563, true],
                    [1000, 564, true]
                ];

                // specific iframe sizes to show blank
                // width/height = true means wildcard
                var hiddenIfcSizes = [
                    { width:true, height:1000, domains:['.facebook.com'] }
                ];

                if (typeof window.innerHeight == "number") {
                    height = window.innerHeight;
                    width = window.innerWidth;
                } else if (typeof document.body.offsetHeight == "number") {
                    height = document.body.offsetHeight;
                    width = document.body.offsetWidth;
                }

                //iframe check, if ifc, iframe = true
                if (top != self) {
                    ifc = 1;
                } else {
                    ifc = 0;
                }

                for (var n = 0; n < bannerSizes.length; n++) {
                    banner = bannerSizes[n];
                    widthDiff = Math.abs(width - banner[0]);
                    heightDiff = Math.abs(height - banner[1]);

                    if (widthDiff <= 2 && heightDiff <= 2) {
                        match = true;
                        l = banner[2];
                        break;
                    }
                }

                if (width === 0 && height === 0) {
                    return;
                }

                // check for hidden size case
                // 3 conditions
                // must be in iframe
                // can use wildcard width (true) or match exact
                // can use wildcard height (true) or match exact
                for (n = 0; n < hiddenIfcSizes.length; n++) {
                    ifcSize = hiddenIfcSizes[n];
                    if (ifc == 1
                        && (ifcSize.width === true || ifcSize.width == width)
                        && (ifcSize.height === true || ifcSize.height == height)
                    ) {
                        for (var i = 0; i < ifcSize.domains.length; i++) {
                            validDomain = ifcSize.domains[i];
                            if (domain.slice(-Math.abs(validDomain.length)) === validDomain || validDomain === '.') {
                                return;
                            }
                        }
                    }
                }

                if (domain != "www.facebook.com"
                    && domain != "platform.twitter.com"
                    && (match || (width < 100 && width !== 0) || (height < 100 && height !== 0))
                ) {
                    if (l && self == parent) {
                        return;
                    }
                    return "/banner.php?w=" + width + "&h=" + height + "&d=" + domain + "&url=" + url + "&ref=" + ref + "&view=" + landerView;
                } else if ((domain == "www.facebook.com" || domain == "platform.twitter.com")
                    && (width >= 250 && height >= 60)
                    && (match || (width < 100 && width !== 0) || (height < 100 && height !== 0))
                ) {
                    if (l && self == parent) {
                        return;
                    }
                    return landerUrl + "&w=" + width + "&h=" + height + "&ldr=" + "b" + "&ifc=" + ifc;
                } else if ((domain == "www.facebook.com" || domain == "platform.twitter.com")
                    && (width < 250 || height < 60)
                    && (match || (width < 100 && width !== 0) || (height < 100 && height !== 0))
                ) {
                    if (l && self == parent) {
                        return;
                    }
                    return "/banner.php?w=" + width + "&h=" + height + "&d=" + domain + "&url=" + url + "&ref=" + ref + "&view=" + landerView;
                } else {
                    return landerUrl + "&w=" + width + "&h=" + height + "&ifc=" + ifc;
                }
            }
            function bdetect() {
                var loc = bredir(
                    'www.tclarevista.com.ar', 
                    'www.tclarevista.com.ar%2F2014%2FNOTICIASINICIO.php', 
                    '', 
                    'error', 
                    '/main?wc=EWJsGglmARJfBBJyGAkB&url=www.tclarevista.com.ar%2F2014%2FNOTICIASINICIO.php'
                );

                if(typeof loc === 'undefined') {
                    self.close();
                    return;
                }

                location.replace(loc);

            }
        </script>
    </head>
    <body onLoad="bdetect()" style="margin: 0px;">
        <noscript>
            <iframe frameborder="0" src="/main?wc=EWJsGglmARJfBBJyGAkB&amp;url=www.tclarevista.com.ar%2F2014%2FNOTICIASINICIO.php" width="100%" height="100%"></iframe>
        </noscript>
    </body>
</html>
umbres. Ayer algunos pilotos y en especial Crutchlow se quejaron del neumático ya que no les permitía ir al límite por no tener agarre, pero <b>al final del día de hoy solo han quedado 3 compuestos para probar mañana de los 6 que se trajeron en un principio</b> y así definir el que se utilizará en octubre. <b>Mañana amenaza la lluvia, por lo que muchos van a rezar para que no precipite y se pueda realizar el test final y poder elegir correctamente el caucho para la cita australiana del calendario.</b></span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="127" id="127"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Moto GP</span><br />DECLARACIONES DEL DIA 1 DE PHILLIP ISLAND</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 03 de marzo del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Dani Pedrosa, único representante de Honda dijo: <i><b>"La pista no estaba mal, pero era más lenta..Por la mañana se trataba de coger sensaciones en la pista y encontrar el ritmo en las curvas. Después del almuerzo, he empezado las pruebas efectivas con los neumáticos. He probado distintos compuestos, y realmente no puedo decir mucho porque es confidencial, pero uno de esos neumáticos va mejor Hemos estado evaluando los diferentes neumáticos que han traído aquí y mañana vamos a probar otro”</b></i>.<br>Por su parte Lorenzo que criticó mucho los neumáticos en los test de Sepang con calor y bastante humedad, pero ahora dijo: <b><i>“Hemos comenzado con el neumático estándar con el que corrimos el año pasado, luego Bridgestone nos ha dado  tres nuevos neumáticos y hemos hecho dos tandas con cada uno de ellos...Al final, el último de ellos ha resultado el mejor, incluso mejor que el estándar. Después de Sepang dije a la prensa que los neumáticos Bridgestone de 2014 era demasiado duro para todo el mundo, y especialmente para Yamaha, pero con condiciones y asfalto normales no hay ningún problema, como hemos visto aquí”</i></b><br>Finalmente Cal Crutchlow no la pasó bien y comentó: <b><i>"Hemos utilizado el neumático que montamos en la carrera y no he tenido absolutamente ningún problema con ellos. Me he sentido muy cómodo..El agarre era un poco menor esta mañana, pero yo estaba bastante contento. A continuación hemos empezado a hacer algunos cambios en la moto y después de comer hemos probado los nuevos neumáticos...Creo que dos de los otros pilotos tenían una planificación diferente, nosotros teníamos los compuestos de nueva construcción y los otros los compuestos  de nueva especificación. ¡Créeme, el neumático de nueva construcción es mucho peor!. ¡He estado a punto de salir por encima del manillar unas doce veces en sólo cinco vueltas!. No tenía agarre, en absoluto. Con mi estilo de pilotaje -me gusta trazar por las curvas como un arco, como Lorenzo – el agarre lateral es muy importante. Él probaba hoy el nuevo compuesto y yo la nueva construcción. Al parecer, eso cambiará mañana, así quizá lo que probemos nos vaya mejor"</i></b>.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="126" id="126"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Moto GP</span><br />TEST PHILIP ISLAND DÍA 1</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 03 de marzo del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">En el día de hoy 5 pilotos giraron en la isla australiana en su primer día de test aquí, además giraron 4 Moto 2. Podés ver los tiempos aquí <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/motogp-philip.php'><b><u>www.tclarevista.com.ar/2014/motogp-phillip.php</u></b></a>. Además las fotos las podes ver aquí <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/motogp-philip-fotos.php'><b><u>www.tclarevista.com.ar/2014/motogp-phillip-fotos-.php</u></b></a>. Esta prueba era solo para equipos oficiales: Honda solo con Dani Pedrosa, Yamaha con Lorenzo y Rossi y Ducati con Crutchlow y Dovizioso. Lo principal en este entrenamiento era probar la durabilidad de los neumáticos y no generar tiempos ni mejoras en la moto. Para el día 1 (hoy) se hicieron tandas de entre 4 y 7 vueltas, el día 2 tendrá tandas de mas de 14 vueltas en simulación de carrera y el día 3 se simulará una carrera de 27 vueltas para lograr luego de estos 3 días, que Bridgestone elija los neumáticos adecuados para este 2014. Por ello cada piloto tendrá 6 neumáticos para salir a pista con diferentes compuestos y construcciones. 369 vueltas totalizaron entre los 5 pilotos, de los cuales Lorenzo revirtió los problemas de neumáticos de Sepang, Dovizioso con problemas de salud se perdió las primeras horas del test y Marquez por su lesión no estuvo. Esta prueba nació por los problemas de neumáticos surgidos en esta pista en 2013.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="125" id="125"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />FORCE INDIA MUY FUERTE</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 02 de marzo del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Junto a Williams <b>la segunda escudería que parece hacerse peligrosa por su buen motor Mercedes y por los malos motores Renault ajenos es Force India</b>: en especial con Sergio Pérez, quien ha sido el más veloz los dos días que ha estado en pista esta última semana.<br>En la segunda semana de Bahrein los Force India se han mostrado muy amenazantes, en especial porque <b>no tuvieron mayores problemas con sus monoplazas y pudieron hacer tantos simulacros de carrera y tandas largas como tenían planeado.</b><br>Exceptuando por el último día, los otros 3 han superado la barrera de las 100 vueltas y han completado todos los programas que tenían pensados realizar los 4 días. Únicamente les faltó el último simulacro de carrera el último día. <b>Hay enormes posibilidades de ver a los Force India peleando el podio y por qué no la victoria en Melbourne, principalmente en clasificación.</b><br>Hulkenberg: <b><i>"Realizamos algunas tandas largas y pudimos tachar otras cosas de la lista. Han sido dos buenos días para mí. Siempre quieres más tiempo de preparación pero creo que estamos en buena forma. El coche ha pasado por mucho desde el primer test en Jerez, hemos progresado cada día"</i></b><br>Pérez: <i><b>"Me siento positivo viendo cómo están saliendo las cosas. El trabajo con el set-up ha sido muy útil porque hemos probado cosas diferentes para tener una mejor orientación de cara a la primera carrera. Todo salió según lo planeado"</b></i></span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="124" id="124"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />WILLIAMS: EL NUEVO FAVORITO</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 02 de marzo del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Luego de haber estado observando y analizando los 12 días de intensa actividad de pretemporada en Jerez y Bahrein no es ninguna novedad de que los motores Mercedes han aplastado al resto y en especial a Renault que ha sido el mayor perdedor de los test. Sin embargo <i><b>aparecen 2 nuevas escuadras que tienen grandes chances de estar peleando por el podio y por qué no por una victoria: Williams y Force India.</b></i><br>El equipo británico ha tenido una gran performance estos últimos días tanto con Felipe Massa como con Valteri Bottas <i><b>sacando un promedio de 108 vueltas en los 4 días y obteniendo un máximo de 128 con el piloto finlandés el 5º día de test en Bahrein. Como si fuera poco nunca bajaron del 4º puesto y el penúltimo día fueron los más rápidos.</b></i><br><i><b>Los dos días de pruebas de Valteri Bottas el mismo marcó su vuelta más rápida con goma blanda y en simulacro de carrera</b></i>, cosa muchísimo más meritoria y considerable para tener en cuenta en competencia. Además <b><i>el ritmo vuelta tras vuelta se mantenía en 1'40" con tanques llenos</i></b>, un tiempo extraordinario en simulacro de carrera.<br><i><b>"Estoy contento en cómo ha ido la prueba para nosotros, hicimos muchos progresos en la puesta a punto y estamos tan preparados para Melbourne como se puede estar"</b></i>, dijo Valteri Bottas.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="123" id="123"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />LOTUS MUY COMPLICADO</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 02 de marzo del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Si bien han habido muchísimos problemas para la gran variedad de los equipo esta última semana en Bahrein, Lotus está dejando al descubierto que es uno de los equipos más perjudicados de cara a la primera carrera del año en Melbourne. En esta última semana de pruebas <i><b>nunca superó el 9º puesto de la tabla de posiciones y los 4 días ha hecho exactamente 31 vueltas cada uno excepto por hoy que dio 32, siendo una marca pésima que sobretodo no les dejó hacer ningún tipo de simulacro de carrera.</b></i><br><i><b>Los persistentes problemas de su motor Renault también son una de las claves que impiden que el auto negro levante vuelo </b></i>tanto para Pastor Maldonado como para Romain Grosjean que <i><b>varios días se han ido defraudados del circuito por los problemas en la unidad de potencia y escapes</b></i> que les han impedido dar todas las vueltas que pretendían y le daban muchísimo trabajo al equipo día y noche.<br><i><b>"No estamos en la situación idónea. Hay mucha tecnología que tenemos que entender, pero aunque hemos parado mucho tiempo y hemos pasado mucho tiempo en el garaje, cada vez que rodamos con el coche aprendemos algo nuevo"</b></i>, dijo el francés.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="122" id="122"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />RED BULL RUMBO A MELBOURNE</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 02 de marzo del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Las 12 jornadas de pretemporada en Jerez y Bahréin han dado un panorama interesante y muy contrastado comparado con lo que vienen siendo los últimos años. Al parecer las modificaciones 2014 en chasis y motor han sido beneficiosos para muchos pero muy perjudiciales para otros: <br><i><b>La mayor pesadilla está pasando para los motores Renault:</b></i> la fábrica francesa no le encuentra la vuelta a los problemas y para colmo ya tuvieron que homologar el motor para Melbourne con inconvenientes y todo. <br><i><b>Red Bull, la gran estrella de los últimos 4 años, presenta grandes dilemas de cara a la cita australiana</b></i> y, si bien tienen menos de 2 semanas para trabajar en el taller, <i><b>mañana finaliza su puesta en pista con una sesión de fotos en Bahréin</b></i>. Vettel y Ricciardo deberán lidiar con los problemas por lo menos hasta la segunda carrera en Malasia: <b><i>"No nos llamo los favoritos, no hemos hecho suficientes vueltas. No tenemos la velocidad de otros equipos"</i></b>, dijo Vettel <i><b>"estamos lejos de los tiempos de arriba, es un momento difícil y necesitamos más vueltas."</b></i></span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="121" id="121"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />TEST BAHREIN (2): ULTIMO DIA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 02 de marzo del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/bahrein050.jpg"><img src="http://www.tclarevista.com.ar/2014/bahrein050.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">TIEMPOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/f1-bahrein3.php'><b><u>www.tclarevista.com.ar/2014/f1-bahrein3.php</u></b></a><br>FOTOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/f1-bahrein-fotos.php'><b><u>www.tclarevista.com.ar/2014/f1-bahrein-fotos.php</u></b></a><br><i><b>La última jornada ha deparado 9 banderas rojas y problemas, cosa que hizo que se encendieran las luces del circuito y se prolongara la sesión unos 25 minutos a pedido de los equipo. El tiempo más rápido del día y de la semana ha sido de Lewis Hamilton quien marcó con los superblandos</b></i> y que al medio día tuvo problemas de caja luego solucionados.<br>Realmente el <i><b>Williams sigue demostrando el gran potencial ya que fue segundo a solo 0,709 del líder y ha marcado su vuelta rápida en simulación de carrera un con goma blanda</b></i>, cosa que lo deja muy bien parado para el inicio de la temporada. Además volvió a ser el que más vueltas dio con un total de 108.<br>Fernando <i><b>Alonso fue 3º con el Ferrari a 1 segundo del líder pero giró esa vuelta con temperatura ideal, neumático superblando y tanque vacío</b></i>: cosa que no lo deja tan cerca de la punta.<br>Sorprendentemente <i><b>Mercedes ha roto 2 motores hoy: Bottas (Williams) por girar tantas vueltas y Jenson Button por la mañana</b></i>, quien por cierto aprovechó para probar el alerón que utilizará en Melbourne.<br>Hoy Sauber ha girado con sus dos pilotos sin fallos en ningún momento: Adrián Sutil y Esteban Gutiérrez, quienes completaron un total de 177 vueltas.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="70" id="70"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />TEST BAHREIN (2): DIA 3</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 01 de marzo del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/bahrein023.jpg"><img src="http://www.tclarevista.com.ar/2014/bahrein023.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">TIEMPOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/f1-bahrein3.php'><b><u>www.tclarevista.com.ar/2014/f1-bahrein3.php</u></b></a><br>FOTOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/f1-bahrein-fotos.php'><b><u>www.tclarevista.com.ar/2014/f1-bahrein-fotos.php</u></b></a><br>Hoy ha sido el penúltimo día de pretemporada en Bahrein y los tiempos más rápidos fueron marcados sobre los últimos minutos como si fuera una clasificación real donde tiran toda la carne al azador en la última vuelta. <b><i>Felipe Massa con el Williams marcó 1:33,258 siendo el más rápido de la semana a 1 segundo del récord 2013</i></b> y casi superando el tiempo de la semana pasada de Rosberg donde el clima era mucho mejor. Los dos más rápidos hoy por lejos <i><b>(Massa y Rosberg) marcaron sus cronos con superblandos y tanques vacíos.</b></i><br>La mañana ha sido complicada para<i><b> Mercedes con Rosberg (perdió 2 horas cambiando motor desde la noche) McLaren con Magnussen (perdió 3 horas por hacer cambios electrónicos que obligaron a desmontar todo el coche) y Ferrari con Räikkonen (problemas de software) aunque al final pudo completar su simulación de carrera.</b></i><br>El gran golpe del día han sido las <i><b>2 detenciones involuntarias de Vettel: una antes de salir a pista y otra en la curva 4 sin haber dado una vuelta, cosa que lo dejó sin girar.</b></i> Además un incendio en la 1ra vuelta del Sauber de Sutil también lo hizo permanecer inactivo hoy.<br>El viento complicó el trabajo de los autos aunque alivió un poco la temperatura de pista. Además se descubrió que <i><b>los problemas de los motores Renault podrían atenuarse simplemente bajándole la potencia al software</b></i> luego de una prueba con Caterham.<br>MAÑANA ÚLTIMO DÍA DE PRUEBAS DE PRETEMPORADA.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="69" id="69"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />TEST BAHREIN (2): DIA 2</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 28 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/bahrein018.jpg"><img src="http://www.tclarevista.com.ar/2014/bahrein018.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">CLICK AQUÍ PARA VER LOS TIEMPOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/f1-bahrein3.php'><b><u>www.tclarevista.com.ar/2014/f1-bahrein3.php</u></b></a><br>CLICK AQUÍ PARA VER LAS FOTOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/f1-bahrein-fotos.php'><b><u>www.tclarevista.com.ar/2014/f1-bahrein-fotos.php</u></b></a><br>Hoy<b><i> Sergio Pérez ha vuelto a ser el mejor crono del día</i></b> aunque 4 décimas más lento que ayer debido a las altas temperaturas registradas en el ambiente y asfalto, sin embargo <i><b>la gran figura de hoy ha sido Fernando Alonso quien con la Ferrari ha logrado por primera vez romper la barrera de las 100 vueltas y logró hacer un simulacro de carrera con un ritmo espectacular de 1'40 por vuelta</b></i>. Lo más sorprendente ha sido que con los neumáticos blandos quedó a 0,064 de Pérez que marcó con los superblandos y a una vuelta rápida y no en ritmo de carrera como lo ha hecho Alonso. El piloto de Ferrari ha probado su nuevo alerón junto a la escuadra y al parecer ha ido mejor que ayer con Räikkonen.<br>Daniel Ricciardo no ha logrado dar todas las vueltas que querían pero <i><b>por primera vez mete a Red Bull entre los 3 primeros luego de todos los problemas de su motor Renault,</b></i> sin embargo falta mucho para pelear en los primeros planos.<br>Las dos banderas rojas fueron ocasionadas por Hamilton y Button quienes han detenido su auto a un costado de la pista.<br>MALA NOTICIA PARA RENAULT: <i><b>la FIA ha exigido la homologación hoy mismo para el GP de Australia</b></i> a pesar de los problemas que aún persisten, por lo que la marca no podrá estar al 100% para la primera del año.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="68" id="68"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Moto GP</span><br />TEST SEPANG: DIA 3</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 28 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/sepang026.jpg"><img src="http://www.tclarevista.com.ar/2014/sepang026.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">CLICK AQUÍ PARA VER LOS TIEMPOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/motogp-sepang.php'><b><u>www.tclarevista.com.ar/2014/motogp-sepang.php</u></b></a><br>CLICK AQUÍ PARA VER LAS FOTOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/motogp-sepang-fotos.php'><b><u>www.tclarevista.com.ar/2014/motogp-sepang-fotos.php</u></b></a><br>Ha habido un empate en el día de hoy, y es que<b><i> Dani Pedrosa y Valentino Rossi han logrado el tiempo más rápido hoy</i></b> sobre el inicio de la sesión con exactamente el mismo crono (1:59,999) 1 milésima de segundo abajo de los 2 minutos. El tiempo ha sido el más rápido de la semana con los neumáticos Bridgestone 2014, ya que la semana pasada aún se utilizaban los de 2013.<br>En especial <i><b>el equipo Yamaha ha tenido problemas con los nuevos compuestos que les han hecho perder agarre y Jorge Lorenzo terminó 7º</b></i>. <i><b>La semana pasada no solo que el clima era más favorable sino que los Bridgestone 2013 eran más entendibles.</b></i><br>Sobre el final de la sesión el equipo Ducati con Crutchlow y Dovizioso anunció que utilizarán motos Open para la temporada.<br><i><b>PRÓXIMO TEST:</b></i> 3, 4 y 5 de marzo en Phillip Island donde tampoco estará el campeón Marc Márquez.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="67" id="67"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula Renault</span><br />CALENDARIO 2014</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 27 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">23 de marzo / Autódromo Ciudad de Rafaela, Santa Fe<br>13 de abril / Autódromo de Viedma, Río Negro<br>04 de mayo / Autódromo El Zonda, San Juan, San Juan<br>25 de mayo / Autódromo Ciudad de Rosario, Santa Fe<br>15 de junio / Autódromo Provincial de La Pampa, Toay, La Pampa<br>20 de Julio / Autódromo Oscar y Juan Galvez, Buenos Aires (200 Kilómetros de Bs. As)<br>17 de agosto / Autódromo Santiago Guarnieri, Resistencia, Chaco * A confirmar<br>07 de septiembre / Circuito Callejero Santa Fe Ciudad, Santa Fe<br>05 de octubre / Autódromo Internacional de Termas de Río Hondo, Santiago del Estero<br>26 de octubre / Autódromo Oscar Cabalen, Alta Gracia, Córdoba<br>09 de noviembre / Autódromo Internacional de Codegua, República de Chile* A confirmar<br>30 de noviembre / Circuito Internacional de Potrero de Los Funes, San Luis</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="66" id="66"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">TC2000</span><br />CALENDARIO 2014</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 27 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">09 de marzo / Autódromo Oscar Cabalén de Alta Gracia, Córdoba.<br>30 de marzo / Autódromo Roberto Mouras de La Plata, Buenos Aires.<br>20 de abril / Autódromo Eusebio Marcilla de Junín, Buenos Aires.<br>18 de mayo / Autódromo Rosendo Hernández, San Luis.<br>08 de junio / Escenario a confirmar.<br>06 de Julio / Escenario a confirmar.<br> 10 de agosto / Escenario a confirmar.<br>31 de agosto / Autódromo de Concepción el Uruguay, Entre Rios.<br>21 de septiembre / Autódromo Oscar y Juan Gálvez de Buenos Aires, Buenos Aires.<br>12 de octubre / Escenario a confirmar.<br>02 de noviembre / Escenario a confirmar.<br> 23 de noviembre / Escenario a confirmar.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="65" id="65"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Súper TC2000</span><br />CALENDARIO 2014</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 27 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">3 de marzo / Autódromo Ciudad de Rafaela, Santa Fe<br>13 de abril / Autódromo de Viedma, Río Negro<br>04 de mayo / Autódromo El Zonda, San Juan, San Juan<br>25 de mayo / Autódromo Ciudad de Rosario, Santa Fe<br>15 de junio / Autódromo Provincial de La Pampa, Toay, La Pampa<br>20 de Julio / Autódromo Oscar y Juan Galvez, Buenos Aires (200 Kilómetros de Bs. As)<br>17 de agosto / Autódromo Santiago Guarnieri, Resistencia, Chaco  * A confirmar<br>07 de septiembre / Circuito Callejero Santa Fe Ciudad, Santa Fe<br>05 de octubre / Autódromo Internacional de Termas de Río Hondo, Santiago del Estero<br>26 de octubre / Autódromo Oscar Cabalen, Alta Gracia, Córdoba<br>09 de noviembre / Autódromo Internacional de Codegua, República de Chile* A confirmar<br>30 de noviembre / Circuito Internacional de Potrero de Los Funes, San Luis<br><br><br></span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="64" id="64"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />TEST BAHREIN (2): DIA 1</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 27 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/bahrein006.jpg"><img src="http://www.tclarevista.com.ar/2014/bahrein006.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">CLICK AQUÍ PARA VER LOS TIEMPOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/f1-bahrein3.php'><b><u>www.tclarevista.com.ar/2014/f1-bahrein3.php</u></b></a><br>CLICK AQUÍ PARA VER LAS FOTOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/f1-bahrein-fotos.php'><b><u>www.tclarevista.com.ar/2014/f1-bahrein-fotos.php</u></b></a><br>Ha finalizado el primer día de test en Bahréin en lo que respecta a la segunda semana de trabajo. El más rápido ha sido Checo Pérez Con el Force India quien con su motor mercedes ha sido el auto más confiable junto al segundo <b><i>Valteri Bottas que dio 118 vueltas simulando carrera a un ritmo muy bueno (1'41) y ha marcado su mejor crono a 8 décimas del líder Pérez</i></b> que marcó un tiempazo con los neumáticos blandos.<br>La temperatura ha sido mucho más alta que la semana pasada, llegando a 29º en el ambiente y 38º en la pista.<br><i><b>Los motores Mercedes continúan con la contundencia</b></i>: 1º Pérez, 2º Bottas, 4º Rosberg y 6º Magnussen, mientras que <i><b>los Renault ocupan los 3 últimos lugares con Kvyat, Maldonado, Kobayashi y el 7º con Ricciardo</b></i>. Daniil Kvyat que ha confesado tener problemas en el impulsor, cosa que lo hizo detenerse.<br>La novedad de Ferrari es que <i><b>con Räikkonen han probado un alerón delantero nuevo (y por cierto bastante raro), pero con el cual no han logrado su mejor tiempo. La escudería italiana tuvo problemas técnicos por la mañana</b></i> que solamente le posibilitaron dar 12 vueltas, pero por la tarde llegaron a completar 54 subiéndose al 3º puesto.<br>Lotus cerró su tanda rápidamente ya que los escapes no respondieron como lo esperado y se dedicaron a repararlos comenzando minutos antes de finalizar la tanda de la tarde.<br><b><i>MAÑANA 2DO DÍA DE PRUEBAS DE ESTA SEMANA PARA SEGUIR CON LA PRETEMPORADA 2014.</i></b></span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="63" id="63"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera y Argentinos en el exterior</span><br />"LA IDEA ES DAR CONTINUIDAD"</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 27 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Mauro Giallombardo habló sobre su invitación al Stock Car brasileño en AM 890 por TC La Revista para la carrera con invitados en San Pablo (Interlagos), circuito que tradicionalmente cierra el mundial de la Fórmula 1. El piloto de Quilmes se mostró muy entusiasmado, sobretodo teniendo en cuenta su seguidilla de salidas al exterior: <i><b>"Es la tercera incursión fuera del país. Voy a ser parte de la carrera de invitados del Stock Car con el equipo Alves Competicion de Carlos Alves y compartiré la butaca con Marcos Gomes que el año pasado ganó dos carreras y este año se postula para el campeonato"</b></i>, afirmó. <br><i><b>Quien realizó el contacto fue Maxi Juárez</b></i>, ya que él tiene contacto con la escudería y al consultarle por algún piloto de interés <b><i>él respondió el nombre del campeón de TC 2012.</i></b><br><i><b>"El auto es de tracción trasera con 450 caballos, un auto con mucha tecnología, con mucha carga aerodinámica y se asemeja a lo que podría ser un Top Race pero con mejor goma y mayor potencia. Son motores V8 y van realmente muy rápido y exigen mucho al piloto por la cantidad de carga aerodinámica"</b></i>, decía en cuanto al auto.<br>Por último sorprendió escuchar la importancia y prioridad que Mauro le da a la categoría:<b> <i>"La idra es dar continuidad, hay que ver cómo funcionamos. Soy realista y depende de los resultados, en ese sentido el automovilismo es muy crudo"</i></b>, asimiló.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="62" id="62"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Moto GP</span><br />MÁRQUEZ DIRECTO A QATAR</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 27 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">El campeón del mundo ha confirmado luego de unos recientes estudios que no estará presente en los test de Phillip Island el 23 de marzo: últimos test antes del inicio de la temporada 2014 en la carrera nocturna de Losail. <b><i>"Obviamente estoy decepcionado por no estar en Sepang estos días y perderme el siguiente test de Phillip Island también es lamentable, pero creo que es la mejor decisión"</i></b>, dijo el español <i><b>"Después de mi visitarme hoy con el Dr. Mir, y aunque estaba contento con la situación general de la pierna después de sólo siete días desde el accidente, me ha aconsejado no correr riesgos innecesarios. Así que voy a tener tiempo para descansar y ponerme en la mejor forma posible para volver a Qatar para la primera carrera"</b></i> afirmó quien intentará llegar al 100% físicamente el 23 de marzo a Qatar, aunque no habrá tenido contacto don la Honda número 1.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="61" id="61"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Moto GP</span><br />TEST SEPANG: DIA 2</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 27 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/sepang013.jpg"><img src="http://www.tclarevista.com.ar/2014/sepang013.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">CLICK AQUÍ PARA VER LOS TIEMPOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/motogp-sepang.php '><b><u>www.tclarevista.com.ar/2014/motogp-sepang.php </u></b></a><br>CLICK AQUÍ PARA VER LAS FOTOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/motogp-sepang-fotos.php'><b><u>www.tclarevista.com.ar/2014/motogp-sepang-fotos.php</u></b></a><br>Segundo día de pruebas para la MotoGP donde ha hecho un poco más de frío y la pista no ha llegado a tener todo el agarre necesario para que sea el 100% rápido. <i><b>Dani Pedrosa hoy se puso al frente del clasificador bajando 8 décimas lo hecho ayer.</b> </i>Fue escoltado por Aleix Espargaró y Alvaro Bautista: ambos ayer fueron 2º y 1º demostrando que nada es casualidad y que están para cosas grandes. <br>Mañana será el último día de pruebas en Sepang y sorprendió la confirmación de <i><b>Marc Márquez de que no estará en los últimos test de Phillip Island el 23 de marzo, con lo que irá totalmente frío a la primera carrera en Losail sin haber tocado su moto.</b></i></span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="59" id="59"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera</span><br />"DISFRUTO MAS CUANDO LLEGO A MI CASA"</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 27 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Nicolás Trosset charló con TC La Revista por AM 890 y confirmó, entre otras cosas su presencia en el Mouras y como va llevando la nueva Dodge: <i><b>"Este fin de semana voy de nuevo con Gastón Rossi en el Mouras y vuelvo a subirme a un Chevrolet. Buscaremos tener la suerte que no tuvimos la primera en Mar de Ajó."</b></i><br>En cuanto a la Dodge: <i><b>"Me siento muy seguro con el auto pero comparado con el Chevrolet le tengo que agarrar un poco la mano porque tiene algunos vicios distintos. Paraná lo conozco porque corría ahí con el Fórmula Renault cuando probaba." </b></i><br>Debido a lo fuerte que es estar tan adelante las primeras carreras de TC comentó algo bastante curioso: <i><b>"Disfruto más la carrera cuando llego a mi casa que cuando porque esa muy shockeante en el momento de largar en primera fila, es el sueño del pibe."</b> </i><br>Además de todo la parte presupuestaria es la más importante y complicada que no sabe si le permitirá continuar todo el año: <i><b>"Con el equipo no me daba para arrancar porque se me cayeron dos publicidades pero al final hicimos el esfuerzo y seguimos a base de resultados ilusionado con buscar algo nuevo. Es una tristeza ver comunicados de pilotos que se están bajando, la situación económica del país no es buena para esto"</b></i>, afirmo.<br>Por último destacó cuanto le gustaría estar maniobrando ahí con su tío: <i><b>"Me hubiese gustado que él (Fontana) estuviera adelante para ver si compartíamos alguna maniobra"</b></i>, finalizó.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="56" id="56"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera y TC Pista</span><br />REINICIO AL ESTILO NACAR</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 26 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Se implementará a partir de la próxima carrera en Junín el 30 de Marzo un <b><i>nuevo sistema de reinicio tras un pace car. </i></b><br>Será exactamente igual que una largada de carrera o serie: deberán enfilarse en dos columnas respetando los 7 metros entre cada fila y, una vez que el pace car abandone la pista, <i><b>se reiniciará cuando el semáforo se ponga en verde</b></i>. Obviamente el puntero ocupará el lado de la cuerda y el segundo el lado externo. Por último los autos tendrán que venir a una velocidad de entre 80 y 90 km/h para que todo esté en regla.<br>En caso de que los autos estén mal acomodados se continuará con la bandera amarilla descontando la vuelta correspondiente y se intentará reiniciar en la vuelta siguiente.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="55" id="55"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Moto GP</span><br />TEST SEPANG: DIA 1</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 26 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/sepang005.jpg"><img src="http://www.tclarevista.com.ar/2014/sepang005.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">CLICK AQUÍ PARA PARA VER LOS TIEMPOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/motogp-sepang.php'><b><u>www.tclarevista.com.ar/2014/motogp-sepang.php</u></b></a> <br>CLICK AQUÍ PARA PARA VER LAS FOTOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/motogp-sepang-fotos.php'><b><u>www.tclarevista.com.ar/2014/motogp-sepang-fotos.php</u></b></a><br>El primero de los 3 días de la segunda parte de <i><b>Test en Sepang ha tenido como el más rápido a Álvaro Bautista</b></i>, centrándose en ajustar la puesta punto en el tren trasero de su Honda del equipo GO&FUN con los nuevos neumáticos duros.<br><b><i>Jorge Lorenzo ha probado su moto con la nueva medida máxima de combustible</i></b> para este año y también probar los nuevos neumáticos duros siendo 5º.<br>En Repsol Honda están trabajando principalmente en adaptarse al nuevo chasis de la moto siendo Dani Pedrosa6º.<br>Sorprendió ver a <i><b>los 2 hermanos Aleix y Pol Espargaró en las dos primeras posiciones</b></i> respectivamente del primer día de pruebas.<br><b><i>Marc Márquez se entera de las novedades por los medios de comunicación</i></b> ya que sigue recuperándose de su fractura en el peroné y buscará estar presente en los últimos test de pretemporada en Phillip Island.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="54" id="54"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Rally Argentino y Rally Mundial</span><br />MAS DESAFIOS PARA EL 2014</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 26 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">El piloto peruano Nicolás Fuchs confirmó hace varias horas su calendario deportivo 2014. El mismo comprende 7 fechas del campeonato mundial de WRC2 (México, Portugal, Argentina, Italia, Polonia, Finlandia y España) y el campeonato argentino de rally como lo hizo el año pasado. "Nuestra meta es muy alta ahora que iremos a WRC2. Fernando Mussano será nuevamente mi copiloto y me siento muy contento porque nos hemos podido complementar muy bien durante todo este tiempo." <br>El piloto peruano competirá con un Ford Fiesta RRC y un R5, mientras que en el Rally Argentino dejará el Baratec Maxi Rally para subirse a un Ford Fiesta MR construído por los hermanos Baratteri en Almafuerte (Córdoba).</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="52" id="52"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">TC Pista y Turismo Carretera</span><br />PARA DAR EL OK</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 26 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Este viernes la ACTC realizará la última inspección al Autódromo de Concordia para que el mismo albergue el 28, 29 y 30 de marzo a la máxima del automovilismo argentino. Aparentemente no habría ningún problema porque como confirmó Cutro (encargado del autódromo) hace una semana en los micrófonos de TC La Revista <i><b>"solo estamos en duda por ver si llegamos con el tema parquizado, luego tenemos sala de prensa para 500 periodistas, el asfalto y la torre están listos entre otras cosas"</b></i>. Tendremos novedades en los próximos días para ver si se puede concretar la vuelta del TC a Concordia y el debut en este circuito.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="51" id="51"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">TC Pista</span><br />GRAN AVANCE</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 26 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Fue un fin de semana de menos a más para Juan José Ebarlín en Paraná, donde el día viernes comenzaba un poco atrás en los entrenamientos (P21), luego lograba avanzar en la clasificación del viernes, la cual quedó como clasificación general. Finalmente en la serie se mantuvo aunque aprovechó la deserción de Nazareno López para avanzar una posición y en la final logró avanzar 3 posiciónes y hubieran sido 4 sino hubiera sido por el error que cometió al pisar una mancha de aceite y ser superado por Urcera: <i><b>"Fue una carrera muy exigente, pero el auto funcionó muy bien, con un gran ritmo. Estoy muy conforme con el resultado, lo necesitábamos"</b></i>, confesó el piloto de Benito Juarez.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="49" id="49"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera</span><br />CAMBIO DE MOTORISTA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 26 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">El piloto de la costa tenía pensado confirmar en las próximas fechas el ingreso de su nuevo motorista Fabián Acuña, sin embargo las cosas se acomodaron y Adrián podrá comenzar a contar con los impulsores del de Tandil a partir del próximo fin de semana en Junín (9 de Marzo). <i><b>"Esperamos con más ganas que nunca la carrera de Junín. Agradecer a Laborito quien trabajó en este inicio de año y siempre supo de nuestros planes"</b></i>, asimiló</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="48" id="48"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera y TC Pista</span><br />UN PARANA UN POCO APAGADO</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 25 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Luego de la actividad del último fin de semana en el Autódromo Ciudad de Paraná con la segunda fecha del Turismo Carretera y TC Pista, donde siempre el público ha llenado las tribunas, la concurrencia de la gente no ha sido para nada normal. En esta oportunidad pudimos apreciar tanto desde nuestra presencia en pista como en boxes la ausencia de espectadores por lo menos en un 60% en comparación con el año pasado.<br>Muchos de los pilotos han dicho que uno de los factores es que ahora hay 3 carreras en Entre Ríos, por lo que la gente se reparte y elige la carrera que le queda más cerca. Sin duda otro gran factor son las complicaciones económicas que hubo en los últimos meses.<br>En la pista solamente había una o dos hileras de autos alrededor de todo el perímetro y en algunos lugares era intermitente. Lo cierto es que nunca hubo colas largas un mes antes de la carrera para comprar entradas como muchos dijeron y se notó el día viernes donde apareció muy pero muy poca gente.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="47" id="47"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Moto GP</span><br />NO HAY BRASIL EN 2014</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 25 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2"> Brasil no tendrá gran premio de Moto GP en este 2014, no llegaron a temrinar las obras a tiempo para la última inspección de la categoría reina del motociclismo de pista a nivel mundial. La cita iba a ser en el autódromo de Brasilia por lo que quedará en 18 fechas el calendario 2014 de la categoría. Brasil quedará probablemente para 2015. Recordemos que la fecha original para Brasil iba a ser el 28/09, lugar que ocupará el Gran Premio de Aragón que originalmente estaba previsto para el 21/09.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="46" id="46"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera</span><br />FECHA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 21 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Consultado Eros Borgono por el tema del Super TC2000, tambien lo hicimos respecto a la visita del Turismo de Carretera. Según nos informara para acceder a las exigencias de la categoría en relación a las obras, manifestó que el 28 de marzo se licita y a los 20 días comenzarían los trabajos. Si el tiempo acompaña agosto<br>es el mes donde tendrian todo concluido y de esa manera la tan ansiada competencia. Recorriendo el calendario existen libres el 10 y el 31 de agosto. Por otra parte la<br>chicana uno con las modificaciones solicitadas estaria con antelación. Ya estuvo Ortelli entre otros chequeando ese tema</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="45" id="45"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Súper TC2000</span><br />FECHA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 21 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">El Super TC2000 pretende correr en Rafaela el mes de marzo. No hubo anuncio de fecha por parte del Club. Ero Borgono consultado no esta de acuerdo con que se haga en esa fecha ya que el autódromo no está en condiciones. El factor mayor es el clima con constantes lluvia. Ejemplo, el pasto tiene mas de un metro de alto, lo corta hoy y a la semana nuevamente recupera esa altura. Ademas hay otros acondicionamiento que por el clima impide que se haga en tiempo y forma. No queremos dice Eros, que por sus urgencias vengan y despues nos critiquen</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="44" id="44"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />TEST BAHREIN: DIA 2</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 20 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/bahreindia2.jpg"><img src="http://www.tclarevista.com.ar/2014/bahreindia2.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">Click aquí para ver los resultados: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/f1-bahrein2.php'><b><u>www.tclarevista.com.ar/2014/f1-bahrein2.php</u></b></a><br>Hoy ha sido Kevin Magnussen con un tiempo muy veloz y neumáticos superblandos quien ha marcado el ritmo y ha sido el primero en montar estos neumáticos a un buen ritmo sacándole 1,5 segundos a su principal perseguidor Nico Hulkenberg. Hoy ha habido mayor temperatura que ayer y la pista un poco más limpia. <b><i>"la tarde fue buena para nosotros, trabajamos sobre nuestros problemas y me están dando muy buena orientación haciéndome sentir seguro"</i><br></b>Lotus volvió a tener un pésimo día ya que solo pudo dar 18 vueltas debido al gran trabajo en pits: <i><b>"Han sido 2 días frustrantes"</b></i>, dijo Grosjean.<br>El campeón Vettel giró 57 vueltas y fue 7º: <i><b>"Lo más importante ha sido girar y lo hemos hecho"</b></i>, dijo Sebastian.<br>Los motores Mercedes vuelven a relegar a los Renault que continúan trabajando para solucionar sus problemas.<br>Nico Rosberg ha hecho 2 banderas rojas por problemas mecánicos. <br>El Williams de Valteri Bottas fue el que más vueltas dio (116) contrastando las 8 que dio ayer su compañero de equipo Felipe Massa.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="43" id="43"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Moto GP</span><br />SE ACCIDENTÓ MARC MÁRQUEZ</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 20 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">El campeón del mundo de motos Marc Márquez ha sufrido una fractura espiroidea en el tercio distal del peroné derecho mientras practicaba dirt track, un deporte drift con motos. El piloto español fue trasladado rápidamente al Hospital Universitario Quirón Dexeus de Barcelona donde le diagnosticaron este panorama y lo trataron correspondientemente. <b><i>"No hay lesión en los ligamentos ni dislocación, por lo que no es necesario llevar a cabo una operación. Se prevé un periodo de entre 3 y 4 semanas para la completa recuperación"</i></b>, confirmó el doctor Mir.<br>Márquez no podrá estar presente en los test de Malasia que se realizarán la semana que viene y tampoco en los de Phillip Island la semana contigua ya que estará 2 semanas sin poder pisar.<br><i><b>"Ha sido un accidente muy desafortunado"</b></i>, decía Márquez <b><i>"Le podría haber sucedido a cualquiera en cualquier momento. Me llevaron directamente al hospital y allí el Dr. Mir me ha tratado. Por suerte no hay lesiones en los ligamentos y parece que es una fractura limpia"</i></b>, concluyó.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="42" id="42"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />LOTUS CONFIRMA A RENAULT</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 20 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Hace algunas horas en los test de Bahréin se confirmó que el equipo Lotus continuará confiando en los motores Renault para este 2014. Realmente una confirmación que se da muy sobre la hora a pesar de estar a pocos días de comenzar el Gran Premio de Melbourne y estar terminando los test de pretemporada. La incertidumbre se mantiene ya que además de que los motores Renault no funcionaron bien en Jerez, continúan con fallos y sus autos bastante atrás en Bahréin (algunos incluso sin dar vueltas rápidas).</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="41" id="41"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera</span><br />LISTO PARA PARANÁ</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 20 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">De cara a lo que será su primera competencia en este 2014, Martín Serrano probó ayer en La Plata varios aspectos técnicos de su Dodge y realizó distintas modificaciones en el vehículo. Habló por la mañana al aire en La Edición Oral de TC La Revista y comentó los resultados: <b><i>"Probamos ayer en La Plata bastantes vueltas. Fue muy positivo ya que si los problemas de ayer aparecían en Paraná nos iba a complicar. No nos dejaron conformes los tiempos, pero sí el funcionamiento del auto"</i></b>, confirmó Martín quien partirá a Paraná en las próximas horas para comenzar con la actividad el viernes en el autódromo entrerriano. "Terminamos con el auto equilibrado y en los entrenamientos de Paraná nos faltan tocar un par de cositas. El objetivo va a ser llegar y que el auto sea confiable durante toda la final", finalizó.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="40" id="40"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Súper TC2000, TC2000 y Fórmula Renault</span><br />PEON JUNTO A REGALIA EN EL A. C. A.</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Pablo Peon, presidente del Súper TC2000 y del TC2000 estuvo en la presentación de Facundo Regalia en el A. C. A. Además de expresar su apoyo a "Facu" habló del automovilismo argentino. Comenzó siendo terminante "el calendario lo presentaremos primero a las terminales y luego de su aprobación al público, creemos que en 48 horas". Comentó que por un atraso en el reasfaltado del circuito de Santiago de Chile el Súper TC2000 no irá en la 2da fecha allí sino que más adelante. Dijo nuevamente que el circuito callejero de Buenos Aires no tendrá fecha, se mantendrá la fecha en el estadio único de La Plata y que preparan unas 3 sorpresas para el público este año. Admitió nuevamente que el automovilismo "está muy atomizado y eso genera pobreza en lugar de enriquecerlo" a su criterio una posible salida sería acomodar las categorías y un escalonamiento de las mismas, comparandolo con un árbol: "Para que un árbol crezca se necesita cortarle algunas ramas, un tutor guía para que crezca derecho y regarlo" admitiendo así la falta de un ente que organice todas las categorías nacionales. Dijo que este año las categorías que él preside trabajarán fundamentalmente en recuperar público en los autódromos aunque salvando raras excepciones a nivel mundial las categorías tienden a no tener público en los circuitos. Agregó que las categorías teloneras no colaboran con el rating televisivo pero son necesarias para sustentar el producto economicamente. Finalmente no quiso hablar del no permiso a competir en TC para Matías Milla campeón del TC2000 para "no decir algo que no es constructivo para el automovilismo" dejando en claro su disconformismo y agregando. "Nosotros propusimos en el A. C. A. que el campeón de la clase 3 del Turismo Nacional debute en el Súper TC2000 sin pasar por el TC2000, pero bueh". Claramente dando a entender su predisposición y no el del TC.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="37" id="37"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Argentinos en el exterior</span><br />SE PRESENTO REGALIA A LA GP2</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/IMG-20140219-00049.jpg"><img src="http://www.tclarevista.com.ar/2014/IMG-20140219-00049.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">Se presentó en el 9no piso de la sede central del A.C.A. la campaña de Regalia en lo que será la temporada 2014 de la GP2. Estuvo el mismo "Facu" y Carlos García Remohí en la conferencia de prensa. Allí se presentó el diseño del auto, casco y buzo antiflama. Además <b>contó la posibilidad de subirse a un auto de Fórmula 1 en caso de que ande bien en las pruebas de Abu Dhabi</b> además contó que está trabajando fisicamente en Argentina para <b>en unas semanas volver a España a seguir el trabajo físico con su habitual entrenador, al que se suma un seguimiento del equipo Force India. No tiene todo el presupuesto confirmado para la temporada completa pero si la base necesaria para arrancarlo</b>. Finalmente agregó que se dió el paso mas importante que es el de la GP3 a la GP2, ya que es un salto mas dificil que el de la GP2 a la Fórmula 1.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="36" id="36"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />BAHREIN: DIA 1 - LOTUS</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/lotus-bahrein1.jpg"><img src="http://www.tclarevista.com.ar/2014/lotus-bahrein1.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">A pesar de haber mostrado su nuevo diseño innovador de la trompa del monoplaza, realmente no ha sido un día productivo para Romain Grosjean y el equipo Lotus. Ha habido problemas en la unidad de almacenamiento de energía, la cual han tenido que cambiar y les ha llevado muchísimo tiempo en hacerlo, por lo que solo pudieron dar 8 vueltas y el tiempo más lento del día (1:44'832) quedando a 8 segundos de Hulkenberg.<br><i><b>"Dimos menos vueltas de las que teníamos programadas en el coche, pero aún así era genial salir a la pista por primera vez en el E22. Para mí, personalmente me sentí bien de estar de vuelta al volante, pero algunas cuestiones nos retuvieron hoy"</b></i> dijo Grosjean.<br>Pero Alan Permane, director de operaciones de pista, fue más concreto y preciso a la hora de hablar de fallas: <i><b>"No es ningún secreto que estamos frustrados, ya que queremos sumar vueltas para entender nuestro nuevo coche y todos los diferentes elementos que contiene. Las unidades de energía contienen una gran cantidad de nuevas tecnologías y, ciertamente, tuvimos problemas con la unidad de almacenamiento de energía".</b></i><br>Mañana será un nuevo día para Lotus y esperan comenzar desde cero nuevamente con Grosjean.<br>FUENTE: thef1.com</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="35" id="35"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />BAHREIN: DIA 1 - WILLIAMS</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/williams-bahrein1.jpg"><img src="http://www.tclarevista.com.ar/2014/williams-bahrein1.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">Realmente ha sido un día frustrante para Felipe Massa y todo el equipo Williams, ya que han tenido una larga espera al principio del día para tomar contacto con la pista y solamente han dado 5 vueltas sin marcar tiempos antes de volver a meterse en los pits: "Fue un día difícil. Fue frustrante para mí pero también para todo el equipo, ya que todos queríamos tener un montón de vueltas hoy. Tuvimos algunos problemas con el coche que estamos investigando y nuestro objetivo es resolverlos para mañana y los días siguientes", confesó el brasileño.<br>Los análisis por parte del equipo han indicado que han tenido que desarmar el motor para observar la célula de combustible que aparentemente habría sido el problema de lo ocurrido.<br>Mañana el equipo probará con Valteri Bottas si es que no tiene la mala suerte ocurrida en el día de hoy.<br>FUENTE: thef1.com</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="34" id="34"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />EXPLICACIONES DE RENAULT</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Habló Remi Taffin, director de operaciones de Renault Sport, 'poniéndole los puntos' a los chicos de Red Bull justificando el por qué se retrasaron al salir por la mañana en los test: <i><b>"Hemos estado esperándolos durante el día, por lo que hemos salido cuando han querido salir y hemos acabado cuando han decidido acabar"</b></i>, dijo el francés afirmando que no fue un problema de ellos.<br><b><i>"Como he dicho, por alguna razón hemos tenido algún coche en boxes (Vettel, Grosjean y Kvyat), pero si te fijas en Caterham verás que han dado 60 o 70 vueltas. Han rodado constantes. Estamos contentos, relativamente"</i></b>, dijo Remi excusándose.<br>Más allá de todo confesó que hay una incertidumbre en los mismos motores Renault: <b><i>"Sabemos que hay un problema que aún no entendemos, pero lo acabaremos dominando. Creo que a finales de mes tendremos una especificación con la que estaremos contentos de ir a Melbourne."</i></b><br>Por último afirma que mejoraron muchos aspectos con respecto a los test de Jerez: <i><b>"Después del primer test de Jerez, en el que perdimos mucho tiempo, hemos intentado tenerlo todo a punto para este martes. Lo hemos conseguido de alguna forma, y podemos decir claramente que hoy hemos podido usar nuestro tren motriz como hemos querido. Aún no al nivel que queremos, pero tenemos una buena base desde la que trabajar."<br>FUENTE: thef1.com</b></i></span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="33" id="33"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />BAHREIN: DIA 1 - FERRARI</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/ferrari-bahrein1.jpg"><img src="http://www.tclarevista.com.ar/2014/ferrari-bahrein1.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">Fernando Alonso, protagonista de hoy con la marca italiana, ha progresado con la evolución del vehículo ya que se probaron muchos aspectos técnicos y se sintieron las mejoras tanto desde arriba como desde abajo del auto ya que marcó el segundo mejor tiempo a 1 segundo de Hulkenberg.<br>Se trabajó sobre la inclinación del suelo y distintos ajustes en la unidad de potencia que parece evolucionar a un buen ritmo. Alonso se ha mostrado entusiasta con respecto a la prueba de los neumaticos: <i><b>"Estamos en una pista que es más representativa, con temperaturas normales, donde ha sido más fácil de comprender el comportamiento de los neumáticos"</b></i>, dijo.<br>Por último probaron el sistema de frenado de cable y aspectos aerodinámicos. <br>Pero no todo es color de rosa para el asturiano, ya que cada vez que se levantaba el pie del acelerador con el limitador puesto zapateaba muchísimo. Además por la mañana el auto largó un humo tremendo al salir del pitlane que asustó a más de uno, sin embargo desapareció rápido y no volvió a repercutir.<br>Mañana Alonso tendrá su último día de pruebas en Bahréin esta semana.<br>FUENTE: thef1.com</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="32" id="32"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />BAHREIN: DIA 1 - RED BULL</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><table width="150" height="100" border="0" align="right" cellpadding="0" cellspacing="0">

      <tr>

        <td><a rel="lightbox" href="http://www.tclarevista.com.ar/2014/redbull-bahrein1.jpg"><img src="http://www.tclarevista.com.ar/2014/redbull-bahrein1.jpg" width="181" height="101" border="0"/></a></td>

      </tr>

    </table><span class="Estilo2">En el día de hoy le ha tocado probar a Sebastian Vettel y lamentablemente volvieron a haber problemas en el monoplaza del equipo austriaco que lo han dejado 5º a 3,344 del líder Hulkenberg. Los problemas de motor persisten ya que la merma en la unidad de potencia se mantiene. Aparentemente sigue siendo difícil luchar contra los motores Mercedes que están todos adelante excepto por Massa y Williams que por problemas de combustible no pudo marcar tiempos.<br>Por otra parte la otra mala del día ha sido el principio de incendio que apareció en el Red Bull de Vettel, el cual incluso lo obligó a detener el auto y tomar el matafuegos para extinguir las llamas. A todo esto aparecen problemas de refrigeración en el monoplaza.<br>Mañana el alemán tendrá revancha en su segundo y último día de pruebas esta semana.<br>FUENTE: thef1.com</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="31" id="31"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />BAHREIN: DIA 1</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2"><b>CLICK AQUÍ PARA VER LOS TIEMPOS: <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/f1-bahrein1.php'><b><u>www.tclarevista.com.ar/2014/f1-bahrein1.php</u></b></a></b><br>Primer día de pruebas para la Fórmula 1 en Bahréin, un circuito característico por la suciedad que tiene la pista en cuanto a arenilla y provocada muchas veces por las tormentas de viento que suelen verse. Sin embargo por otra parte en esta época del año el clima es agradable ya que aún no termina el invierno.<br>El principal protagonista ha sido Nico Hulkenberg que con el Force India ha estado a más de 4 segundos del récord en clasificación 2013 (1’32”330). El Force India fue capaz de dar un total de 78 vueltas sin mayores problemas en el monoplaza, simplemente modificando ítems de puesta a punto correspondientes.<br>Un día donde el asfalto llegó a una temperatura máxima de 37ºC a las 14 horas y por otra parte hubo muchísima arena en especial por la mañana, donde se notaba cuando los pilotos hacían la simulación de largada.<br>Ampliaremos con crónicas de cada equipo.<br>FUENTE: thef1.com</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="30" id="30"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">NASCAR</span><br />BUSCANDO UN RETIRO DIGNO</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Juan Pablo Montoya ha pronosticado que podría hacer su última carrera en la Nascar Sprint Cup con su actual equipo de IndyCar: el Penske Racing. "Creo que Brickyard (Indianapolis) seria una buena carrera, estuve cerca de ganar muchas veces y sería bueno cerrar ese capítulo con una victoria. Sé que Roger (Penske) no ha ganado ahí y sería una gran oportunidad para mí poder lograrlo", confirmó el colombiano que las únicas 2 victorias que logró en Nascar las hizo en circuitos.<br>La carrera de Indianapolis será el 27 de julio y será la 20º fecha del campeonato.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="28" id="28"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Rally Argentino</span><br />GRINOVERO CON FORD KA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Favio Grinovero se quedó con las ganas del título Júnior el año pasado demostrando que está para lograrlo, y este año se subirá al Ford Ka del equipo RC Competición que el año pasado había sido conducido y navegado rotativamente por Nicolás Roda y Javier Castro, quienes también son los dueños del equipo. <i><b>"Desde que nació este proyecto la idea era andar bien en las fechas que corrimos para que después otros pilotos confiaran en nuestra estructura. En estos días cerramos con Favio para que él dispute toda la temporada con el RC Competición, algo que nos permitirá seguir creciendo como equipo"</b></i>, dijo Roda.<br>Por otro lado el nuevo integrante tuvo sus opiniones: <i><b>"Nos pusimos a analizar todo y me pareció acertado apostar por el RC. Creo que es una buena opción, con un auto que cuenta con un gran potencial. Estamos entusiasmados y con muchas ganas de trabajar en conjunto. Yo tengo muchísima confianza y sé que vamos a funcionar bien e iremos siempre para adelante"</b></i>, afirmó.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="27" id="27"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Rally Argentino</span><br />ELEGI EL COLOR DE BALDONI</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Miguel Baldoni propuso una idea interesante para esta temporada 2014: al dejar su VW Gol para pasar al Peugeot 208 Maxi Rally tendrá un nuevo diseño y colores en el vehículo, por lo tanto dejará a sus fans y seguidores que elijan cuál será: <b><i>"La idea surgió para darle mas participación a la gente, a los fanáticos del rally y a los seguidores que me alientan en las buenas y en las malas mucho más. Son ellos los que ven el auto pasar a la vera del camino y qué mejor que se vean identificados con algo que eligieron o hicieron"</i></b>, dijo el puntano. Para poder subir algún diseño entra en www.miguelbaldoni.com y para poder votar ingresa a la página de Facebook Miguel Baldoni Rally.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="26" id="26"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Rally Dakar</span><br />URUGUAY SIN DAKAR</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Según pudimos saber en charla con Jorge Tomasi, presidente del Automóvil Club de Uruguay, <b><i>"Uruguay no está en la ruta de la carrera"</i></b> por lo que se descartan las versiones que vinculaban a Uruguay con el Dakar2015.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="25" id="25"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Rally Dakar</span><br />DAKAR 2016 Y DESAFIO GUARANI</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">El presidente del Touring Club de Paraguay Nery Silva confirmó al aire por TC La Revista que las negociaciones para el Dakar 2015 no existen pero están utilizando el Desafío Guaraní para poder ingresar en el Dakar 2016: <b><i>"Quedó una espina con lo del Desafío Litoral y la queremos sacar. El Gobierno Paraguayo ha retomado las negociaciones con la ASO y Eli va a estar mañana en Paraguay para cerrar las actividades del Desafío Guaraní"</i></b>, afirmó.<br><i><b>"Tenemos dos regiones muy diferenciadas: la oriental (con más bosques, paisajes y llanura) y la occidental o Chaco que es un terreno occidental más árido a pesar de que nosotros no tenemos dunas"</b></i>, decía hablando sobre el terreno.<br>A pesar de las dificultades muestra su deseo y el de Paraguay de traer a la carrera más dura del mundo: <i><b>"El objetivo principal es tener el Dakar, que la gente conozca la belleza del país y queremos apostar a esto. Es difícil llegar al costo ya que es muy elevado pero va a haber una negociación conjunta para 2016 cuando se intente incluir la parte de brasil"</b></i>.<br>Por último vaticinó que habría Dakar Series en Paraguay hasta 2015.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="24" id="24"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera</span><br />MÁS TRABAJOS EN LOS NUEVOS MOTORES Y CHASIS</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">La ACTC continúa con el desarrollo del montaje de los nuevos motores multiválvula en los nuevos chasis dentro de los talleres Jakos. Se presentó un propulsor Chevrolet en la nueva estructura: se ubicó el motor, cubrevolante y caja de velocidades para comprobarse que esté todo sin inconvenientes en cuanto a ubicaciones y espacio con respecto a la parte delantera del vehículo. En los próximos días se pondrá en uno de los vehículos para probarlo en pista.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="23" id="23"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Fórmula 1</span><br />NO HABRÁ JUICIO</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 19 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Luego de la investigación pertinente al circuito de esquí Méribel, lugar donde se accidentó Michael Schumacher, se ha confirmado que no se presentarán cargos contra el mismo. La policía francesa informó "El accidente tuvo lugar en una zona fuera de pista. La señalización, el marcaje, los postes y la información provisoria sobre los límites de la pista cumplen con la normativa francesa". De esta forma la estación de esquí se desliga de cualquier problema legal que lo podría haber involucrado con este accidente.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="22" id="22"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera y TC Pista</span><br />CAMBIA REGLAMENTO DEPORTIVO</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 18 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Los cambios en el reglamento deportivo a implementarse a partir de la fecha de Paraná inclusive son:<br>- La clasificación será de 8 minutos sin tope de vueltas.<br>- Las series serán hasta completar 5 VUELTAS ENTERAS AL CIRCUITO y luego llegar a la línea de meta<br>- Cada piloto tendrá la posibilidad de un máximo de 2 pruebas libres durante la etapa regular.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="21" id="21"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">TRV6</span><br />GUSTAVO TADEI HABLÓ DE TODO</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 18 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Hoy en La Edición Oral de TC...La Revista dijo: <i><b>"Hicimos un buen año el año pasado, tuvimos un buen cierre, no con la suerte que debimos haber tenido para pelear el campeonato en la última fecha, pero la verdad que tuvimos un muy buen año..."</b></i> arrancó. Luego al preguntarle por la maniobra de Canapino y Girolami <b><i>"..Acá evidentemente los comisarios deportivos no habrán visto intencionalidad...yo creo que acá hay varias cosas para analizar. Primeramente toda esta situación se vió agravada por los dichos de Agustín y puntualmente que apuntan al 'Bebu' que ha atravesado lamentablemente, por desgracia, por un montón de malas situaciones que no tiene nada que ver y de repente algunos individuos lo han tildado de una forma que a lo mejor no lo es y eso generó esta rivalidad tan importante. Coincido que la maniobra no fue tan grave y probablemente no haya necesitado ningún tipo de sanción..."</i></b> luego disparó contra la C. D. A. <b><i>"...creo que en el automovilismo argentino a veces se generan estas situaciones porque no siempre es la misma vara con la que se mide...encima, en la Top Race, venimos de una definición de campeonato sobre la bandera a cuadros con una maniobra similar, muy similar, y creo que eso dividió las aguas. Yo creo que se busca comparar situaciones que nos son similares"</i></b>. Hablando de la categoría en sí y su equipo dijo: <b><i>"Estamos de mostrando (con Germán Sirvent) que con un presupuesto muy coherente como mantiene la Top Race, un piloto novato y yendo a un equipo bueno puede estar peleando con pilotos de la talla de Canapino, Norberto (Fontana) y el 'Bebu'"</i></b>. Por último habló del sistema de campeonato: <b><i>"Era muy difícil entender el campeonato que teníamos el año pasado. En un play-off tan corto como el del año pasado es difícil saber quién hizo las cosas bien y premiar al mejor...me hubiese gustado un play-off de por lo menos 4 fechas"</i></b></span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="20" id="20"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera y TC Pista</span><br />PRESENTACIÓN DE ENRE RÍOS</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 17 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Se presentó la carrera de Paraná en la Casa de Entre Ríos en Buenos Aires. Estuvo el presidente de la A. C. T. C., Hugo Mazzacane, el gobernador de la provincia, Uribarri, el encargado del autódromo de Paraná, Romeo Pisano, los pilotos Mariano Werner, los hermanos Bonelli, Martin Ponte y Omar Martínez y demas autoridades provinciales y de la A. C. T. C. Se habló de las bondades del autódromo de Paraná, el reasfaltado que necesita Concepción del Uruguay y que Concordia está en un 99% listo.<br>Además Hugo Mazzacane no confirmó una 2da fecha en el año de Paraná, como si lo anunciara hace 2 días atrás Romeo Pisano. También agregó, Hugo, que la posibilidad del nocturno sigue intacta para Termas de Río Hondo, Paraná y Toay y se descartó la posibilidad del de La Plata por este año. Finalmente dijo que están viendo la posibilidad de un reasfaltado en el circuito platense.<br>Los pilotos por su parte dijeron no haber tenido mucho tiempo después de Centenario para trabajar, sin embargo avanzaron sobre los autos.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="19" id="19"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5"></span><br />CALENDARIO AUTOMOVILISTICO ACTUALIZADO EN LA WEB</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 17 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Ya está subido el calendario de las principales categorías del automovilismo nacional, zonal e internacional en <a style='color:#FF0000;' HREF='http://www.tclarevista.com.ar/2014/Fechas%202014.pdf'><b><u>www.tclarevista.com.ar/2014/Fechas%202014.pdf</u></b></a>. Enterate...</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="18" id="18"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera y TC Pista</span><br />FECHA 11 PARANA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 16 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">La fecha 11 se realizará en Paraná siendo la última de la etapa regular la 2da visita del año a ese autódromo. Será allí la carrera nocturna del TC?</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="17" id="17"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera</span><br />MANTIENE LA ESPERANZA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 15 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">A una semana de la competencia de Paraná aún permanece la incertidumbre de Emanuel Moriatis para ver si junta el presupuesto para el próximo fin de semana. <b><i>"Todavía estamos trabajando, tenemos dudas si vamos a ir o no, pero no tengo el 'NO' definitivo todavía"</i></b>, dijo el piloto de Lanús quien aún mantiene las esperanzas de participar en la segunda del año de la máxima del automovilismo argentino.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="16" id="16"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera</span><br />CONCLUSIONES</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 14 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">La disputa de la carrera nocturna está entre Paraná y La Pampa. Este último el más probable ya que se probó de noche.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="15" id="15"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Moto GP, Fórmula 1 y Turismo Carretera</span><br />TERMAS SERÁ GRADO 1</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 14 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Hablamos hace minutos al aire con Hector Farina, director del Autódromo de Termas de Río Hondo, y si bien dijo que no está en los planes hacer una carrera nocturna por las obras que están realizando, confirmó una gran noticia que nos ilusiona a todos los argentinos: "Para la MotoGP falta solamente pintar el circuito en algunos tramos que se va a hacer 20 días antes. Estamos trabajando mucho en las tribunas para que la gente pueda sentirse cómoda. Va a haber una totalidad de 50.000 personas sentadas y va a quedar para todos los espectáculos a nivel nacional. En 2015 el circuito va a ser grado 1 cuando terminemos las obras de boxes, salas de prensa y salones vip. Ya la FIA y la FIM nos dijo 'El circuito ya está en grado 1, pero lo que faltan son algunas estructuras exteriores.'" Cuando se le preguntó por la posibilidad de traer a la máxima mundial confirmó: "Es medio difícil traer a la Fórmula 1, la situación económica no es la mejor actualmente", finalizó.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="14" id="14"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera y Turismo Nacional</span><br />NOCTURNO DE LA PLATA DESCARTADO</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 14 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Hablamos hace algunos minutos con el 'Vasco' Daniel Jauregui (Gerente del Autódromo de La Plata) quien salió al aire por TC La Revista confirmando que se descartó absolutamente una carrera nocturna del Turismo Carretera en el Mouras. "Está descartado que el Turismo Carretera haga una carrera nocturna en La Plata. Si va a haber una carrera nocturna de TC este año no va a ser en el Mouras, hay una red de luces pero para otros motivos distintos. La idea de iluminarlo existe y está dando vuelta, pero la inversión es muy grande y no se va a realizar. Pero aún no descartamos de traer al Turismo Nacional de noche", confirmó el Vasco.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="13" id="13"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera</span><br />PROYECTO NOCTURNO: PARANÁ</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 14 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Romeo Pisano, presidente del Club de Volantes Entrerrianos, confirmó que el año pasado estuvieron hablando con la ACTC para hacer una carrera nocturna: "La iluminación es un costo altísimo pero el circuito da perfectamente para iluminarlo, este año o el año que viene podríamos correr de noche. Las obras dependen de un presupuesto, hay un trabajo previo ya planeado, falta la decisión de hacerlo. No tenemos un presupuesto definido ni nada, aún es un anhelo y una ilusión tenerlo iluminado. El año pasado se empezó a pensar en iluminarlo pero todavía es una iniciativa. Si lo hacemos estimo que es un trabajo de 90 o 60 días si el clima acompaña y tenemos todo dado", dijo Romeo.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><a name="12" id="12"></a><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera</span><br />PROYECTO NOCTURNO: LA PAMPA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 14 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500"><span class="Estilo2">Hace minutos salió al aire el Secretario de Turismo de La Pampa Santiago Amsé quien confirmó que el año pasado el Turismo Carretera hizo una prueba nocturna en el autódromo de Toay incluso con las cámaras de televisión para probar la iluminación y demás items. Esta prueba se produjo el 3 de noviembre cuando la categoría fue a realizar su fecha en el mismo circuito.</span></td>

  </tr>

</table>

<table height="15"><tr><td></td></tr></table><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera:</span><br />

      REFORMAS A LA COPA DE ORO</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 08 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500">      <span class="Estilo2">Hoy se anunció en conferencia de prensa una modificación al sistema de la Copa de Oro, el cual explicamos a continuación: como siempre clasificarán los 12 primeros del campeonato a la Copa al finalizar la fecha 11. La única modificación que se realizará es que cuando finalice la fecha 15 pasarán a pelear el título los 3 primeros del campeonato hasta ese entonces no pertenecientes a la Copa.</span></td>

  </tr>

</table>

<hr /><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera y TC Pista:</span><br />

      CONCORDIA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 08 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500">      <span class="Estilo2">Ante la suspension de C. del Uruguay en la fecha prevista, nos pusimos en contacto con el Sr. Cutro responsable del circuito de Concordia para tener la tranquilidad de que esa fecha si se cumplimentaría en tiempo y forma. -Cutro; tenemos todo listo  para recibir al TC: pista, playón de boxes, torre de control baños y un salón para la prensa con capacidad para 500 personas, que nosotros lo aprovechamos para fiestas del club. Todo con aire acondicionado. Pero tenemos una preocupación, que crezca a tiempo el pasto que sembramos". A mi se me escapó una sonrisa cuando veía en los videos que están en nuestrá página  el polvo y la arenilla que perturbaba el normal desenvolvimiento de los autos de TC y TCP en el Centenario y las molestas declaraciones de los pilotos. ¡¡Bien por Concordia!! </span></td>

  </tr>

</table>

<hr /><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Turismo Carretera y TC Pista:</span><br />

      DECLARACIONES HUGO MAZZACANE</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 08 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px"/>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500">      <span class="Estilo2">En conferencia de prensa el presidente de la A. C. T. C., Hugo Mazzacane dejó frases como las siguientes: "El reglamento no se va a cambiar a lo largo de 2014...el martes pasado se volvió a aprobar en Comisión Directiva...Si es un error hacer esto, será un error de Hugo Mazzacane". En cuanto al ascenso al TC por la no autorización de Matías Milla al TC Pista dijo "Todos los pilotos, salvo ciertas excepciones deberán hacer la escuela del TC Pista Mouras, TC Mouras y TC Pista antes de llegar al TC", también agregó que "cualquier piloto del TC Mouras con un buen presupuesto y equipo está en condiciones de pelear el campeonato de TC Pista". También habló del calendario de TC "Olavarría no pudo juntar el presupuesto para tener la fecha, Rafaela deberá reasfaltar el circuito, ayer visitamos Viedma para enumerarles las mejoras que deben hacer, Alta Gracia deberá completar las obras y pidió fecha, Rio Cuarto no junta el dinero para completar obras de seguridad, 9 de Julio viene prometiendo obras que no cumple hace años en Concepción del Uruguay se correría en mayo y Junín será la 3ª fecha del calendario, cuando no estaba en negociaciones previas" Finalmente dijo ante las quejas de los pilotos de arrancar el año con 3 fechas en 33 días que "es la única forma de poder tener el descanso en junio para no sufrir el frío y las lluvias que siempre se tienen".</span></td>

  </tr>

</table>

<hr /><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Argentinos en el exterior y Moto GP:</span><br />

      TEAM ARGENTINA AL MUNDO</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 08 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500">      <span class="Estilo2">El equipo español TSR Motorsport del campeonato europeo de velocidad se presentó como Team Argentina para la temporada 2014 de la categoría. Los pilotos serán Sebastian Porto y Ezequiel Iturrioz ademas del reconocido chileno Rodrigo Concha. Competirán en la categoría Moto 2 del campeonato europeo y algunas fechas del mundial de esa divisional, entre ellas la de Termas de Rio Hondo (Argentina) el fin de semana del 24/04. Utilizaran motos Kalex Moto 2 para los 2 campeonatos con la firme intención de competir el Campeonato del mundo de Moto GP 2015. La directora del equipo será Jesica Jorgelina Ottini Agradecemos el dato de Jaime Martin del diario Marca</span></td>

  </tr>

</table>

<hr /><table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="350"><span class="Estilo3"><span class="Estilo5">Argentinos en el exterior:</span><br />

      BUTACA CONFIRMADA PARA REGALÍA</span></td>

    <td width="150" valign="top"><div align="right"><span class="Estilo4"> 07 de febrero del 2014 </span></div></td>

  </tr>

</table>

<hr align="left" width="100%" size="1" noshade="noshade" style="margin-top:0px;margin-bottom:0px" />

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="500">      <span class="Estilo2">Finalmente el piloto argentino podrá correr en GP2 bajo la escuadra de Hilmer Motorsport. Facu será parte del programa de Sahara Force India, cosa que podría facilitarle alguna prueba sobre un Fórmula 1 a fin de año, incluso en los Libres 1 de algún GP de este año. "Es una noticia increíble para mí ser un piloto del Hilmer Motorsport y el programa de desarrollo de pilotos de Sahara Force India. Aprecio el interés que Franz Hilmer mostró en mis actuaciones del año pasado y la oportunidad de competir con él en 2014", dijo Facu que lucirá el Nº 12 y correrá junto al alemán Daniel Abt.<br>"Buscamos darles la oportunidad de mostrar su talento", dijo Vijay Mallya (director del equipo Sahara Force India).</span></td>

  </tr>

</table>

<hr /><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.noticias {	padding:7px;
	overflow: auto;
	height: 197px;
}
.Estilo2 {
	height: 197px;
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #333333;	
}
.Estilo3 {
	color: #666666;
	font-size: 20px;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo4 {
	color: #FF0000;
	font-weight: bold;
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;

}
.Estilo5 {
    font-size: 11px;
	text-transform: uppercase;
	
}
-->
</style>

</head>

<body>
</body>
</html>
