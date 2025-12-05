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
    public function contact() {
     
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
        view('about', ["banner" => $banner]);
        
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