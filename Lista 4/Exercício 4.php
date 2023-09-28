<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Lista 4</title>
    <!-- Adicione o link para o Bootstrap CSS (min version) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Soma de divisões</h1>
        <form action="Exercício 4_resp.php" method="POST">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <div class="form-group">
                    <label for="numero<?= $i ?>">Número <?= $i ?>:</label>
                    <input type="number" class="form-control" id="numero<?= $i ?>" name="numeros[]" required>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-info mt-3">Submeter</button>
        </form>
    </div>
    <!-- Adicione o link para o Bootstrap JS (min version) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>