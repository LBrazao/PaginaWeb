function codigo1(a,b) {
// creamos una variable y le definimos el contenido, en este caso es el textarea del formulario
c = document.m_formulario.noticia ;
// El primer parametro es para asignar el formulario, el segundo es el nombre del formulario y el tercero es el nombre del textarea
// Si el navegador es el IE
if(navigator.appName == 'Microsoft Internet Explorer') {
if(seleccionado = document.selection.createRange().text) {
document.selection.createRange().text = a+seleccionado+b ;
c.focus() ;
}
else {
c.focus() ;
document.selection.createRange().text = a+b ;
}
}
else {
c.value = c.value.substring(0,c.selectionStart)+a+c.value.substring(c.selectionStart,c.selectionEnd)+b+c.value.substring(c.selectionEnd,c.value.length) ;
c.focus() ;
}
}// JavaScript Document