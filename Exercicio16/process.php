<?php
include("conexao.php");

function ParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'ímpar';
    }
}

if(isset($_POST['numero'])) {
    $numeroString = $_POST['numero'];
    $numero = explode(',', $numeroString);

    $resultado = '';

    for ($i = 0; $i < count($numero); $i++) {
        $resultado .= "O número {$numero[$i]} é " . ParOuImpar($numero[$i]) . ".<br>";
    }

    echo $resultado;

    $numeroString = implode(',', $numero);

    $sql = "INSERT INTO Exercicio16(numero, resultado) 
            VALUES ('$numeroString', '$resultado')"; 
    mysqli_query($conexao, $sql);
}

mysqli_close($conexao); 
?>