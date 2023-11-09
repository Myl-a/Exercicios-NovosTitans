<?php
include("conexao.php");

$numerosincomuns = [];
if (isset($_POST["numeros"]) && isset($_POST["numeros2"])) {
    $numeros = $_POST["numeros"];
    $numeros2 = $_POST["numeros2"];
    $vetor = explode(",", $numeros);
    $vetor2 = explode(",", $numeros2);

    $numerosincomuns = array_merge(array_diff($vetor, $vetor2), array_diff($vetor2, $vetor));

    $numerosincomuns = array_unique($numerosincomuns);

    $resultado = "Números não comuns aos dois vetores: ";
    $resultado .= implode(', ', $numerosincomuns);

    echo $resultado;

    $vetorStr = implode(', ', $vetor);
    $array2 = implode(', ', $vetor2);
    $incomuns = implode(', ', $numerosincomuns);

    $sql = "INSERT INTO Exercicio18(vetor, vetor2, incomuns) 
            VALUES ('$vetorStr', '$array2', '$incomuns')"; 

    if (mysqli_query($conexao, $sql)) {
        // Inserção bem-sucedida
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>
