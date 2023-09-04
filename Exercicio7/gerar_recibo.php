<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca Universitária</title>
</head>
<body>
    <div class="container">
        <h1>Recibo de Empréstimo</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $livro = $_POST["book-name"];
                $tipoUsuario = $_POST["user-type"];
                $prazoDevolucao = ($tipoUsuario == "professor") ? 10 : 3;
                $dataDevolucao = date('d-m-Y', strtotime("+$prazoDevolucao days"));
                echo "<p><strong>Livro:</strong> $livro</p>";
                echo "<p><strong>Tipo de Usuário:</strong> $tipoUsuario</p>";
                echo "<p><strong>Data de Devolução:</strong> $dataDevolucao</p>";
            }
            ?>
            <form>
                <button onclick="window.location.href = 'index.php';" class="btn-primary">Voltar para a Página Inicial</button>
            </form>
    </div>
</body>
</html>
