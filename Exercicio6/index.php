<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Consulta de Mês</title>
</head>
<body>
    <div class="container">
        <h1>Consulta de Mês</h1>
        <form>
            <label for="numero">Digite um número inteiro entre 1 e 12:</label>
            <input type="number" id="numero" name="numero" min="1" max="12" required>
            <button type="submit"><strong>Consultar</strong></button>
        </form>
        <div class="resultado" id="resultado">
        </div>
    </div>
</body>
</html>
