<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca Universitária</title>
</head>
<body>
    <div class="container">
        <h1>Biblioteca Universitária</h1>
        <form id="library-form" method="post" action="gerar_recibo.php">
            <label for="book-name">Nome do Livro:</label>
            <input type="text" id="book-name" name="book-name" placeholder="Pesquisar...">
            <label for="user-type">Tipo de Usuário:</label>
            <select id="user-type" name="user-type" required>
                <option value="professor">Professor</option>
                <option value="aluno">Aluno</option>
            </select>
            <button type="submit" class="btn-primary">Gerar Recibo</button>
        </form>
    </div>
</body>
</html>
