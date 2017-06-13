<?php
$x=scandir("theme");
foreach($x as $a)
{
  if($a!="." && $a!=".." && $a!="Thumbs.db")
   {
	  $path="theme/$a";
	  echo "<a href='home.php?ct=$a'><img src='$path' width=300 height=150/></a>";   
   }
}
?>