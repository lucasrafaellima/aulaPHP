<?php

    include_once("conectar3.php");

    $linha = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
    $marca = filter_input(INPUT_POST, 'marca_produto', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $fornecedor = filter_input(INPUT_POST, 'fornecedor_produto', FILTER_SANITIZE_STRING);
    $estoque = filter_input(INPUT_POST, 'estoque', FILTER_SANITIZE_STRING);
    $custo_uni = filter_input(INPUT_POST, 'custo', FILTER_SANITIZE_STRING);
    $preco_venda = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $data_estoque = filter_input(INPUT_POST, 'data_estocagem', FILTER_SANITIZE_STRING);

    $resultado1 = "INSERT INTO produtos(linha, marca, descricao, fornecedor, estoque, custo_uni, preco_venda, telefone, cpf, data_estoque) VALUES ('$linha', '$marca', '$descricao', '$fornecedor', '$estoque', '$custo_uni', '$preco_venda', '$telefone', '$cpf', '$data_estoque')";

    mysqli_query($conexão3, $resultado1);