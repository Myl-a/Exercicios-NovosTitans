<?php
function calculoTempo($massaInicial, $massaLimite) {
    $tempo = 0;

    while ($massaInicial >= $massaLimite) {
        $massaInicial = $massaInicial * 0.75; 
        $tempo = $tempo + 30;
    }

    return $tempo;
}

if (isset($_POST['massaInicial']) && isset($_POST['massaLimite'])) {
    $massaInicial = 1;
    $massaLimite = 1;

    if(!is_nan($_POST['massaInicial']) && !is_nan($_POST['massaLimite']))
    {
        $massaInicial = floatval($_POST['massaInicial']);
        $massaLimite = floatval($_POST['massaLimite']);
    }

    $tempoNecessario = calculoTempo($massaInicial, $massaLimite);
    echo $tempoNecessario;

    include("conexao.php");

    
    $sql = "INSERT INTO exercicio15(massaInicial, massaLimite, tempo) 
            VALUES ('$massaInicial', $massaLimite, $tempoNecessario)";

    
    if (mysqli_query($conexao, $sql)) {
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conexao);
    }

    mysqli_close($conexao); 
}
?>