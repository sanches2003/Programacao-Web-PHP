<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lista 2 - Exercício 2</title>
  </head>
  <body class="container mt-3">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <h3>Escreva um programa que leia 7 números diferentes, imprima o menor valor e imprima a posição do 
    menor valor na sequência de entrada.</h3>
    <form action="Exercício 2_resp.php" method="POST">
        <div class="row mt-3">
            <?php 
                for($i=1; $i<=7; $i++){
                ?>    
                
            <div class="col">
                <label for="" class="form-label">Informe o <?= $i?>º valor: </label>
                <input type="number" name="valor<?= $i?>" id="valor<?= $i?>" class="form-control"/>
            </div>
            <?php
                }
                ?>
        </div>
        <button type="submit" class="btn btn-info mt-4">Imprimir</button>
  </body>
  </html>