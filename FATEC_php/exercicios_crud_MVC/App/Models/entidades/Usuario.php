<?php

/*
 * 
 */

namespace App\Models\Entidades;

class Usuario {

    private $login;
    private $nome;
    private $senha;
    private $email;
    private $permissao;

    public function setUsuario($dados) {
        $this->login = $dados['login'];
        $this->nome = $dados['nome'];
        $this->senha = $dados['senha'];
        $this->email = $dados['email'];
        $this->permissao = $dados['permissao'];
    }

    function getLogin() {
        return $this->login;
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function getPermissao() {
        return $this->permissao;
    }



    function setLogin($login) {
        $this->login = $login;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPermissao($permissao) {
        $this->permissao = $permissao;
    }

}
