<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Exercicio 20</title>
</head>
<body class="blue lighten-5"> 
    <div class="container">
        <form id="formulario" action="process.php" method="post">
            <h5>Digite números inteiros para a matriz</h5>
            <div class="row">
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_0_0" name="matrix[0][0]" required>
                </div>                
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_0_1" name="matrix[0][1]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_0_2" name="matrix[0][2]" required>
                </div>      
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_0_3" name="matrix[0][3]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_0_4" name="matrix[0][4]" required>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_0" name="matrix[1][0]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_1" name="matrix[1][1]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_2" name="matrix[1][2]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_3" name="matrix[1][3]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_4" name="matrix[1][4]" required>
                </div>
            </div>
            <div class="row custom-padding">
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_0" name="matrix[2][0]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_1" name="matrix[2][1]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_2" name="matrix[2][2]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_3" name="matrix[2][3]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_4" name="matrix[2][4]" required>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_0" name="matrix[3][0]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_1" name="matrix[3][1]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_2" name="matrix[3][2]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_3" name="matrix[3][3]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_4" name="matrix[3][4]" required>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_0" name="matrix[4][0]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_1" name="matrix[4][1]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_2" name="matrix[4][2]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_3" name="matrix[4][3]" required>
                </div>
                <div class="input-field col s2 m1">
                    <input type="number" id="matrix_1_4" name="matrix[4][4]" required>
                </div>
            </div>
            <button class="btn waves-effect blue waves-light" type="submit">Enviar</button> 
        </form>
        <div class="resultado-container">
            <p id="resultado"></p>
        </div>
        <button id="CarregarListagem" class="btn waves-effect blue waves-light">Carregar Listagem</button>
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