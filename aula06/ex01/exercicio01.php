<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 01</title>
</head>
<body>
    <h2>Tabela</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 8; $i++) {
            $cor = ($i % 2 == 0) ? '#dfe6e9' : '#b2bec3';
            echo "<tr style='background-color: $cor'>";
            for ($j = 1; $j <= 4; $j++) {
                echo "<td>L$i C$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
