<?php

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]); //md5 é utilizado para esconder senha
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')"; //aqui é onde insere no banco

            $res = $conn->query($sql); //insere o resultado da sql

            if ($res == true) {
                print "<script>alert('Cadastro efetuado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>"; //redireciona para alguma pagina
            } else {
                print "<script>alert('Não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            //code
            break;
        case 'excluir':
            //code
            break;
    }