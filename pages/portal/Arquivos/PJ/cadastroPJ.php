<?php 

    $cartaoCNPJ = $_POST["cartao_CNPJ"];
    $cartaoLine = $cartaoCNPJ . PHP_EOL;
    $cartaoTXT = fopen("CartoesCNPJ.txt", "a");
    fwrite($cartaoTXT, $cartaoLine);
    fclose($cartaoTXT);

    $fichaTempName = $_FILES["fichaCadastralPJ"]["tmp_name"];
    $fichaRealName = $_FILES["fichaCadastralPJ"]["name"];
    copy($fichaTempName, $fichaRealName);

    $contratoTempName = $_FILES["contratoSocial"]["tmp_name"];
    $contratoRealName = $_FILES["contratoSocial"]["name"];
    copy($contratoTempName, $contratoRealName);

    $faturamentoTempName = $_FILES["relaçaoDeFaturamento24meses"]["tmp_name"];
    $faturamentoRealName = $_FILES["relaçaoDeFaturamento24meses"]["name"];
    copy($faturamentoTempName, $faturamentoRealName);


    $endivTempName = $_FILES["endivBancario"]["tmp_name"];
    $endivRealName = $_FILES["endivBancario"]["name"];
    copy($endivTempName, $endivRealName);


    $demoTempName = $_FILES["demoFinanceiras"]["tmp_name"];
    $demoRealName = $_FILES["demoFinanceiras"]["name"];
    copy($demoTempName, $demoRealName);


    $balanceteTempName = $_FILES["ultimoBalancete"]["tmp_name"];
    $balanceteRealName = $_FILES["ultimoBalancete"]["name"];
    copy($balanceteTempName, $balanceteRealName);

    header("Location: ../../novaEmpresa.php");

?>