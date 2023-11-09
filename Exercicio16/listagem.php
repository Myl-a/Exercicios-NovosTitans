<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Dados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Listagem de Dados do Banco de Dados</h1>
        <ul>
        <?php
            include("conexao.php"); 
            $selectSql = "SELECT numero, resultado FROM Exercicio16";
            $resultado = mysqli_query($conexao, $selectSql);
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo '<li class="num">Número: <span class="numero">' . $linha["numero"] . '</span><br>';
                    echo '<span class="resultado">' . $linha["resultado"] . '</span></li>';

                }
            } else {
                echo "<li>Nenhum registro encontrado.</li>";
            }
            mysqli_close($conexao);
            ?>
        <br>
        <a href="index.php">Voltar para o Início</a>
</div>
</body>
</html>