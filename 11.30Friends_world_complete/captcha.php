<?php
session_start();
$str=substr(md5(mktime()),0,6);
$col=array("red","green","purple","pink","yellow");
$fac=array("Gill Sans"," Gill Sans MT"," Myriad Pro"," DejaVu Sans Condensed", "Helvetica", "Arial", "sans-serif");
$colr=array_rand($col);
$facr=array_rand($fac);
$_SESSION['cap']=$str;
echo "<font size=5 color='$col[$colr]' face='$fac[$facr]'>$str</font>";
?>
