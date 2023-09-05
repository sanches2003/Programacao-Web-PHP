<?php 
    include("Cabecalho.php"); //Transmite o conteúdo do arquivo referenciado no arquivo atual.
    require("Cabecalho.php"); //Faz a transmissão como o Include, mas de forma obrigatória, cancelando toda a página caso houver um erro no arquivo referenciado.
    require_once("Cabecalho.php"); //Fará a transmissão do conteúdo apenas uma vez, de forma obrigatória.
    include_once("Cabecalho.php"); //Fará a transmissão do conteúdo apenas uma vez.
?>
    
    <h1>Quem somos?</h1>

<?php 
    include("Rodape.php");
