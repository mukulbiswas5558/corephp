<?php
include_once BASE_PATH . '/models/Register.php';
include_once BASE_PATH . '/middleware/AuthMiddleware.php';


class AdminController{
    
    private $userModel;

    public function __construct() {


           // Require user login
        AuthMiddleware::check();

        // Require admin role
        AuthMiddleware::isAdmin();

        $this->userModel = new Register();   // Using User model with Database connection
    }
   
    
    public function registerUserDetails() {

        // 🔥 Fetch user
          $userDetails = $this->userModel->getAllUserDetails();
      

        view('registerUserDetails', [
            "userDetails" => $userDetails
        ]);
       
    }
    
    public function logout() { 
        // Start session if not already started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Clear all session data
        $_SESSION = [];

        // Destroy the session
        session_destroy();

        // Redirect to login page
        header("Location: " . BASE_URL . "/login");
        exit;
    }

}


?>