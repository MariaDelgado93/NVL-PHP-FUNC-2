<?php
$numDeLetra = cuentaLetras("Upgrade Hub", 'u');

echo $numDeLetra;

function cuentaLetras($string,$letra){
  $cont = 0;
  for($i=0;$i<strlen($string);$i++){
    if($string[$i]==$letra){
      $cont++;
    }
  }
  return $cont;
}
?>
