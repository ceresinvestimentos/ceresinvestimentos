<!DOCTYPE html>
<html lang="en">
<style>
    footer {
        background: #EAF7FF;
        font-size: 1.2em;
    }

    .RodapeItem {
        text-align: center;
        padding: 25px 0;
    }

    .RodapeItem h1 {
        color: rgba(12, 60, 96, 1);
        font-weight: 450;
        text-transform: uppercase;
        margin-bottom: 10px;
        font-family: 'Montserrat', sans-serif;
    }

    .RodapeItem li {
        list-style: none;
        color: rgba(12, 60, 96, 1);
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
    }

    .RodapeItem li:hover a {
        font-style: italic;
        text-decoration: none;
        color: inherit;
        font-weight: bold;
    }

    .RodapeLogo {
        width: 120px
    }

    .hr-rodape {
        height: 2px;
        width: 70%;
        margin-left: 15%;
        background-color: rgba(12, 60, 96, 1);
        display: none
    }

    @media screen and (max-width: 1024px) {
        .RodapeItem li {
            font-size: 15px
        }

        .RodapeItem {
            padding: 15px
        }
    }

    @media screen and (max-width: 760px) {
        .RodapeItem li {
            font-size: 20px
        }

        .hr-rodape {
            display: block
        }

        .RodapeItem li:nth-child(3) span {
            font-size: 18px
        }
    }

    /*--------------Botão para subir---------------*/

    #subir {
        bottom: 0px;
        right: 0px;
    }

    div #voltarTopo img {
        width: 40px;
        height: 40px;
        position: fixed;
        bottom: 0px;
        right: 0px;
        margin: 15px;
    }

    .up-scroll {
        z-index: 50;
        text-align: center;
        opacity: 0;
        display: none;
        transition: opacity .4s ease-in-out;
    }

    .up-scroll.display {
        display: block;
    }

    .up-scroll.display.active {
        opacity: 1;
    }
</style>

<footer>
    <div class="container RodapePai" id="rodape">
        <div class="row RodapeFilho">
            <!-- 001 -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 RodapeItem">
                <h1>Sobre</h1>
                <li>
                    <a href="index.php">Início</a>
                </li>
                <li>
                    <a href="login.php">Acesso ao Portal</a>
                </li>
                <li>
                    <a href="factoring.php">Saiba Mais</a>
                </li>
                <li>
                    <a href="quemsomos.php">Quem Somos</a>
                </li>
            </div>

            <hr class="hr-rodape">
            <style>
                .RodapeItem a img {
                    width: 25px
                }
            </style>
            <!-- 002 -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 RodapeItem">
                <h1>Contato</h1>
                <li>
                    <span>Analista de Operações</span>
                </li>
                <li>
                    <span>karla.couto@ceresinvestimentos.com</span>
                </li>
                <li style="margin-top: 10px">
                    <a href="https://pt-br.facebook.com/" target="_blank">
                        <img src="../images/footer/facebook.png">
                    </a>
                    <a href="https://www.instagram.com/?hl=pt-br" target="_blank">
                        <img src="../images/footer/instagram.png">
                    </a>
                    <a href="https://twitter.com/login?lang=pt/" target="_blank">
                        <img src="../images/footer/twitter.png">
                    </a>
                    <a href="https://br.linkedin.com/" target="_blank">
                        <img src="../images/footer/linkedin.png">
                    </a>

                    <div style="margin-top:20px">
                        <!--- Secure Site Seal - DO NOT EDIT --->
                        <span id="ss_img_wrapper_115-55_image_en">
                            <a href="http://www.alphassl.com/ssl-certificates/wildcard-ssl.html" target="_blank" title="SSL Certificates">
                                <img alt="Wildcard SSL Certificates" border=0 id="ss_img" src="//seal.alphassl.com/SiteSeal/images/alpha_noscript_115-55_en.gif" title="SSL Certificate">
                            </a>
                        </span>
                        <script type="text/javascript" src="//seal.alphassl.com/SiteSeal/alpha_image_115-55_en.js"></script>
                        <!--- Secure Site Seal - DO NOT EDIT --->
                    </div>
                </li>
            </div>

            <hr class="hr-rodape">

            <!-- 003 -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 RodapeItem">
                <img class="RodapeLogo" src="../images/footer/LogoCeres.png">
            </div>

            <!-- Botão -->
            <div id="voltarTopo">
                <a href="#home" class="up-scroll">
                    <img src="../images/footer/botTopo.png">
                </a>
            </div>
        </div>
    </div>


</footer>

</html>