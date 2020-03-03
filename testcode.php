<?php
  $out=array();
  $retval=0;
  exec("E:/PNU-Contest/JustTest2.exe",$out,$retval);
  echo "The return value of process is ".$retval."<br>";
  print_r ($out);
?>