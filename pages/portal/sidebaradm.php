<nav id="sidebar">
    <div class="sidebar-header d-flex justify-content-center flex-wrap">
        <div id="profile-picture-div">
            <img id="profile-picture" src="../../images/anonimo.jpg" alt="profile picture">
        </div>
        <p class="col-12" style="color: white;">Login:</p>
    </div>

    <ul class="list-unstyled components">
        <div class="d-flex justify-content-center">
            <p>Opções</p>
        </div>
        <li>
            <a href="inicioadm.php" id="inicio">Início</a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Novo Borderô</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a id="sendXMLportal" href="enviarXML.php" onclick="pageRequest('novoBordero.php')">Enviar XML</a>
                </li>
                <li>
                    <a href="borderoManual.php">Adicionar manualmente</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Status</a>
            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="aVencer.php">A vencer</a>
                </li>
                <li>
                    <a href="vencidas.php">Vencidos</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="novaEmpresa.php" id="novaEmpresa">Cadastrar</a>
        </li>
        <li>
            <a href="areaAdm.php" id="areaAdm">Área Administrativa</a>
        </li>
        <li>
            <a href="xmlToC.php" id="xmlToC">Conversão de XML</a>
        </li>
        <li>
            <a href="../login.php" id="exitPortal">Sair</a>
        </li>
    </ul>
</nav>