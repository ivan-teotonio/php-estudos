<?php 

echo "Bem vindo ao screen match!";

$nomeFilme = "Top Gum Maverick";
$anoLancamento = 2020;
$notaIMDB = (9 + 6 + 8 + 7.5) / 3;

$notaIMDB += 0.5;

$planoPrime = true;

$incluidoNoPolano = $planoPrime ? "Sim" : "Não";

echo $nomeFilme;