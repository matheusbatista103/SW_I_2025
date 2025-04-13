<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela Gerada</title>
</head>
<body>
    <h2>Tabela Gerada com WHILE</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        $linhas = $_POST["linhas"];
        $colunas = $_POST["colunas"];

        $i = 1;
        while ($i <= $linhas) {
            $cor = ($i % 2 == 0) ? '#fab1a0' : '#ffeaa7';
            echo "<tr style='background-color: $cor'>";
            $j = 1;
            while ($j <= $colunas) {
                echo "<td>L$i C$j</td>";
                $j++;
            }
            echo "</tr>";
            $i++;
        }
        ?>
    </table>
</body>
</html>
