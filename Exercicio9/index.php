<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 9</title>
</head>
<body>
    <main id="container">
        <form id="night_form" method="POST">
            <div id="form_header">
                <h1>Imprimir a palavra SOL</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>
            <div id="inputs">
                <div class="input-box">
                    <label for="numVezes">Número de vezes:</label>
                    <div class="input-field">
                        <input type="number" name="numVezes" id="numVezes" placeholder="Digite o número de vezes" min="1" required>
                    </div>
                </div>
                <button type="submit" id="imprimir_button">Imprimir</button>
            </div>
        </form>
        <div id="resultado-container">
            <h1>Resultado</h1>
            <div id="resultado">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['numVezes']) && is_numeric($_POST['numVezes'])) {
                        $numeroVezes = intval($_POST['numVezes']);
                        $sol = str_repeat("SOL ", $numeroVezes);
                        echo $sol;
                    } else {
                        echo "Por favor, insira um número válido.";
                    }
                }
                ?>
            </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>
