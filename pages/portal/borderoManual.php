<?php

$var = [];
$arquivo = fopen("Notas_Fiscais/Notas_Fiscais.txt", "r");
while (!feof($arquivo)) {
    $nota = fgets($arquivo);
    $var[] = $nota;
}
fclose($arquivo);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once "favIcon.php"; ?>

    <title>Portal - Enviar borderô</title>

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
        <?php require_once "sidebaradm.php"; ?>


        <!-- Page Content  -->
        <div id="content">
            <?php require_once "menu.php"; ?>
            <div class="text-center">
                <h1>Adicionar notas manualmente</h1>
                <hr>
            </div>
            <div id="portalContent2" class="d-flex justify-content-center flex-wrap">
                <div id="enviarDados" class="input-wtd">
                    <div class="max-width d-flex justify-content-center flex-wrap" id="formWraper">
                        <form id="form" class="fiscalForm" action="notasFiscais.php" method="POST" name="form">
                            <div class="margin3px getForm">
                                <p style="color: black; margin: 0; font-size: 1rem;">Nº da Nota Fiscal:</p>
                                <input type="text" class="input-wtd null_value" id="numeroDaNota" name="numeroDaNota" required><br>
                                <p style="color: black; margin: 0; font-size: 1rem;">CPF/CNPJ:</p>
                                <input type="text" class="input-wtd" name="cpf-cnpj" required><br>
                                <p style="color: black; margin: 0; font-size: 1rem;">Data de Vencimento:</p>
                                <input type="date" class="input-wtd" name="dataDeVencimento" required><br>
                                <p style="color: black; margin: 0; font-size: 1rem;">Valor Líquido:</p>
                                <input type="text" class="input-wtd" name="valorLiquido" required><br>
                                <div class="max-width d-flex justify-content-center" id="sendButtonDiv">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="max-width d-flex justify-content-center">
                                <button class="modal-button" name="addNotaFiscal" id="newForm">
                                    Adicionar nova nota
                                </button>
                            </div> -->
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="modal-button" id="confirmarInfo" form="form">
                    Confirmar informações
                </button>
            </div>
            <div id="ntsArquivo" class="max-width d-flex justify-content-center">
                <table id="ntTable">
                    <tr>
                        <th class="table-cell">Nº da Nota</th>
                        <th class="table-cell">CPF/CNPJ</th>
                        <th class="table-cell">Data de Vencimento</th>
                        <th class="table-cell">Valor Líquido</th>
                        <th class="table-cell">Excluir nota</th>
                    </tr>
                    <?php

                    foreach ($var as $key) {
                        $ntDados = explode("#", $key);
                        if (count($ntDados) < 4) {
                            continue;
                        }

                    ?>

                        <tr>
                            <form action="excluirNotaFiscal.php" method="post">
                                <td id="ntFiscalTd"><?= $ntDados[0] ?></td>
                                <input class="hidden" id="ntFiscalIn" name="ntFiscalIn" value=<?= $ntDados[0] ?>>
                                <td><?= $ntDados[1] ?></td>
                                <input class="hidden" id="cpfIn" name="cpfIn" value=<?= $ntDados[1] ?>>
                                <td><?= $ntDados[2] ?></td>
                                <input class="hidden" id="dateIn" name="dateIn" value=<?= $ntDados[2] ?>>
                                <td><?= $ntDados[3] ?></td>
                                <input class="hidden" id="vlrLiquidoIn" name="vlrLiquidoIn" value=<?= $ntDados[3] ?>>
                                <td><button type="submit" class="modal-button" id="btDelNote" name="btDelNote">Deletar</button></td>
                            </form>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

    </div>

    </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
    <script type="text/javascript" src="../../js/ajax.js"></script>
    <script type="text/javascript" src="../../js/formScripts.js"></script>
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>

</html>