<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title> Exercicio 13 </title>
</head>
<body class="blue lighten-4">
	<form action="process.php" method="post">
        <div class="section container">
            <div class="row card-panel">
                <div class="input-field col s12">
                    <h4> Contador de Números entre 100 e 200</h4>
                    <input type="text" name="number" id="number" placeholder="Digite aqui" class="validate">
                    <button class="btn waves-effect pink waves-light" type="submit" name="action">Contar</button>
                    <button id="CarregarListagem" class="btn waves-effect pink waves-light" type="submit" name="action">Carregar Listagem</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>