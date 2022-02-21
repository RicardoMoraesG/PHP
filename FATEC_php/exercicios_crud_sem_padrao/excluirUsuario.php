<?php

session_start();
include_once 'sanitizar.php';

$dados = sanitizar($_GET); //Sanitização 

$_SESSION['form'] = $dados;
header("Location:excluirUsuarioForm.php");