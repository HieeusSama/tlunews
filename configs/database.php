<?php
class Database {
    private $host = 'localhost';
    private $db = 'tintuc';
    private $user = 'root';
    private $pass = '';
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Kết nối thành công !";
        } catch (PDOException $e) {
            echo "Kết nối thất bại: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>
