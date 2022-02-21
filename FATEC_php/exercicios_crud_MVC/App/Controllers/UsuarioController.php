<?php

namespace App\Controllers;

use App\Lib\Util;
use App\Lib\Sessao;
use App\Models\DAO\UsuarioDAO;
use App\Models\Entidades\Usuario;

class UsuarioController extends Controller {

    public function listar() {
        $usuarioDAO = new UsuarioDAO(); //conecta ao banco.
        self::setViewParam('listarUsuarios', $usuarioDAO->listar()); //busca os dados.
        $this->render('/usuario/listar'); //passa os dados para a view listar.
        Sessao::limpaMensagem();
    }

    public function editar($params) {

        $login = $params[0]; //pega o login do usuario a ser editado.
        $usuarioDAO = new UsuarioDAO();
        $objUsuario = $usuarioDAO->listar($login);

        if ($objUsuario == NULL) {
            $mensagem = '<div class="alert alert-danger" role="alert"> Falha ao recuperar dados do usuário login = ' . $login . '</div>';
            $view = '/usuario/editar';
            Sessao::gravaMensagem($mensagem);
            $this->redirect($view);
        }

        self::setViewParam('usuario', $objUsuario);
        $this->render('usuario/editar');
        Sessao::limpaMensagem();
    }

    public function salvar($param) {
        $cmd = $param[0]; //Pega o comando: editar ou novo
        //Sanitização dos dados do Formulário
        $dadosform = Util::sanitizar($_POST);

        $objUsuario = new Usuario();
        //Transfere os dados do Produto do Formulário para o Objeto
        $objUsuario->setUsuario($dadosform);

        $errovalidacao = false;
        //Aplicar a Validação dos Dados segundo as regras de negócio
        //Aqui pode-se criar uma classe separada de Validação
        if (empty($dadosform['login'])) {
            Sessao::gravaMensagem('<div class="alert alert-danger" role="alert">Verifique os Campos em Vermelho.</div>');
            //Habilita o 'is-invalide' do feedback do campo preço do Form
            Sessao::gravaErro('errologin', 'Este campo deve ser preenchido');
            $errovalidacao = true;
        }

        if ($errovalidacao) { //Houve erro na validacao
            //Guarda os dados do POST na viewVar para reapresentar os dados
            self::setViewParam('usuario', $objUsuario);
            if ($cmd == 'editar') { //O usuario está sendo editado
                $this->render('/usuario/editar'); //Retorna ao Formulário de edição
            } elseif ($cmd == 'novo') { //O usuario está sendo cadastrado
                $this->render('/usuario/cadastrar'); //Retorna ao Formulário de cadastro de novo produto
            }
            die(); //Isso é necessário senão ele vai continuar e cadastrar o usuario!!!
        }
        //Se passou pela validação sem erros, continua aqui

        $usuarioDAO = new UsuarioDAO(); //Conecta no Banco

        if ($cmd == 'editar') { //Salvar usuario editado
            $usuarioDAO->atualizar($objUsuario);
            Sessao::gravaMensagem('<div class="alert alert-success" role="alert">Usuário atualizado com sucesso.</div>');
        } elseif ($cmd == 'novo') { //Salvar novo usuário.
            $usuarioDAO->salvar($objUsuario);
            Sessao::gravaMensagem('<div class="alert alert-success" role="alert">Novo Usuário gravado com sucesso.</div>');
        }

        //Limpa Tudo
        Sessao::limpaErro();
        //Redireciona para o listar que vai exibir msg de feedback
        $this->redirect('/usuario/listar');
    }

    public function excluirConfirma($param) { //Confirma Exclusão do usuario
        $dados = Util::sanitizar($param); //Pega o login a ser excluído e sanitiza

        $objUsuario = new Usuario();
        $objUsuario->setLogin($dados[0]);  //Pega o login do usuário a ser excluído
        $objUsuario->setNome($dados[1]); //Pega o nome do usuário a ser excluído       

        self::setViewParam('usuario', $objUsuario);
        $this->render('/usuario/excluirConfirma'); //Retorna ao Formulário
    }

    public function excluir($param) {
        $objUsuario = new Usuario();
        //Pega o login a ser excluído
        $objUsuario->setLogin(Util::sanitizar($_POST['login']));

        $usuarioDAO = new UsuarioDAO();

        if (!$usuarioDAO->excluir($objUsuario)) {
            Sessao::gravaMensagem('<div class="alert alert-danger" role="alert">Usuário Não Encontrado.</div>');
        } else {
            Sessao::gravaMensagem('<div class="alert alert-success" role="alert">Usuário excluído com sucesso!.</div>');
        }
        $this->redirect('/usuario/listar');
    }

    public function cadastrar() {
        $this->render('/usuario/cadastrar');
        Sessao::limpaMensagem();
        Sessao::limpaErro();
    }

}
