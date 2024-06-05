<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 17</title>
</head>
<body class="green lighten-4"> 
    <div class="row">
        <form class="col s16" id="formulario" action="process.php" method="post">
            <h4 class="center-align flow-text green-text text-darken-4">Digite 20 números inteiros:</h4>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 1</label>
            <input type="number" id="Vetor1" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 2:</label>
            <input type="number" id="Vetor2" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 3:</label>
            <input type="number" id="Vetor3" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 4:</label>
            <input type="number" id="Vetor4" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 5:</label>
            <input type="number" id="Vetor5" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 6:</label>
            <input type="number" id="Vetor6" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 7:</label>
            <input type="number" id="Vetor7" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 8:</label>
            <input type="number" id="Vetor8" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 9:</label>
            <input type="number" id="Vetor9" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 10:</label>
            <input type="number" id="Vetor10"name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 11:</label>
            <input type="number" id="Vetor11" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 12:</label>
            <input type="number" id="Vetor12" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 13:</label>
            <input type="number" id="Vetor13" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 14:</label>
            <input type="number" id="Vetor14" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 15:</label>
            <input type="number" id="Vetor15" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 16:</label>
            <input type="number" id="Vetor16" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 17:</label>
            <input type="number" id="Vetor17" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 18:</label>
            <input type="number" id="Vetor18" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 19:</label>
            <input type="number" id="Vetor19" name="Vetor1[]" required>
            </div>
            <div class="input-field col s1">
            <label for="Vetor1">Valor 20:</label>
            <input type="number" id="Vetor20" name="Vetor1[]" required>
            </div>
            <br>
            <button class="btn green darken-4" type="submit" style="margin-top: 100px;">Enviar</button>
            <div class="resultado-container">
                <p id="resultado" class="green-text"></p>
            </div>
            <button class="btn waves-effect waves-light green darken-4" id="CarregarListagem" type="submit">Carregar Listagem</button>
            <div class="listagem-container">
                <ul id="listagem" class="green-text"></ul>
            </div>
        </form>
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
