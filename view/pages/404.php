<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 ERROR</title>
    <?php require 'view/components/links.php';?>
</head>
<body>
    <?php require 'view/components/navbar.php' ;?>
        <main class="container d-flex flex-column align-items-center fs-4 mt-5">
            Página não encontrada!
            Volte para a <a href="<?= URL ?>">Página principal!</a>

            <img src="https://i.pinimg.com/originals/57/61/5b/57615b8c0092a66c1d4058b1692955cc.gif" alt="Gif duck" width="250">
        </main>
    <?php require 'view/components/footer.php'; ?>
</body>
</html>