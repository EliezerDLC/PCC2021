<?php

$n1=$_GET['txtn1'];

$cal=$n1%2;

if ($cal==0) {
    echo 'Su numero par';
}else {
    echo 'Su numero impar';
}
?>