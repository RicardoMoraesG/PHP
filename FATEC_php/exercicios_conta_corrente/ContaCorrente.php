<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaCorrente
 *
 * @author Usuario
 */
class ContaCorrente extends Conta{
  private $qtdeCheques;
  
  function emitirCheque($qtde) {
    $this->qtdeCheques += $qtde;
  }
}

