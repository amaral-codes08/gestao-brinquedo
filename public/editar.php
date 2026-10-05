<?php

require_once "../infra/conecao.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $comando = "SELECT * FROM brinquedos WHERE id = ?";

    $consulta = $conecao->prepare($comando);
    $consulta->bind_param("i", $id);
    $consulta->execute();

    $resultado = $consulta->get_result();
    $brinquedo = $resultado->fetch_assoc();

    if (!$brinquedo) {
        die("Brinquedo não encontrado.");
    }
} else {
    die("ID do brinquedo não informado.");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Brinquedo</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <main>

        <h1>Editar Brinquedo</h1>

        <form method="POST" action="atualizar.php">

            <input type="hidden" name="id" value="<?= $brinquedo['id'] ?>">

            <div>
                <label for="nome">Nome:</label>
                <input
                    id="nome"
                    type="text"
                    name="nome"
                    value="<?= htmlspecialchars($brinquedo['nome']) ?>"
                    required
                >
            </div>

            <div>
                <label for="categoria">Categoria:</label>
                <input
                    id="categoria"
                    type="text"
                    name="categoria"
                    value="<?= htmlspecialchars($brinquedo['categoria']) ?>"
                    required
                >
            </div>

            <div>
                <label for="faixa_etaria">Faixa etária:</label>
                <input
                    id="faixa_etaria"
                    type="text"
                    name="faixa_etaria"
                    value="<?= htmlspecialchars($brinquedo['faixa_etaria']) ?>"
                    required
                >
            </div>

            <div>
                <label for="preco">Preço:</label>
                <input
                    id="preco"
                    type="number"
                    name="preco"
                    step="0.01"
                    value="<?= $brinquedo['preco'] ?>"
                    required
                >
            </div>

            <div>
                <label for="quantidade">Quantidade em estoque:</label>
                <input
                    id="quantidade"
                    type="number"
                    name="quantidade"
                    value="<?= $brinquedo['quantidade'] ?>"
                    required
                >
            </div>

            <button type="submit">Salvar alterações</button>

        </form>

        <a href="../index.php" class="voltar">Voltar</a>

    </main>

</body>

</html>