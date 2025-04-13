<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela de Produtos</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 70%;
        }

        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }

        .Eletrônicos {
            background-color: #cce5ff;
        }

        .Roupas {
            background-color: #d4edda;
        }

        .Alimentos {
            background-color: #fff3cd;
        }
    </style>
</head>
<body>
    <?php
    $produtos = [
        ["nome" => "Notebook", "preco" => 3200, "categoria" => "Eletrônicos"],
        ["nome" => "Camiseta", "preco" => 60, "categoria" => "Roupas"],
        ["nome" => "Biscoito", "preco" => 5.50, "categoria" => "Alimentos"],
        ["nome" => "Mouse Gamer", "preco" => 150, "categoria" => "Eletrônicos"],
        ["nome" => "Calça Jeans", "preco" => 120, "categoria" => "Roupas"]
    ];

    echo "<h2>Tabela de Produtos</h2>";
    echo "<table>";
    echo "<tr><th>Nome</th><th>Preço (R$)</th><th>Categoria</th></tr>";

    foreach ($produtos as $produto) {
        $cat = $produto["categoria"];
        echo "<tr class='$cat'>";
        echo "<td>{$produto['nome']}</td>";
        echo "<td>" . number_format($produto['preco'], 2, ',', '.') . "</td>";
        echo "<td>{$produto['categoria']}</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
