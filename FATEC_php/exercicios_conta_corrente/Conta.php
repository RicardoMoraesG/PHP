<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conta
 *
 * @author Usuario
 */
abstract class Conta {

    //put your code here
    private $agencia;
    private $conta;
    private $saldo;

    function __construct($agencia, $conta) {
        $this->agencia = $agencia;
        $this->conta = $conta;
        echo '<br>Contrutor da Classe executado.<br>';
    }

    function __destruct() {
        echo '<br>Método destruct executado!<br>';
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        return $this->saldo;
    }

    function getAgencia() {
        return $this->agencia;
    }

    function getConta() {
        return $this->conta;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    function setConta($conta) {
        $this->conta = $conta;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

}
