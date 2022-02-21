<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaCorrenteEspecial
 * 
 * Atividade: Implementar a classe ContaCorrenteEspecial, 
 * considerando que este tipo de conta possui um Limite que pode ser usado 
 * caso o saldo não suporte o saque. Note que o saldo poderá ficar negativo 
 * até o limite do Especial.
 *
 * @author Ricardo de Moraes
 */
class ContaCorrenteEspecial extends ContaCorrente {

    private $limite;
    private $saqueDisponivel;

    function getLimite() {
        return $this->limite;
    }

    function setLimite($limite) {
        $this->limite = $limite;
    }

    function getSaqueDisponivel() {
        return $this->saqueDisponivel = $this->limite + $this->getSaldo();
    }

    public function sacar($valor) {
        $this->getSaqueDisponivel(); //soma o saldo + limite.        
        if ($this->saqueDisponivel >= $valor) {//verifica o valor do Saldo + o Limite.
            $this->setSaldo($this->getSaldo() - $valor); //saca o valor do saldo.
            return $this->getSaldo(); //mostra o saldo.
        } else {
            echo '<br>***tentativa de saque além do limite.***';
            echo '<br> Limite Especial: ' . $this->getLimite();
            echo '<br> Saldo: ' . $this->getSaldo();
            echo '<br> Disponível para saque: ' . $this->saqueDisponivel;
        }
    }

}
