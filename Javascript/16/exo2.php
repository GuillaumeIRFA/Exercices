<?php  header("Access-Control-Allow-Origin: *");
$image = array("chat1.jpg","chat2.jpg","chat3.jpg","chat4.jpg","chat5.jpg","chien1.jpg","chien2.jpg","chien3.jpg","chien4.jpg","chien5.jpg");
$l=$_GET["l"];
if (($l != "") && ($l>0) && ($l<11))
{
  echo "<u>Image  N° ".$l."</u><br><br>";
  echo "<img src=../../images/".$image[$l-1].">";
}    
else
  echo "<font color=red>Entrez un nombre compris entre 1 et 10 !</font>";  
?>
