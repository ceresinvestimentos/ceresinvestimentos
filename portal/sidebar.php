<nav id="sidebar">
    <div class="sidebar-header d-flex justify-content-center">
        <div id="profile-picture-div">
            <img id="profile-picture" src="../../images/anonimo.jpg" alt="profile picture">
        </div>
    </div>

    <ul class="list-unstyled components">
        <div class="d-flex">
            <p>Opções</p>
        </div>
        <li>
            <a href="./novoBordero.php">Novo borderô</a>
            <?php require_once "portalModal.php"; ?>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Status</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">A vencer</a>
                </li>
                <li>
                    <a href="#">Vencidos</a>
                </li>
            </ul>
        </li>


        <li>
            <a href="#empresas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Empresas</a>
            <ul class="collapse list-unstyled" id="empresas">
                <li>
                    <a href="listaEmpresas.php">Lista</a>
                </li>
                <li>
                    <a href="novaEmpresa.php">Nova Empresa/Filial</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="../logoff.php">Sair</a>
        </li>
    </ul>
</nav>