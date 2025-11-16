<?php
    include 'koneksi.php';
    $foto = $_FILES['foto']['username'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $username = $_POST['username'];
    echo 'Foto yang diunggah: ' . $foto;
    move_uploaded_file($file_tmp, 'assets/image/user' . $foto);
?>