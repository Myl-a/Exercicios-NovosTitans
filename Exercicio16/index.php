<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 16</title>
    <link rel="stylesheet" href="styles.css">
<body>
    <div class="container">
        <h1>Verificador de Par ou Ímpar</h1>
        <p>Insira um número e clique no botão para verificar se é par ou ímpar:</p>

        <div>
            <label for="numero">Número:</label>
            <input type="number" id="numero" placeholder="Digite um número">
            <button onclick="verificarParOuImpar()">Verificar</button>
        </div>

        <div id="resultado"></div>
    </div>
</body>
</html>
