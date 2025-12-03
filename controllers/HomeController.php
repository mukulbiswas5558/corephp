<?php
class HomeController{
    public function home() {
        $banner = [
            [
                "image" => BASE_URL . '/assets/gcetts Data structure-horizontal.png', 
                "title" => "Banner 1"
            ],
            [
                "image" => BASE_URL . '/assets/GS gcetts-horizontal.png', 
                "title" => "Banner 2"
            ],
            [
                "image" => BASE_URL . '/assets/gcetts courses-horizontal.png', 
                "title" => "Banner 3"
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