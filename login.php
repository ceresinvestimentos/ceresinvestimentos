<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Ceres Investimentos - Login</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<?php
include 'head.php';
?>

<body class="w3-animate-opacity">
    <div class="container-fluid RelativeLoginForm">
        <div class="padding200px">
            <form action="verifLogin.php" class="LoginForm" method="post">
                <img src="../images/logos/LOGO0.png">

                <h1 class="ComoFuncionah1">Login</h1>

                <div class="LoginFormTexto">
                    <input type="text" onkeypress='mascaraMutuario(this,Cnpj)' onblur='clearTimeout()' name="cnpj" maxlength="18" autocomplete="off">
                    <span data-placeholder="CNPJ"></span>
                </div>

                <div class="LoginFormTexto" style="margin-top: 30px;">
                    <input type="password" name="senha">
                    <span data-placeholder="Password"></span>
                </div>

                <button type="submit" class="logbtn" value="Entrar" onclick="spinreverse(), spin()"><span>ENTRAR</span>
                    <i class="fa fa-angle-double-right refem"></i>
                </button>

                <a href="portal/portal.php" style="opacity: 0">Portal</a>

                <div class="LoginLastText">
                    <a href="#" onclick="esqueciMinhaSenha()">Esqueci minha senha</a>
                </div>
                <div class="LoginLastText">
                    Se ainda não é cadastrado, <a href="registro.php">clique aqui </a>
                </div>
                <div class="LoginLastText">
                    <a href="index.php" class="voltarA">
                        Voltar</a>
                </div>

                <div class="loading">
                    <div class="box1" id="box1"></div>
                    <div class="box2" id="box2"></div>
                </div>

                <script>
                    function spinreverse() {
                        document.getElementById("box1").style.animation = "spinreverse 1s linear infinite";
                    };

                    function spin() {
                        document.getElementById("box2").style.animation = "spin        1s linear infinite";
                    };
                </script>
            </form>


        </div>
    </div>

    <!-- ESQUECI MINHA SENHA -->
    <script>
        function esqueciMinhaSenha() {
            var person = prompt("Por favor digite o CNPJ da emprsa");
            if (person != null) {
                document.getElementById("esqueceusenha").innerHTML =
                    "vamos enviar um email para " + person;
            }
        }
    </script>

    <!--SCRIPT PLACEHOLDER COLOR -->
    <script type="text/javascript">
        $(".LoginFormTexto input").on("focus", function() {
            $(this).addClass("AlteraFoco");
        });

        $(".LoginFormTexto input").on("blur", function() {
            if ($(this).val() == "")
                $(this).removeClass("AlteraFoco");
        });
    </script>

    <!--SCRIPT REGISTRAR-->
    <script type="text/javascript">
        function mascaraMutuario(o, f) {
            v_obj = o
            v_fun = f
            setTimeout('execmascara()', 1)
        }

        function execmascara() {
            v_obj.value = v_fun(v_obj.value)
        }

        function Cnpj(v) {

            //Remove tudo o que não é dígito
            v = v.replace(/\D/g, "")

            if (v.length <= 18) {

                //Coloca ponto entre o segundo e o terceiro dígitos
                v = v.replace(/^(\d{2})(\d)/, "$1.$2")

                //Coloca ponto entre o quinto e o sexto dígitos
                v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")

                //Coloca uma barra entre o oitavo e o nono dígitos
                v = v.replace(/\.(\d{3})(\d)/, ".$1/$2")

                //Coloca um hífen depois do bloco de quatro dígitos
                v = v.replace(/(\d{4})(\d)/, "$1-$2")

            }

            return v
        }
    </script>

</body>

</html>