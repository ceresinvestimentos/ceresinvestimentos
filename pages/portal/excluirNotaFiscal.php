<?php

    $ntFiscalIn = $_POST['ntFiscalIn']; 
    $cpfIn = $_POST["cpfIn"];
    $dateIn  = $_POST["dateIn"];
    $vlrLiquidoIn = $_POST["vlrLiquidoIn"];
    
    $delVl = $ntFiscalIn . '#' . $cpfIn . '#' . $dateIn . '#' . $vlrLiquidoIn . PHP_EOL;

    $arquivo = file("Notas_Fiscais/Notas_Fiscais.txt");

    foreach($arquivo as $key => $linha){
        if($linha == $delVl){         
            unset($arquivo[$key]);
        }
    }
    file_put_contents("Notas_Fiscais/Notas_Fiscais.txt", $arquivo);

    header('Location: borderoManual.php');
