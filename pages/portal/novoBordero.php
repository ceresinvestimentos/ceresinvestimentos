<?php require_once '../verifAcesso.php'; ?>
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
                <span>Menu de navegação</span>
            </button>

            <div id="client-input">
                <div id="pretty-box">
                    <div class="d-flex justify-content-center" style="width: 100%;">
                        <select id="modal-select">
                            <option>Selecione o fundo</option>
                            <option value="series">Ceres Securitizadora</option>
                            <option value="fundo">Fundo Ubyfol e Ecoagro</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap" id="file-send-div">
                        <p style="color: black; width: 100%;">Selecionar XML</p>
                        <input type="file" name="xml-select">
                    </div>
                    <div class="d-flex justify-content-center flex-wrap" style="width: 100%;">
                    <div class="max-width d-flex justify-content-center">
                    <button data-toggle="collapse" data-target="#enviarDados" class="modal-button">
                        Adicionar dados manualmente
                    </button>
                    </div>
                        <div id="enviarDados" class="collapse input-wtd">
                            <div class="max-width d-flex justify-content-center flex-wrap" id="formWraper">
                                <form id="form0" class="fiscalForm">
                                    <div class="margin3px">
                                        <p style="color: black; margin: 0; font-size: 1rem;">Nº da Nota Fiscal:</p>
                                        <input type="text" class="input-wtd null_value" name="numeroDaNota"><br>
                                        <p style="color: black; margin: 0; font-size: 1rem;">CPF/CNPJ:</p>
                                        <input type="text" class="input-wtd null_value" name="cpf-cnpj"><br>
                                        <p style="color: black; margin: 0; font-size: 1rem;">Data de Vencimento:</p>
                                        <input type="date" class="input-wtd null_date" name="dataDeVencimento"><br>
                                        <p style="color: black; margin: 0; font-size: 1rem;">Valor Líquido:</p>
                                        <input type="text" class="input-wtd null_value" name="valorLiquido"><br>
                                    </div>
                                </form>
                            </div>
                            <div class="max-width d-flex justify-content-center">
                                <button class="modal-button" name="addNotaFiscal" id="newForm">
                                    Adicionar nova nota
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="modal-button" name="enviarDados">Enviar Dados</button>
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
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>