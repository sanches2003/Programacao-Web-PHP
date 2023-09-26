<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <!-- Inclua a referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Digite números inteiros</h1>
        <form action="Exercício 5_resp.php" method="post">
            <div class="row">
                <?php
                for ($i = 1; $i <= 20; $i++) {
                    echo '<div class="col-md-3 mb-3">
                            <input type="number" class="form-control" name="num[]" placeholder="Número ' . $i . '" required>
                          </div>';
                }
                ?>
            </div>
            <button type="submit" class="btn btn-info">Submeter</button>
        </form>
    </div>
    <!-- Inclua a referência ao JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>