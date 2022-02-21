<?php
//session_start();
require_once 'header.php';
//Caso o usuaário retorne para o 'Listar Produtos' isso limpa os formulário em 'Cadastrar Produtos' evitando 'resíduos'.
if (isset($_SESSION["form"]))
    unset($_SESSION["form"]);
?>
<main role="main" class="flex-shrink-0">
    <div class="container mt-5">
        <h1 class="mt-2">Listagem de Produtos</h1>
        <?php
        //Mensagens de Erro ou Sucesso na execução das funções
        if (isset($_SESSION['msg'])) {
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
        ?>
        <?php
        if (isset($_POST['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        /*
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
         */
        //echo '<br>Conexão ao Banco realizada com Sucesso.<br>';
        require_once 'acessaBD.php'; // Separa o codigo acima em um arquivo unico para ser reutilizado.
        $sql = 'SELECT * FROM Produto';
        $result = mysqli_query($conn, $sql); //A query seleciona as linhas da tabela.
        // $rows = mysqli_fetch_assoc($result); //só apresenta uma linha de cada vez da apresentação do select
        /*
          echo '<pre>';
          print_r($rows);
          echo '</pre>';
         */
        if (mysqli_num_rows($result) > 0) {
            echo '<div class="table-responsive">';
            echo '  <table class="table table-bordered table-hover table-sm">';
            echo '    <thead >';
            echo '      <tr style="background-color: #bee5eb;">';
            echo '        <th class="info">Id</th>';
            echo '        <th class="info">Nome</th>';
            echo '        <th class="info">Descrição</th>';
            echo '        <th class="info">Preço</th>';
            echo '        <th class="info">Qtde.</th>';
            echo '        <th class="info">Cadastro</th>';
            echo '	<th class="info"></th>';
            echo '      </tr>';
            echo '    </thead>';
            echo '    <tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '  <td align="center">' . $row['id'] . '</td>';
                echo '  <td>' . $row['nome'] . '</td>';
                echo '  <td>' . $row['descricao'] . '</td>';
                echo '  <td align="right"> R$ ' . number_format(floatval($row['preco']), 2, ',', '.') . '</td>';
                echo '  <td align="center">' . $row['quantidade'] . '</td>';
                echo '  <td align="center">' . $row['dataCadastro'] . '</td>';
                if ($_SESSION['usuario']['permissao'] != "Leitura") {
                    echo '  <td> <a href="editarProduto.php?id=' . $row['id'] . '" class="btn btn-info btn-sm" >Editar</a>  
              <a href="excluirProduto.php?id=' . $row['id'] . '&nome=' . $row['nome'] . '" class="btn btn-danger btn-sm mt-1">Excluir</a>';
                    echo '  </td>';
                }
                echo '</tr>';
            }
            echo '    </tbody>';
            echo '  </table>';
            echo '</div>';
        } else {
            echo "Nenhum Produto Encontrado.";
        }
        //Fecha  a conexão
        mysqli_close($conn);
        ?>      
    </div>
</main>
<?php
require_once 'footer.php';
?>