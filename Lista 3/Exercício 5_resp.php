<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe números primos</title>
    <!-- Inclua a referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Informe números primos</h1>
        <?php
        // Função para verificar se um número é primo
        function primo($num) {
            if ($num <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        if (isset($_POST['num'])) {
            $numeros = $_POST['num'];
            $primos = [];
            foreach ($numeros as $numero) {
                if (primo($numero)) {
                    $primos[] = $numero;
                }
            }
            if (count($primos) > 0) {
                echo '<p class="alert alert-success">Números primos localizados: ' . implode(', ', $primos) . '</p>';
            } else {
                echo '<p class="alert alert-warning">Não foi localizado nenhum número primo.</p>';
            }
        } else {
            echo '<p class="alert alert-danger">Digite algum valor.</p>';
        }
        ?>
    </div>
    <!-- Inclua a referência ao JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>