<?php 

    include_once("conectar4.php");

    $codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone  = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $pais = filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_STRING);
    $fantasia = filter_input(INPUT_POST, 'fantasia', FILTER_SANITIZE_STRING);
    $data_fornec = filter_input(INPUT_POST, 'data_fornecedor', FILTER_SANITIZE_STRING);
    $observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_STRING);

    $resultado2 = "INSERT INTO fornecedores(codigo, nome, cnpj, email, telefone, cidade, pais, fantasia, data_fornec, observacao) VALUES('$codigo', '$nome', '$cnpj', '$email', '$telefone', '$cidade', '$pais', '$fantasia', '$data_fornec', '$observacao')";

    mysqli_query($conexão4, $resultado2);