<?php

//TRATA OS DADOS QUE SERÃO ENVIADOS PARA O FORMULÁRIO editarUsuarioForm.
//VERIFICAÇÃO
/*
  echo '<pre>';
  print_r($_GET);
  echo '</pre>';
 */
session_start();
include_once 'sanitizar.php';
$dados = sanitizar($_GET); //Sanitização 
//VERIFICAÇÃO SANITIZAÇÃO
/*
  echo '<pre> ';
  print_r($dados);
  echo '</pre>';
 */
$loginUsuario = $dados['login'];
//echo $loginUsuario;//verificação
//Credenciais para conexão com o Banco
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'crudproduto';
//Abre conexão com o MySQL
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die('Falha ao conectar com o MySQL: ' . $conn->connect_error);
}
$sql = "SELECT * FROM `usuarios` WHERE `login`='{$loginUsuario}'";
$result = mysqli_query($conn, $sql); //A query seleciona as linhas da Tabela
if (mysqli_affected_rows($conn) != 1) {
    die('Falha ao recuperar dados do usuário');
}
$usuario = mysqli_fetch_assoc($result);
//VERIFICAÇÃO
/*
  echo '<pre>';
  print_r($usuario);
  echo '</pre>';
 */
$conn->close(); //Fecha a conexão com o Banco
$_SESSION['form'] = $usuario;
header("Location:editarUsuarioForm.php");
