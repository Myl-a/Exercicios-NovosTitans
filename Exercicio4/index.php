<!doctype html>
<html>
<head>
    <title>Ordenar Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ordenando os Números</h1>
    <fieldset>
        <form action="index.php" method="post" class="numeros">
            <div>
                <label for="numero1">1º Número:</label>
                <input type="number" name="numero1" required>
            </div><br>
            <div>
                <label for="numero2">2º Número:</label>
                <input type="number" name="numero2" required>
            </div><br>
            <div>
                <label for="numero3">3º Número:</label>
                <input type="number" name="numero3" required>
            </div>
            <br>
            <button type="submit" class="btn-primary">Salvar</button>
        </form>
    </fieldset>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $num3 = $_POST['numero3'];
        $nums = array($num1, $num2, $num3);
        rsort($nums);
        $response_msg = "Números em ordem decrescente: " . implode(", ", $nums);
        echo "<script> alert('" . $response_msg . "'); </script>";
}
?>
</body>
</html>

