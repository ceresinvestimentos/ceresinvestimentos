<?php 
	session_start();

	$usuarios=[
		['id'=>1, 'cnpj'=>'00000000000000', 'pass'=>'1234', 'tipo_perf'=>1],
		['id'=>2, 'cnpj'=>'11111111111111', 'pass'=>'1234', 'tipo_perf'=>2],
		['id'=>3, 'cnpj'=>'22222222222222', 'pass'=>'1234', 'tipo_perf'=>2],
		['id'=>4, 'cnpj'=>'33333333333333', 'pass'=>'1234', 'tipo_perf'=>2],
		['id'=>5, 'cnpj'=>'44444444444444', 'pass'=>'1234', 'tipo_perf'=>2]
	];

	$user = preg_replace("/[^0-9]/", "", $_POST['cnpj']);
	$pass = $_POST['senha'];

	$userValido = false;
	$userId = null;
	$userType = null;

	foreach ($usuarios as $key){
		if($user == $key['cnpj'] && $pass == $key['pass']){
			$userValido = true;
			$userId = $key['id'];
			$userType = $key['tipo_perf'];
		}
	}

	if ($userValido) {
		$_SESSION['valido'] = 'SIM';
		$_SESSION['id'] = $userId;
		$_SESSION['userType'] = $userType;
		header('Location:portal/portal.php');
	} else {
		$_SESSION['valido'] = 'NAO';
		header('Location:login.php?LOGIN:ERRO');
	}
	
?>