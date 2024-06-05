<?php
include('conexao.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['matrix'])) {
        $matrix = $_POST['matrix'];
        echo "<h5>Diagonal da Matriz 5x5:</h5>";
        echo "<table border='1'>";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                if ($i == $j) {
                    echo "<td>{$matrix[$i][$j]}</td>";
                    $diagonalNumeros[] = $matrix[$i][$j];
                } else {
                    $todos[] = $matrix[$i][$j];
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "A matriz não foi enviada.";
    }
}
$todos = implode(', ', $todos);
$diagonalNumeros = implode(', ', $diagonalNumeros);
$sql = "INSERT INTO Exercicio19(matriz, diagonal) 
    VALUES ('$todos', '$diagonalNumeros')"; 

if (mysqli_query($conexao, $sql)) {
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conexao);
}
mysqli_close($conexao);
?>