<?php 

$saldo = 1_000;
$tituloar = "Ivan";

do{

    echo "************************\n";
    echo "Titular: $tituloar \n";
    echo "Saldo: $saldo R$:  \n";
    echo "************************\n";
    echo "1. Consultar saldo \n";
    echo "2. Sacar Valor \n";
    echo "3. Depositar Valor \n";
    echo "4. Sair \n";

    $opcao = (int)fgets(STDIN);

    switch($opcao){
        case 1:
            echo "Seu saldo é de: $saldo R$ \n";
            break;
        case 2:
            echo "Digite o valor que deseja sacar: \n";
            $valorSaque = (float)fgets(STDIN);
            if($valorSaque > $saldo){
                echo "Saldo insuficiente \n";
            } else {
                $saldo -= $valorSaque;
                echo "Saque realizado com sucesso! \n";
            }
            break;
        case 3:
            echo "Digite o valor que deseja depositar: \n";
            $valorDeposito = (float)fgets(STDIN);
            if($valorDeposito <= 0){
                echo "Valor inválido! \n";
                break;
            }
            $saldo += $valorDeposito;
            echo "Deposito realizado com sucesso! \n";
            break;
        default:
            echo "Opção inválida! \n";
            break;
    }

}while($opcao != 4);