<?php
class HomeController{
    public function home() {
        $banner = [
            [
                "image" => "https://s3.ap-south-1.amazonaws.com/develop.chesta.in/banners/8579f06b-2a1d-41c6-8544-3bed70091d1a.png", 
                "title" => "Banner 1"
            ],
            [
                "image" => "https://s3.ap-south-1.amazonaws.com/develop.chesta.in/banners/4c3b1416-fcf0-460e-9019-1b34d0eb42d9.png", 
                "title" => "Banner 2"
            ],
            [
                "image" => "https://s3.ap-south-1.amazonaws.com/develop.chesta.in/banners/e0cb980c-300a-4162-995a-511b17eb2080.png", 
                "title" => "Banner 3"
            ],
            [
                "image" => "https://s3.ap-south-1.amazonaws.com/develop.chesta.in/banners/11b329a0-44c2-4a92-919c-6bd347fd6512.png", 
                "title" => "Banner 4"
            ]
            
        ];
       view('home', ["banner" => $banner]);
        
    }
    public function about() {
       view('about', []);
        
    }
    public function courses() {
       view('courses', []);
        
    }
    public function syllabus() {
       view('syllabus', []);
        
    }
    public function careers() {
       view('careers', []);
        
    }
   

    public function loginSubmit() {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        echo $password;
        die;

        $pdo = connect();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location: /dashboard');
        } else {
            echo "Invalid credentials";
        }
    }

    public function register() {
        view('register');
    }

    public function registerSubmit() {
        $email = $_POST['email'] ?? '';
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $pdo = connect();
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        try {
            $stmt->execute([$email, $password]);
            header('Location: /login');
        } catch (PDOException $e) {
            echo "Registration failed: " . $e->getMessage();
        }
    }
}




?>