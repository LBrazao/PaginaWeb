setInterval("tiempo()",1000); // Ejecuto la acción cada segundo

function tiempo(){
    $.post("countdown.php", function(data){
  $("#tiempo").html(data);
 });
 
}
