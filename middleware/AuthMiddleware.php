<?php

class AuthMiddleware
{
    public static function check()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['user'])) {
            // User not logged in
            header("Location: " . BASE_URL . "/login");
            exit;
        }
    }

    public static function isAdmin()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/login");
            exit;
        }

        // Role check
        if (!isset($_SESSION['user']['role']) || $_SESSION['user']['role'] !== 'admin') {
            header("Location: " . BASE_URL . "/login");
            exit;
        }
    }
}
