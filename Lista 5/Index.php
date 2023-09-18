<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container mt-3"> 
    <h1>Preencha com suas informações pessoais</h1>
    <form action="Informacoes_resp.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome completo">
        </div>
        <div class="form-group mt-2">
            <div class="row">
                <div class="col-4">
                    <label for="exampleInputEmail1">CPF</label>
                    <input name="cpf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="000.000.000-00">
                    </div>
                    <div class="col-4">
                    <label for="exampleInputEmail1">Data de Nascimento</label>
                    <input name="dt_nascimento"  class="form-control"  placeholder="__/__/__">
                    </div>
                    <div class="col">
                    <label for="exampleInputEmail1">Sexo</label>
                    <div>
                    <div class="form-check form-check-inline mt-2">
                    <input name="sexo" value="1" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1">
                    <label  class="form-check-label" for="inlineRadio1">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input name="sexo" value="2"class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2">
                    <label  class="form-check-label" for="inlineRadio2">Feminino</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-6">
                <label for="exampleInputEmail">Estado Civil</label>
                <select name="estado_civil" class="custom-select" id="inlineFormCustomSelect">
                    <option selected>Solteiro(a)</option>
                    <option value="1">Casado</option>
                    <option value="2">Divorciado</option>
                </select>
                </div>
                <div class="col-6">
                <label for="exampleInputEmail1">Renda Mensal</label>
                <input name="renda"  class="form-control" aria-describedby="emailHelp" placeholder="0.00">
                </div>
            </div>
        <h3 class="mt-4">Endereço</h3>
        <div class="form-group mt-2">
            <div class="row">
                <div class="col-6">
                    <label for="exampleInputEmail1">Logradouro</label>
                    <input name="logradouro" class="form-control" aria-describedby="emailHelp" placeholder="Logradouro">
                    </div>
                    <div class="col-3">
                    <label for="exampleInputEmail1">Número</label>
                    <input name="numero"  class="form-control"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nº">
                    </div>
                    <div class="col-3">
                    <label for="exampleInputEmail1">Complemento</label>
                    <input name="complemento" class="form-control"  aria-describedby="emailHelp" placeholder="Complemento">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <label for="exampleInputEmail">Estado</label>
                <select name="estado" class="custom-select" id="inlineFormCustomSelect">
                    <option selected>Acre</option>
                    <option value="1">São Paulo</option>
                    <option value="2">Santa Catarina</option>
                </select>
                </div>
                <div class="col-6">
                <label for="exampleInputEmail1">Cidade</label>
                <input name="cidade"  class="form-control"  aria-describedby="emailHelp" placeholder="Cidade">
                </div>
            </div>
            <label class="mt-3">Foto de perfil</label>
            <div class="custom-file">
            <input name="fileToUpload" type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Escolher arquivo</label>
</div>
            <button type="submit" class="btn btn-dark mt-4">Cadastrar</button>
    </form>
    </body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</html>