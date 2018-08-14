<?php
/**VALORES */
$year = '2012';
$month= '09';
$day = '30';
$hour = '00';
$minute = '00';
$second = '00';
//function cuenta_regresiva($year, $month, $day, $hour, $minute, $second)
//{
  global $return;
  global $countdown_date;
  $countdown_date = mktime($hour, $minute, $second, $month, $day, $year);
  $today = time();
  $diff = $countdown_date - $today;
  if ($diff < 0)$diff = 0;
  $dl = floor($diff/60/60/24);
  $hl = floor(($diff - $dl*60*60*24)/60/60);
  $ml = floor(($diff - $dl*60*60*24 - $hl*60*60)/60);
  $sl = floor(($diff - $dl*60*60*24 - $hl*60*60 - $ml*60));
// OUTPUT
$resultado = "\n<br>Today's date ".date("F j, Y, g:i:s A")."<br/>";
$resultado .=  "Countdown date ".date("F j, Y, g:i:s A",$countdown_date)."<br/>";
$resultado .=  "\n<br>";
//$return = array($dl, $hl, $ml, $sl);
//return $return;
//}
//cuenta_regresiva($year, $month, $day, $hour, $minute, $second);
//list($dl,$hl,$ml,$sl) = $return;

$resultado .=  "faltan ".$dl." dias ".$hl." horas ".$ml." minutos ".$sl." segundos "."\n<br>";
echo $resultado;

?>;