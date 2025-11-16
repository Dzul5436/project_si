<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>FindMe! — Temukan & Laporkan Barang Hilang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    :root{
      --brand:#5b6cff;
      --glass: rgba(255,255,255,0.06);
      --muted: rgba(255,255,255,0.72);
    }
    body{
      margin:0;
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      color: #fff;
      background: linear-gradient(180deg,#071426 0%, #0f2a3e 60%);
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
    }

    /* Hero */
    .hero {
      min-height: 64vh;
      display:flex;
      align-items:center;
      position:relative;
      overflow:hidden;
      padding: 1rem 0;
    }
    .hero::before{
      content:"";
      position:absolute; inset:0;
      background: radial-gradient(800px 400px at 10% 20%, rgba(91,108,255,0.18), transparent 10%),
                  radial-gradient(600px 300px at 90% 80%, rgba(0,0,0,0.12), transparent 20%);
      pointer-events:none;
    }
    .hero-card{
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.04);
      border-radius: 14px;
      padding: 2rem;
      box-shadow: 0 10px 30px rgba(2,6,23,0.6);
      backdrop-filter: none;
      -webkit-backdrop-filter: none;
      margin: 0 auto;
      max-width: 800px;
    }
    .hero h1{ font-size: clamp(1.6rem, 3.6vw, 2.6rem); font-weight:700; margin-bottom:.5rem; color:#fff; }
    .hero p.lead{ color:var(--muted); margin-bottom:1.25rem; }

    .cta-group .btn-primary{
      background: var(--brand);
      border-color: transparent;
      box-shadow: 0 6px 18px rgba(91,108,255,0.18);
    }
    .cta-group .btn-outline-light{
      border-color: rgba(255,255,255,0.08);
      color: rgba(255,255,255,0.9);
    }

    /* Features */
    #features { padding: 3rem 0; }
    .feature-card{
      background: rgba(255,255,255,0.02);
      border-radius:12px;
      padding:1.6rem;
      text-align:center;
      transition: transform .18s ease, box-shadow .18s ease;
      min-height:200px;
      display:flex;
      flex-direction:column;
      gap:.6rem;
      align-items:center;
      justify-content:flex-start;
      border:1px solid rgba(255,255,255,0.03);
    }
    .feature-card:hover{ transform: translateY(-6px); box-shadow: 0 18px 40px rgba(2,6,23,0.55); }
    .feature-icon{ font-size:2.2rem; color:var(--brand); }

    /* Stats */
    .stats { display:flex; gap:1.2rem; flex-wrap:wrap; justify-content:center; margin-top:1rem; }
    .stat{ background: rgba(255,255,255,0.02); padding: .9rem 1.2rem; border-radius:10px; text-align:center; min-width:120px; }

    /* Testimonial */
    .testimonial { background: rgba(255,255,255,0.02); padding:1.4rem; border-radius:12px; border:1px solid rgba(255,255,255,0.03); }

    footer.footer{ padding:2rem 0; background: transparent; color: rgba(255,255,255,0.75); }

    /* Make all text white and remove blur effects */
    .text-muted, 
    .small.text-muted,
    .card-text.small.text-muted,
    .accordion-body.text-muted,
    p.text-muted,
    small.text-muted {
        color: rgba(255,255,255,0.7) !important;
    }

    /* Center align hero section better */
    .hero .container {
        max-width: 1140px;
        margin: 0 auto;
        padding-top: 3rem;
    }

    /* Adjust card backgrounds */
    .card.bg-dark,
    .accordion-item.bg-dark,
    .accordion-button.bg-dark {
        background: rgba(255,255,255,0.03) !important;
    }

    /* Make buttons more visible */
    .btn-outline-light {
        border-color: rgba(255,255,255,0.2);
    }

    /* Ensure all headings are white */
    h1, h2, h3, h4, h5, h6,
    .card-title,
    .accordion-button {
        color: #fff !important;
    }

    @media (max-width: 900px){
      .hero{ padding: 2.5rem 0; }
    }
  </style>
</head>
<body>
  <header class="hero text-white">
    <div class="container">
      <div class="row align-items-center gy-4">
        <div class="col-lg-7">
          <div class="hero-card">
            <h1>Kamu kehilangan barang? Temukan dengan cepat di FindMe!</h1>
            <p class="lead">Platform Lost & Found kampus — laporkan, temukan, dan klaim barang dengan mudah. Upload foto, tandai lokasi, dan terhubung langsung dengan pemilik atau penemu.</p>

            <div class="d-flex flex-wrap gap-2 cta-group">
              <a href="./?p=dashboard" class="btn btn-primary btn-lg"><i class="bi bi-search me-2"></i>Cari Sekarang</a>
              <a href="./?p=login" class="btn btn-outline-light btn-lg"><i class="bi bi-person-circle me-2"></i>Masuk / Daftar</a>
            </div>

            <div class="stats mt-3">
              <div class="stat">
                <div class="h5 mb-0">150+</div>
                <small class="text-muted">Laporan</small>
              </div>
              <div class="stat">
                <div class="h5 mb-0">120+</div>
                <small class="text-muted">Barang Ditemukan</small>
              </div>
              <div class="stat">
                <div class="h5 mb-0">85%</div>
                <small class="text-muted">Tingkat Klaim</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="hero-card">
            <h5 class="mb-3">Laporkan dengan cepat</h5>
            <form action="./?p=dashboard" method="get" class="mb-2">
              <div class="mb-2">
                <input name="q" class="form-control form-control-lg" placeholder="Nama barang / lokasi (contoh: dompet/kantin)" />
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-light btn-lg" type="submit"><i class="bi bi-search me-2"></i>Cari Laporan</button>
              </div>
            </form>

            <hr class="my-3" />

            <div class="d-flex gap-2">
              <a href="./?p=dashboard" class="btn btn-success w-100"><i class="bi bi-plus-lg me-2"></i>Report Found</a>
              <a href="./?p=dashboard" class="btn btn-danger w-100"><i class="bi bi-x-lg me-2"></i>Report Lost</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="features" class="py-6">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Mengapa pakai FindMe?</h2>
        <p class="text-muted">Solusi lengkap untuk manajemen barang hilang & ditemukan di lingkungan kampus Anda.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-card">
            <i class="bi bi-people-fill feature-icon"></i>
            <h5>Kolaborasi Tim Real-time</h5>
            <p class="small text-muted">Diskusi, update status, dan koordinasi antar admin atau penemu dalam satu platform.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card">
            <i class="bi bi-folder-fill feature-icon"></i>
            <h5>Manajemen Terpusat</h5>
            <p class="small text-muted">Semua laporan tersimpan rapi sehingga mudah dicari dan diaudit.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card">
            <i class="bi bi-shield-lock-fill feature-icon"></i>
            <h5>Privasi & Keamanan</h5>
            <p class="small text-muted">Hanya data penting yang ditampilkan untuk mempercepat proses klaim.</p>
          </div>
        </div>
      </div>

      <div class="row mt-5 align-items-center">
        <div class="col-md-6">
          <div class="testimonial">
            <strong>“Sangat membantu — barang saya kembali dalam 1 hari.”</strong>
            <p class="small text-muted mb-0 mt-2">— Mahasiswa, Fakultas Teknik</p>
          </div>
        </div>
        <div class="col-md-6 text-md-end mt-4 mt-md-0">
          <a href="./?p=dashboard" class="btn btn-outline-light"><i class="bi bi-card-list me-2"></i>Lihat Semua Laporan</a>
        </div>
      </div>
    </div>
  </section>

  <!-- How it Works Section -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Cara Kerja FindMe!</h2>
        <p class="text-muted">Proses sederhana untuk menemukan barang hilang Anda</p>
      </div>

      <div class="row g-4">
        <div class="col-md-3">
          <div class="text-center">
            <div class="mb-3">
              <i class="bi bi-1-circle-fill fs-1 text-primary"></i>
            </div>
            <h5>Laporkan</h5>
            <p class="small text-muted">Buat laporan dengan detail barang dan foto</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="text-center">
            <div class="mb-3">
              <i class="bi bi-2-circle-fill fs-1 text-primary"></i>
            </div>
            <h5>Verifikasi</h5>
            <p class="small text-muted">Admin akan memverifikasi laporan Anda</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="text-center">
            <div class="mb-3">
              <i class="bi bi-3-circle-fill fs-1 text-primary"></i>
            </div>
            <h5>Terhubung</h5>
            <p class="small text-muted">Sistem mencocokkan dengan laporan yang ada</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="text-center">
            <div class="mb-3">
              <i class="bi bi-4-circle-fill fs-1 text-primary"></i>
            </div>
            <h5>Klaim</h5>
            <p class="small text-muted">Verifikasi kepemilikan dan ambil barang</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Reports Section -->
  <section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-4">Laporan Terbaru</h3>
            <a href="./?p=dashboard" class="btn btn-outline-light btn-sm">Lihat Semua</a>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 bg-transparent border border-0 border-opacity-10">
                    <img src="assets/image/no_profile.jpeg" class="card-img-top" alt="Dompet" style="height:200px;object-fit:cover;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="badge bg-success">Ditemukan</span>
                            <small class="text-white-50">2 jam yang lalu</small>
                        </div>
                        <h5 class="card-title mb-2">Dompet Coklat</h5>
                        <p class="card-text text-white-50 mb-3">Ditemukan di Perpustakaan lantai 2, berisi KTM dan uang tunai.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="text-white-50 small"><i class="bi bi-geo-alt-fill me-1"></i>Perpustakaan</span>
                            <a href="#" class="btn btn-outline-light btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 bg-transparent border border-0 border-opacity-10">
                    <img src="assets/image/laptop.webp" class="card-img-top" alt="Laptop" style="height:200px;object-fit:cover;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="badge bg-danger">Hilang</span>
                            <small class="text-white-50">5 jam yang lalu</small>
                        </div>
                        <h5 class="card-title mb-2">Laptop ASUS</h5>
                        <p class="card-text text-white-50 mb-3">Hilang di Lab Informatika, warna silver dengan stiker FindMe.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="text-white-50 small"><i class="bi bi-geo-alt-fill me-1"></i>Lab Informatika</span>
                            <a href="#" class="btn btn-outline-light btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 bg-transparent border border-0 border-opacity-10">
                    <img src="assets/image/kuncimotor.jpg" class="card-img-top" alt="Kunci" style="height:200px;object-fit:cover;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="badge bg-success">Ditemukan</span>
                            <small class="text-white-50">1 hari yang lalu</small>
                        </div>
                        <h5 class="card-title mb-2">Kunci Motor Honda</h5>
                        <p class="card-text text-white-50 mb-3">Ditemukan di parkiran motor gedung B, dengan gantungan kunci.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="text-white-50 small"><i class="bi bi-geo-alt-fill me-1"></i>Parkiran Motor</span>
                            <a href="#" class="btn btn-outline-light btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Pertanyaan Umum</h2>
        <p class="text-muted">Temukan jawaban untuk pertanyaan yang sering diajukan</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item bg-dark bg-opacity-25 border-0 mb-3">
              <h2 class="accordion-header">
                <button class="accordion-button bg-dark bg-opacity-25 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  Bagaimana cara melaporkan barang hilang?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Klik tombol "Report Lost" di dashboard, isi form dengan detail barang (foto, lokasi terakhir, deskripsi) lalu submit. Admin akan memverifikasi laporan Anda.
                </div>
              </div>
            </div>

            <div class="accordion-item bg-dark bg-opacity-25 border-0 mb-3">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-dark bg-opacity-25 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  Berapa lama proses verifikasi?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Proses verifikasi biasanya memakan waktu 1-24 jam tergantung jenis barang dan kelengkapan informasi yang diberikan.
                </div>
              </div>
            </div>

            <div class="accordion-item bg-dark bg-opacity-25 border-0">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-dark bg-opacity-25 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  Bagaimana proses pengambilan barang?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Setelah verifikasi kepemilikan, Anda akan dihubungi untuk mengambil barang di lokasi yang ditentukan dengan membawa identitas dan bukti kepemilikan.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-5 bg-primary bg-opacity-10">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Siap untuk memulai?</h2>
      <p class="lead text-muted mb-4">Bergabung sekarang dan temukan barang Anda dengan mudah</p>
      <div class="d-flex gap-3 justify-content-center">
        <a href="./?p=login" class="btn btn-primary btn-lg px-4">Daftar Gratis</a>
        <a href="./?p=dashboard" class="btn btn-outline-light btn-lg px-4">Lihat Dashboard</a>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container text-center">
      <p class="mb-1">&copy; 2025 FindMe! — Dibuat dengan ❤️ untuk kampus</p>
      <div>
        <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="text-white"><i class="bi bi-github"></i></a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>