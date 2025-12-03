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

    public function create($name, $email, $mobile, $password, $state) {
        $stmt = $this->conn->prepare("
            INSERT INTO users (name, email, mobile, password, state) 
            VALUES (:name, :email, :mobile, :password, :state)
        ");
        
        return $stmt->execute([
            ':name'     => $name,
            ':email'    => $email,
            ':mobile'   => $mobile,
            ':password' => $password,
            ':state'    => $state
        ]);
    }
}
?>