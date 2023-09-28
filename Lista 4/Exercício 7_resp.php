<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 Lista 4 - Resposta</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Conversão</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hora = $_POST["hora"];
            $hora_12h = date("g:i A", strtotime($hora));

            echo '<p>Notação de 24 horas: ' . $hora . '</p>';
            echo '<p>Notação de 12 horas: ' . $hora_12h . '</p>';
        }
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>