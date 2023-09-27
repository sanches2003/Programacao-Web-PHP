<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 Lista 4</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Encontrar o menor número</h1>
        <form action="Exercício 3_resp.php" method="POST">
            <div class="form-group">
                <label for="numero1">Digite o primeiro número:</label>
                <input type="number" class="form-control" id="numero1" name="numero1" required>
            </div>
            <div class="form-group">
                <label for="numero2">Digite o segundo número:</label>
                <input type="number" class="form-control" id="numero2" name="numero2" required>
            </div>
            <button type="submit" class="btn btn-primary">Encontrar Menor Número</button>
        </form>
    </div>
    <!-- Adicione o link para o Bootstrap JS e jQuery (opcional, necessário para alguns recursos do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>