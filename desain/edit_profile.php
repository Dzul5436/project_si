<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirect jika belum login
if (!isset($_SESSION['user'])) {
    header("Location: ./?p=login");
    exit;
}

// Folder penyimpanan foto
$uploadDir = "assets/image/user/";

// Proses update profil
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    $newName  = trim($_POST['nama'] ?? '');
    $newEmail = trim($_POST['email'] ?? '');
    $newRole  = trim($_POST['role'] ?? '');

    // Upload foto (jika ada file diinput)
    if (!empty($_FILES['foto']['name'])) {
        $fotoName = basename($_FILES['foto']['name']);
        $targetFile = $uploadDir . $fotoName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Validasi file (hanya gambar)
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($imageFileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
                $_SESSION['user']['foto'] = $targetFile;
            } else {
                $error_message = "Gagal mengupload foto.";
            }
        } else {
            $error_message = "Format file tidak valid. Gunakan JPG, PNG, atau GIF.";
        }
    }

    // Validasi data
    if ($newName === '' || $newEmail === '') {
        $error_message = "Nama dan Email tidak boleh kosong.";
    } else {
        $_SESSION['user']['nama']  = $newName;
        $_SESSION['user']['email'] = $newEmail;
        $_SESSION['user']['role']  = $newRole;
        $success_message = "Profil berhasil diperbarui!";
    }
}

// Ambil data user dari session
$user = $_SESSION['user'];
?>

<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <div class="d-flex align-items-center mb-3">
            <img src="<?= htmlspecialchars($user['foto'] ?? 'assets/image/no_profile.jpeg') ?>" 
                 alt="Profile Picture"
                 width="90" height="90"
                 class="rounded-circle me-3 border border-2 border-primary"
                 style="object-fit: cover;">

            <div>
                <h4 class="mb-0 text-primary"><?= htmlspecialchars($user['nama'] ?? 'Nama Pengguna') ?></h4>
                <small class="text-muted"><?= htmlspecialchars($user['email'] ?? 'Email belum diset') ?></small>
            </div>
            <button class="btn btn-outline-primary ms-auto" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                <i class="bi bi-pencil-square"></i> Edit Profile
            </button>
        </div>
        <hr>
        <p><strong>Role:</strong> <?= htmlspecialchars($user['role'] ?? 'Mahasiswa') ?></p>
        <p><strong>Bergabung:</strong> <?= htmlspecialchars($user['joined'] ?? date('Y-m-d')) ?></p>

        <?php if (isset($success_message)): ?>
            <div class="alert alert-success mt-3 mb-0 py-2 text-center">
                <?= $success_message ?>
            </div>
        <?php elseif (isset($error_message)): ?>
            <div class="alert alert-danger mt-3 mb-0 py-2 text-center">
                <?= $error_message ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- =======================================================
     Modal Edit Profile
======================================================= -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-3">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="editProfileModalLabel">
            <i class="bi bi-person-lines-fill me-2"></i>Edit Profile
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- enctype wajib untuk upload file -->
      <form method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama"
                   value="<?= htmlspecialchars($user['nama'] ?? '') ?>" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email"
                   value="<?= htmlspecialchars($user['email'] ?? '') ?>" required>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto Profile</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            <?php if (!empty($user['foto'])): ?>
                <small class="text-muted">Foto saat ini: <?= basename($user['foto']) ?></small>
            <?php endif; ?>
          </div>

          <div class="mb-3">
            <label for="role" class="form-label">Peran</label>
            <select class="form-select" id="role" name="role" required>
              <?php
                $roles = ['Mahasiswa', 'Dosen', 'Admin'];
                $currentRole = $user['role'] ?? 'Mahasiswa';
                foreach ($roles as $r) {
                    $selected = ($r === $currentRole) ? 'selected' : '';
                    echo "<option value=\"$r\" $selected>$r</option>";
                }
              ?>
            </select>
          </div>
        </div>

        <!-- Footer Modal -->
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              <i class="bi bi-x-circle"></i> Batal
          </button>
          <button type="submit" name="update_profile" class="btn btn-primary">
              <i class="bi bi-save"></i> Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
