<?php 
include_once BASE_PATH . '/db/Database.php';
class User{

    private $conn = null;
    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function findByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($email, $password) {
        $stmt = $this->conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        return $stmt->execute([
            ':email' => $email,
            ':password' => $password
        ]);
    }
}
?>