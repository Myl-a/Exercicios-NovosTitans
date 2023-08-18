<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca Universitária</title>
    <script>
        function generateReceipt() {
            const bookName = document.getElementById("book-name").value;
            const userType = document.getElementById("user-type").value;
            const receiptDiv = document.getElementById("receipt");
            const receiptText = document.getElementById("receipt-text");
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    receiptText.innerText = this.responseText;
                    receiptDiv.classList.remove("hidden");
                }
            };
            xhttp.open("POST", "generate_receipt.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`book-name=${bookName}&user-type=${userType}`);
    }
    </script>
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
