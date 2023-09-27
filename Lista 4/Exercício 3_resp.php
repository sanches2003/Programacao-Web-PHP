<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 3 resposta</title>
    <!-- Adicione o link para o Bootstrap CSS (min version) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Menor número localizado</h1>
        <?php
        if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            $menorNumero = min($numero1, $numero2);

            echo "<p>O menor número entre $numero1 e $numero2 é: $menorNumero</p>";
        } else {
            echo "<p>Por favor, forneça dois números.</p>";
        }
        ?>
    </div>
    <!-- Adicione o link para o Bootstrap JS (min version) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>