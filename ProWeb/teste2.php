<?php

    include_once("conectar2.php");

    $aluno = filter_input(INPUT_POST, 'nome_aluno', FILTER_SANITIZE_STRING);
    $mae = filter_input(INPUT_POST, 'nome_mae', FILTER_SANITIZE_STRING);
    $pai = filter_input(INPUT_POST, 'nome_pai', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $turno = filter_input(INPUT_POST, 'tempo', FILTER_SANITIZE_STRING);
    $data_nasc = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
    $series = filter_input(INPUT_POST, 'serie', FILTER_SANITIZE_STRING);
    $atividade1 = filter_input(INPUT_POST, 'inf', FILTER_SANITIZE_STRING);
    $atividade2 = filter_input(INPUT_POST, 'mus', FILTER_SANITIZE_STRING);
    $atividade3 = filter_input(INPUT_POST, 'bal', FILTER_SANITIZE_STRING);
    $atividade4 = filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_STRING);
    $atividade5 = filter_input(INPUT_POST, 'jud', FILTER_SANITIZE_STRING);
    $atividade6 = filter_input(INPUT_POST, 'fut', FILTER_SANITIZE_STRING);

    $resultado = "INSERT INTO alunos(aluno, mae, pai, telefone, email, turno, data_nasc, series, atividade1, atividade2, atividade3, atividade4, atividade5, atividade6) VALUES('$aluno', '$mae', '$pai', '$telefone', '$email', '$turno', '$data_nasc', '$series', '$atividade1', '$atividade2', '$atividade3', '$atividade4', '$atividade5', '$atividade6')";

    mysqli_query($conexão2, $resultado);