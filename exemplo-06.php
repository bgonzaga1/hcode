
<?php

//Criando um Objeto a partir de uma class date-time

// new DateTime() - Criando a classe DateTime, adicionando o método construtor ().

// Método add - adiciona um intervalo, no caso adicionei 15 dias

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");




?>