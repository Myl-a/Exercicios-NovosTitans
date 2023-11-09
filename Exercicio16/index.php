<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 16</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Verificador de Par ou Ímpar</h1>
        <p>Insira 15 números separados por vírgula e clique no botão para verificar se são pares ou ímpares:</p>
        <div>
            <form method="post">
                <label for="numero">Números:</label>
                <input type="text" name="numero" id="numero" placeholder="Digite os números separados por vírgula"><br>
                <button type="submit">Verificar</button>
            </form>
        </div>
        <a href="listagem.php">Ver Listagem</a>
        <div id="resultado">
            <?php
            include("conexao.php");
            function ParOuImpar($numero) {
                if ($numero % 2 == 0) {
                    return 'par';
                } else {
                    return 'ímpar';
                }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
                $numeroString = $_POST['numero'];
                $numeros = explode(',', $numeroString);
                if (count($numeros) == 15) {
                    $resultado = '';
                    foreach ($numeros as $numero) {
                        $resultado .= "O número $numero é " . ParOuImpar($numero) . ".<br>";
                    }
                    echo $resultado;
                    if (isset($conexao)) {
                        $numeroString = mysqli_real_escape_string($conexao, $numeroString);
                        $resultado = mysqli_real_escape_string($conexao, $resultado);
                        
                        $sql = "INSERT INTO Exercicio16 (numero, resultado) VALUES ('$numeroString', '$resultado')";
                        
                        if (mysqli_query($conexao, $sql)) {
                            echo "Salvo";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
                        }
                    }
                } else {
                    echo "Você deve fornecer exatamente 15 números separados por vírgula.";
                }
            }
            if (isset($conexao)) {
                mysqli_close($conexao);
            }
            ?>
        </div>
    </div>
</body>
</html>
