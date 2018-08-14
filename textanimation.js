var b = document.documentElement;
b.setAttribute('data-useragent',  navigator.userAgent);
b.setAttribute('data-platform', navigator.platform );

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}


function putclase2()
{
document.getElementById("clase2").className="box";
document.getElementById("clase3").className="box1";
}
function putclase3()
{
document.getElementById("clase2").className="box-change";
document.getElementById("clase3").className="box1-change";
}
function desplegar_videos()
{
document.getElementById("despliegue-videos").className="contraido";
document.getElementById("contraccion-videos").className="desplegado";
document.getElementById("mas_videos").className="videos_desplegado";
}
function contraer_videos()
{
document.getElementById("contraccion-videos").className="contraido";
document.getElementById("despliegue-videos").className="desplegado";
document.getElementById("mas_videos").className="videos";
}
function desplegar_fotos()
{
document.getElementById("despliegue-fotos").className="contraido";
document.getElementById("contraccion-fotos").className="desplegado";
document.getElementById("mas_fotos").className="fotos_desplegado";
}
function contraer_fotos()
{
document.getElementById("contraccion-fotos").className="contraido";
document.getElementById("despliegue-fotos").className="desplegado";
document.getElementById("mas_fotos").className="fotos";
}

function putjueves()
{
document.getElementById("dia1").className="wrc";
document.getElementById("dia2").className="wrc-change";
document.getElementById("dia3").className="wrc-change";
document.getElementById("dia4").className="wrc-change";
}
function putviernes()
{
document.getElementById("dia1").className="wrc-change";
document.getElementById("dia2").className="wrc";
document.getElementById("dia3").className="wrc-change";
document.getElementById("dia4").className="wrc-change";
}
function putsabado()
{
document.getElementById("dia1").className="wrc-change";
document.getElementById("dia2").className="wrc-change";
document.getElementById("dia3").className="wrc";
document.getElementById("dia4").className="wrc-change";
}
function putdomingo()
{
document.getElementById("dia1").className="wrc-change";
document.getElementById("dia2").className="wrc-change";
document.getElementById("dia3").className="wrc-change";
document.getElementById("dia4").className="wrc";
}


function rargviernes()
{
document.getElementById("dia2").className="wrc";
document.getElementById("dia3").className="wrc-change";
document.getElementById("dia4").className="wrc-change";
}
function rargsabado()
{
document.getElementById("dia2").className="wrc-change";
document.getElementById("dia3").className="wrc";
document.getElementById("dia4").className="wrc-change";
}
function rargdomingo()
{
document.getElementById("dia2").className="wrc-change";
document.getElementById("dia3").className="wrc-change";
document.getElementById("dia4").className="wrc";
}

function puttv()
{
document.getElementById("tv1").className="tv1";
document.getElementById("tv2").className="tv2";
}
function putcoments()
{
document.getElementById("tv1").className="tv1-change";
document.getElementById("tv2").className="tv2-change";
}



function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
