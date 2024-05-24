<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Exercicio 16</title>
</head>
<body class="orange lighten-4"> 
    <div class="container">
        <form id="formulario" action="process.php" method="post">
            <label class="flow-text orange-text text-darken-4">Informe 15 números inteiros separados por vírgula:</label>
            <input type="text" id="numeros" name="numeros">
            <button class="btn waves-effect waves-light orange darken-4" type="submit">Enviar</button> 
        </form>
        <div class="resposta-container">
            <p id="resposta"></p>
        </div>
        <button id="CarregarListagem" class="btn waves-effect waves-light orange darken-4">Carregar Listagem</button>
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

                // Requisição AJAX
                $.ajax({
                    type: "POST", 
                    url: "process.php", 
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