<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once "favIcon.php"; ?>

    <title>Início</title>

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
                <h1>Portal administativo</h1>
                <hr>
            </div>
            <div class="container-fluid">
                <div class="row">

                    <style>
                        .menuCard {
                            width: 300px;
                            height: 375px;
                            box-shadow: 0 0 10px 0;
                            display: block;
                            margin: 15px auto;
                            padding: 20px;
                        }

                        .menuCard h5 {
                            text-align: center;
                            padding: 0
                        }

                        .optionsCard {
                            height: 230px
                        }

                        .optionsCard ul {
                            margin: 0;
                            list-style: none;
                            padding-left: 20px
                        }

                        .optionsCard ul li span {
                            margin-left: -20px
                        }

                        .optionsCard ul li a:hover {
                            text-decoration: underline;
                            text-decoration-color: red
                        }
                    </style>
                    <!-- 001 -->
                    <div class="menuCard">
                        <h5>
                            Empresas
                        </h5>
                        <hr>
                        <div class="optionsCard">
                            <ul>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Cadastrar empresa manualmente;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Solicitações pendentes;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Empresas Ativas/Inativas;
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <button class="btn" style="display: block; margin: 0 auto; background-color: rgba(12, 60, 96, .8); color: white; width: 85px">
                            Conferir
                        </button>
                    </div>
                    <!-- 002 -->
                    <div class="menuCard">
                        <h5>
                            Documentos
                        </h5>
                        <hr>
                        <div class="optionsCard">
                            <ul>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Consultar cadastros-mãe;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            status de todas as empresas;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            empresas cadastradas;
                                        </a>
                                    </span>
                                </li>
                        </div>
                        <button class="btn" style="display: block; margin: 0 auto; background-color: rgba(12, 60, 96, .8); color: white; width: 85px">
                            Conferir
                        </button>
                    </div>
                    <!-- 003 -->
                    <div class="menuCard">
                        <h5>
                            Geração de Documentos
                        </h5>
                        <hr>
                        <div class="optionsCard">
                            <ul>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Gerar contrato mãe;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            status de todas as empresas;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            empresas que já estão cadastradas;
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <button class="btn" style="display: block; margin: 0 auto; background-color: rgba(12, 60, 96, .8); color: white; width: 85px">
                            Conferir
                        </button>
                    </div>
                    <!-- 004 -->
                    <div class="menuCard">
                        <h5>
                            Borderôs:
                        </h5>
                        <hr>
                        <div class="optionsCard">
                            <ul>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Cadastrados;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Novos borderôs;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            empresas que já estão cadastradas;
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <button class="btn" style="display: block; margin: 0 auto; background-color: rgba(12, 60, 96, .8); color: white; width: 85px">
                            Conferir
                        </button>
                    </div>

                    <!-- 005 -->
                    <div class="menuCard">
                        <h5>
                            Borderôs:
                        </h5>
                        <hr>
                        <div class="optionsCard">
                            <ul>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Cadastrados;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Novos borderôs;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            empresas que já estão cadastradas;
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <button class="btn" style="display: block; margin: 0 auto; background-color: rgba(12, 60, 96, .8); color: white; width: 85px">
                            Conferir
                        </button>
                    </div>
                    

                    <!-- 006 -->
                    <div class="menuCard">
                        <h5>
                            Borderôs:
                        </h5>
                        <hr>
                        <div class="optionsCard">
                            <ul>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Cadastrados;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            Novos borderôs;
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ✓
                                        <a href="#">
                                            empresas que já estão cadastradas;
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <button class="btn" style="display: block; margin: 0 auto; background-color: rgba(12, 60, 96, .8); color: white; width: 85px">
                            Conferir
                        </button>
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