<!DOCTYPE html>
    <head>
        <title>Classificação de Triângulo</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <h1>Classificação de Triângulo</h1>
        <fieldset>
            <div class="container">
                <h2>Insira aqui os valores referentes aos lados</h2>
                <fieldset class="lados">
                    <label for="lado1">Lado 1:</label>
                    <input type="number" id="lado1" required>
                </fieldset>
                <fieldset class="lados">
                    <label for="lado2">Lado 2:</label>
                    <input type="number" id="lado2" required>
                </fieldset>
                <fieldset class="lados">
                    <label for="lado3">Lado 3:</label>
                    <input type="number" id="lado3" required>
                </fieldset>
                <button type="button" onclick="classificarTriangulo()" class="btn-primary">Verificar Classificação</button>
            </div>
        </fieldset>
    </body>
</html>
