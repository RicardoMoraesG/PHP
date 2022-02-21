<?php
//session_start();
require_once 'header.php';
//Caso o usuário retorne para o 'Listar Usuários' isso limpa os formulário em 'Cadastrar Usuários' evitando 'resíduos'.
if (isset($_SESSION["form"]))
    unset($_SESSION["form"]);
?>
<main role="main" class="flex-shrink-0">
    <div class="container mt-5 ">
        <h1 class="mt-2 bg-light">Lista de Usuários</h1>
        <?php
        //Mensagens de Erro ou Sucesso na execução das funções
        if (isset($_SESSION['msg-user'])) {
            echo $_SESSION["msg-user"];
            unset($_SESSION["msg-user"]);
        }
        ?>        
        <?php
        if (isset($_POST['msg-user'])) {
            echo $_SESSION['msg-user'];
            unset($_SESSION['msg-user']);
        }
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
        //VERIFICA CONEXÃO COM O BANCO:
        //echo '<br>Conexão ao Banco realizada com Sucesso.<br>';//ok!
        //require_once 'acessaBD.php'; //separa a credencial em um único arquivo - desabilitado para o padrão da aula.
        $sql = 'SELECT * FROM usuarios';
        $result = mysqli_query($conn, $sql); //A query seleciona as linhas da tabela.
        /*
          //VERIFICA O RESULTADO:
          $rows = mysqli_fetch_assoc($result); //só apresenta uma linha de cada vez da apresentação do select
          echo '<pre>';
          print_r($rows);
          echo '</pre>';//ok!
         */

        if (mysqli_num_rows($result) > 0) {
            echo '<div class="bg-light" name="listaUsuarios">';
            echo '  <div class="table-responsive">';
            echo '  <table class="table table-bordered table-hover table-sm">';
            echo '    <thead >';
            echo '      <tr style="background-color: #bee5eb;">';
            echo '        <th class="info">Login</th>';
            echo '        <th class="info">Nome</th>';
            echo '        <th class="info">Senha?</th>';
            echo '        <th class="info">E-mail</th>';
            echo '        <th class="info">Permissão</th>';
            echo '	<th class="info"></th>';
            echo '      </tr>';
            echo '    </thead>';
            echo '    <tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '  <td>' . $row['login'] . '</td>';
                echo '  <td>' . $row['nome'] . '</td>';
                echo '  <td><span class="material-icons">visibility_off</span> ***** </td>';
                echo '  <td>' . $row['email'] . '</td>';
                echo '  <td>' . $row['permissao'] . '</td>';
                echo ' <td> '
                . '<a href="editarUsuario.php?login=' . $row['login']
                . '" class="btn btn-info btn-sm"> Editar<span class="material-icons">edit_note</span></a>'
                . '<a href="excluirUsuario.php?login=' . $row['login']
                . '&nome=' . $row['nome']
                . '" class="btn  btn-light text-secondary btn-sm text-center" >Excluir<span class="material-icons">delete_forever</span> </a>';
                echo '</tr>';
            }
            echo '    </tbody>';
            echo '  </table>';
            echo '</div>';
            echo '</div>';
        } else {
            echo "Nenhum usuário encontrado.";
        }
        //Fecha  a conexão
        mysqli_close($conn);
        ?>      
    </div>
</main>
<?php
require_once 'footer.php';
?>