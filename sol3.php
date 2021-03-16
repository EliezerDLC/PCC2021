<?php



$n1=$_GET['txtn1'];

echo 'Tabla de multiplicar del '.$n1;

echo '<br>';
echo '<br>';

for ($x=1; $x<=10 ; $x++) {
    echo $n1.'*'.$x.'='.$n1*$x;
    echo '<br>';
}

?>