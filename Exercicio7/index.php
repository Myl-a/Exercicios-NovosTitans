<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca Universitária</title>
</head>
<body>
    <div class="container">
        <h1>Biblioteca Universitária</h1>
        <form id="library-form">
            <label for="book-name">Nome do Livro:</label>
            <div class="search">
                <a href="" target="_blank" hidden></a>
                <input type="text" id="book-name" name="book-name" placeholder="Pesquisar...">
            </div>
            <label for="user-type">Tipo de Usuário:</label>
            <select id="user-type" name="user-type" required>
                <option value="professor">Professor</option>
                <option value="aluno">Aluno</option>
            </select>
        </form>
        <button type="button" onclick="generateReceipt()" class="btn-primary">Gerar Recibo</button>
        <div id="receipt" class="hidden">
            <h2>Recibo</h2>
            <p id="receipt-text"></p>
        </div>
    </div>
</body>
</html>
