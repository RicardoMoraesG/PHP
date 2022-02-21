<?php

//Credenciais para conexão com o Banco
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'crudproduto';

//Abre conexão com o MySQL   
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die('Falha ao conectar com o MySQL: ' . mysqli_connect_error());
}

  //Fecha  a conexão
 //  mysqli_close($conn);