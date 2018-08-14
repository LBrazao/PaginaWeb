tusencuestas_addEvent_3f21299f_9750_46b5_8684_abfa3e9e8546(window,'load',tusencuestas_inicializacion_3f21299f_9750_46b5_8684_abfa3e9e8546,false);
var accion_extra_3f21299f_9750_46b5_8684_abfa3e9e8546 = '0';
var P_Id_3f21299f_9750_46b5_8684_abfa3e9e8546 = '0';
var Perfil_Id_3f21299f_9750_46b5_8684_abfa3e9e8546 = '49976';
function tusencuestas_inicializacion_3f21299f_9750_46b5_8684_abfa3e9e8546()
{
    tusencuestas_accion_3f21299f_9750_46b5_8684_abfa3e9e8546(4, 0);
}
function tusencuestas_mostrar_3f21299f_9750_46b5_8684_abfa3e9e8546()
{
    tusencuestas_accion_3f21299f_9750_46b5_8684_abfa3e9e8546(1, 0);
}
function tusencuestas_verVotos_3f21299f_9750_46b5_8684_abfa3e9e8546()
{
    tusencuestas_accion_3f21299f_9750_46b5_8684_abfa3e9e8546(3, 0);
}
function tusencuestas_verListado_3f21299f_9750_46b5_8684_abfa3e9e8546()
{
    tusencuestas_accion_3f21299f_9750_46b5_8684_abfa3e9e8546(5, 0);
}
function tusencuestas_verEncuesta_3f21299f_9750_46b5_8684_abfa3e9e8546(_P_Id)
{   
    P_Id_3f21299f_9750_46b5_8684_abfa3e9e8546 = _P_Id;
    tusencuestas_accion_3f21299f_9750_46b5_8684_abfa3e9e8546(4, 0)
}
function tusencuestas_accion_3f21299f_9750_46b5_8684_abfa3e9e8546(accion_nombre, accion_argumento) 
{
    if (accion_argumento != "-1")
    {    
        accion_argumento += ";" + accion_extra_3f21299f_9750_46b5_8684_abfa3e9e8546;        
        var act = document.createElement("script");
        act.src = 'http://www.tusencuestas.com/acciones/tusencuestas.aspx?'+P_Id_3f21299f_9750_46b5_8684_abfa3e9e8546 +'-'+ Perfil_Id_3f21299f_9750_46b5_8684_abfa3e9e8546 + '-' + accion_nombre + '-' + accion_argumento + '-3f21299f_9750_46b5_8684_abfa3e9e8546-0-'+hasVotado_3f21299f_9750_46b5_8684_abfa3e9e8546()+'&i=' + tusencuestas_random_3f21299f_9750_46b5_8684_abfa3e9e8546();
	    act.setAttribute('language', 'javascript');
        act.setAttribute('type', 'text/javascript');
        document.body.appendChild(act);
    }
}
function tusencuestas_votar_3f21299f_9750_46b5_8684_abfa3e9e8546()
{
    if (cookieHabilitada_3f21299f_9750_46b5_8684_abfa3e9e8546())
    {
        var accion_argumento = tusencuestas_recogeValor_3f21299f_9750_46b5_8684_abfa3e9e8546();
        tusencuestas_accion_3f21299f_9750_46b5_8684_abfa3e9e8546(2, accion_argumento);
        if (accion_argumento != "-1")
        {
            var expira = new Date();
            expira.setSeconds(expira.getSeconds() + 86400);
            setCookie_3f21299f_9750_46b5_8684_abfa3e9e8546("P_Id" + P_Id_3f21299f_9750_46b5_8684_abfa3e9e8546, "1", expira, "/");
        }
        else
            alert('??Elige una respuesta!!');
    }
    else
        alert('No puedes votar porque no tienes las cookies habilitadas');
}
function tusencuestas_recogeValor_3f21299f_9750_46b5_8684_abfa3e9e8546()
{
    var tusencuestas_elemento = document.getElementsByName('tusencuestas_respuesta_resultados_name_3f21299f_9750_46b5_8684_abfa3e9e8546');
    var accion_argumento = -1;
    var contador = 0;
    for (i = 0; i < tusencuestas_elemento.length; i++)
    {
        if (tusencuestas_elemento[i].type == 'select-one')
            accion_argumento = tusencuestas_elemento[i].options[tusencuestas_elemento[i].selectedIndex].value;
        else if (tusencuestas_elemento[i].checked)
        {
            if (accion_argumento == -1)
                accion_argumento = "";
            if (contador>0)
                accion_argumento += "_" + tusencuestas_elemento[i].value;
            else
                accion_argumento += tusencuestas_elemento[i].value;            
            contador++;
        }
    }    
    return accion_argumento;
}
function tusencuestas_random_3f21299f_9750_46b5_8684_abfa3e9e8546()
{
    var dt = new Date();
    var ran=Math.random()*400;
    return dt.getTime() + '-' + ran;
}
function hasVotado_3f21299f_9750_46b5_8684_abfa3e9e8546()
{
    return getCookie_3f21299f_9750_46b5_8684_abfa3e9e8546("P_Id" + P_Id_3f21299f_9750_46b5_8684_abfa3e9e8546)!=null ? 1 : 0;
}
function cookieHabilitada_3f21299f_9750_46b5_8684_abfa3e9e8546()
{
    var r = tusencuestas_random_3f21299f_9750_46b5_8684_abfa3e9e8546();
    setCookie_3f21299f_9750_46b5_8684_abfa3e9e8546(r,"1");
	return getCookie_3f21299f_9750_46b5_8684_abfa3e9e8546(r)!=null;
}
function setCookie_3f21299f_9750_46b5_8684_abfa3e9e8546(name, value, expires, path, domain, secure) {
  var curCookie = name + "=" + escape(value) +
      ((expires) ? "; expires=" + expires.toGMTString() : "") +
      ((path) ? "; path=" + path : "") +
      ((domain) ? "; domain=" + domain : "") +
      ((secure) ? "; secure" : "");
      document.cookie = curCookie;
}
function getCookie_3f21299f_9750_46b5_8684_abfa3e9e8546(name) {
  var dc = document.cookie;
  var prefix = name + "=";
  var begin = dc.indexOf("; " + prefix);
  if (begin == -1) {
    begin = dc.indexOf(prefix);
    if (begin != 0) return null;
  } else
    begin += 2;
  var end = document.cookie.indexOf(";", begin);
  if (end == -1)
    end = dc.length;
  return unescape(dc.substring(begin + prefix.length, end));
}
function tusencuestas_addEvent_3f21299f_9750_46b5_8684_abfa3e9e8546(elm, evType, fn, useCapture) 
{
    if (elm.addEventListener)
    {
        elm.addEventListener(evType, fn, useCapture);
        return true;
    }
	else if (elm.attachEvent) 
	{   
	    var r = elm.attachEvent('on' + evType, fn);
	    return r;
	}
	else 
	    elm['on' + evType] = fn;
}