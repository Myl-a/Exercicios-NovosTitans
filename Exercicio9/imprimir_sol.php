<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    <title>Imprimir SOl</title>
</head>
<body>  
    <main id="container">
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
            <a href="index.php"><i id="mode_icon" class="fa-solid fa-arrow-left"></i></a>
        </div>
    </main>
</body>
</html>
