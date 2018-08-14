
function desplegar1()
{
document.getElementById("1").src="menos.png";
document.getElementById("1").setAttribute('onclick','contraer1()');
document.getElementById("galeria1").className="desplegado";
}

function contraer1()
{
document.getElementById("1").src="mas.png";
document.getElementById("1").setAttribute('onclick','desplegar1()');
document.getElementById("galeria1").className="contraido";
}

function mostrarfoto1()
{
document.getElementById("visibilidad1").value="Ocultar";
document.getElementById("visibilidad1").setAttribute('onclick','ocultarfoto1()');
document.getElementById("foto1").innerHTML='<img src="domingo001tc1.jpg">';
}

function ocultarfoto1()
{
document.getElementById("visibilidad1").value="Mostrar";
document.getElementById("visibilidad1").setAttribute('onclick','mostrarfoto1()');
document.getElementById("foto1").innerHTML='';
}






