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

   public function createBooking($studentName, $schoolName, $contactNumber, $classSelect, $subjectSelect, $amount)
    {
        $stmt = $this->conn->prepare("
            INSERT INTO register (student_name, school_name, contact_number, class, subject, amount)
            VALUES (:student_name, :school_name, :contact_number, :class, :subject, :amount)
        ");

        return $stmt->execute([
            ':student_name'   => $studentName,
            ':school_name'    => $schoolName,
            ':contact_number' => $contactNumber,
            ':class'          => $classSelect,
            ':subject'        => $subjectSelect,
            ':amount'         => $amount
        ]);
    }
}
?>