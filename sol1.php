<?php

$DPI=$_GET['txtdpi'];
$nom=$_GET['txtnom'];
$ape=$_GET['txtape'];
$nac=$_GET['txtnac'];
$cor=$_GET['txtcor'];


echo "DPI: ". $DPI;
echo "<br>";
echo "Nombre: ".  $nom;
echo "<br>";
echo "Apellido: ". $ape;
echo "<br>";
echo "Fecha de nacimiento". $nac;
echo "<br>";
echo "Correo electronico:  ". $cor;


?>