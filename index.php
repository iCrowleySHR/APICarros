<?php 

require 'output.php';

use api\output\output;

$output = new output();

$data = [];
$data['status'] = 'ERROR';
$url = explode('/', $_GET['url']);

if (isset($url)) {
    switch ($url[0]) {
        case 'status':
            $data = $output -> api_status($data);
            break;
        case 'carros':
            $data = $output -> api_carros($data);
            break;
    }
}

$output -> response($data);

?>