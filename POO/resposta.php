<?php

    include("Pessoa.php");
    $obj =  new Pessoa($_POST['nome'], $_POST['endereco'], $_POST['idade']);
    #$obj->setNome($_POST['nome']);
    #$obj->setEndereco($_POST['endereco']);
    #$obj->setIdade($_POST['idade']);

    echo "Nome: {$obj->getNome()}<br/>";
    echo "Endereco: {$obj->getEndereco()}<br/>";
    echo "Idade: {$obj->getIdade()}<br/>";

?>