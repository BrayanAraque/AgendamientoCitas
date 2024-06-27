<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'pet-stylo';
    private $username = 'root';
    private $password = '';
    public $conn;

    // Método obtener conexión a la base de datos
    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo 'Error de conexión: ' . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
