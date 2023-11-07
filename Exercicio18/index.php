<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 18</title>
</head>
<body> 
    <div class="container">
        <form id="formulario" action="process.php" method="post">
            <label class="custom-label">Insira 10 números inteiros separados por vírgula:</label>
            <input type="text" id="numeros" name="numeros">
            <label class="custom-label">Insira mais 10 números inteiros</label>
            <input type="text" id="numeros2" name="numeros2">
            <button class="btn waves-effect waves-light" type="submit">Enviar</button> 
        </form>
        <div class="resultado-container">
            <p id="resultado"></p>
        </div>
        <button id="CarregarListagem" class="btn waves-effect waves-light">Carregar Listagem</button>
        <div class="listagem-container">
            <ul id="listagem"></ul>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#formulario").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: "POST", 
                    url: "process.php", 
                    data: formData, 
                    success: function(response) {
                        console.log("Requisição AJAX enviada com sucesso!");
                        console.log(response);
                        $("#resultado").html(response);
                    },
                    error: function(error) {
                        console.error("Erro na requisição AJAX:");
                        console.error(error);
                    }
                });
            });
            function carregarListagemDados() {
                $.ajax({
                    type: "POST", 
                    url: "listagem.php",  
                    success: function(response) {
                        $("#listagem").html(response);
                    },
                    error: function(error) {
                        console.error("Erro ao carregar a listagem:");
                        console.error(error);
                    }
                });
            }
            $("#CarregarListagem").click(function() {
                carregarListagemDados();
            });
        });
    </script>
</body>
</html>
