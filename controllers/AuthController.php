<?php
include_once BASE_PATH . '/models/User.php';

class AuthController{
    
    private $userModel;

    public function __construct() {
        $this->userModel = new User();   // Using User model with Database connection
    }
   
    public function register() {
       view('register', []);
        
    }
    public function login() {
       view('login', []);
        
    }

    public function loginSubmit() {


        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // 🔥 Validation
        if (empty($email) || empty($password)) {
            echo json_encode([
                "status" => "error",
                "message" => "Email and password are required."
            ]);
            return;
        }

        // 🔥 Fetch user
        $user = $this->userModel->findByEmail($email);

        if (!$user) {
            echo json_encode([
                "status" => "error",
                "message" => "Invalid email or password."
            ]);
            return;
        }

        // 🔥 Validate password
        if (!password_verify($password, $user['password'])) {
            echo json_encode([
                "status" => "error",
                "message" => "Invalid email or password."
            ]);
            return;
        }

        // 🔥 Start session & Save user
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        unset($user['password']); // never store raw password in session

        $_SESSION['user'] = $user;

         echo json_encode([
            "status" => "success",
            "message" => "Login successful",
            "redirect" => "/admin"
        ]);
        return;
    }

 	public function registerSubmit() {

        // Read POST values
        $studentName    = trim($_POST['student_name'] ?? '');
        $schoolName     = trim($_POST['school_name'] ?? '');
        $contactNumber  = trim($_POST['contact_number'] ?? '');
        $classSelect    = trim($_POST['class'] ?? '');
        $subjectSelect  = trim($_POST['subject'] ?? '');
        $amount         = trim($_POST['amount'] ?? '');
        if ($amount === '' || !is_numeric($amount)) {
            $amount = 0.00;   // default or handle error
        } else {
            $amount = number_format((float)$amount, 2, '.', ''); // convert to DECIMAL(10,2)
        }

        // Basic validation
        if (
            empty($studentName) || 
            empty($schoolName) || 
            empty($contactNumber) || 
            empty($classSelect) || 
            empty($subjectSelect) || 
            empty($amount)
        ) {
            echo json_encode([
                "status" => "error",
                "message" => "All fields are required."
            ]);
            return;
        }

        // Validate mobile
        if (strlen($contactNumber) != 10) {
            echo json_encode([
                "status" => "error",
                "message" => "Please enter valid 10-digit contact number."
            ]);
            return;
        }

        // Save data in DB (example)
        $saved = $this->userModel->createBooking(
            $studentName,
            $schoolName,
            $contactNumber,
            $classSelect,
            $subjectSelect,
            $amount
        );

        if ($saved) {
            echo json_encode([
                "status" => "success",
                "message" => "Booking submitted successfully."
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Something went wrong. Please try again."
            ]);
        }
    }
}




?>