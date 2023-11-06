<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Dados</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Seus estilos CSS aqui */
    </style>
</head>
<body>
    <div class="container">
        <h1>Listagem de Dados do Banco de Dados</h1>
        <ul>
            <?php
            include("conexao.php"); // Certifique-se de que o arquivo "conexao.php" está configurado corretamente

            $selectSql = "SELECT massaAtual, massaFinal, tempo FROM Exercicio15";
            $resultado = mysqli_query($conexao, $selectSql);

            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo '<li class="atual">';
                    echo '<span class="massaAtual">Massa Atual: ' . $linha["massaAtual"] . ' gramas</span>';
                    echo '<span class="massaFinal">Massa Final: ' . $linha["massaFinal"] . ' gramas</span>';
                    echo '<span class="tempo">Tempo: ' . $linha["tempo"] . ' segundos</span>';
                    echo '</li>';
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
