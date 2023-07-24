<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div>
        <h1 id="titulo">Cadastro</h1>
        <p id="subtitulo">Complete suas informações</p>
        <br>
    </div>
    <form method="post" action="/Exercicio3/index.php" id="formulario">
        <div class="campo">
            <label for="nome"><strong>Nome</strong></label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="campo">
            <label for="idade"><strong>Idade</strong></label>
            <input type="number" name="idade" id="idade" required>
        </div>
        <div class="genero">
            <label><strong>Informe aqui o gênero com o qual você se identifica</strong></label><br>
            <label>
                <input type="radio" name="genero" value="feminino">Feminino
            </label><br>
            <label>
                <input type="radio" name="genero" value="masculino">Masculino
            </label><br>
            <label>
                <input type="radio" name="genero" value="PrefiroNaoInformar">Prefiro Não Informar
            </label>
        </div><br>
        <button class="botao" type="submit">Concluído</button>            
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $genero = $_POST["genero"];
            $idade = $_POST["idade"];

            if (strtolower($genero) === 'feminino' && $idade < 25) {
                $mensagem = "$nome ACEITA";
            } else {
                $mensagem = "$nome NÃO ACEITA";
            }
        
            echo "<script>alert('{$mensagem}');</script>";
        } else {
            echo "Formulário não enviado.";
        }
?>
    </body>

</html>
