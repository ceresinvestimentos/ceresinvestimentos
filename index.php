<DOCTYPE - html>
    <html>

    <head>
        <title>Ceres Investimentos - Home</title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/comofunciona.css">
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <?php
    include 'head.php';
    ?>

    <body class="w3-light-grey w3-animate-opacity ">

        <!------------ NAV BAR -->
        <?php
        include 'navbar.php';
        ?>

        <!------------ IMAGEM COM ESCRITO E LOGO ----->
        <header class="w3-display-container w3-wide pokarrontas">
            <img class="w3-image" style="width: 100%;" src="../images/agro/agro1.jpg" alt="Architecture">
            <img src="../images/logos/CERES_LOGO_FINAL-04 (1).png" class="pimagem">
        </header>

        <!------------ APRESENTAÇÃO ------------------>
        <div class="container-fluid" id="apresentacao" style="background-color: white;">
            <div class="container apresentation">
                <p> DESENVOLVENDO ESTRATÉGIAS INOVADORAS</p>
                <p> CONQUISTANDO RESULTADOS </p>
            </div>
        </div>

        <style>
            #sixcards {
                background: #EAF7FF;
            }

            .cardstop:hover .img2,
            .cardsbot:hover .img2 {
                opacity: 1
            }

            .cardstop,
            .cardsbot {
                padding: 40px 25px 25px 25px;
                color: rgb(12, 60, 96);
                text-align: center;
            }

            .cardstop h4,
            .cardsbot h4 {
                font-weight: bold
            }

            .sixCardsimg {
                position: relative;
                width: 100%;
                height: 64px;
            }

            .sixCardsimg .img1,
            .sixCardsimg .img2 {
                width: 64px;
                position: absolute;
                left: calc(50% - 32px);
            }

            .sixCardsimg .img2 {
                opacity: 0
            }

            .cardstop a,
            .cardsbot a {
                text-decoration: none;
            }

            .cardstop a:hover,
            .cardsbot a:hover {
                color: white;
            }

            .cardstop:hover,
            .cardsbot:hover {
                background: rgb(12, 60, 96);
                color: white;
            }

            @media screen and (max-width: 575px) {

                .cardstop,
                .cardsbot {
                    padding-left: 60px;
                    padding-right: 60px
                }
            }
        </style>

        <div class="container-fluid" id="sixcards">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 cardstop">
                        <a href="#">
                            <div class="sixCardsimg">
                                <img src="../images/cards/steps.png" class="img1">
                                <img src="../images/cards/stepsbb.png" class="img2">
                            </div>
                            <h4>Passo a passo</h4>
                            <p>Veja como é fácil e tranquilo investir com a Ceres Investimentos. </p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 cardstop">
                        <a href="#">
                            <div class="sixCardsimg">
                                <img src="../images/cards/produtos.png" class="img1">
                                <img src="../images/cards/produtosbb.png" class="img2">
                            </div>
                            <h4>Nossos Produtos</h4>
                            <p>Conheça nossas mais de 50 formas de te ajudar a investir no agronegócio</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 cardstop">
                        <a href="#">
                            <div class="sixCardsimg">
                                <img src="../images/cards/profits.png" class="img1">
                                <img src="../images/cards/profitsbb.png" class="img2">
                            </div>
                            <h4>Comece a Investir </h4>
                            <p>Já sabe como funciona ou quer começar a investir? Clique aqui.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 cardsbot">
                        <a href="#">
                            <div class="sixCardsimg">
                                <img src="../images/cards/historia.png" class="img1">
                                <img src="../images/cards/historiabb.png" class="img2">
                            </div>
                            <h4>Nossa História</h4>
                            <p>Veja como a Ceres Investimentos começou e se inspire.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 cardsbot" id="escolhida1">
                        <a href="quemsomos.php">
                            <div class="sixCardsimg">
                                <img src="../images/cards/team.png" class="img1">
                                <img src="../images/cards/teambb.png" class="img2">
                            </div>
                            <h4>Equipe:</h4>
                            <p>Conheça os líderes responsáveis pelo nosso sucesso.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 cardsbot">
                        <a href="#rodape">
                            <div class="sixCardsimg">
                                <img src="../images/cards/contact.png" class="img1">
                                <img src="../images/cards/contactbb.png" class="img2">
                            </div>
                            <h4>Contato</h4>
                            <p>Em caso de dúvidas, basta entrar em contato com a gente. </p>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!------------ CARDS ------------------------->
        <div class="container-fluid ceres-0">
            <div class="container center">
                <div class="row">

                    <div class="item">
                        <img class="CardsItemImg" src="../images/teste_03_1.png">
                        <h2>Quem Somos</h2>
                        <p>Interessado em saber quem somos?<br>
                            Venha conhecer nossa equipe!
                        </p>
                        <button name="button" class="CardsBotao">
                            <a href="#">
                                <a href="quemsomos.php">CONHECER</a>
                        </button>
                    </div>

                    <div class="item">
                        <img class="CardsItemImg" src="../images/teste_04.png">
                        <h2>Junte-se a nós!</h2>
                        <p>O fomento com</a>ercial e a consultoria estão incluidos na nossa área de atuação para empresas de
                            grande porte no ramo do agronegócio.
                        </p>
                        <button name="button">
                            <a href="registro.php">FAZER PARTE</a>
                        </button>
                    </div>

                    <div class="item">
                        <img class="CardsItemImg" src="../images/teste_06.png">
                        <h2>Securitização</h2>
                        <p>É novo e deseja entender mais sobre o que é Factoring? Clique no botão e venha conhecer!</p>
                        <button name="button">
                            <a href="factoring.php">SAIBA MAIS</a>
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!------------ COMO FUNCIONA ----------------->
        <div class="BkgCF">
            <p class="ComoFuncionaTitulo">COMO FUNCIONA</p>
            <div class="underline"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 aqui" style="text-align: center">
                        <div class="soimg">
                            <img src="../images/comofunciona/mail.png" alt="empresa" class="imgnn">
                        </div>
                        <h4>É simples! Depois do primeiro contato</h4>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 aqui" style="text-align: center; padding: 0 30px">
                        <div class="soimg">
                            <img src="../images/comofunciona/calendar.png" alt="empresa" class="imgnn">
                        </div>
                        <h4>agendamos uma visita até vocês.</h4>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 aqui" style="text-align: center; padding: 0 20px">
                        <div class="soimg">
                            <img src="../images/comofunciona/notepad.png" alt="empresa" class="imgnn">
                        </div>
                        <h4>Após coletarmos as informações necessárias</h4>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 aqui" style="text-align: center">
                        <div class="soimg">
                            <img src="../images/comofunciona/observation.png" alt="empresa" class="imgnn">
                        </div>
                        <h4>e realizarmos algumas análises,</h4>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 aqui" style="text-align: center">
                        <div class="soimg">
                            <img src="../images/comofunciona/thought.png" alt="empresa" class="imgnn">
                        </div>
                        <h4>entenderemos qual sua necessidade de funding</h4>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 aqui" style="text-align: center">
                        <div class="soimg">
                            <img src="../images/comofunciona/approval.png" alt="empresa" class="imgnn">
                        </div>
                        <h4>e, assim, elaboraremos a proposta ideal.</h4>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 aqui" style="text-align: center">
                        <div class="soimg">
                            <img src="../images/comofunciona/contract.png" alt="empresa" class="imgnn">
                        </div>
                        <h4>Após coletar as assinaturas dos termos,</h4>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 aqui" style="text-align: center">
                        <div class="soimg">
                            <img src="../images/comofunciona/handshake1.png" alt="empresa" class="imgnn">
                        </div>
                        <h4>negócio fechado e iniciamos os trabalhos!</h4>
                    </div>

                </div>
            </div>
        </div>

        <!------------ FALE CONOSCO ------------------>
        <div class="container-fluid contact_us">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h1>FALE CONOSCO</h1>
                        <div class="underline"></div>

                        <h5>Estamos sempre dispostos a te ajudar.</h5>

                        <div class="container FaleConoscoForm">
                            <div class="FaleConoscoIcone">
                                <img src="../images/faleconosco/user.png">
                            </div>
                            <input type="text" placeholder="Nome" class="FaleConoscoInput">
                        </div>

                        <div class="container FaleConoscoForm">
                            <div class="FaleConoscoIcone">
                                <img src="../images/faleconosco/mail.png">
                            </div>
                            <input type="email" placeholder="Email" class="FaleConoscoInput">
                        </div>

                        <div class="container FaleConoscoForm">
                            <div class="FaleConoscoIcone">
                                <img src="../images/faleconosco/book.png">
                            </div>
                            <input type="text" placeholder="Assunto" class="FaleConoscoInput">
                        </div>

                        <div class="container FaleConoscoForm">
                            <div class="FaleConoscoIcone">
                                <img src="../images/faleconosco/notebook.png">
                            </div>
                            <textarea type="text" placeholder="Mensagem" class="FaleConoscoTextarea"></textarea>
                        </div>

                        <div class="container FaleConoscoForm" id="submit">
                            <input type="submit" value="Enviar" class="FaleConoscoSubmit">
                        </div>

                        <div class="row" style="margin-bottom: 40px">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 enderecos">
                                <span>Escritório Operacional:</span>
                                <address style="font-size: 11px">
                                    R. Santos Dumont - 1310<br>
                                    Lídice<br>
                                    Uberlândia - MG<br>
                                    CEP: 38400-062
                                </address>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 enderecos">

                                <span style="display: block; font-weight: bold;">Escritório de TI:</span>
                                <address style="font-size: 11px">
                                    Av. Dpto José Marcus Cherem - 1290 <br>
                                    Vila São Cristóvão <br>
                                    Uberaba - MG <br>
                                    CEP: 38040-500
                                </address>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.099978674627!2d-48.278022785101086!3d-18.926968287173615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94a44503a7601401%3A0xe99f00e38fcd1881!2sR.%20Santos%20Dumont%2C%201310%20-%20L%C3%ADdice%2C%20Uberl%C3%A2ndia%20-%20MG%2C%2038400-062!5e0!3m2!1spt-BR!2sbr!4v1576759015099!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen="1"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!------------ RODAPÉ ------------------------>
        <?php
        include 'footer.php';
        ?>

    </body>

    </html>