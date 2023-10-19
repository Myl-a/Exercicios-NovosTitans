<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 15</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <h1>Tempo para Perda de Massa</h1>
        <img src="usina.jpg" alt="Usina de Angra dos Reis" class="usina-img">
        <p>Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. Sabendo-se que este perde 25% de sua massa a cada 30 segundos, este algoritmo irá calcular o tempo necessário para que a massa desse material seja menor que 0.10.</p>
        <form method="post">
            <label for="massaAtual">Massa Inicial:</label>
            <input type="number" name="massaAtual" step="0.01" min="0.01" placeholder="Informe a massa atual">
            <label for="massaFinal">Massa Limite:</label>
            <input type="number" name="massaFinal" step="0.01" min="0.01" placeholder="Informe a massa final">
            <button type="submit" name="calcular">Calcular</button>
        </form>
        <?php
            if (isset($_POST['massaAtual']) && isset($_POST['massaFinal'])) {
                $massaAtual = floatval($_POST['massaAtual']);
                $massaFinal = floatval($_POST['massaFinal']);
                if (!is_numeric($massaAtual) || !is_numeric($massaFinal) || $massaAtual <= 0 || $massaFinal <= 0) {
                    echo "Valores inválidos. Certifique-se de que os valores são numéricos e maiores que zero.";
                } else {
                    function calculoTempo($massaAtual, $massaFinal) {
                        $tempo = 0;
                        while ($massaAtual >= $massaFinal) {
                            $massaAtual = $massaAtual * 0.75; 
                            $tempo = $tempo + 30;
                        }            
                        return $tempo;
                    }
                    $tempoNecessario = calculoTempo($massaAtual, $massaFinal);
                    echo "Tempo necessário: $tempoNecessario segundos";
                    include("conexao.php");
                    $sql = "INSERT INTO Exercicio15 (massaAtual, massaFinal, tempo) VALUES ('$massaAtual', '$massaFinal', '$tempoNecessario')";
                    if (mysqli_query($conexao, $sql)) {
                        echo "<br>Dados inseridos no banco de dados com sucesso.";
                    } else {
                        echo "Erro ao inserir dados: " . mysqli_error($conexao);
                    }
                    mysqli_close($conexao);
                }
            }
        ?>
        <a href="listagem.php">Ver Listagem</a>
    </div>
</body>
</html>
