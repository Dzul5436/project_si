<?php
$p = $_GET['p'] ?? '';

switch ($p) {

    case 'login':
        include __DIR__ . '/desain/log_in.php';
        break;

    case 'edit_profile':
        include __DIR__ . '/desain/edit_profile.php';
        break;

    case 'update_profile':
        include __DIR__ . '/update_profile.php';
        break;

    case 'editprofile':
        include __DIR__ . '/desain/edit_profile.php';
        break;

    case 'dashboard':
        include __DIR__ . '/desain/dashboard.php';  
        break;

    case 'logout':
        session_destroy();
        header('Location: ./?p=login');
        exit;

    default:
        include __DIR__ . '/desain/landing.php';
        break;
}
?>
