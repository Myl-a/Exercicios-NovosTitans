<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 9</title>
</head>
<body>  
    <main id="container">
        <form id="night_form">
            <div id="form_header">
                <h1>Imprimir a palavra SOL</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>
            <div id="inputs">
                <div class="input-box">
                    <label for="numVezes">Número de vezes:</label>
                    <div class="input-field">
                        <input type="number" id="numVezes" placeholder="Digite o número de vezes" min="1" required>
                    </div>
                </div>
                <button type="submit" id="imprimir_button">Imprimir</button>
            </div>
        </form>
    </main>
    <script src="script.js"></script>
</body>
</html>
