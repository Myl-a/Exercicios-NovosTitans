<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 15</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <h1>Tempo para Perda de Massa</h1>
        <img src="usina.jpg" alt="Usina de Angra dos Reis" class="usina-img">
        <p>Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. Sabendo-se que este perde 25% de sua massa a cada 30 segundos, este algoritmo irá calcular o tempo necessário para que a massa desse material seja menor que 0.10.</p>

        <form method="post">
            <label for="massaAtual">Massa Atual:</label>
            <input type="number" name="massaAtual" step="0.01" min="0.01" placeholder="Informe a massa inicial">
            <button type="submit" name="calcular">Calcular Tempo</button>
        </form>
    </div>
</body>
</html>
