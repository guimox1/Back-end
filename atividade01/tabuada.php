<?php
//faça um codigo em que calcule a tabuada do número indicado em uma variavel com o nome $tabuada, aplique o laço de repetição FOR
$numero = 2;
$numero = $_GET[('numero')] ?? '';
for ($variavel1 = 1; $variavel1 <= 10; $variavel1 ++){
    echo " $variavel1 X $numero = ".($variavel1*$numero). "<br>";
}