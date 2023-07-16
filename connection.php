<?php
class Connection
{
    private $host ='localhost';
    private $dbname='attendance';
    private $username='root';
    private $password='dora';
    public $pdo=NULL;
    public function startConnection()
    {
        try{
            $this->pdo=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);
        }
        catch(PDOException $e)
        {
            echo $e;
        }
    }
}