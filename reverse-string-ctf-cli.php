<?php

$cipher = "}SDRAWKCAB_SI_SIHT{CSCUWE";
echo"==================================Reverse String Cipher Solver==================================".PHP_EOL;
$cipher=trim(fgets(STDIN));
if(empty($cipher)){
echo"No cipher was entered!!!!!!!!!!!!!!!!!";
exit(1):
  }
$flag = strrev($cipher);
echo "Decrypted Flag: " . $flag;
?>
