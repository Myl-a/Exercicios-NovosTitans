<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado</h1>
        <?php
        include("conexao.php");

        if (isset($_POST["Vetor1"])) {
            $Vetor = $_POST["Vetor1"];
            $Maior = $Vetor[0];
            $Menor = $Vetor[0];
            $totalPares = 0;
            $somaElementos = 0;

            $count = count($Vetor);

            for ($i = 0; $i < $count; $i++) {
                $elemento = $Vetor[$i];
            
                if (!is_numeric($elemento)) {
                    continue;
                }
            
                $elemento = floatval($elemento); 
                if ($elemento > $Maior) {
                    $Maior = $elemento;
                }
            
                if ($elemento < $Menor) {
                    $Menor = $elemento;
                }
            
                if ($elemento % 2 == 0) {
                    $totalPares++;
                }
            
                $somaElementos += $elemento;
            }
            

            $percentualPares = ($totalPares / count($Vetor)) * 100;
            $Media = $somaElementos / count($Vetor);
        }

            $resultado = "Maior valor: " . $Maior . "<br>" .
                        "Menor valor: " . $Menor . "<br>" .
                        "Percentual de números pares: " . $percentualPares . "%<br>" .
                        "Média dos elementos: " . $Media . "<br>";

            echo $resultado;


            $VetorStr = implode(', ', $Vetor);

            $sql = "INSERT INTO Exercicio17(Vetor1, Maior, Menor, Media, Pares) 
            VALUES ('$VetorStr', $Maior, $Menor, $Media, $percentualPares)"; 
            mysqli_query($conexao, $sql);

            mysqli_close($conexao); 

        ?>
    <p><a href="index.php">Voltar</a></p>
    <a href="listagem.php">Ver Listagem</a>
</body>
</html>
