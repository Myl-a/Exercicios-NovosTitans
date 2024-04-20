<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Listagem de Dados do Banco de Dados</h1>
        <ul>
<link rel="stylesheet" href="style.css">
<?php
include("conexao.php"); 

$selectSql = "SELECT numeros, resultado FROM Exercicio13";
$busca = mysqli_query($conexao, $selectSql);

if (mysqli_num_rows($busca) > 0) {
    while ($linha = mysqli_fetch_assoc($busca)) {
        echo '<li class="ex"> Números Digitados ' . $linha["numeros"] . ' </br>';
        echo 'Quantos números digitados entre 100 e 200: ' . $linha["resultado"] . '</li> </br>';
    }
} else {
    echo "<li>Nenhum registro encontrado.</li>";
}

mysqli_close($conexao);
?>
<a href="index.php">Voltar para o Início</a>
    </div>
</body>
</html>