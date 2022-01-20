<!DOCTYPE html>
<html lang="en"> <!-- To  inform the language that the browser does not need to translate -->
<head>
    <meta charset="UTF-8"> <!-- To inform the browser that this page shows accents -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 1 CRUD</title>
</head>
<body>
    <h1>Cadastro de usuario</h1> <!-- Ajuda o google a encontrar a pagin. o titolo do livro. Somente um H1 deve ter por pagina -->

<form action="php/cadastro.php" method="get"> <!-- Usar o GET para teste pois os dados mandados sao visualizados. Com o post esses dados sao escondidos -->
    <label>
        nome
        <input type="text" name="nome">
    </label>
    <label>
        email
        <input type="text" name="email">
    </label>
    <label>
        telefone
        <input type="text" name="telefone">
    </label>

    <input type="submit" value="Cadastro input">
    <button>Cadastro</button>

</form>










</body>
</html>