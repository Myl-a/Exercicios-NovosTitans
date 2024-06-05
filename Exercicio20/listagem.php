<link rel="stylesheet" type="text/css" href="style.css">
<?php
include("conexao.php"); 

$selectSql = "SELECT matriz, pares, impares FROM Exercicio20";
$busca = mysqli_query($conexao, $selectSql);

if (mysqli_num_rows($busca) > 0) {
    while ($linha = mysqli_fetch_assoc($busca)) {
        echo '<li class="matriz"> Numeros da matriz:' . $linha["matriz"] . '</span><br>';
        echo 'Pares: <span class="pares">' . $linha["pares"] . '</span><br>';
        echo 'Impares: <span class="impares">' . $linha["impares"] . '</span><br>';
    }
} else {
    echo "<li>Nenhum registro encontrado.</li>";
}

mysqli_close($conexao);
?>