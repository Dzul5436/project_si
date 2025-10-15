<?php
$p = $_GET['p'] ?? '';
// Handle login page separately
if ($p === 'login') {
    include __DIR__ . '/desain/log_in.php';
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindMe! | Temukan dan Laporkan Barang Hilangmu</title>
    <link rel="icon" type="image/png" href="assets/image/icon.png" sizes="auto">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <style>
        /* make main content area flexible and grow/shrink with page content */
        html, body { height: 100%; }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* main wrapper (to the right of offcanvas) fills viewport and is a column */
        .main-content {
            display: flex;
            flex-direction: column;
            flex: 1 1 auto;
            min-height: 0; /* allow children to scroll */
        }

        /* top bar stays at natural height */
        .top-bar { flex: 0 0 auto; }

        /* content area grows to fill remaining space and becomes scrollable if needed */
        .content-area {
            flex: 1 1 auto;
            min-height: 0; /* necessary for proper flexbox scrolling */
            overflow: auto;
            padding: 1rem;
        }

        /* ensure inner background can expand with content */
        .diagonal-pattern-bg {
            width: 100%;
            min-height: 100%;
            box-sizing: border-box;
        }

        /* small helper: keep offcanvas above layout but not affecting flow */
        .offcanvas { z-index: 1055; }
    </style>
</head>
<body>

<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title d-flex align-items-center" id="sidebarMenuLabel">
            <img src="assets/image/icon.png" alt="Icon" style="width: 50px; height: 50px; margin-right: 10px;">
            <span>FindMe!</span>
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body d-flex flex-column p-3">
        <hr class="mt-0">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <i class="bi bi-house-door-fill me-2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-people-fill me-2"></i>
                    Inventaris Kelas
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-calendar-event-fill me-2"></i>
                    Prestasi Mahasiswa
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-file-earmark-text-fill me-2"></i>
                    Documents
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-bar-chart-fill me-2"></i>
                    Reports
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-gear-fill me-2"></i>
                <strong>Settings</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign In</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="main-content">
    <header class="top-bar d-flex justify-content-between align-items-center p-3">
        <div class="d-flex align-items-center">
            <button class="btn btn-dark me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
                <i class="bi bi-list"></i>
            </button>
            <div class="input-group search-bar">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </div>

        <div class="d-flex align-items-center">
            <a href="#" class="text-white me-3"><i class="bi bi-bell-fill fs-5"></i></a>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/image/no_profile.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
                </a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end text-small shadow">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="./?p=login">Sign In</a></li>
                </ul>
            </div>
        </div>
    </header>
    <body>
            <?php
            require_once "route.php";
            ?>
    </body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>