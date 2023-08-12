<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //abrir bloco de código em PHP

    ?>
    Olá, hoje é dia <?php echo date("d"); ?> de Agosto de <?= date("Y")?> .
    Horário <?= date("H:i")?>. 
    <br>
    <p>Fazendo com Variável:</p>
    <?php
    $hora = date("H:i");
    echo "Hora atual: $hora";
    ?>
    <form method="POST" action="bemvindo.php">
        <div class="col">
            <div class="row">
                <label for="nome" class="form-label">Informe seu nome:
                </label>
                <input class="form-control" id="nome" name="nome" type="text"/>
                <label for="nome" class="form-label">Informe dois números para somar:
                </label>
                <input class="form-control" id="valor1" name="valor1" type="text"/>
                <input class="form-control" id="valor2" name="valor2" type="text"/>
                <button class="btn btn-primary" type="submit">
                    Enviar
                </button>
            </div>
        </div>
    </form>
</body>
</html>