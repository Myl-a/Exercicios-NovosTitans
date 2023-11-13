<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Exercicio 19</title>
</head>
<body> 
    <div class="container">
        <div class="card">
            <form id="formulario">
                <h5 class="center-align white-text">Digite números inteiros para a matriz 5x5</h5>
                <div class="row">
                    <?php
                        for ($i = 0; $i < 5; $i++) {
                            echo '<div class="input-field col s2 m1">';
                            echo '<input type="number" id="matrix_' . $i . '_0" name="matrix[' . $i . '][0]" required>';
                            echo '<label for="matrix_' . $i . '_0" class="white-text">Elemento ' . ($i + 1) . ', coluna 1</label>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <button class="btn waves-effect waves-light" type="button" id="enviarBtn">Enviar</button> 
            </form>
        </div>
        <div class="card mt-4">
            <div class="resultado-container">
                <p id="resultado"></p>
            </div>
            <button id="carregarListagemBtn" class="btn waves-effect waves-light">Carregar Listagem</button>
            <div class="listagem-container mt-4">
                <ul id="listagem" class="collection"></ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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

            $("#carregarListagemBtn").click(function() {
                carregarListagemDados();
            });
        });
    </script>
</body>
</html>
