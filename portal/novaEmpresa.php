<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../css/portal.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php require_once "sidebar.php"; ?>


        <!-- Page Content  -->
        <div id="content">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
            </button>

            <div class="container">

                <div class="col-12" style="margin-bottom: 30px">
                    <h1 class="fontSizeQuery query-extra-marginLR">Contrato de Cessão</h1>
                </div>
                <div class="col-12">
                    <form>
                        <div class="form-group onPhoneBorder" style="margin-bottom: 30px">
                          
                            <p style="color: rgb(12, 60, 96); text-align: justify">
                                Esta sessão serve para que possamos conhecer melhor você e sua empresa.
                            </p>
                          
                            <p style="color: rgb(12, 60, 96); text-align: justify">
                                Através dela iremos realizar uma análise minunciosa e elaboraremos um mapa de crédito que ficará armazenada em nossa base de dados.
                            </p>
                          
                            <p style="color: rgb(12, 60, 96); text-align: justify">
                                Não se preocupe. Você receberá notificações diariamente através do seu e-email sobre a situação do seu cadastro.
                            </p>
                          
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tabs -->

            <div id="client-input">
                <div class="max-width d-flex justify-content-center">
                    <ul class="nav nav-tabs d-flex justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link query-word-break active " data-toggle="tab" href="#PJ">
                                Pessoa Juridíca
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link query-word-break" data-toggle="tab" href="#PF">
                                Pessoa Física
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Pessoa Jurídica -->

                <div class="tab-content">
                    <div class="tab-pane container active" id="PJ">
                        <div class="container">
                            <div class="row no-gutters">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="jumbotron">
                                        <div class="col-12 centeredQuery" style="text-align: center; margin-bottom: 30px">
                                            <h3 class="fontSizeQuery query-extra-marginLR" style="text-align: left">
                                                Pessoa Juridíca
                                            </h3>
                                        </div>
                                        <div class="col-12">
                                            <form>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="cartao_CNPJ">*Insira o CNPJ:</label>
                                                    <input id="cartao_CNPJ" type="text" pattern="{0-9}" class="form-control" name="CartãoCNPJ" placeholder="CNPJ da sua empresa" required>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile2">*Ficha cadastral PJ original preenchida:</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="fichaCadastralPJ" id="customFile2" class="custom-file-input" accept=".pdf, .doc" required>
                                                        <label class="custom-file-label" for="customFile2">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile3">*Contrato Social:</label>
                                                    <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip" title="Envie a última alteração consolidada. Caso não consolidada, envie todos os contratos até a data vigente.">
                                                    <div class="custom-file">
                                                        <input type="file" name="contratoSocial" id="customFile3" class="custom-file-input" accept=".pdf, .zip" required>
                                                        <label class="custom-file-label" for="customFile3">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile4">*Relação de faturamento dos últimos 24 meses:</label>
                                                    <!-- <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip"
                                                        title="Texto do Tooltip Aqui"> -->
                                                    <div class="custom-file">
                                                        <input type="file" name="relaçaoDeFaturamento24meses" id="customFile4" class="custom-file-input" accept=".xls, .xlsm" required>
                                                        <label class="custom-file-label" for="customFile4">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile5">*Posição atualizada do endividamento bancário:</label>
                                                    <!-- <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip"
                                                        title="Texto do Tooltip Aqui"> -->
                                                    <div class="custom-file">
                                                        <input type="file" name="endividamentoBancario" id="customFile5" class="custom-file-input" accept=".xls, .xlsm" required>
                                                        <label class="custom-file-label" for="customFile5">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile6">*Demonstrações financeiras encerradas em dezembro dos últimos dois anos:</label>
                                                    <!-- <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip"
                                                        title="Texto do Tooltip Aqui"> -->
                                                    <div class="custom-file">
                                                        <input type="file" name="demonstraçoesFinanceiras" id="customFile6" class="custom-file-input" accept=".xls, .xlsm" required>
                                                        <label class="custom-file-label" for="customFile6">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile7">Último balancete disponível no ano vigente:</label>
                                                    <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip" title="Mini-balanço">
                                                    <div class="custom-file">
                                                        <input type="file" name="ultimoBalancete" id="customFile7" class="custom-file-input" accept=".xls, .xlsm" required>
                                                        <label class="custom-file-label" for="customFile7">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="max-width d-flex justify-content-center">
                                                    <button type="submit" class="modal-button">Cadastrar Pessoa Jurídica</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pessoa Física  -->
                    <div class=" tab-pane container" id="PF">
                        <div class="container">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="jumbotron col-12">
                                        <div class="col-12 centeredQuery" style="text-align: center; margin-bottom: 30px">
                                            <h1 class="fontSizeQuery query-extra-marginLR" style="text-align: left">Pessoa Física</h1>
                                        </div>
                                        <div class="col-12">
                                            <form>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile8">Ficha cadastral de Pessoa Física original preenchida:</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="fichaCadastralPF" id="customFile8" class="custom-file-input" required>
                                                        <label class="custom-file-label" for="customFile8">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile9">Copia válida do RG:</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="copiaDoRG" id="customFile9" class="custom-file-input" required>
                                                        <label class="custom-file-label" for="customFile9">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile10">Cópia válida do CPF:</label>
                                                    <!-- <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip"
                                                            title="Texto do Tooltip aqui"> -->
                                                    <div class="custom-file">
                                                        <input type="file" name="copiaDoCPF" id="customFile10" class="custom-file-input" required>
                                                        <label class="custom-file-label" for="customFile10">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile11">Comprovante de endereço do último mês:</label>
                                                    <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip" title="Até no máximo 90 dias">
                                                    <div class="custom-file">
                                                        <input type="file" name="comprovanteDeEndereço" id="customFile11" class="custom-file-input" required>
                                                        <label class="custom-file-label" for="customFile11">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile12">Imposto de renda do exercício atual (ano vigente):</label>
                                                    <!-- <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip"
                                                            title="Texto do Tooltip Aqui"> -->
                                                    <div class="custom-file">
                                                        <input type="file" name="impostoDeRendaPF" id="customFile12" class="custom-file-input" required>
                                                        <label class="custom-file-label" for="customFile12">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group onPhoneBorder">
                                                    <label for="customFile13">Certidão de casamento (apenas se casado(a)):</label>
                                                    <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip" title="-Para comunhão de bens, o cliente deve apresentar a certidão de casamento junto com os documentos pessoais do conjuge;
                                                    -Para separação de bens, o cliente deverá apresentar somente a certidão de casamento;
                                                    -Para união estável, o cliente deve apresentar o comprovante de união estável autenticado.">
                                                    <div class="custom-file">
                                                        <input type="file" name="certidaoDeCasamento" id="customFile13" class="custom-file-input">
                                                        <label class="custom-file-label" for="customFile13">Selecionar arquivo</label>
                                                    </div>
                                                </div>
                                                <div class="max-width d-flex justify-content-center">
                                                    <button type="submit" class="modal-button">Cadastrar Pessoa Física</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../../js/newForm.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>