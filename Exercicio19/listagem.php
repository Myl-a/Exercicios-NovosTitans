<?php
include("conexao.php"); 

$selectSql = "SELECT matriz, diagonal FROM exercicio19";
$busca = mysqli_query($conexao, $selectSql);

if (mysqli_num_rows($busca) > 0) {
    while ($linha = mysqli_fetch_assoc($busca)) {
        echo '<li class="vetor">Numeros da matriz: <span class="matriz">' . $linha["matriz"] . '</span><br>';
        echo 'Diagonal: <span class="diagonal">' . $linha["diagonal"] . '</span><br>';
    }
} else {
    echo "<li>Nenhum registro encontrado.</li>";
}

mysqli_close($conexao);
?>