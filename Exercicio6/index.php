<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Consulta de Mês</title>
</head>
<body>
    <div class="container">
        <h1>Consulta de Mês</h1>
        <form method="POST">
            <label for="numeroMes">Digite um número de mês entre 1 e 12:</label>
            <input type="number" id="numeroMes" name="numeroMes" min="1" max="12" required>
            <button type="submit"><strong>Consultar</strong></button>
        </form>
        <div class="resultado" id="resultado">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $numero = $_POST['numero'];

                if ($numero >= 1 && $numero <= 12) {
                    $meses = [
                        1 => "Janeiro",
                        2 => "Fevereiro",
                        3 => "Março",
                        4 => "Abril",
                        5 => "Maio",
                        6 => "Junho",
                        7 => "Julho",
                        8 => "Agosto",
                        9 => "Setembro",
                        10 => "Outubro",
                        11 => "Novembro",
                        12 => "Dezembro"
                    ];

                    echo "<p>O número $numero corresponde ao mês de " . $meses[$numero] . ".</p>";
                } else {
                    echo "<p>Não existe mês com o número $numero.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
