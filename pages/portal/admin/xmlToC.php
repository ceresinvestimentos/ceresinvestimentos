<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once "favIcon.php"; ?>

    <title>Portal - Conversor</title>

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
            <div class="text-center">
                <h1>Conversão de XML</h1>
                <hr>
            </div>
            <div id="portalContent" class="d-flex justify-content-center flex-wrap">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 d-flex justify-content-center">
                            <form>
                                <div class="form-group d-flex justify-content-center flex-column pretty-box">
                                    <div class="form-group" style="position: relative">
                                        <label for="arquivoXML" class="custom-file-label">XML para Cnab</label>
                                        <input type="file" class="custom-file-input" name="arquivoXML" id="arquivoXML" required>
                                    </div>
                                    <button type="submit" class="modal-button">Converter</button>
                                </div>
                            </form>
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