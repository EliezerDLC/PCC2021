<?php

$nota1=$_GET['txtn1'];
$nota2=$_GET['txtn2'];
$nota3=$_GET['txtn3'];
$nota4=$_GET['txtn4'];
$nota5=$_GET['txtn5'];

$promedio=($nota1+$nota2+$nota3+$nota4+$nota5)/5;

echo "El promedio  obtenido es: ". $promedio;

echo "<br>";

if ($promedio<70) {
    echo "Reprobado";

}else{
    echo "Aprobado";
}
?>