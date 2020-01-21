<?php
	session_start();

	if($_SESSION['valido'] == 'NAO' || !isset($_SESSION['valido'])){
		header('Location:../login.php?Login:ERRO');
	}
?>