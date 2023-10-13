<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 14</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Crescimento de Chico e Juca</h1>
        <form action="index.php" method="post">
            <label>Altura do Chico em cm:</label>
            <input type="text" name="alturaChico" id="alturaChico" value="150" required>
            <label>Crescimento anual do Chico:</label>
            <input type="text" name="crescimentoChico" id="crescimentoChico" value="2" required>
            <label>Altura do Juca em cm:</label>
            <input type="text" name="alturaJuca" id="alturaJuca" value="110" required>
            <label>Crescimento anual do Juca:</label>
            <input type="text" name="crescimentoJuca" id="crescimentoJuca" value="3" required>
            <label>Quantos anos serão necessários para que Juca seja maior que Chico?</label>
            <br>
            <input type="submit" value="Calcular">
        </form>
        <?php
            if (isset($_POST["alturaChico"]) && isset($_POST["alturaJuca"]) && isset($_POST["crescimentoChico"]) && isset($_POST["crescimentoJuca"])) {
                $alturaChico = $_POST["alturaChico"];
                $alturaJuca = $_POST["alturaJuca"];
                $crescimentoChico = $_POST["crescimentoChico"];
                $crescimentoJuca = $_POST["crescimentoJuca"];
                function calculo($alturaChico, $alturaJuca, $crescimentoChico, $crescimentoJuca) {
                    $anos = 0;
                    while ($alturaJuca <= $alturaChico) {
                        $alturaChico += $crescimentoChico;
                        $alturaJuca += $crescimentoJuca;
                        $anos++;
                    }
                    return $anos;
                }
                $anos = calculo($alturaChico, $alturaJuca, $crescimentoChico, $crescimentoJuca);
                echo '<div class="container">';
                echo '<p class="flow-text"> Serão necessários ' . $anos . ' anos para que Juca seja maior do que Chico.</p>';
                echo '<a href="listagem.php" class="btn waves-effect waves-light">Listagem</a>';
                include("conexao.php");
                echo '</br>';
                $sql = "INSERT INTO Exercicio14 (alturaChico, alturaJuca, crescimentoChico, crescimentoJuca, anos) 
                    VALUES ('$alturaChico', '$alturaJuca', '$crescimentoChico', '$crescimentoJuca', '$anos')";
                if (mysqli_query($conexao, $sql)) {
                    echo "";
                } else {
                    echo "Erro: " . mysqli_connect_errno($conexao);
                }
                mysqli_close($conexao);
            }
            $("#CarregarListagem").click(function() {
                carregarListagemDados();
            }); 
    </script>
    </body>
</html>
