<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <title>Exercicio 14</title>
    </head>
    <body class="container">
        <form action="index.php" method="post" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <label for="altura_chico">Altura do Chico em cm:</label>
                    <input type="text" name="altura_chico" id="altura_chico" class="validate" value="150" required>
                </div>
                <div class="input-field col s6">
                    <label for="crescimento_chico">Crescimento anual do Chico:</label>
                    <input type="text" name="crescimento_chico" id="crescimento_chico" class="validate" value="2" required>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label for="altura_juca">Altura do Juca em cm:</label>
                    <input type="text" name="altura_juca" id="altura_juca" class="validate" value="110" required>
                </div>
                <div class="input-field col s6">
                    <label for="crescimento_juca">Crescimento anual do Juca:</label>
                    <input type="text" name="crescimento_juca" id="crescimento_juca" class="validate" value="3" required>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label>Quantos anos serão necessários para que Juca seja maior que Chico?</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect pink waves-light" type="submit" name="action">Calcular</button>
                </div>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
        $(document).ready(function() {
            $("#calculo").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: "POST", 
                    url: "process.php", 
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
