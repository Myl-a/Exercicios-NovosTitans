<!DOCTYPE html>
<html>
    <head>
        <title>Exercicio 2</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <h1>Exercicio 2</h1>
        <h2>Verificar Divisibilidade</h2>
        <form method="post" action="/Exercicio2/index.php">
            <div>
                <label for="number">Digite um número:</label>
                <input type="number" id="numero" name="numero">
            </div> 
            <div>
                <button type="submit" class="btn-primary">Salvar</button>
            </div>
        </form>
        <?php
        if (isset($_POST['numero'])) {
            $numeroEntrada = $_POST['numero'];
            echo verificarDivisibilidade($numeroEntrada);
        }
            function ehDivisivel($numero, $divisor) {
                return $numero % $divisor === 0;
            }
            function verificarDivisibilidade($numero) {
                $divisivelPor10 = ehDivisivel($numero, 10);
                $divisivelPor5 = ehDivisivel($numero, 5);
                $divisivelPor2 = ehDivisivel($numero, 2);
                if ($divisivelPor10 && $divisivelPor5 && $divisivelPor2) {
                    return "$numero é divisível por 10, 5 e 2.";
                } elseif ($divisivelPor10) {
                    return "$numero é divisível por somente por 10.";
                } elseif ($divisivelPor5) {
                    return "$numero é divisível por somente por 5.";
                } elseif ($divisivelPor2) {
                    return "$numero é divisível por somente por 2.";
                } else {
                    return "$numero não é divisível por 10, 5 ou 2.";
                }
            }
        ?>
    </body>
</html>