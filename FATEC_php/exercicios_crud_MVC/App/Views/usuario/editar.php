<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="mt-2">Editar dados do Usuário</h1>
                <?php
                //Mensagens de Erro ou Sucesso na execução das funções
                echo $Sessao::retornaMensagem();
                $Sessao::limpaMensagem();
                ?>

                <form action="<?php echo 'http://' . APP_HOST . '/usuario/salvar/editar'; ?>" method="post" id="formEditarUsuario">
                    <div class="form-group">
                        <label for="login"><h3><?php echo $viewVar['usuario']->getLogin(); ?></h3></label>
                        <input type="hidden" name="login" value="<?php echo $viewVar['usuario']->getLogin(); ?>">
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" value="<?php echo $viewVar['usuario']->getNome(); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $viewVar['usuario']->getEmail(); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="permissao">Permissão</label>
                        <select class="form-control" name="permissao">
                            <option value="<?php echo $viewVar['usuario']->getPermissao(); ?>" selected="selected"><?php echo $viewVar['usuario']->getPermissao(); ?></option>
                            <option value="Normal">Normal</option>
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

