<?php
class AuthController {
    public function login() {
       view('login', []);
        
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