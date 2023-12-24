<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção</title>
    <?php require 'view/components/links.php';?>
</head>
<body>
    <?php require 'view/components/navbar.php' ?>
    <main class="container mt-4">
        <h1>Aqui é a página de inserção de carros!</h1>
        <?php require 'controller/insercao.php';?>
        <form method="post">
            <label for="nomeVeiculo">Nome do Veiculo:</label>
            <input type="text" name="nomeVeiculo" class="form-control" placeholder="">
        </form>
    </main>
    <?php require 'view/components/footer.php' ?>
</body>
</html>