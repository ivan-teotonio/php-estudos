<?php 

echo "5" + "10";

echo "Bem vindo ao acreen mastch! \n";

$nomeFilme = "Top Gun Maverick";
// $nomeFilme = "Se beber não case";
// $nomeFilme = "Thor: Ragnarock";


$anoLancamento =  2022;


$quantidadeDeNotas = $argc - 2;
$somaDeNotas = 0;

for($i = 1; $i < $argc; $i++){
    $somaDeNotas += $argv[$i];
}

// $cont = 1;
// while($argv[$cont] != 0){
//     $somaDeNotas += $argv[$cont];
//     $cont++;
// }
//com do while
 $cont = 1;
    do{
        $somaDeNotas += $argv[$cont];
        $cont++;
    }while($argv[$cont] != 0);
    


$notaFilme = $somaDeNotas / $quantidadeDeNotas;

$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do $nomeFilme \n Ano de lançamento: $anoLancamento \n";
echo "Nota do filme: $notaFilme \n";
echo "Incluido no plano: $incluidoNoPlano \n";



echo "Nota do filme: $notaFilme \n";

if($anoLancamento > 2022){
    echo "Filme ainda não lançado \n";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Filme já lançado \n";
} else {
    echo "Filme lançado \n";
}

$genero = match($nomeFilme){
    "Top Gun Maverick" => "Ação",
    "Thor: Ragnarock" => "Aventura",
    "Se beber não case" => "Comédia",
    default => "Desconhecido"
};


