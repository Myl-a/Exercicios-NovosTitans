<?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero']; 

        if ($numero === '') {
            echo '<p>Erro: Nenhum número inserido!</p>';
        } else {
            echo '<table>';
            echo '<tr>';
            echo '<th> Tabuada do número: ' . $numero . '</th>';
            echo '</tr>';

            for ($i = 1; $i <= 10; $i++) {
                echo '<tr>';
                echo '<td>' . $numero . ' X ' . $i . ' = ' . ($numero * $i) . '</td>';
                echo '</tr>';
            }

            echo '</table>';
            include("conexao.php");
        }
    } else {
        $numero = '';
    }
?>