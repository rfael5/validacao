<?php

    $numero = 198;
    if(isset($numero) && !empty($numero) && is_numeric($numero)){
        echo $numero.' existe, não está vazia, e é do tipo numérico.';
        echo '<br>';
        echo '<hr/>';

    };
    
    $endereco = [ 'nome' => 'Pedro Luiz', 'endereco' => 'Av Taquara', 'telefone' => '(51) 5151-51511' ];
    
    if(isset($endereco) && is_array($endereco) && isset($endereco['endereco'])){
        echo '$endereco está definido e é um array:<br>';
        print_r($endereco);
        echo '<hr/>';        

    }

    if(isset($endereco['endereco']) && !empty($endereco['endereco']) && is_string($endereco['endereco'])){
        echo 'Índice endereço existe, não está vazio e é do tipo string </br>';
        print_r($endereco['endereco']);
        echo '<hr/>'; 

    }

    $nome = 'Romarinho';
    if(isset($nome) && !empty($nome) && is_string($nome)) {
        echo 'A variável $nome existe, não está vazia e é do tipo string:<br>'.$nome;
    }
    
?>