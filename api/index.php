<?php 
    // Variavel armazena o resultado da API
    $data = [];

    if (isset($_GET['option'])) {
        
        // Verificando se contem o status da API
        switch ($_GET['option']) {
            case 'status':
                $data['status'] = 'SUCCESS';
                $data['data'] = 'API running!'; // Conteúdo da API
                break;
            
            default:
                $data['status'] = 'ERROR';
                break;
        }
    } else {
        // Retornando erro caso a variavel nao contenha nenhum status
        $data['status'] = 'ERROR';
    }

    // Função de retorno da API
    function response($data_response) {
        header("Content-Type:application/json"); // Informando que o padrão de retorno desta página é json, e não html.
        echo json_encode($data_response); // Convertendo a variavel data para json e exibindo
    }

    // Chamando a função de retorno da API
    response($data);
?>