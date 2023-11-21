<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 12</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .caixa {
            border: 1px solid #000;
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Repetir Palavra</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="palavra">Digite uma palavra:</label>
                <input type="text" name="palavra" id="palavra" placeholder="Digite a palavra" required>
            </div>
            <div class="form-group">
                <label for="repeticoes">Número de repetições:</label>
                <input type="number" name="repeticoes" id="repeticoes" placeholder="Número de repetições" min="1" required>
            </div>
            <button type="submit" name="submit">Repetir</button>
        </form>
        <div id="loading" style="display: none;">
            Carregando...
        </div>
        <div id="output">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $palavra = $_POST["palavra"];
            $repeticoes = intval($_POST["repeticoes"]);

            for ($i = 1; $i <= $repeticoes; $i++) {
                echo '<div class="caixa">';
                for ($j = 1; $j <= $i; $j++) {
                    echo '<span class="result chip">' . htmlspecialchars($palavra) . '</span>';
                }
                echo '</div>';
            }

            // Inclua a conexão com o banco de dados e insira os dados com segurança
            include("conexao.php");

            $palavraSegura = mysqli_real_escape_string($conexao, $palavra); // Evita injeção SQL
            $sql = "INSERT INTO Exercicio_12 (Palavras, Repetições) VALUES ('$palavraSegura', $repeticoes)";

            if (mysqli_query($conexao, $sql)) {
                // Inserção bem-sucedida
            } else {
                echo "Erro: " . mysqli_error($conexao);
            }

            mysqli_close($conexao);
        } else {
            echo '<span class="result chip">' . "Por favor, preencha o formulário." . '</span> ';
        }
        ?>
        </div>
        <a href="listagem.php">Ver Listagem</a>
    </div>
</body>
</html>
