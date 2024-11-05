<!-- AuthMiddleware.php -->
<?php
class AuthMiddleware {
    public function handle() {
        // Check if the user is logged in
        if (!isset($_SESSION['user'])) {
            header('Location: /login.php');
            exit();
        }
    }
}