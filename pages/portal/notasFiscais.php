<?php 

    $numNota = $_POST["numeroDaNota"];
    $cpfCnpj = $_POST["cpf-cnpj"];
    $vencimento = $_POST["dataDeVencimento"];
    $valorLiquido = $_POST["valorLiquido"];

    // echo "Numero da nota: {$numNota}<br>";
    // echo "CPF/CNPJ: {$cpfCnpj}<br>";
    // echo "Data de vencimento: {$vencimento}<br>";
    // echo "Valor liquido: {$valorLiquido}";

    $texto = $numNota . "#" . $cpfCnpj . "#" . $vencimento . "#" . $valorLiquido . PHP_EOL;

    $arquivo = fopen('Notas_Fiscais/Notas_Fiscais.txt', 'a');
    fwrite($arquivo, $texto);
    fclose($arquivo);
    header("Location: borderoManual.php");

    ?>
