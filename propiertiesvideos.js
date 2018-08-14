function changeview1()
{
document.getElementById("textovideo1").style.color="#FF0000";
document.getElementById("textovideo1").style.background="url(menuenvivoactivo.jpg)";
}
function changeview2()
{
document.getElementById("textovideo2").style.color="#FF0000";
document.getElementById("textovideo2").style.background="url(menuenvivoactivo.jpg)";
}
function changeview3()
{
document.getElementById("textovideo3").style.color="#FF0000";
document.getElementById("textovideo3").style.background="url(menuenvivoactivo.jpg)";
}
function changeviewsalir()
{
document.getElementById("textovideo1").style.color="#333333";
document.getElementById("textovideo1").style.background="url(menuenvivo.jpg)";
document.getElementById("textovideo2").style.color="#333333";
document.getElementById("textovideo2").style.background="url(menuenvivo.jpg)";
document.getElementById("textovideo3").style.color="#333333";
document.getElementById("textovideo3").style.background="url(menuenvivo.jpg)";
}
function ponervideo1()
{
document.getElementById("video1").style.display="inline";
document.getElementById("video2").style.display="none";
document.getElementById("video3").style.display="none";
}
function ponervideo2()
{
document.getElementById("video1").style.display="none";
document.getElementById("video2").style.display="inline";
document.getElementById("video3").style.display="none";
}
function ponervideo3()
{
document.getElementById("video1").style.display="none";
document.getElementById("video2").style.display="none";
document.getElementById("video3").style.display="inline";
}