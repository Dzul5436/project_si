<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Masuk / Daftar — FindMe!</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    :root{ --brand:#0d6efd; --google:#db4437; --glass: rgba(255,255,255,0.04); }
    body{ min-height:100vh; display:flex; align-items:center; justify-content:center; margin:0;
      background: linear-gradient(180deg,#071426 0%, #0f2a3e 60%); color:#fff; font-family:system-ui,Segoe UI,Roboto,Arial;}
    .page{ width:100%; max-width:980px; padding:28px; }
    .hero{ display:grid; grid-template-columns:1fr 420px; gap:28px; align-items:center; }
    @media(max-width:920px){ .hero{ grid-template-columns:1fr; } .brand{ order:2; } }
    .brand{ padding:28px; border-radius:12px; background: linear-gradient(135deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01)); box-shadow:0 8px 30px rgba(0,0,0,0.45); }
    .brand h1{ margin:0 0 .5rem 0; font-size:1.8rem; }
    .card-auth{ border-radius:12px; overflow:hidden; box-shadow:0 10px 40px rgba(2,6,23,0.6); background:rgba(255,255,255,0.02); }
    .google-btn{ background:var(--google); border:0; color:#fff; }
    /* variant: Google button with brand blue */
    .google-btn-primary{ background:var(--brand); border:0; color:#fff; }
    .google-btn-primary:hover{ filter:brightness(.95); }
    /* buat judul login berwarna putih */
    .card-auth .card-body h4 { color: #ffffff; }
    .or-sep{ text-align:center; color:rgba(255,255,255,0.5); margin:14px 0; position:relative; }
    .or-sep::before,.or-sep::after{ content:""; height:1px; background:rgba(255,255,255,0.06); position:absolute; top:50%; width:34%; }
    .or-sep::before{ left:0 } .or-sep::after{ right:0 }
    .small-muted{ color:rgba(255,255,255,0.65); font-size:.95rem; }
    .add-space{ height:12px; }
    a.text-link{ color:rgba(255,255,255,0.85); text-decoration:underline; }
    .form-control{ background: rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.06); color:#fff; }
    .form-control::placeholder{ color: rgba(255,255,255,0.5); }
    .btn-primary{ background:var(--brand); border-color:var(--brand); }
  </style>
</head>
<body>
  <main class="page">
    <div class="hero">
      <section class="brand">
        <h1>FindMe!</h1>
        <p class="small-muted mb-3">Platform Lost & Found kampus — laporkan, temukan, dan klaim dengan mudah.</p>

        <ul class="list-unstyled small-muted mb-3">
          <li class="mb-2"><i class="bi bi-camera-fill me-2 text-success"></i>Upload foto bukti</li>
          <li class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-success"></i>Tandai lokasi ditemukannya</li>
          <li class="mb-2"><i class="bi bi-bell-fill me-2 text-success"></i>Notifikasi klaim otomatis</li>
        </ul>

        <p class="small-muted">Butuh bantuan? <a href="#" class="text-link">Kontak admin</a></p>
      </section>

      <section>
        <div class="card card-auth p-3">
          <div class="card-body">
            <h4 class="mb-2">Masuk FindMe!</h4>
            <p class="small-muted mb-3">Gunakan akun Google Anda atau masuk manual.</p>

            <!-- Google sign-in -->
            <a href="/auth/google.php" class="btn google-btn-primary w-100 d-flex align-items-center justify-content-center mb-3">
              <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="" style="height:20px;margin-right:10px;">
              Masuk dengan Google
            </a>

            <div class="or-sep">atau</div>

            <!-- Login form -->
            <form action="/auth/local_login.php" method="post" class="mb-2">
              <div class="mb-3">
                <label class="form-label small-muted">Email</label>
                <input name="email" type="email" class="form-control form-control-lg" placeholder="nama@contoh.com" required>
              </div>
              <div class="mb-3">
                <label class="form-label small-muted">Password</label>
                <input name="password" type="password" class="form-control form-control-lg" placeholder="••••••••" required>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember" name="remember">
                  <label class="form-check-label small-muted" for="remember">Ingat saya</label>
                </div>
                <a href="#" class="small-muted">Lupa password?</a>
              </div>

              <button type="submit" class="btn btn-primary w-100">Masuk</button>
            </form>

            <div class="add-space"></div>

            <!-- Register toggle -->
            <div class="text-center small-muted mb-2">Belum punya akun?</div>
            <div class="d-grid">
              <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#registerBox" aria-expanded="false">
                Buat Akun Baru
              </button>
            </div>

            <div class="collapse mt-3" id="registerBox">
              <div class="card mt-2 bg-transparent border-0">
                <div class="card-body p-0">
                  <form action="/auth/register.php" method="post">
                    <div class="mb-2">
                      <label class="form-label small-muted">Nama lengkap</label>
                      <input name="name" type="text" class="form-control" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-2">
                      <label class="form-label small-muted">Email</label>
                      <input name="email" type="email" class="form-control" placeholder="nama@contoh.com" required>
                    </div>
                    <div class="mb-2">
                      <label class="form-label small-muted">Password</label>
                      <input name="password" type="password" class="form-control" placeholder="Buat password" required>
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-success w-100">Daftar dan Masuk</button>
                    </div>
                    <div class="small-muted text-center">atau <a href="/auth/google.php" class="text-link">Daftar dengan Google</a></div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>