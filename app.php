<?php 
    define('API_BASE', 'http://localhost/Api-carros/api/');

    function api_request($option) {
        $client = curl_init(API_BASE . $option);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        return json_decode($response, true);
    }

    echo '<pre>';
    print_r (api_request('status'));
    echo '</pre>';
?>