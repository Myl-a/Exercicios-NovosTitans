<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 12</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <?php
            $palavra = ""; 
            if (isset($_POST["palavra"])) {
                $palavra = $_POST["palavra"];

                for ($x = 1; $x <= 4; $x++) {
                    for ($y = 1; $y <= $x; $y++) {
                        echo '<span class="result chip">' . $palavra . '</span> ';
                    }
                    echo "<br>";
                }
            } else {
                echo '<span class="result chip">' . "Por favor, volte e digite uma palavra." . '</span> ';
            }
            echo '<form action="index.php" method="post">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Voltar</button>
                </form>';
            include("conexao.php");
            echo '</br>';
            $sql = "INSERT INTO Exercicio12(Palavras, Repetições) 
                    VALUES ('$palavra', '$palavra')";
            if (mysqli_query($conexao, $sql)) {
            } else {
                echo "Erro: " . mysqli_connect_errno($conexao);
            }
            $sql = "SELECT * FROM Exercicio12";
            $Palavras = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($Palavras) > 0) {
                    echo "Listagem de dados do banco" . "<br>";
                while ($linha = mysqli_fetch_assoc($Palavras)) {
                    echo "Palavra: " . $linha["Palavras"] . "<br>";
                }
            } else {
                echo "Nenhum registro encontrado.";
            }
            mysqli_close($conexao);
            ?>
</body>
</html>