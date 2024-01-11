<?php 

namespace api\output;

use app\model\connection;

class output 
{
    private $connection; 

    public function api_status(&$data) 
    {
        $this -> define_response($data, "Funcionando!");
    }
    
    public function api_carros(&$data) 
    {
        $config = parse_ini_file('app/model/config.ini');
        $this -> connection = new connection($config['dbname'], $config['dbhost'],$config['dbuser'], $config['dbpass']);
        $defaultQuery = $this -> connection -> detaultQuery();
        return var_dump($defaultQuery);
        
        $this -> define_response($data, $defaultQuery);
    }

    public function define_response(&$data, $value) 
    {
        $data['status'] = 'SUCCESS';
        $data['data'] = $value; // Conteúdo da API
    }   

    public function response($data_response) 
    {
        header('Acess-Control-Allow-Origin: *');
        header("Content-Type:application/json");
        echo json_encode($data_response);
    } 
}

?>