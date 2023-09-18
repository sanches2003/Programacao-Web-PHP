<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
    <body class="container">
        <?php
        $texto = fopen("arquivo_cadastro.txt", "w") or die("Erro!");
            fwrite($texto, $_POST["nome"]."\n\n");
            fwrite($texto, $_POST["cpf"]."\n\n");
            fwrite($texto, $_POST["dt_nascimento"]."\n\n");     
            fwrite($texto, $_POST["sexo"]."\n\n");
            fwrite($texto, $_POST["sexo"]."\n\n");
            fwrite($texto, $_POST["estado_civil"]."\n\n");
            fwrite($texto, $_POST["renda"]."\n\n");
            fwrite($texto, $_POST["logradouro"]."\n\n");
            fwrite($texto, $_POST["numero"]."\n\n");
            fwrite($texto, $_POST["complemento"]."\n\n");
            fwrite($texto, $_POST["estado"]."\n\n");
            fwrite($texto, $_POST["cidade"]."\n\n");
        fclose($texto);
        readfile("arquivo_cadastro.txt");
        ?>



        <?php 

        $target_file = basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        //Checar se o arquivo já existe:
        if (file_exists($target_file)){
            echo "Desculpe, esse arquivo já existe.";
            die();
        }
        //Permitir certos tipos de formato:
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType !="gif"){
            "Desculpe, apenas arquivos em JPG, JPEG, PNG e GIF são permitidos.";
            die();
        }

        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
            echo "O arquivo" .htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))."foi carregado.";
        } else {
            echo "Desculpe, não foi possível carregar seu arquivo.";
        }
        ?>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>