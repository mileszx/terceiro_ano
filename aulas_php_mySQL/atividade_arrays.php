<?php
// EXERCÍCIO
// Qual a sintáxe correta para criar um array em PHP?


// EXERCÍCIO
// Na seguinte matriz:
// $fruits = array('Apple', 'Banana', 'Orange');
// Qual seria a sintaxe correta para alterar o segundo valor de 'Banana' para 'Pineapple'?


// EXERCÍCIO
// Exiba o segundo item da matriz $fruits.

//1-
$fruits = array("Apple", "Banana", "Orange");

//2-
$fruits = array("apple", "banana", "orange");
echo "<br>";
var_dump($fruits);
echo "<br>";
echo "Substituindo banana por pineapple";
$fruits[1] = "Pineapple";
var_dump($fruits);

//3-
echo $fruits[1];


// EXERCÍCIO 1
//$fruits = array('Tamarindo', 'Pitaia', 'Siriguela');
//Qual a sintax correta para mudar o segundo valor para Abacaxi?

// EXERCÍCIO 2
// Como imprimir o segundo terceiro item do array $fruits?

// EXERCÍCIO 3
// Crie um array associativo para estado/capital/data de fundação da capital?

// EXERCÍCIO 4
// Dada a array associativa abaixo. Como imprimir a idade de Ben?
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// EXERCÍCIO 5
// Preencha os espaços em branco para imprimir a chave e o valor.
// ________($idade ___ $x ___ $y){
// echo "Chave=" . ____ . ", Valor=" . ____;
// }

//1-
$fruits = array('Tamarindo', 'Pitaia', 'Siriguela');
$fruits[1] = 'Abacaxi';

//2-
echo $fruits[2];

//3-
$estado = array(
    "estado" => "Minas Gerais",
    "capital" => "Belo Horizonte",
    "fundacao" => "1897"
);

//4-
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo $age["Ben"];

//5-
$idade = array(
    "Pedro" => 35,
    "Ben" => 37,
    "Joe" => 43
);

foreach($idade as $x => $y){
    echo "Chave=" . $x . ", Valor=" . $y . "<br>";
}