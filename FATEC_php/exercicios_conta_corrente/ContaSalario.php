<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaSalario
 *
 * @author Usuario
 */
class ContaSalario extends Conta{
  
  function lancarPgto($valor) {
    $novoSaldo = $this->getSaldo()+ $valor;
    $this->setSaldo($novoSaldo);
  }
    function depositar($valor){
        echo 'conta salario não recebe depósitos.';
  }

}

