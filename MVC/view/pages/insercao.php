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
            <input type="text" name="nomeVeiculo" class="form-control border border-black" placeholder="">

            <select name="" id="" class="form-control mt-4 border border-black">
                <option value="1">sdasdas</option>
                <option value="1">dasdasdas</option>
                <option value="1">dasdasd</option>
                <option value="1">asdas</option>
            </select>
        </form>
    </main>
    <?php require 'view/components/footer.php' ?>
</body>
</html>