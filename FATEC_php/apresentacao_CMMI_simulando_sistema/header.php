
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

        <!--<title>Dashboard Template for Bootstrap</title>-->
        <title>CMMI </title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">BFRV</a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="conclusao.php">Concluir</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">


                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="dashboard.php">
                                    <span data-feather="home"></span>
                                    Painel <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                <span>Nível 2</span>
                                <a class="d-flex align-items-center text-muted" href="#">
                                    <span data-feather="plus-circle"></span>
                                </a>
                            </h6>
                            <li class="nav-item">
                                <a class="nav-link" href="01gerenciaDeRequisitos.php">
                                    <span data-feather="file"></span>
                                    Gerência de Requisitos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="02planejamentoDeProjetos.php">
                                    <span data-feather="shopping-cart"></span>
                                    Planejamento de Projetos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="03controleDeProjetoMonitoramento.php">
                                    <span data-feather="users"></span>
                                    Controle de Projeto e Monitoramento
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="05gerenciamentoDeAcordoComFornecedores.php">
                                    <span data-feather="bar-chart-2"></span>
                                    Gerenciamento de Contratos com Fornecedores
                                </a>
                            </li>                            
                            <!--BEATRIZ-->

                            <!--VICTOR-->
                            <li class="nav-item">
                                <a class="nav-link" href="06gerenciamentoDeRequerimentos.php">
                                    <span data-feather="layers"></span>
                                    Gerenciamento de Requerimentos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="07gerenciamentoDeConfiguracao.php">
                                    <span data-feather="layers"></span>
                                    Gerenciamento de Configuração
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="08garantiaDaQualidade.php">
                                    <span data-feather="layers"></span>
                                    Garantia de Qualidade de produtos e Processos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="09medicaoAnalise.php">
                                    <span data-feather="layers"></span>
                                    Medição e Análise
                                </a>
                            </li>
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Nível 3</span>
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="10focoProcessoOrganizacional.php">
                                    <span data-feather="file-text"></span>
                                    Foco em processo organizacional
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="11definicaoDeProcessoOrganizacional.php">
                                    <span data-feather="file-text"></span>
                                    Definição de Processo Organizacional
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="12treinamentoOrganizacional.php">
                                    <span data-feather="file-text"></span>
                                    Treinamento Organizacional
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="13gerenciamentoDeProjetoIntegrado.php">
                                    <span data-feather="file-text"></span>
                                    Gerenciamento de Projeto Integrado
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="14gerenciamentoDeRiscos.php">
                                    <span data-feather="file-text"></span>
                                    Gerenciamento de Riscos
                                </a>
                            </li
                            <li class="nav-item">
                                <a class="nav-link" href="15desenvolvimentoDeRequerimentos.php">
                                    <span data-feather="file-text"></span>
                                    Desenvolvimento de Requerimentos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="16solucaoTecnica.php">
                                    <span data-feather="file-text"></span>
                                    Solução Técnica
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="17integracaoDoProduto.php">
                                    <span data-feather="file-text"></span>
                                    Integração do Produto
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="18verificacao.php">
                                    <span data-feather="file-text"></span>
                                    Verificação
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="19validacao.php">
                                    <span data-feather="file-text"></span>
                                    Validação
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="20resolucao.php">
                                    <span data-feather="file-text"></span>
                                    Resolução e Análise de Decisão
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

