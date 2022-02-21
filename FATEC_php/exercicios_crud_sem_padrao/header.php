<?php
require_once 'controlaSessao.php';
?>

<!doctype html>
<html lang="pt-br" class="h-100">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!-- Custom styles for this template -->
        <link href="./css/sticky-footer-navbar.css" rel="stylesheet">
        <!-- Biblioteca de icones fontawesome-->
        <link href="fontawesome/css/all.css" rel="stylesheet">
        <!-- Material Icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link href=".css/login.css" rel="stylesheet">
       
        <title>CRUD – Produto em PHP</title>
    </head>
    <body class="d-flex flex-column h-100" >
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
                <a class="navbar-brand" href="home.php">CRUD-Produto</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listarProdutos.php">Listar Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrarProdutos.php">Cadastrar Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listarUsuarios.php">Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrarUsuarios.php">Cadastrar Usuários</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav" style="margin-right: 0px">
                        <li class="nav-item dropdown" style="margin-right: 0px">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                <i class="fas fa-user"> </i> &nbsp;<span class="d-sm-inline">Username</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" >
                                <a class="dropdown-item" href="#">Perfil</a>
                                <a class="dropdown-item" href="#">Trocar Senha</a>
                                <a class="dropdown-item" href="sair.php">Sair</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
