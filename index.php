<?php

echo '<h1>Hello world!</h1>';

echo "<hr>";

//Declaração e atribuição de variáveis
$nome = "Luis Thalys";
$sobrenome = "Rodrigues Xavier Da Silva";

//Concatenando strings
echo $nome ." ". $sobrenome;

$num1 = 22.2;
$num2 = 11;

echo "<hr>";

var_dump($num1);
var_dump($num2);

// Operadores aritméticos ( + - * / )
echo "<hr>";

echo ($num1 + $num2) . "<br>";
echo ($num1 - $num2) . "<br>";
echo ($num1 * $num2) . "<br>";
echo ($num1 / $num2) . "<br>";

$n1 = 6.5;
$n2 = 8.9;

$media = ($n1 + $n2) / 2;
echo $media;

//Operadores relacionais (de comparação)

/*
igual           ==
diferente       !=
maior           >
menor           <
maior igual     >=
menor igual     <=
*/

echo "<hr>";

var_dump(
    ($nome == $sobrenome)
);

var_dump(
    ($n1 > $n2)
);

var_dump(
    (strlen($nome) <= 12)
);

//Operadores Lógicos
// AND &&
// OR ||
// NOT !

echo "<hr>";

$login = "luis";
$pass = "1234";


var_dump(
    ($login == "luis") &&
    ($pass == "1234")
);