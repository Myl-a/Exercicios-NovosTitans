<!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 12</title>
    </head>
    <body>
        <div class="container">
            <h1>Exercício 12</h1>

            <form action="process.php" method="POST">
                <div class="input-field">
                    <input type="text" name="palavra" id="palavra" placeholder="Digite uma palavra" required>
                    <label for="palavra">Palavra</label>
                </div>
                <button class="btn waves-effect waves-light" type="submit">Imprimir</button>
                <a href="listagem.php">Ver Listagem</a>
            </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>