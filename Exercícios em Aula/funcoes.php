<?php
    $data = date("d/m/Y");
    echo "Dia de hoje: $data";
    $dia = 22;
    $mes = 3;
    $ano = 2003;
    if (checkdate($mes, $dia, $ano)){
        echo " - A data existe!";
    }
    $palavra = "Toledo Prudente";
    echo "A palavra tem".strlen($palavra)." caracteres";
    ?>