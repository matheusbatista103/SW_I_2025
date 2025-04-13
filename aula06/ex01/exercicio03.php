<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 03</title>
</head>
<body>
    <h2>Tabela de Produtos</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr style="background-color: #dcdde1;">
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
        <?php
        $produtos = [
            ["nome" => "Notebook", "preco" => 3200, "categoria" => "Eletrônicos"],
            ["nome" => "Camiseta", "preco" => 60, "categoria" => "Roupas"],
            ["nome" => "Biscoito", "preco" => 5.50, "categoria" => "Alimentos"],
            ["nome" => "Celular", "preco" => 2500, "categoria" => "Eletrônicos"],
            ["nome" => "Calça Jeans", "preco" => 120, "categoria" => "Roupas"]
        ];

        foreach ($produtos as $p) {
            switch ($p["categoria"]) {
                case "Eletrônicos": $cor = "#dfe6e9"; break;
                case "Roupas": $cor = "#81ecec"; break;
                case "Alimentos": $cor = "#ffeaa7"; break;
                default: $cor = "#ffffff";
            }

            echo "<tr style='background-color: $cor'>";
            echo "<td>{$p['nome']}</td>";
            echo "<td>R$ {$p['preco']}</td>";
            echo "<td>{$p['categoria']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
