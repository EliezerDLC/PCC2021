<?php

$n1=$_GET['txtn1'];

if ($n1>0) {
    echo 'Su numero es positivo';
}elseif ($n1<0) {
    echo 'Su numero es negativo';
}else {
    echo 'Su numero es neutro';
}

?>