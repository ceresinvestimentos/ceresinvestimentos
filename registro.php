<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Ceres Investimentos - Login</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/registro.css">
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
            <form action="" class="LoginForm">
                <img src="../images/logos/LOGO0.png">

                <h1 class="ComoFuncionah1">CADASTRO</h1>

                <div class="LoginFormTexto">
                    <input type="text" onkeypress='mascaraMutuario(this,Cnpj)' onblur='clearTimeout()' name="cnpj" maxlength="18">
                    <span data-placeholder="CNPJ"></span>
                </div>

                <div class="LoginFormTexto" style="margin-top: 30px;">
                    <input type="password">
                    <span data-placeholder="Senha"></span>
                </div>

                <div class="LoginFormTexto" style="margin-top: 30px;">
                    <input type="password">
                    <span data-placeholder="Confirmar senha"></span>
                </div>

                <div class="LoginFormTexto" style="margin-top: 30px;">
                    <input type="password">
                    <span data-placeholder="E-mail"></span>
                </div>

                <button type="submit" class="cadbtn" value="CADASTRAR" onclick="spinreverse(), spin()">
                <span>CADASTRAR</span>
                    <i class="fa fa-angle-double-right refemCad"></i>
                </button>

                <div class="LoginLastText">
                    Se já é cadastrado, <a href="login.php">clique aqui </a>
                </div>
                <div class="LoginLastText">
                    <a href="index.php" class="voltarA">
                        Voltar</a>
                </div>
            </form>


        </div>
    </div>

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

    <!--SCRIPTS REGISTRAR-->
    <script type="text/javascript">
        function validar() {
            var cnpj = teste.cnpj.value;
            var senha = teste.pass.value;
            var senha2 = teste.pass_confirm.value;
            var carta = teste.email.value;

            if (cnpj == "" || senha == "" || senha2 == "" || carta == "") {
                alert("Preencha todos os campos.");
                return false
            }

            if (cnpj.length != 18) {

                alert("CNPJ invalido!");
                return false
            }

            if (senha.length <= 5) {
                alert("Preencha o campo da senha com minimo de 6 digitos");
                return false
            }

            if (senha != senha2) {
                alert("As senhas estão diferentes!");
                return false
            }

        }

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