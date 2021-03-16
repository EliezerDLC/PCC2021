<?php

$n1=$_GET['txtn1'];
$n2=$_GET['txtn2'];
$n3=$_GET['txtn3'];
$n4=$_GET['txtn4'];

$promedio=($n1+$n2+$n3+$n4)/4;

$resto=240-($n1+$n2+$n3+$n4);

if ($promedio>59) {
    echo 'Aprobado';
}else {
    echo 'Reprobado';
    echo '<br>';
    echo 'Le faltarón: '. $resto . ' pts. para aprobar';
}
?>