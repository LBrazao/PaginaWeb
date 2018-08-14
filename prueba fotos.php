<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php



$link=$_POST["link"];
$titulo=$_POST["titulo"];
$fotoportada="http://www.tclarevista.com.ar/fotosportada/".$_FILES["userfile"]["name"];
$categoria1=$_POST["categoria1"];
$categoria2=$_POST["categoria2"];
$categoria3=$_POST["categoria3"];
$categoria4=$_POST["categoria4"];
$categoria5=$_POST["categoria5"];


        $tmp_name = $_FILES["userfile"]["tmp_name"];
		$name = $_FILES["userfile"]["name"];
        move_uploaded_file($tmp_name, '/home/tclarevi/public_html/2014/'.$name);



?>

</body>
</html>
