<?php

    $fundo = $_POST["modal-select"];
    $fundoL = $fundo . PHP_EOL;
    $fundoTXT = fopen("Fundos.txt", "a");
    fwrite($fundoTXT, $fundoL);
    fclose($fundoTXT);

    $tempName = $_FILES["arquivoXML"]["tmp_name"];
    $realName = $_FILES["arquivoXML"]["name"];
    copy($tempName, $realName);

    header("Location: ../../enviarXML.php");

?>