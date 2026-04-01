<?php

$string = "Meu nome é Miles";
$totalCaracteres = strlen($string);
echo "A string é: '" . $string . "'<br>";
echo "O número de caracteres é: " . $totalCaracteres;
echo "<br>---------------------------------------<br>";

$letras = "abcdefg/";
$strtupper = strtoupper($letras);
echo $strtupper;
$strtlower = strtolower($letras);
echo $strtlower;
echo "<br>---------------------------------------<br>";

$string = "Meu nome Miles";
$totalCaracteres = strrev ($string);
echo "A string é: '" . $string . "'<br>";
echo "Nome ao  contrario é: " . $totalCaracteres;
echo "<br>---------------------------------------<br>";


?>