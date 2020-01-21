<nav id="sidebar" style="position: relative;">
    <div class="sidebar-header d-flex justify-content-center">
        <div id="profile-picture-div">
            <img id="profile-picture" src="../../images/anonimo.jpg" alt="profile picture">
        </div>
    </div>

    <ul class="list-unstyled components">
        <div class="d-flex justify-content-center">
            <p>Opções</p>
        </div>
        <li class="active">
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
        <li class="active">
            <a href="novaempresa.php">Nova empresa</a>
        </li>
        <li style="position: absolute; bottom: 0">
            <a href="../logoff.php">Sair</a>
        </li>
    </ul>
</nav>