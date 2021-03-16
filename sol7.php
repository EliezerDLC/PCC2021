<?php

$n1=$_GET['txtn1'];
$f1=$_GET['txtf1'];


$cal=strlen($f1);

if ($cal==$n1) {
    echo 'La longitud de la frase es la misma que el numero ingresado';
}elseif ($cal>$n1) {
    echo 'La longitud de la frase es mayor que el numero ingresado';
}else {
    echo 'La longitud de la frase es menor que el numero ingresado';
}
?>