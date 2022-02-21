<?php
//session_start();
require_once 'header.php';
if (isset($_SESSION["form"]))
    unset($_SESSION["form"]);
?>
<main role="main" class="flex-shrink-0">
    <div class="container">        
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="mt-2">Cadastro de Produto</h1>
                <?php
                //Mensagens de Erro ou Sucesso na execução das funções              
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION["msg"];
                    unset($_SESSION["msg"]);
                }
                ?>  
                <!-- Ao clicar no botão salvar, acionará o seguinte código-->
                <form action="./salvarProduto.php" method="post" id="formCadastro">
                    <!--DADOS DO FORMULÁRIO-->
                    <div class="form-group">
                        <label for="nome">Nome</label> 
                        <input  autofocus="true" type="text" class="form-control 
                        <?php
                        if (isset($_SESSION["erronome"]))
                            echo 'is-invalid';
                        ?>" 
                               name="nome" 
                               value="
                               <?php
                               if (isset($_SESSION["form"]["nome"]))
                                   echo $_SESSION["form"]["nome"];
                               ?>
                               " >
                        <div class="invalid-feedback">
                            <?php
                            echo $_SESSION["erronome"];
                            unset($_SESSION["erronome"]);
                            ?>
                        </div>
                    </div>
                    <!--FIM/CAMPO NOME-->
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" name="descricao">
                            <?php
                            if (isset($_SESSION["form"]["descricao"]))
                                echo $_SESSION["form"]["descricao"];
                            ?>
                        </textarea>
                    </div>
                    <!--FIM/CAMPO DESCRIÇÃO-->
                    <div class="form-group">
                        <label for="preco">Preço</label> R$ 
                        <input type="text" class="form-control 
                        <?php
                        if (isset($_SESSION["erropreco"]))
                            echo 'is-invalid';
                        ?>" 
                               name="preco" 
                               value="
                               <?php
                               if (isset($_SESSION["form"]["preco"]))
                                   echo $_SESSION["form"]["preco"];
                               ?>
                               ">
                        <div class="invalid-feedback">
                            <?php
                            echo $_SESSION["erropreco"];
                            unset($_SESSION["erropreco"]);
                            ?>
                        </div>
                    </div>
                    <!--FIM/CAMPO PREÇO-->
                    <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" class="form-control" name="quantidade" value="<?php
                        if (isset($_SESSION["form"]["quantidade"]))
                            echo $_SESSION["form"]["quantidade"];
                        else
                            echo '0';
                        ?>" required>
                    </div>
                    <!--FIM/CAMPO QUANTIDADE-->
                    <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                </form>
            </div>
            <div class=" col-md-3"></div>
        </div>      
    </div>
</main>
<?php
require_once 'footer.php';

