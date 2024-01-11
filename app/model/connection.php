<?php 

namespace app\model;

use PDO;
use PDOException;
use Exception;

class connection 
{
    private $pdo;
    public function __construct($dbname, $dbhost, $dbuser, $dbpass)
    {
        try 
        {
            $this -> pdo = New PDO ("mysql:dbname=" . $dbname . ";host=" . $dbhost, $dbuser, $dbpass);
        } 
        catch (PDOException $th) 
        {
            return "Connection error on PDO: " . $th -> getMessage();
        } 
        catch (Exception $th) 
        {
            return "Error did not go beyond the connection: " . $th -> getMessage();
        } 
        finally 
        {
            exit();
        }
    }

    public function detaultQuery()
    {
        $detaultQuery = $this -> pdo -> prepare('SELECT * FROM marca');
        $detaultQuery -> execute();
        
        return $detaultQuery -> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>