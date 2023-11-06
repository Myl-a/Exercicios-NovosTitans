<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Exercicio 16</title>
</head>
<body class="purple lighten-4 white-text">
    <div class="container white-text"> 
        <form id="formulario" action="index.php" method="post">
            <label class="flow-text">Informe 15 números inteiros separados por vírgula:</label>
            <input type="text" id="numeros" name="numeros" class="black-text"> 
            <button class="btn waves-effect waves-light purple darken-4" type="submit">Enviar</button>
        </form>
        <div class="resposta-container">
            <p id="resposta"></p>
        </div>
        <button id="CarregarListagem" class="btn waves-effect waves-light purple darken-4 white-text">Carregar Listagem</button>
        <div class="listagem-container">
            <ul id="listagem"></ul>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#formulario").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: "POST", 
                    url: "index.php", 
                    data: formData, 
                    success: function(response) {
                        console.log("Requisição AJAX enviada com sucesso!");
                        console.log(response);
                        $("#resposta").html(response);
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