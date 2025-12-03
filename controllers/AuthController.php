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

        // 🔥 Success response
        echo json_encode([
            "status" => "success",
            "message" => "Login successful",
            "redirect" => "/dashboard"
        ]);
        return;
    }

    public function registerSubmit() {

        // Read POST values
        $name      = trim($_POST['name'] ?? '');
        $email     = trim($_POST['email'] ?? '');
        $mobile    = trim($_POST['mobile'] ?? '');
        $password  = trim($_POST['password'] ?? '');
        $confirm   = trim($_POST['confirm_password'] ?? '');
        $state     = trim($_POST['state'] ?? '');

        // Basic validation
        if (empty($name) || empty($email) || empty($mobile) || empty($password) || empty($confirm) || empty($state)) {
            echo json_encode([
                "status" => "error",
                "message" => "All fields are required."
            ]);
            return;
        }

        if ($password !== $confirm) {
            echo json_encode([
                "status" => "error",
                "message" => "Passwords do not match."
            ]);
            return;
        }

        // Email exists check
        $existingUser = $this->userModel->findByEmail($email);
        if ($existingUser) {
            echo json_encode([
                "status" => "error",
                "message" => "Email already exists."
            ]);
            return;
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Save user
        $saved = $this->userModel->create($name, $email, $mobile, $hashedPassword, $state);

        if ($saved) {
            echo json_encode([
                "status" => "success",
                "message" => "Registration successful. Please login."
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