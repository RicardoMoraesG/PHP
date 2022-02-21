<?php
require_once 'permissaoAdmin.php';
//SALVA AS ALTERAÇÕES NO BANCO DE DADOS.

//VERIFICA DADOS DO POST
/*
  echo '<pre>';
  print_r($_POST);
  echo '</pre>'; // ok!
 */


session_start();
//Sanitização dos dados do Formulário
include_once 'sanitizar.php';
$dadosform = sanitizar($_POST);
$errovalidacao = false;
//VERIFICA SANITIZAÇÃO
/*
  echo '<pre>';
  print_r($dadosform);
  echo '</pre>'; //ok!
 */

//Aplicar a Validação dos Dados segundo as regras de negócio

if (empty($dadosform['nomeUsuario'])) {
$_SESSION['msg-user'] = '<div class="alert alert-danger" role="alert">Verifique os Campos em Vermelho.</div>';
$_SESSION['erroNomeUsuario'] = 'Este campo deve ser preenchido';
$errovalidacao = true;
}
if (empty($dadosform['senha'])) {
$_SESSION['msg-user'] = '<div class="alert alert-danger" role="alert">Verifique os Campos em Vermelho.</div>';
$_SESSION['erroSenha'] = 'Este campo deve ser preenchido';
$errovalidacao = true;
}
if (empty($dadosform['email'])) {
$_SESSION['msg-user     '] = '<div class="alert alert-danger" role="alert">Verifique os Campos em Vermelho.</div>';
$_SESSION['erroEmail'] = 'Este campo deve ser preenchido';
$errovalidacao = true;
}
if ($errovalidacao) {  //Houve erro na validacao
//Guarda os dados do POST na Session para reapresentar os dados
$_SESSION['form'] = $dadosform;
header("Location:editarUsuarioForm.php"); //Retorna ao Formulário
die(); //Isso é necessário senão ele vai continuar e salvar as alterações!!!
}
/*
  if (isset($_SESSION['form'])) {
  unset($_SESSION['form']); //Limpa os dados do formulário se guardados anteriormente
  }
 */

//Se passou pela validação sem erros, continua aqui
//Credenciais para conexão com o Banco
//require_once 'acessaBD.php';//separa a credencial em um único arquivo - desabilitado para o padrão da aula.
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'crudproduto';
//VERIFICAÇÃO
/*
  print_r('CONEXAO COM O BANCO:');
  print_r('</br>');
  print_r($dbname);
  print_r('</br>');
 */

//Abre conexão com o MySQL   
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
die('Falha ao conectar com o MySQL: ' . $conn->connect_error);
}
//Recebe os dados para passar para o Banco.
$login = $dadosform["login"];
$nomeUsuario = $dadosform["nomeUsuario"];
$senha = $dadosform["senha"];
$email = $dadosform["email"];
$permissao = $dadosform["permissao"];
//VERIFICAÇÃO
/*
  print_r('DEPOIS DE RECEBER OS DADOS');
  print_r('</br> permissao: ');
  print_r($permissao);
 */

$sql = "UPDATE `usuarios` SET "
        . "nome='" . $nomeUsuario
        . "',senha='" . $senha
        . "',email='" . $email
        . "',permissao='" . $permissao
        . "' WHERE login='" . $login . "'";

$result = mysqli_query($conn, $sql); //A query seleciona as linhas da Tabela

if (mysqli_affected_rows($conn) != 0) {
$_SESSION['msg-user'] = '<div class="alert alert-success" role="alert">Usuário atualizado com sucesso!</div>';
} else {
$_SESSION['msg-user'] = '<div class="alert alert-danger" role="alert">Erro ao atualizar usuário no Banco!</div>';
}

$conn->close(); //Fecha a conexão com o Banco
//Retorna ao Formulário para mostrar a mensagem de Sucesso ou Erro
header("Location:listarUsuarios.php");

