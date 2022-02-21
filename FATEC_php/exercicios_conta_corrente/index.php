<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Classe, Atributos e Métodos</title>
    </head>
    <body>
        <?php
        require_once './Conta.php';  //Inclui a classe Conta
        require_once './ContaCorrente.php';  //Inclui a classe ContaCorrente
        require_once './ContaPoupanca.php';  //Inclui a classe ContaPoupanca
        require_once './ContaSalario.php';  //Inclui a classe ContaSalario
        require_once './ContaCorrenteEspecial.php'; // Inclui a classe ContaCorrenteEspecial
        /*
          $cntCorr = new ContaCorrente('7768-4', '11229-8'); //Instancia um objeto da classe ContaCorrente
          //$cntCorr->setAgencia('7768-4'); //Atribui a Angência
          // $cntCorr->setConta('11229-8'); //Atribui o número da conta
          $cntCorr->setSaldo(0.0); //Saldo inicial

          echo "Saldo Atual: {$cntCorr->getSaldo()}<br>";
          $cntCorr->depositar(100.0);
          echo "Saldo Atual: {$cntCorr->getSaldo()}<br>";
          $cntCorr->sacar(10.0);
          echo "Saldo Atual: {$cntCorr->getSaldo()}<br>";
          $cntCorr->sacar(100.0);
          echo "Saldo Atual: {$cntCorr->getSaldo()}<br>";
         */
        $cntEsp = new ContaCorrenteEspecial('5533-1', '33445-9');
        $cntEsp->setLimite(500.0);
        echo "Limite Especial: {$cntEsp->getLimite()} <br>";
        $cntEsp->depositar(1000.0);
        echo "Saldo Atual: {$cntEsp->getSaldo()} <br>";
        echo "Disponível para Saque : {$cntEsp->getSaqueDisponivel()}<br>";
        $cntEsp->sacar(1490.0);
        echo "Saldo Atual: {$cntEsp->getSaldo()} <br>";
        echo "Disponível para Saque : {$cntEsp->getSaqueDisponivel()}<br>";
        echo 'sacar 1000.0';
        $cntEsp->sacar(1000.0);
        ?>
    </body>
</html>
