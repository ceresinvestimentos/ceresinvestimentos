<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once "favIcon.php"; ?>

    <title>Portal - Enviar XML</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
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
                <h1>Enviar arquivo XML</h1>
                <hr>
            </div>

            <div class="row">

                <div class="offset-lg-2 col-lg-8 d-flex justify-content-center">

                    <form id="pretty-box" action="Arquivos/XML/receberArquivoXML.php" method="POST" enctype="multipart/form-data">

                        <div class="">
                            <div class="row mt-3">
                                <div class="col-5">
                                    <label for="fundo_select" class="col-form-label" style="padding-left: 15px">Fundo:</label>
                                </div>

                                <div id="inputXML" class="col-6" style="position: relative; padding: 0!important">
                                    <select required id="fundo_select" name="fundo_select" style="padding: .375rem 1rem; line-height: 1.5; color: #495057; background-color: #fff; 
                                    border: 1px solid #ced4da; border-radius: .25rem; ">
                                        <option value="">Selecione o fundo</option>
                                        <option value="CeresSecuritizadora">Ceres Securitizadora</option>
                                        <option value="FundoUbyfol&Ecoagro">Fundo Ubyfol e Ecoagro</option>
                                    </select>
                                </div>
                            </div>

                            <div class="">
                                <div class="row">
                                    <div class="col-5">
                                        <label for="inputXML" class="col-form-label" style="padding-left: 15px">Anexar nota:</label>
                                    </div>
                                    <div id="inputXML" class="form-group col-6" style="position: relative">
                                        <label for="arquivoXML" class="custom-file-label">Inserir arquivos</label>
                                        <input type="file" class="custom-file-input" name="arquivoXML" id="arquivoXML" required>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="modal-button">Enviar</button>
                                </div>
                            </div>
                        </div>
                </div>

                </form>
            </div>


            <div class="col-lg-2"></div>
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