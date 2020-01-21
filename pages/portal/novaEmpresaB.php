<div class="max-width d-flex justify-content-center">
    <ul class="nav nav-tabs d-flex justify-content-center">
        <li class="nav-item">
            <a class="nav-link query-word-break active " data-toggle="tab" href="#PJ">
                Pessoa Juridíca
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link query-word-break" data-toggle="tab" href="#PF">
                Pessoa Física
            </a>
        </li>
    </ul>
</div>
<div class="tab-content">
    <div class="tab-pane container active" id="PJ">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 d-flex justify-content-center">
                    <div class="jumbotron">
                        <div class="col-12 centeredQuery">
                            <h1 class="fontSizeQuery query-extra-marginLR">Cadastro de Pessoa Juridíca</h1>
                        </div>
                        <div class="col-12">
                            <form id="cadastroPJ" action="Arquivos/PJ/cadastroPJ.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group onPhoneBorder">
                                    <label for="cartao_CNPJ">Cartão CNPJ:</label>
                                    <input id="cartao_CNPJ" type="text" pattern="{0-9}" class="form-control" name="cartao_CNPJ" placeholder="CNPJ da sua empresa" required>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="fichaCadastralPJ">Ficha cadastral PJ original preenchida:</label>
                                    <div class="custom-file">
                                        <input type="file" name="fichaCadastralPJ" id="fichaCadastralPJ" class="custom-file-input" accept=".pdf, .doc" required>
                                        <label class="custom-file-label" for="fichaCadastralPJ">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="contratoSocial">Contrato Social:</label>
                                    <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip" title="Envie a última alteração consolidada. Caso não consolidada, envie todos os contratos até a data vigente.">
                                    <div class="custom-file">
                                        <input type="file" name="contratoSocial" id="contratoSocial" class="custom-file-input" accept=".pdf, .zip" required>
                                        <label class="custom-file-label" for="contratoSocial">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="relaçaoDeFaturamento24meses">Relação de faturamento dos últimos 24 meses:</label>
                                    <!-- <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip"
                                                        title="Texto do Tooltip Aqui"> -->
                                    <div class="custom-file">
                                        <input type="file" name="relaçaoDeFaturamento24meses" id="relaçaoDeFaturamento24meses" class="custom-file-input" accept=".xls, .xlsm" required>
                                        <label class="custom-file-label" for="relaçaoDeFaturamento24meses">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="endivBancario">Posição atualizada do endividamento bancário:</label>
                                    <!-- <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip"
                                                        title="Texto do Tooltip Aqui"> -->
                                    <div class="custom-file">
                                        <input type="file" name="endivBancario" id="endivBancario" class="custom-file-input" accept=".xls, .xlsm" required>
                                        <label class="custom-file-label" for="endivBancario">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="demoFinanceiras">Demonstrações financeiras encerradas em dezembro dos últimos dois anos:</label>
                                    <!-- <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip"
                                                        title="Texto do Tooltip Aqui"> -->
                                    <div class="custom-file">
                                        <input type="file" name="demoFinanceiras" id="demoFinanceiras" class="custom-file-input" accept=".xls, .xlsm" required>
                                        <label class="custom-file-label" for="demoFinanceiras">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="ultimoBalancete">Último balancete disponível no ano vigente:</label>
                                    <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip" title="Mini-balanço">
                                    <div class="custom-file">
                                        <input type="file" name="ultimoBalancete" id="ultimoBalancete" class="custom-file-input" accept=".xls, .xlsm" required>
                                        <label class="custom-file-label" for="ultimoBalancete">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="max-width d-flex justify-content-center">
                                    <button type="submit" class="modal-button">Cadastrar Pessoa Jurídica</button>
                                    <p id="avisoDeCadastroPJ"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" tab-pane container" id="PF">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="jumbotron col-12">
                        <div class="col-12 centeredQuery">
                            <h1 class="fontSizeQuery query-extra-marginLR">Cadastro de Pessoa Física</h1>
                        </div>
                        <div class="col-12">
                            <form id="cadastroPF" action="Arquivos/PF/cadastroPF.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group onPhoneBorder">
                                    <label for="fichaCadastralPF">Ficha cadastral de Pessoa Física original preenchida:</label>
                                    <div class="custom-file">
                                        <input type="file" name="fichaCadastralPF" id="fichaCadastralPF" class="custom-file-input" required>
                                        <label class="custom-file-label" for="fichaCadastralPF">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="copiaDoRG">Copia válida do RG:</label>
                                    <div class="custom-file">
                                        <input type="file" name="copiaDoRG" id="copiaDoRG" class="custom-file-input" required>
                                        <label class="custom-file-label" for="copiaDoRG">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="copiaDoCPF">Cópia válida do CPF:</label>
                                    <!-- <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip"
                                                            title="Texto do Tooltip aqui"> -->
                                    <div class="custom-file">
                                        <input type="file" name="copiaDoCPF" id="copiaDoCPF" class="custom-file-input" required>
                                        <label class="custom-file-label" for="copiaDoCPF">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="comprovanteDeEndereço">Comprovante de endereço do último mês:</label>
                                    <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip" title="Até no máximo 90 dias">
                                    <div class="custom-file">
                                        <input type="file" name="comprovanteDeEndereço" id="comprovanteDeEndereço" class="custom-file-input" required>
                                        <label class="custom-file-label" for="comprovanteDeEndereço">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="impostoDeRendaPF">Imposto de renda do exercício atual (ano vigente):</label>
                                    <!-- <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip"
                                                            title="Texto do Tooltip Aqui"> -->
                                    <div class="custom-file">
                                        <input type="file" name="impostoDeRendaPF" id="impostoDeRendaPF" class="custom-file-input" required>
                                        <label class="custom-file-label" for="impostoDeRendaPF">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="form-group onPhoneBorder">
                                    <label for="certidaoDeCasamento">Certidão de casamento (apenas se casado(a)):</label>
                                    <img src="../../images/tooltip.png" class="tooltip-class" data-toggle="tooltip" title="-Para comunhão de bens, o cliente deve apresentar a certidão de casamento junto com os documentos pessoais do conjuge;
-Para separação de bens, o cliente deverá apresentar somente a certidão de casamento;
-Para união estável, o cliente deve apresentar o comprovante de união estável autenticado.">
                                    <div class="custom-file">
                                        <input type="file" name="certidaoDeCasamento" id="certidaoDeCasamento" class="custom-file-input">
                                        <label class="custom-file-label" for="certidaoDeCasamento">Selecionar arquivo</label>
                                    </div>
                                </div>
                                <div class="max-width d-flex justify-content-center">
                                    <button type="submit" class="modal-button">Cadastrar Pessoa Física</button>
                                    <p id="avisoDeCadastroPF"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>