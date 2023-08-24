<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <div class="container">
        <fieldset class="numeros">
            <legend>Calcular Produtos</legend>
            <form method="post" action="/Exercicio8/index.php">
                <label for="inputNumber">Insira um número:</label>
                <input type="number" id="inputNumber" name="inputNumber" min="1" required>
                <button type="submit" class="btn-primary">Calcular</button>
            </form>
            <div id="output" class="resultado">
                <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $numero = intval($_POST["inputNumber"]);

                    if ($numero >= 1) {
                        echo "Números de 1 até $numero: ";
                        for ($i = 1; $i <= $numero; $i++) {
                            echo "$i ";
                        }
                        echo "<br>";

                        $produto = 1;
                        for ($i = 1; $i <= $numero; $i++) {
                            $produto *= $i;
                        }
                        echo "Produto dos números: $produto";
                    } else {
                        echo "Por favor, insira um número válido maior ou igual a 1.";
                    }
                }
                ?>
            </div>
        </fieldset>
    </div>
</body>
</html>
