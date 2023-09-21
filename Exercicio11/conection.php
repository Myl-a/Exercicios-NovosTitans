<?php
$servername = "localhost:8181";
$username = "sam_user";
$password = "root";
$dbname = "tabuada";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $resultados = array();
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        $resultados[] = $resultado;
        $sql = "INSERT INTO tabuada (numero, multiplicador, resultado) VALUES ($numero, $i, $resultado)";
        $conn->query($sql);
    }
}
$sql = "SELECT * FROM tabuada WHERE numero = $numero";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['numero']} x {$row['multiplicador']} = {$row['resultado']}</li>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}
$conn->close();
?>
