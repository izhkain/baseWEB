<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Демо-версия для примера
    if ($email === 'demo@example.com' && $password === 'demo123') {
        $_SESSION['user_id'] = 1;
        $_SESSION['email'] = $email;
        header('Location: feedback.php');
        exit;
    } else {
        header('Location: login.php?error=1');
        exit;
    }
}

header('Location: login.php');
exit;
