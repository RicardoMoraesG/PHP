<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaPoupanca
 *
 * @author Usuario
 */
class ContaPoupanca extends Conta{
  
  function lancarJuros($taxajuros) {
    $novoSaldo = $this->getSaldo()+ $this->getSaldo()*$taxajuros;
    $this->setSaldo($novoSaldo);
  }
}

