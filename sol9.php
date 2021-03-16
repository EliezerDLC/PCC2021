<?php

$n1=$_GET['txtn1'];
$n2=$_GET['txtn2'];
$n3=$_GET['txtn3'];


if ($n1>$n2 and $n2>$n3) {
    echo 'El primer numero es el mayor';
}elseif ($n2>$n1 and $n1>$n3) {
    echo 'El segundo numero es el mayor';
}else{
    echo 'El tercer numero es el mayor';
}
    

?>