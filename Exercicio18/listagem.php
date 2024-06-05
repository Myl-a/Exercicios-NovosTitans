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
            $selectSql = "SELECT vetor, vetor2, incomuns FROM Exercicio18";
            $busca = mysqli_query($conexao, $selectSql);
            if (mysqli_num_rows($busca) > 0) {
                while ($linha = mysqli_fetch_assoc($busca)) {
            ?>
                    <li class="vetor">
                        Vetor: <span class="vet"><?= $linha["vetor"] ?></span><br>
                        Vetor 2: <span class="vetor2"><?= $linha["vetor2"] ?></span><br>
                        Incomuns: <span class="Ncomuns"><?= $linha["incomuns"] ?></span><br>
                    </li>
            <?php
                }
            } else {
            ?>
                <li>Nenhum registro encontrado.</li>
            <?php
            }
            mysqli_close($conexao);
            ?>
        </ul>
        <br>
        <a href="index.php">Voltar para o Início</a>
    </div>
</body>
</html>
