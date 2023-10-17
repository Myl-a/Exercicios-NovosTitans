<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 15</title>
</head>
<body>
    <div class="container">
        <form id="calculo" action="index.php" method="post">
            <div class="input-field">
                <label for="massaInicial">Massa Inicial do Material Radioativo:</label>
                <input type="number" id="massaInicial" name="massaInicial">
            </div>
            <div class="input-field">
                <label for="massaLimite">Massa Limite (menor que 0.10):</label>
                <input type="number" id="massaLimite" step="any" name="massaLimite">
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Calcular</button>
            <button id="CarregarListagem" class="btn waves-effect waves-light" type="submit" name="action">Carregar Listagem</button>
            <p id="tempo"></p>
            <div class="listagem-container">
                <ul id="listagem"></ul>
            
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $("#calculo").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: "POST", 
                    url: "index.php", 
                    data: formData, 

                    success: function(response) {
                        console.log("Requisição AJAX enviada com sucesso!");
                        console.log(response); 
                        $("#tempo").text("Tempo necessário: " + response + " segundos");
                    },
                    error: function(error) {
                        console.error("Erro na requisição AJAX:");
                        console.error(error);
                    }
                });
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
            
    </script>
</body>
</html>
