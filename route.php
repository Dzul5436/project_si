<?php
$p=$_GET['p'] ?? '';

switch ($p) {
    case 'landing': include 'desain/landing.php'; break;
    case 'dashboard': include 'desain/dashboard.php'; break;
    case 'index': include 'index.php'; break;
    case 'login': include 'desain/log_in.php'; break;

    default: require_once "desain/landing.php"; break;
}
?>