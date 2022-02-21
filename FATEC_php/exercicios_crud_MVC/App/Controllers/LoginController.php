<?php

namespace App\Controllers;

use App\Lib\Util;
use App\Lib\Sessao;
use App\Models\DAO\UsuarioDAO;
use App\Models\Entidades\Usuario;

/**
 * /**
 * LOGIN -- TERMINAR
  login contem
  um objeto usuario //objUsuario
  {
  $login;
  $senha;
  $permissão;
  }.
  um tipo-de-sessao
  {
  paginas que a sessão acessa;
  }.

  se (objUsuario)cadastrado e senha ok //funcao-verificarLogin()
  {
  abre sessão //funcao-tipo-de-sessao(objUsuario->permissao)
  {
  tipo-de-sessao() = permissao-do-objUsuario.
  apresenta página-home(HTML).
  se logout()  //funcao-tipo-de-sessao()
  {
  fecha sessão.
  apresenta página-index(HTML-login.php).
  }
  }
  senão
  apresenta página-index(HTML-login.php).


 */
class LoginController extends Controller {

    private $usuario;
    private $tipoSessao;
    private $dadosForm;


    public function verificarLogin($dadosForm) {
        //verifica no banco se consta o login.
        $login = $dadosForm['login'];
        $usuarioDAO = new UsuarioDAO;
        $sql = "SELECT * FROM `usuarios` WHERE `login` LIKE '$login'";
        $resultado = $usuarioDAO->select($sql);
        if ($resultado) {
            //login ok;  
            //retorna esse Usuario - passo verificar senha;
        }
        //se não constar, mensagem de invalidação.       
    }

    /**
     * Já verificou o login e passa o usuario como parametro
     * @param Usuario $usuario
     * @param type $dadosForm
     */
    public function verificarSenha() {
        $senha = md5($dadosForm['senha']);
        if ($this->usuario->getSenha() == $senha) {
            
        }
    }

    /**
     * 
     */
    public function tipoSessao() {
        $this->tipoSessao = $this->usuario->getPermissao();
        //if Admin || Normal || Leitura
    }

}
