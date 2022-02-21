<?php
session_start();
require_once 'header.php';
?>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="mt-2">Exclusão de Usuário</h1>
                <form action="excluirUsuarioExclusao.php"	
                      method="post"
                      id="formExcluirUsuario">
                    <input	
                        type="hidden"	
                        name="login"	
                        value=" <?php
                        if (isset($_SESSION["form"]["login"]))
                            echo $_SESSION["form"]["login"];
                        ?>"
                        >
                    <div class="card text-white bg-danger mb-3" style="max-width: 22 rem;">
                        <div class="card-header">Confirmação da Exclusão do Usuário</div>
                        <div class="card-body">
                            <h5 class="card-title">Excluir?</h5>
                            Confirma	exclusão	do	usuário:	
                            <?php
                            if (isset($_SESSION["form"]["login"]))
                                echo $_SESSION["form"]["login"];
                            ?> ?
                            <div class="row">
                                <button	type="submit"	class="btn	btn-primary	btn-sm	mt-2">Confirmar</button>
                                <a	href="listarUsuarios.php"	class="btn	btn-info	btn-sm	mt-2">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" col-md-3"></div>
        </div>
    </div>
</main>

<?php
include_once 'footerP1.php';
