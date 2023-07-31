<!DOCTYPE html>
<html>
    <head>
        <title>Exercicio 1</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <h1>Exercicio 1</h1>
        <form action="/exercicio1" method="post">
            <div>
                <label for="value1">Digite o primeiro valor: </label>
                <input type="number" name="value1" id="value1">
            </div>
            <div>
                <label for="value2">Digite o segundo valor: </label>
                <input type="number" name="value2" id="value2">
            </div>
            <button type="submit">Salvar</button>
        </form>
        <?php
        if (isset($_POST['value1']) && isset($_POST['value2'])){
            $value1 = $_POST['value1'];
            $value2 = $_POST['value2'];
            $total = $value1 + $value2;
            if ($total > 20){
                $total = $total + 8;
            } else{
                $total = $total - 5;
            }
            echo "<div class='result'>O resultado foi: $total</div>";
        }
        ?>
    </body>
</html>
