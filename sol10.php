<?php

$nf=$_GET['txtf1'];

$cal=substr($nf, -1);

if ($cal=="s" or $cal=="S") {
    echo 'La ultima letra de su frase es una s';
}else{
    echo 'La ultima letra de su frase no es una s';
}
    

?>