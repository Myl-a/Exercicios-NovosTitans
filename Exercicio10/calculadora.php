<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Resultado da Calculadora</title>
</head>
<body>
    <div class="container">
        <h2>Resultado da Calculadora</h2>
        <?php
        $user = 'root';
        $pass = 'root';
        $dsn = 'mysql:dbname=test;host=127.o.o.1;port=3307';

        try{
            $dbh = new PDO($dsn, $user, $pass);
            foreach($dbh->query('SELECT * from FOO') as $row){
                print_r($row);
            }
            $dbh = null;
        }
        catch (PDOException $e) {
            print "Error!: " . e->getMessage . "\n";
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputNumbers = $_POST["inputNumbers"];
            $numbersArray = explode(",", $inputNumbers);

            $somaPositivos = 0;
            $totalNegativos = 0;

            foreach ($numbersArray as $numero) {
                $numero = trim($numero);
                if (is_numeric($numero)) {
                    $numero = (float)$numero;
                    if ($numero > 0) {
                        $somaPositivos += $numero;
                    } elseif ($numero < 0) {
                        $totalNegativos++;
                    }
                }
            }

            echo "<p>Total de números negativos: $totalNegativos</p>";
            echo "<p>Soma dos números positivos: $somaPositivos</p>";
        }
        ?>
        <p><a href="index.php">Voltar</a></p>
    </div>
</body>
</html>
