<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once "favIcon.php"; ?>

    <title>Portal - Notas vencidas</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../../bootstrap4/css/bootstrap.css">
    <!-- Our Custom CSS -->

    <link rel="stylesheet" href="../../DataTables/datatables.min.css">
    <link rel="stylesheet" href="../../css/dataTable.css">
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
            <div id="portalContent" class="d-flex justify-content-center flex-wrap">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 text-center">
                            <h1>Status das notas: vencidas</h1>
                            <hr>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <table id="empresasReg" class="display">
                                <thead>
                                    <tr>
                                        <th>Nº da nota</th>
                                        <th>CPF/CNPJ</th>
                                        <th>Data de Vencimento</th>
                                        <th>Valor líquido</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Empresa ficticia 1</td>
                                        <td>131423412341234</td>
                                        <td>887907567595</td>
                                        <td>3987695486</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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

            $("#empresasReg").DataTable();
        });
    </script>
    <script type="text/javascript" src="../../js/ajax.js"></script>
    <script type="text/javascript" src="../../js/formScripts.js"></script>
    <script type="text/javascript" src="../../js/tableFilter.js"></script>
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    <script type="text/javascript" src="../../DataTables/datatables.min.js"></script>
</body>

</html>