<?php
  //$out=array("","","","");
  $out="";
  $retval=0;
  //exec("..//JustTest2.exe",$out,$retval);
  $out=shell_exec("..\JustTest2.exe 2>&1");
  echo "The return value of process is ".$retval;
  echo $out[0].$out[1].$out[2].$out[3];
?>