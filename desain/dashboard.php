<section id="dashboard" class="py-4">
    <div class="container">
        <!-- Top bar: title + actions -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h2 class="mb-0">FindMe!</h2>
                <small class="text-muted">Dashboard Lost & Found</small>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="me-2 d-none d-md-block">
                    <input class="form-control form-control-sm" type="search" placeholder="Cari laporan..." aria-label="Search">
                </div>
                <button class="btn btn-outline-primary btn-sm" id="btn-filter"><i class="bi bi-funnel-fill"></i></button>
                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-bell-fill"></i></button>
                <div class="dropdown">
                    <a class="btn btn-dark btn-sm rounded-circle dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Action buttons -->
        <div class="mb-4 d-flex gap-2">
            <a href="#" class="btn btn-danger"><i class="bi bi-x-circle-fill me-2"></i>Report Lost</a>
            <a href="#" class="btn btn-success"><i class="bi bi-check-circle-fill me-2"></i>Report Found</a>
        </div>

        <!-- Filters / stats -->
        <div class="mb-3 d-flex flex-wrap gap-2">
            <span class="badge bg-secondary">Semua</span>
            <span class="badge bg-warning text-dark">Terbaru</span>
            <span class="badge bg-info text-dark">Belum Diklaim</span>
            <span class="badge bg-light text-dark">Selesai</span>
        </div>

        <!-- Cards grid -->
        <div class="row g-4 cards-row">
            <!-- example card (ulang / loop di server-side) -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="/assets/image/no_image.png" class="card-img-top" alt="thumbnail" style="object-fit:cover; height:160px;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title mb-0">Dompet Kulit</h5>
                            <small class="text-muted">2 jam lalu</small>
                        </div>
                        <p class="card-text text-muted mb-3">Ditemukan di ruang perpustakaan, warna cokelat, berisi kartu dan uang.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <div class="text-muted small"><i class="bi bi-geo-alt-fill me-1"></i>Perpustakaan</div>
                            <div>
                                <a href="#" class="btn btn-sm btn-outline-primary me-2">Detail</a>
                                <a href="#" class="btn btn-sm btn-success">Klaim</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- duplicate example cards -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="/assets/image/no_image.png" class="card-img-top" alt="thumbnail" style="object-fit:cover; height:160px;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title mb-0">Kacamata Hitam</h5>
                            <small class="text-muted">1 hari lalu</small>
                        </div>
                        <p class="card-text text-muted mb-3">Kacamata hitam frame plastik, ditemukan di kantin.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <div class="text-muted small"><i class="bi bi-geo-alt-fill me-1"></i>Kantin</div>
                            <div>
                                <a href="#" class="btn btn-sm btn-outline-primary me-2">Detail</a>
                                <a href="#" class="btn btn-sm btn-success">Klaim</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- more sample cards -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="/assets/image/no_image.png" class="card-img-top" alt="thumbnail" style="object-fit:cover; height:160px;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title mb-0">Powerbank</h5>
                            <small class="text-muted">3 hari lalu</small>
                        </div>
                        <p class="card-text text-muted mb-3">Powerbank 10000mAh, warna hitam, kabel tidak ada.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <div class="text-muted small"><i class="bi bi-geo-alt-fill me-1"></i>Lab TI</div>
                            <div>
                                <a href="#" class="btn btn-sm btn-outline-primary me-2">Detail</a>
                                <a href="#" class="btn btn-sm btn-success">Klaim</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- empty placeholder card -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border-dashed d-flex align-items-center justify-content-center">
                    <div class="p-4 text-center">
                        <i class="bi bi-inbox fs-1 text-muted"></i>
                        <p class="mt-2 text-muted">Belum ada laporan tambahan</p>
                        <a href="#" class="btn btn-sm btn-primary">Tambah Laporan</a>
                    </div>
                </div>
            </div>

            <!-- tambahkan lebih banyak card sesuai data -->
        </div>
    </div>

    <!-- floating add button -->
    <a href="#" class="btn btn-primary rounded-circle shadow-lg add-report-btn" title="Tambah Laporan">
        <i class="bi bi-plus-lg fs-4"></i>
    </a>

    <style>
        /* pastikan kolom kartu punya tinggi sama */
        .cards-row > [class*="col-"] { display: flex; align-items: stretch; }
        .cards-row .card { display: flex; flex-direction: column; width: 100%; }
        .cards-row .card .card-body { display: flex; flex-direction: column; }

        /* floating action button */
        .add-report-btn {
            position: fixed;
            right: 24px;
            bottom: 28px;
            width: 62px;
            height: 62px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            z-index: 1050;
        }

        /* optional: dashed border style */
        .border-dashed { border: 1px dashed rgba(255,255,255,0.08); min-height: 260px; display:flex; align-items:center; justify-content:center; }
        @media (max-width: 767.98px) {
            .add-report-btn { right: 16px; bottom: 20px; width:56px; height:56px; }
        }
    </style>
</section>