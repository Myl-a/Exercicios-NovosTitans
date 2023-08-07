<html>
<head>
    <title>Classificação de Triângulo</title>
    <link rel='stylesheet' href='style.css'>
    <style>
        /* Estilos CSS aqui */
    </style>
</head>
<body>
    <h1>Classificação de Triângulo</h1>
    <fieldset>
        <div class="container">
            <h2>Insira aqui os valores referentes aos lados</h2>
            <form method="post">
                <fieldset class="lados">
                    <label for="lado1">Lado 1:</label>
                    <input type="number" name="lado1" id="lado1" required>
                </fieldset>
                <fieldset class="lados">
                    <label for="lado2">Lado 2:</label>
                    <input type="number" name="lado2" id="lado2" required>
                </fieldset>
                <fieldset class="lados">
                    <label for="lado3">Lado 3:</label>
                    <input type="number" name="lado3" id="lado3" required>
                </fieldset>
                <button type="submit" name="verificar" class="btn-primary">Verificar Classificação</button>
            </form>
            
            <?php
            function classificarTriangulo($lado1, $lado2, $lado3) {
                if ($lado1 === $lado2 && $lado2 === $lado3) {
                    return "Triângulo Equilátero";
                } elseif ($lado1 === $lado2 || $lado1 === $lado3 || $lado2 === $lado3) {
                    return "Triângulo Isósceles";
                } else {
                    return "Triângulo Escaleno";
                }
            }

            if (isset($_POST['verificar'])) {
                $lado1 = floatval($_POST['lado1']);
                $lado2 = floatval($_POST['lado2']);
                $lado3 = floatval($_POST['lado3']);
                
                $classificacao = classificarTriangulo($lado1, $lado2, $lado3);
                
                echo "<script>alert('Classificação: $classificacao');</script>";
            }
            ?>
            
        </div>
    </fieldset>
</body>
</html>
