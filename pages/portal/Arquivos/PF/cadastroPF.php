<?php

    $fichaPFTempName = $_FILES["fichaCadastralPF"]["tmp_name"];
    $fichaPFRealName = $_FILES["fichaCadastralPF"]["name"];
    copy($fichaPFTempName, $fichaPFRealName);

    $rgTempName = $_FILES["copiaDoRG"]["tmp_name"];
    $rgRealName = $_FILES["copiaDoRG"]["name"];
    copy($rgTempName, $rgRealName);

    $cpfTempName = $_FILES["copiaDoCPF"]["tmp_name"];
    $cpfRealName = $_FILES["copiaDoCPF"]["name"];
    copy($cpfTempName, $cpfRealName);


    $comprovTempName = $_FILES["comprovanteDeEndereço"]["tmp_name"];
    $comprovRealName = $_FILES["comprovanteDeEndereço"]["name"];
    copy($comprovTempName, $comprovRealName);


    $irTempName = $_FILES["impostoDeRendaPF"]["tmp_name"];
    $irRealName = $_FILES["impostoDeRendaPF"]["name"];
    copy($irTempName, $irRealName);


    $ccTempName = $_FILES["certidaoDeCasamento"]["tmp_name"];
    $cclanceteRealName = $_FILES["certidaoDeCasamento"]["name"];
    copy($ccTempName, $cclanceteRealName);

    header("Location: ../../novaEmpresa.php");

?>