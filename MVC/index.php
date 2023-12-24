<?php
    define('URL', 'http://localhost/github/APICarros'); // Variavel constante, você pode chamar a URL em qualquer arquivo!

    $url = explode("/", $_GET['url'] ?? 'index');
    $linkPage = "view/pages/{$url[0]}.php";

    if (is_file($linkPage)) {
        include ($linkPage);
        exit();
    } else {
            $linkPage = "view/pages/404.php";
            include ($linkPage);
            exit();
        } 
    
?>