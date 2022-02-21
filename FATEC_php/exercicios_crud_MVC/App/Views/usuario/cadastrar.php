<main role="main" class="flex-shrink-0 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="mt-2">Cadastro de Usuário</h1>
                <?php
                //Mensagens de Erro ou Sucesso na execução das funções
                echo $Sessao::retornaMensagem();
                $Sessao::limpaMensagem();
                ?>
                <form action="<?php echo 'http://' . APP_HOST . '/usuario/salvar/novo'; ?>" method="post" id="formCadastro">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" name="login" value="<?php
                        if (isset($viewVar['usuario'])) {
                            echo $viewVar['usuario']->getLogin();
                        }
                        ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" value="<?php
                        if (isset($viewVar['usuario'])) {
                            echo $viewVar['usuario']->getNome();
                        }
                        ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" value="<?php
                        if (isset($viewVar['usuario'])) {
                            echo $viewVar['usuario']->getSenha();
                        }
                        ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" value="<?php
                        if (isset($viewVar['usuario'])) {
                            echo $viewVar['usuario']->getEmail();
                        }
                        ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="permissao">Permissão</label>
                        <select class="form-control" name="permissao">
                            <option value="Normal" selected="selected">Normal</option>
                            <option value="Leitura">Leitura</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                </form>
            </div>
            <div class=" col-md-3"></div>
        </div>
    </div>
</main>
