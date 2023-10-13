<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Listagem de Dados do Banco de Dados</h1>
        <ul>
        <?php
            include("conexao.php"); 
            $selectSql = "SELECT alturaChico, alturaJuca, crescimentoChico, crescimentoJuca, anos FROM exercicio14";
            $busca = mysqli_query($conexao, $selectSql);
            if (mysqli_num_rows($busca) > 0) {
                while ($linha = mysqli_fetch_assoc($busca)) {
                    echo '<li class="ex">Altura Chico: ' . $linha["alturaChico"] . ' cm </br>';
                    echo 'Altura Juca: ' . $linha["alturaJuca"] . ' cm </br>';
                    echo 'Crescimento Chico: ' . $linha["crescimentoChico"] . ' cm <br>';
                    echo 'Crescimento Juca: ' . $linha["crescimentoJuca"] . ' cm <br>';
                    echo 'Anos: ' . $linha["anos"] . '</li>';
                }
            } else {
                echo "<li>Nenhum registro encontrado.</li>";
            }
               mysqli_close($conexao);
        ?>
        </ul>
        <br>
        <a href="index.php">Voltar para o Início</a>
</div>
</body>
</html>