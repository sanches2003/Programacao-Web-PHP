<?php
    echo "Função de interação com datas:";
    $data = date("d/m/Y");
    echo "Dia de hoje: $data";
    $dia = 22;
    $mes = 3;
    $ano = 2003;
    if (checkdate($mes, $dia, $ano)){
        echo " - A data existe!";
    }

    echo "<br><br> Função de interação com palavras e caracteres:";
    $palavra = "Toledo Prudente";
    echo "<br>A palavra tem ".strlen($palavra)." caracteres."; //strlen = soma de caracteres.

    $primeira_palavra = substr($palavra, 0, 6); // substr = substring - selecionando os caracteres de acordo com sua posição.
    $segunda_palavra = substr($palavra, -8);  
    echo "<br> Primeira: $primeira_palavra.";
    echo "<br> Segunda: $segunda_palavra.";

    echo "<br><br> Interação com organização de nomes usando SORT:";
    $nomes = ["Júlia", "André", "Felipe", "Lucas", "Bruno"];
    sort($nomes);   //sort = organiza os itens do array de forma alfabética crescente.
    var_dump($nomes); // var_dump = exibe itens do array de forma direta.

    echo "<br><br> Formatamos um valor para o formato monetário americano";

    $valor = 10569.123456;
    $valor = number_format($valor, 2, ",", ".");
    echo "Valor formatado: $valor";


    echo "<br><br> Função de soma:";
    function soma($valor1, $valor2){
        $resultado = $valor1 + $valor2;
        //echo "Resultado: $resultado"; //Podemos exibir o resultado assim.
        return $resultado;              // Ou assim.
    }
    echo "<br> Vamos chamar a função de soma: ".(soma(1,2)); // Colocamos os valores em cima de 1 e 2 agora na exibição da função.
    ?>
    <br>
    <a href="teste.php" target="_blank">Clique aqui</a>