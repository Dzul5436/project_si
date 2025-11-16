<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];

// Upload foto
if ($_FILES['profile_pic']['name']) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
    move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
    $profile_pic = $target_file;
} else {
    $profile_pic = $_POST['old_pic'] ?? 'assets/img/profile-default.png';
}

// Simpan ke database
$query = "UPDATE users SET name='$name', email='$email', nim='$nim', jurusan='$jurusan', profile_pic='$profile_pic' WHERE username='$username'";
mysqli_query($conn, $query);

header("Location: profile.php");
exit;
?>
