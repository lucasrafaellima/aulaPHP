<?php

    include_once("conectar5.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $produto_valor = filter_input(INPUT_POST, 'produto_valor', FILTER_SANITIZE_STRING);
    $pais = filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $pagamento = filter_input(INPUT_POST, 'pagamento', FILTER_SANITIZE_STRING);
    $data_compra = filter_input(INPUT_POST, 'data_compra', FILTER_SANITIZE_STRING);
    $frete = filter_input(INPUT_POST, 'frete', FILTER_SANITIZE_STRING);
    $data_entrega = filter_input(INPUT_POST, 'data_entrega', FILTER_SANITIZE_STRING);
    $forma_produto = filter_input(INPUT_POST, 'forma_produto', FILTER_SANITIZE_STRING);

    $resultado3 = "INSERT INTO carrinho(nome, cpf, produto_valor, pais, estado, pagamento, data_compra, frete, data_entrega, forma_produto)  VALUES ('$nome', '$cpf', '$produto_valor', '$pais', '$estado', '$pagamento', '$data_compra', '$frete', '$data_entrega', '$forma_produto')";

    mysqli_query($conexão5, $resultado3);
