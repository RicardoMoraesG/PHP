<?php
//session_start();
require_once 'header.php';
require_once 'permissaoAdmin.php';
//Limpa o formulário para uma nova sessão.
if (isset($_SESSION["form"]))
    unset($_SESSION["form"]);
?>
<main role="main" class="flex-shrink-0">
    <div class="container">        
        <div class="row">
            <div class="col-md-3"></div><!-- COLUNA ESPAÇAMENTO A ESQUERDA -->
            <div class="col-md-6">
                <h1 class="mt-2">Cadastro de Usuários</h1>
                <?php
                //Mensagens de Erro ou Sucesso na execução das funções              
                if (isset($_SESSION['msg-user'])) {
                    echo $_SESSION["msg-user"];
                    unset($_SESSION["msg-user"]);
                }
                ?> 
                <!--Ao clicar no botão cadastrar acionará o seguinte código: -->
                <form action="./salvarUsuario.php" method="post" id="formUsuario">
                    <!-- CAMPOS DO FORMULÁRIO -->
                    <div class="form-group">
                        <label for="login">Login</label> 
                        <input  autofocus="true" type="text" class="form-control 
                        <?php
                        if (isset($_SESSION["erroLogin"]))
                            echo 'is-invalid';
                        ?>" 
                                name="login" 
                                value="
                                <?php
                                if (isset($_SESSION["form"]["login"]))
                                    echo $_SESSION["form"]["login"];
                                ?>
                                " >
                        <div class="invalid-feedback">
                            <?php
                            echo $_SESSION["erroLogin"];
                            unset($_SESSION["erroLogin"]);
                            ?>
                        </div>
                    </div>
                    <!-- FIM/USUARIO -->
                    <div class="form-group">
                        <label for="nomeUsuario">Nome</label> 
                        <input type="text" class="form-control 
                        <?php
                        if (isset($_SESSION["erroNomeUsuario"]))
                            echo 'is-invalid';
                        ?>" 
                               name="nomeUsuario" 
                               value="
                               <?php
                               if (isset($_SESSION["form"]["nomeUsuario"]))
                                   echo $_SESSION["form"]["nomeUsuario"];
                               ?>
                               " >
                        <div class="invalid-feedback">
                            <?php
                            echo $_SESSION["erroNomeUsuario"];
                            unset($_SESSION["erroNomeUsuario"]);
                            ?>
                        </div>
                    </div>
                    <!-- FIM/nomeUsuario -->
                    <div class="form-group">
                        <label for="senha">Senha</label> 
                        <input type="text" class="form-control 
                        <?php
                        if (isset($_SESSION["erroSenha"]))
                            echo 'is-invalid';
                        ?>" 
                               name="senha" 
                               value="
                               <?php
                               if (isset($_SESSION["form"]["senha"]))
                                   echo $_SESSION["form"]["senha"];
                               ?>
                               " >
                        <div class="invalid-feedback">
                            <?php
                            echo $_SESSION["erroSenha"];
                            unset($_SESSION["erroSenha"]);
                            ?>
                        </div>
                    </div>
                    <!-- FIM/SENHA -->
                    <div class="form-group">
                        <label for="email">E-mail</label> 
                        <input type="text" class="form-control 
                        <?php
                        if (isset($_SESSION["erroEmail"]))
                            echo 'is-invalid';
                        ?>" 
                               name="email" 
                               value="
                               <?php
                               if (isset($_SESSION["form"]["email"]))
                                   echo $_SESSION["form"]["email"];
                               ?>
                               " >
                        <div class="invalid-feedback">
                            <?php
                            echo $_SESSION["erroEmail"];
                            unset($_SESSION["erroEmail"]);
                            ?>
                        </div>
                    </div>
                    <!-- FIM/EMAIL -->
                    <div class="form-group">
                        <label for="permissao">Permissão</label> 
                        <select name="permissao">
                            <option value="Normal" class="text-light bg-info" >Normal</option>                            
                            <option value="Leitura" class="text-light bg-success">Leitura</option>
                            <option value="Admin" class="text-light bg-danger">Admin</option>
                        </select>
                    </div>
                    <!-- FIM/PERMISSÃO -->
                    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </form><!-- FIM/CAMPOS DO FORMULÁRIO -->
            </div><!--FIM/ COLUNA CENTRAL -->
            <div class=" col-md-3"></div><!-- COLUNA ESPAÇAMENTO A DIREITA -->
        </div><!-- ROW -->      
    </div><!-- CONTAINER DA MAIN -->
</main>
<?php
require_once 'footer.php';
