<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];

            $sql = "INSERT INTO  usuarios (nome,endereco,telefone,cidade,estado) VALUES ('{$nome}','{$endereco}', '{$telefone}','{$cidade}','{$estado}')";
            
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];

        $sql = "UPDATE usuarios SET nome='{$nome}', endereco='{$endereco}', telefone='{$telefone}', cidade='{$cidade}', estado='{$estado}' WHERE id=" . $_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;
    }