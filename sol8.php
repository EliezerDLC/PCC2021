<?php

$f1=$_GET['txtf1'];
$f2=$_GET['txtf2'];

$rest1=substr($f1, 0,1);
$rest2=substr($f2, 0,1);

if ($rest1==$rest2) {
    echo 'Las 2 frases inician con la misma letra';
}else {
    echo 'Las 2 frases inician con diferente letra';
}

?>