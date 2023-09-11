<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 10</title>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Soma de Números</h2>
        <p>Insira 20 números e clique em calcular:</p>
        <input type="text" id="inputNumbers" placeholder="Insira os números separados por vírgula">
        <button class="btn-primary" onclick="calcularSoma()">Calcular</button>
        <p>Total de números negativos: <span id="negativos">0</span></p>
        <p>Soma dos números positivos: <span id="positivos">0</span></p>
    </div>
</body>
</html>
