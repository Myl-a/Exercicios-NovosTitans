<link rel="stylesheet" href="style.css">

<?php
    
    if (isset($_GET['numeros'])) {
        $numeros = explode(',', $_GET['numeros']);
        $somaPositivos = 0;
        $totalNegativos = 0;
        $count = count($numeros);
        $num = $_GET['numeros'];

        for ($i = 0; $i < $count; $i++) {
            $numero = $numeros[$i];

            if ($numero > 0) {
                $somaPositivos += $numero;
            } elseif ($numero < 0) {
                $totalNegativos++;
            }
        }

        echo '<p class="resultado"> Os números que você digitou: ' . implode(", ", $numeros) . '</p>';
        echo '<p class="resultado"> A soma dos números positivos é: ' . $somaPositivos . '</p>';
        echo '<p class="resultado"> O total de números negativos é: ' . $totalNegativos . '</p>';

        // Botão para voltar ao formulário
        echo '<form action="index.php" method="get">
            <input type="submit" value="Voltar">
            </form>';

        include("conexao.php");
        echo '</br>';

        $sql="INSERT INTO Exercicio10(numeros, somaPositivos, totalNegativos) 
            VALUES ('$num', $somaPositivos, $totalNegativos)";
        if(mysqli_query($conexao, $sql)){
            echo " Cadastrado com sucesso";
        }
        else{
            echo "erro".mysqli_connect_errno($conexao);
        }

        mysqli_close($conexao);
    }
?>