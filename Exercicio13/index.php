<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <h1>Contador de Números entre 100 e 200</h1>
        <p>Digite números (0 para encerrar):</p>
        <form method="post">
            <input type="number" name="numero">
            <button type="submit" name="contar">Contar</button>
        </form>
        <p id="output">
        <?php
        $contador = 0;
        $numbers = []; // Inicialize a variável $numbers como um array vazio

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["numero"])) {
                $number = $_POST["numero"];
                $numbers = explode(',', $number);

                foreach ($numbers as $num) {
                    if ($num >= 100 && $num <= 200) {
                        $contador++;
                    } elseif ($num == 0 || $num == '') {
                        echo "<h3>Por favor, insira um número válido.</h3>";
                        echo '<a href="form.html" class="btn waves-effect waves-light"> Voltar</a>';
                        die();
                    }
                }
            }
        }

        if ($contador > 0) {
            echo "<h3>Foi digitado $contador número(s) entre 100 e 200.</h3>";
        }

        echo '<a href="listagem.php" class="btn waves-effect waves-light"> Listagem </a>';

        include("conexao.php");
        echo '</br>';

        $numbers = implode(',', $numbers);
        $sql = "INSERT INTO exercicio13(numeros, resultado) 
                VALUES ('$numbers', $contador)";
        if (mysqli_query($conexao, $sql)) {
            echo " Cadastrado com sucesso";
        } else {
            echo "Erro: " . mysqli_error($conexao);
        }

        mysqli_close($conexao);
        ?>
        </p>
    </div>
</body>
</html>
