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
        
        $sql = "SELECT Palavras, Repetições FROM Exercicio12";
        $resultado = mysqli_query($conexao, $sql);

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<li>Palavra: " . $row["Palavras"] . " | Repetições: " . $row["Repetições"] . "</li>";
        }

        mysqli_close($conexao);
        ?>
        </ul>

        <br>
        <a href="index.php">Voltar para o Início</a>
    </div>
</body>
</html>
