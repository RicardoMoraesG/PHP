<?php
require_once 'header.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>  
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Medição e Análise</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a  href="08garantiaDaQualidade.php" >  
                    <button class="btn btn-sm btn-outline-secondary">Anterior</button>
                </a>
                <a href="10focoProcessoOrganizacional.php">
                    <button class="btn btn-sm btn-primary">Próximo</button>
                </a> </div>
            <button class="btn btn-sm btn-outline-primary dropdown-toggle">
                <span data-feather="calendar"></span>
                Esta semana
            </button>
        </div>
    </div>
    <div>
        <h3></h3>
        <div class="card-header bg-dark text-white">
            <h4>
            O proposito da Medição e Análise é desenvolver e sustentar uma capacidade de medição que é usada para suportar gerencialmente as necessidades de informação. Desenvolver e providencia medidas para dar suporte ao gerenciamento da informação requerida.</h4>
        </div>
    </div>
    
    
     <div>        
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                    <img class="card-img-top align-items-center" src="img/22.png" alt="Card image cap" style="width: 100px; height: 100px;">
                    <div class="card-body">
                        <p class="card-text">Indicadores.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Abrir</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                            </div>
                            <small class="text-muted">Imprimir</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                    <img class="card-img-top" src="img/23.jpg" alt="Card image cap" style="width: 100px; height: 100px;">
                    <div class="card-body">
                        <p class="card-text">Técnica de Medição.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Abrir</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                            </div>
                            <small class="text-muted">Imprimir</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/24.png" alt="Card image cap" style="width: 100px; height: 100px;">
                    <div class="card-body">
                        <p class="card-text">Plano de Resposta.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Abrir</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                            </div>
                            <small class="text-muted">Imprimir</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    
    <!--Painél - Dashboard-->
    <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

    <h2>Atividades</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Objetivos</th>
                    <th>Gerenciamento</th>
                    <th>Processo</th>
                    <th>Documentos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>100</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                </tr>
                <tr>
                    <td>1,002</td>
                    <td>amet</td>
                    <td>consectetur</td>
                    <td>adipiscing</td>
                    <td>elit</td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>Integer</td>
                    <td>nec</td>
                    <td>odio</td>
                    <td>Praesent</td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>libero</td>
                    <td>Sed</td>
                    <td>cursus</td>
                    <td>ante</td>
                </tr>
                <tr>
                    <td>1,004</td>
                    <td>dapibus</td>
                    <td>diam</td>
                    <td>Sed</td>
                    <td>nisi</td>
                </tr>
                <tr>
                    <td>1,005</td>
                    <td>Nulla</td>
                    <td>quis</td>
                    <td>sem</td>
                    <td>at</td>
                </tr>
                <tr>
                    <td>1,006</td>
                    <td>nibh</td>
                    <td>elementum</td>
                    <td>imperdiet</td>
                    <td>Duis</td>
                </tr>
                <tr>
                    <td>1,007</td>
                    <td>sagittis</td>
                    <td>ipsum</td>
                    <td>Praesent</td>
                    <td>mauris</td>
                </tr>
                <tr>
                    <td>1,008</td>
                    <td>Fusce</td>
                    <td>nec</td>
                    <td>tellus</td>
                    <td>sed</td>
                </tr>
                <tr>
                    <td>1,009</td>
                    <td>augue</td>
                    <td>semper</td>
                    <td>porta</td>
                    <td>Mauris</td>
                </tr>
                <tr>
                    <td>1,010</td>
                    <td>massa</td>
                    <td>Vestibulum</td>
                    <td>lacinia</td>
                    <td>arcu</td>
                </tr>
                <tr>
                    <td>1,011</td>
                    <td>eget</td>
                    <td>nulla</td>
                    <td>Class</td>
                    <td>aptent</td>
                </tr>
                <tr>
                    <td>1,012</td>
                    <td>taciti</td>
                    <td>sociosqu</td>
                    <td>ad</td>
                    <td>litora</td>
                </tr>
                <tr>
                    <td>1,013</td>
                    <td>torquent</td>
                    <td>per</td>
                    <td>conubia</td>
                    <td>nostra</td>
                </tr>
                <tr>
                    <td>1,014</td>
                    <td>per</td>
                    <td>inceptos</td>
                    <td>himenaeos</td>
                    <td>Curabitur</td>
                </tr>
                <tr>
                    <td>1,015</td>
                    <td>sodales</td>
                    <td>ligula</td>
                    <td>in</td>
                    <td>libero</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php
require_once 'scripts.php';
?>


        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
                    datasets: [{
                            data: [10, 200, 250, 400, 500, 350, 450],
                            lineTension: 0,
                            backgroundColor: 'Gainsboro',
                            borderColor: '#Gray',
                            borderWidth: 10,
                            pointBackgroundColor: '#007bff'
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: false
                                }
                            }]
                    },
                    legend: {
                        display: false,
                    }
                }
            });
            
            </script>
        
    </body>
</html>



