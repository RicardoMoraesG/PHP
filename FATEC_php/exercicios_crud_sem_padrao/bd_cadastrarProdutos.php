<?php
require_once 'header.php';
?>

<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-2">Listagem de Produtos</h1>
    <?php
      //Credenciais para conexão com o Banco
      $dbhost = 'localhost:3306';
      $dbuser = 'root';
      $dbpass = '';
      $dbname = 'crudproduto';
      
      //Abre conexão com o MySQL   
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
      if(!$conn ){
        die('Falha ao conectar com o MySQL: ' . mysqli_connect_error());
      }
      echo '<br>Conexão ao Banco realizada com Sucesso.';

      //Fecha  a conexão
      mysqli_close($conn);
    ?>      

  </div>
</main>