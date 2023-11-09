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
        <?php
            include("conexao.php"); 

            $selectSql = "SELECT Vetor1, Maior, Menor, Media, Pares FROM Exercicio17";
            $busca = mysqli_query($conexao, $selectSql);

            if (mysqli_num_rows($busca) > 0) {
                while ($linha = mysqli_fetch_assoc($busca)) {
                    echo '<li class="vetor">Vetor: <span class="vet">' . $linha["Vetor1"] . '</span><br>';
                    echo 'Maior valor: <span class="Maior">' . $linha["Maior"] . '</span><br>';
                    echo 'Menor valor: <span class="Menor">' . $linha["Menor"] . '</span><br>';
                    echo 'Média: <span class="Media">' . $linha["Media"] . '</span><br>';
                    echo 'Percentual de Pares: <span class="Pares">' . $linha["Pares"] . ' % </span></li>';
                }
            } else {
                echo "<li>Nenhum registro encontrado.</li>";
            }

            mysqli_close($conexao);
        ?>
        </ul>
        <br>
        <a href="index.php">Voltar para o Início</a>
</div>
</body>
</html>