<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <title>Cadastrar Brinquedo DO FLAMENGO</title>
    <title>BRINQUEDOS DO FLAMENGO</title>
</head>

<body>



    <main>
        <h1>Cadastrar Brinquedo</h1>

        <form method="POST" action="salvar.php">

            <div>
                <label for="nome">Nome:</label>
                <input id="nome" type="text" name="nome" required>
            </div>

            <div>
                <label for="categoria">Categoria:</label>
                <input id="categoria" type="text" name="categoria" required>
            </div>

            <div>
                <label for="faixa_etaria">Faixa etária:</label>
                <input id="faixa_etaria" type="text" name="faixa_etaria"
                       placeholder="Ex: 5 a 8 anos" required>
            </div>

            <div>
                <label for="preco">Preço:</label>
                <input id="preco" type="number" name="preco"
                       step="0.01" min="0" required>
            </div>

            <div>
                <label for="quantidade">Quantidade em estoque:</label>
                <input id="quantidade" type="number" name="quantidade"
                       min="0" required>
            </div>

            <button type="submit">Cadastrar</button>

        </form>

        <a href="../index.php">Voltar</a>
    </main>

</body>
</html>