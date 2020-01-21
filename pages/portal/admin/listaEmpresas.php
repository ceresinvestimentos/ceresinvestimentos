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
        <?php require_once "sidebaradm.php"; ?>


        <!-- Page Content  -->
        <div id="content">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Menu de navegação</span>
            </button>

            <div class="container">
                <style>
                    table,
                    th,
                    tr,
                    td {
                        border: 1px solid red;
                    }

                    th {
                        background-color: rgba(12, 60, 96, .8);
                        color: white;
                        min-width: 100px;
                        
                    }

                    tr:hover {
                        background-color: rgba(12, 60, 96, .1);
                        padding: 20px
                    }

                    td{
                        min-width: 100px;
                        max-width: 700px;
                        padding: 4px
                    }
                </style>
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>Razão Social</th>
                        <th>CNPJ</th>
                        <th>Matriz</th>
                    </tr>
                    <tr>
                        <td>NUTRATTA</td>
                        <td>NUTRATTA NUTRICAO ANIMAL LTDA</td>
                        <td>17.316.559/0001-28</td>
                        <td>Sim</td>
                    </tr>
                    <tr>
                        <td>NHD FOODS</td>
                        <td>NHD FOODS IND COM IMP. E EXP. LTDA</td>
                        <td>21.541.988/0002-57</td>
                        <td>Sim</td>
                    </tr>
                    <tr>
                        <td>NHD FOODS</td>
                        <td>NHD FOODS IND COM IMP. E EXP. LTDA NHD FOODS IND COM IMP. E EXP. LTDA</td>
                        <td>21.541.988/0002-57</td>
                        <td>Sim</td>
                    </tr>
                    <tr>
                        <td>NHD FOODS</td>
                        <td>NHD FOODS IND COM IMP. E EXP. LTDA NHD FOODS IND COM IMP. E EXP. LTDA NHD FOODS IND COM IMP. E EXP. LTDA</td>
                        <td>21.541.988/0002-57</td>
                        <td>Sim</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

</body>

</html>