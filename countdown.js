setInterval("tiempo()",1000); // Ejecuto la acci�n cada segundo

function tiempo(){
    $.post("countdown.php", function(data){
  $("#tiempo").html(data);
 });
 
}
