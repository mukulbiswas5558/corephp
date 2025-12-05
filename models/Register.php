<?php 
include_once BASE_PATH . '/db/Database.php';
class Register{

    private $conn = null;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

     public function getAllUserDetails()
    {
        $stmt = $this->conn->prepare("
            SELECT 
                id,
                student_name,
                school_name,
                contact_number,
                class,
                subject,
                amount,
                created_at
            FROM register
            ORDER BY id DESC
        ");

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>