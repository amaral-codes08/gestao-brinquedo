<?php

require_once "../infra/conecao.php";

$id = $_POST["id"];

$dados = [
    "nome" => $_POST["nome"],
    "categoria" => $_POST["categoria"],
    "faixa_etaria" => $_POST["faixa_etaria"],
    "preco" => $_POST["preco"],
    "quantidade" => $_POST["quantidade"]
];

$comando = "UPDATE brinquedos SET
    nome = ?,
    categoria = ?,
    faixa_etaria = ?,
    preco = ?,
    quantidade = ?
    WHERE id = ?";

$consulta = $conecao->prepare($comando);

$consulta->bind_param(
    "sssdii",
    $dados["nome"],
    $dados["categoria"],
    $dados["faixa_etaria"],
    $dados["preco"],
    $dados["quantidade"],
    $id
);

$consulta->execute();

$consulta->close();

header("Location: ../index.php");

exit;