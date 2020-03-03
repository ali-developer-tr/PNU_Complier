<?php
  function compilecpp_gplusplus($infile,int &$ErrCode,string &$ErrStr)
  {
    $out=array();
    $ErrCode = 4;
    exec("E:/PNU-Contest/JustTest2.exe an_argument",$out,$ErrStr);
    
    return 0;
  }
  $out=array();
  $retval=0;
  exec("E:/PNU-Contest/JustTest2.exe an_argument",$out,$retval);
  echo "The return value of process is ".$retval."<br>";
  var_dump ($out);
  echo "<br>";
  $erc=0;
  $ers="";
  compilecpp_gplusplus("c:\1.exe",$erc,$ers);
  echo $erc."<br>";
  echo $ers."<br>";
?>