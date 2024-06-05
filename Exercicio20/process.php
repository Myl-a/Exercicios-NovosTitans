<link rel="stylesheet" type="text/css" href="style.css">
<?php
include('conexao.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['matrix'])) {
        $matrix = $_POST['matrix'];

        echo "<h5>Matriz Digitada 5x5:</h5>";
        echo "<table border='1'>";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                echo "<td>{$matrix[$i][$j]}</td>";
                $matriz[] = $matrix[$i][$j];
            }
            echo "</tr>";
        }
        echo "</table>";

        $impares = array(); 
        $pares = array(); 

        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if ($matrix[$i][$j] % 2 == 0) {
                    $pares[$i][$j] = $matrix[$i][$j];
                } else {
                    $impares[$i][$j] = $matrix[$i][$j];
                }
            }
        }

        echo "<h5>Matriz Números Ímpares:</h5>";
        echo "<table border='1'>";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                if (isset($impares[$i][$j])) {
                    echo "<td>{$impares[$i][$j]}</td>";
                    $Nimpares[] = $impares[$i][$j];
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "<h5>Matriz com Números Pares:</h5>";
        echo "<table border='1'>";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                if (isset($pares[$i][$j])) {
                    echo "<td>{$pares[$i][$j]}</td>";
                    $Npares[] = $pares[$i][$j];
                } else {
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

$matriz_str = implode(', ', $matriz);
$Npares_str = implode(', ', $Npares);
$Nimpares_str = implode(', ', $Nimpares);

$sql = "INSERT INTO Exercicio20(matriz, pares, impares) 
    VALUES ( '$matriz_str' , '$Npares_str' , '$Nimpares_str')"; 

if (mysqli_query($conexao, $sql)) {
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>