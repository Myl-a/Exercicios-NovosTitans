<!DOCTYPE html>
<head>
    <title>Exercicio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>Repetir Palavra</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="palavra">Digite uma palavra:</label>
                <input type="text" name="palavra" id="palavra" placeholder="Digite a palavra">
            </div>
            <div class="form-group">
                <label for="repeticoes">Número de repetições:</label>
                <input type="number" name="repeticoes" id="repeticoes" placeholder="Número de repetições" min="1">
            </div>
            <button type="submit" name="submit">Repetir</button>
        </form>
        <div id="loading" style="display: none;">
            Carregando...
        </div>
        <div id="output">
            <h2>Palavras Repetidas:</h2>
            <ul id="palavras-repetidas">
            </ul>
        </div>
    </div>
</body>
</html>

