<?php

$classe = $_GET['classe'];
$metodo = $_GET['acao'];

$classe .= 'Controller';

require_once 'controllers/'.$classe.'.php';

$objeto = new $classe();

$objeto->$metodo();
?>
<!--
/*
    -----------------------------------------------------------------------------------------------------------------------
    Atividade - Ponto Extra

    Valendo 1 ponto na média, complemente o código da Loja Virtual que iniciamos em sala, definindo o CRUD 
    dos elementos:

    CREATE | READ | UPDATE | DELETE
    - Produto (listando as possíveis categorias a serem selecionadas)
    - Categorias
    - Cliente
    - Funcionário

    Além disso, crie uma view estoque.php que liste os produtos cadastrados.
    -----------------------------------------------------------------------------------------------------------------------
*/

