<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style02.css">
</head>
<body>

    <header>
        Meu Site
    </header>

    <div class="container">
        <form action="processa.php" method="POST">
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Email address</label>
                <input type="email" id="form1Example1" class="form-control" name="email" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example2">Password</label>
                <input type="password" id="form1Example2" class="form-control" name="senha" />
            </div>

            <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign in">
        </form>
    </div>

    <footer>
        <img src="assets/img/subzero.png" alt="Sub-Zero" class="subzero-mini">
        Feito por Matheus ☃️
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
