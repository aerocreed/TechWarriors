<?php
/********************************************
Retorna todos os produtos existentes no BD
********************************************/
function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p
join categorias as c on c.id=p.categoria_id");

    //mysqli_fetch_assoc() criará um array, com os dados de um produto
    while($produto = mysqli_fetch_assoc($resultado)) {
        //echo $produto['nome'] . "</br>";
        array_push($produtos, $produto);//Adiciona um $produto por vez ao array $produtos
    }

    return $produtos;
}

/********************************************
Insere um produto no BD
********************************************/
function insereAvaliacao($conexao, $codigo,$opiniao,$meio_pagamento,$atendimento,$satisfacao) {
    //maneira trabalhosa
    //$query = "insert into produtos (nome, preco) values (" . $nome . "," . $preco . ")";
    //maneira mais simples    
    $query = "insert into avaliacao (codigo,opiniao,meio_pagamento,atendimento,satisfacao) values
('{$codigo}', '{$opiniao}', {$meio_pagamento}, {$atendimento}, {$satisfacao});";
print_r($query);

    return mysqli_query($conexao, $query);
}

/********************************************
Remove um produto no BD
********************************************/
function removeProduto($conexao, $id) {
    $query = "delete from produtos where id={$id}";

    return mysqli_query($conexao, $query);
}