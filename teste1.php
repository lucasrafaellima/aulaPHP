<?php

        include_once("conectar.php");

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
        $data_nasc = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

        $result = "INSERT INTO usuarios(nome, email, senha, telefone, cpf, genero, data_nasc, cidade, estado, endereco) VALUES('$nome', '$email', '$senha', '$telefone', '$cpf', '$genero', '$data_nasc', '$cidade', '$estado', '$endereco')";

        mysqli_query($conexão, $result);