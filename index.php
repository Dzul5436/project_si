<?php
ob_start(); // <- Tambahkan ini untuk mencegah error "headers already sent"
session_start();

$p = $_GET['p'] ?? '';

// Jika halaman login, tangani khusus
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

        /* Dropdown animations and styling */
        .dropdown-menu.animate {
            animation-duration: 0.3s;
            -webkit-animation-duration: 0.3s;
            animation-fill-mode: both;
            -webkit-animation-fill-mode: both;
        }

        @keyframes slideIn {
            0% {
                transform: translateY(1rem);
                opacity: 0;
            }
            100% {
                transform: translateY(0rem);
                opacity: 1;
            }
        }

        .slideIn {
            -webkit-animation-name: slideIn;
            animation-name: slideIn;
        }

        /* Dropdown item hover effects */
        .dropdown-item {
            padding: 0.6rem 1rem;
            transition: all 0.2s;
        }

        .dropdown-item:hover {
            background: rgba(255,255,255,0.1);
            transform: translateX(5px);
        }

        /* Chevron rotation on dropdown toggle */
        .transition-transform {
            transition: transform 0.2s;
        }

        .show .transition-transform {
            transform: rotate(90deg);
        }

        /* Dropdown headers styling */
        .dropdown-header {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: rgba(255,255,255,0.5);
            padding: 0.5rem 1rem;
        }

        /* Dropdown divider */
        .dropdown-divider {
            border-color: rgba(255,255,255,0.1);
            margin: 0.5rem 0;
        }
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

    <!-- Dropdown Inventaris Prodi -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="inventarisDropdown" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <i class="bi bi-building-fill me-2"></i>
            Inventaris Prodi
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="inventarisDropdown">
            <li><h6 class="dropdown-header">Ruang Kelas</h6></li>
            <li>
                <a class="dropdown-item" href="./?p=3s1">
                    <i class="bi bi-door-open-fill me-2 text-primary"></i>
                    Kelas 3S1
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="./?p=4s1">
                    <i class="bi bi-door-open-fill me-2 text-info"></i>
                    Kelas 4S1
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header">Fasilitas</h6></li>
            <li>
                <a class="dropdown-item" href="./?p=lab_infor">
                    <i class="bi bi-pc-display-horizontal me-2 text-success"></i>
                    Lab Informatika
                    <span class="ms-auto badge bg-primary rounded-pill">New</span>
                </a>
            </li>
        </ul>
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
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <i class="bi bi-gear-fill me-2"></i>
                <strong>Settings</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="./?p=edit_profile">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="./?p=login">Sign In</a></li>
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
                <input id="searchInput" type="text" class="form-control" placeholder="Search">
            </div>
        </div>
        
        <div class="d-flex align-items-center">
            <!-- white filter button -->
            <button class="btn btn-md text-white me-2" id="btn-filter" title="Filter"><i class="bi bi-funnel-fill"></i></button>
            <a href="#" class="text-white me-3"><i class="bi bi-bell-fill fs-5"></i></a>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    <img src="assets/image/no_profile.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
                </a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end text-small shadow">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="./?p=editprofile">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="./?p=login">Sign In</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Filter panel (toggle with filter button) -->
    <div id="filterPanel" class="card shadow-sm p-3" style="position:fixed; right:24px; top:72px; width:300px; z-index:1080; display:none;">
        <h6 class="mb-2">Filter Laporan</h6>
        <div class="mb-2">
            <label class="form-label small mb-1">Status</label>
            <select id="filterStatus" class="form-select form-select-sm">
                <option value="">Semua</option>
                <option value="lost">Lost</option>
                <option value="found">Found</option>
                <option value="unclaimed">Belum Diklaim</option>
            </select>
        </div>
        <div class="mb-2">
            <label class="form-label small mb-1">Lokasi (kata kunci)</label>
            <input id="filterLocation" type="text" class="form-control form-control-sm" placeholder="mis. Perpustakaan">
        </div>
        <div class="d-flex justify-content-end gap-2">
            <button id="filterReset" class="btn btn-outline-secondary btn-sm">Reset</button>
            <button id="filterApply" class="btn btn-primary btn-sm">Terapkan</button>
        </div>
        <small class="text-muted d-block mt-2">Catatan: server-side harus menambahkan data-status pada setiap kartu (data-status="lost|found|unclaimed") agar filter status bekerja 100%.</small>
    </div>

    <main class="content-area">
        <?php require_once "route.php"; ?>
    </main>
</div>

<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="liveToast" class="toast fade" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Bootstrap Toast</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Hello, world! This is a toast message.
        </div>
    </div>
</div>

<!-- load Bootstrap JS first -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- custom scripts (filter, dropdown init) -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const btnFilter = document.getElementById('btn-filter');
    const panel = document.getElementById('filterPanel');
    const applyBtn = document.getElementById('filterApply');
    const resetBtn = document.getElementById('filterReset');
    const statusSelect = document.getElementById('filterStatus');
    const locInput = document.getElementById('filterLocation');
    const searchInput = document.getElementById('searchInput');

    // Ensure bootstrap loaded
    if (typeof bootstrap === 'undefined') {
        console.error('Bootstrap JS not loaded');
        return;
    }

    // Robust dropdown toggle: explicitly toggle instance on click
    document.querySelectorAll('[data-bs-toggle="dropdown"]').forEach(toggle => {
        // prevent href="#" default jump
        toggle.addEventListener('click', function (e) {
            if (this.getAttribute('href') === '#') e.preventDefault();
            e.stopPropagation(); // prevent other handlers that may close immediately
            const inst = bootstrap.Dropdown.getOrCreateInstance(this);
            inst.toggle();
        });
    });

    // toggle filter panel
    if (btnFilter && panel) {
        btnFilter.addEventListener('click', (e) => {
            e.stopPropagation();
            panel.style.display = panel.style.display === 'none' ? 'block' : 'none';
        });
    }

    // close panel when clicking outside
    document.addEventListener('click', (e) => {
        if (panel && !panel.contains(e.target) && btnFilter && !btnFilter.contains(e.target)) {
            panel.style.display = 'none';
        }
    });

    // filter function (unchanged)
    function applyFilter() {
        const status = (statusSelect?.value || '').trim().toLowerCase();
        const loc = (locInput?.value || '').trim().toLowerCase();
        const query = (searchInput?.value || '').trim().toLowerCase();

        const cols = document.querySelectorAll('.cards-row > [class*="col-"]');
        cols.forEach(col => {
            const card = col.querySelector('.card');
            if (!card) return;
            const cardStatus = (card.dataset.status || '').toLowerCase();
            const text = (card.innerText || '').toLowerCase();
            let visible = true;
            if (status && cardStatus) visible = visible && (cardStatus === status);
            if (loc) visible = visible && text.includes(loc);
            if (query) visible = visible && text.includes(query);
            col.style.display = visible ? '' : 'none';
        });
    }

    if (applyBtn) applyBtn.addEventListener('click', () => { applyFilter(); panel.style.display = 'none'; });
    if (resetBtn) resetBtn.addEventListener('click', () => {
        if (statusSelect) statusSelect.value = '';
        if (locInput) locInput.value = '';
        if (searchInput) searchInput.value = '';
        document.querySelectorAll('.cards-row > [class*="col-"]').forEach(col => col.style.display = '');
    });
    if (searchInput) searchInput.addEventListener('input', applyFilter);
});
</script>
</body>
</html>