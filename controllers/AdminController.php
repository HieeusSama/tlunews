<?php
require_once './models/User.php';

class AdminController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userModel = new User($this->db);

            $user = $userModel->login($username, $password);

            if ($user && $user['role'] == 1) {
                $_SESSION['admin'] = $user;
                header("Location: /admin/dashboard");
                exit();
            } else {
                $error = "Invalid username, password, or insufficient privileges.";
                require_once './views/admin/login.php';
            }
        } else {
            require_once './views/admin/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userModel = new User($this->db);

            if ($userModel->register($username, $password)) {
                header("Location: /admin/login");
                exit();
            } else {
                $error = "Failed to register.";
                require_once './views/admin/register.php';
            }
        } else {
            require_once './views/admin/register.php';
        }
    }

    public function dashboard() {
        if (!isset($_SESSION['admin'])) {
            header("Location: /admin/login");
            exit();
        }
        require_once './views/admin/dashboard.php';
    }

    public function logout() {
        session_destroy();
        header("Location: /admin/login");
        exit();
    }
}
?>
