<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localizador de mês</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Localizar mês</h1>      
        <?php     
        include('Exercício 4_resp.php');
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){           
            $numero = $_POST['numero'];
            if ($numero >= 1 && $numero <= 12) {              
                echo '<div class="alert alert-info mt-3">O número desse mês é: ' . $numero . '. Mês: ' . $meses[$numero] . '</div>';
            } else {               
                echo '<div class="alert alert-danger mt-3">Número fora do intervalo válido (1 a 12).</div>';
            }
        }
        ?>       
        <form method="POST" class="mt-3">
            <div class="form-group">
                <label for="numero">Escolha um mês e digite seu número:</label>
                <input type="number" class="form-control" id="numero" name="numero" min="1" max="12" required>
            </div>
            <button type="submit" class="btn btn-primary">Localizar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>