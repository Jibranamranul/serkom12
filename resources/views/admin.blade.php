<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Informasi Sekolah</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">
    <!-- Google Font: Inter / Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f4f6f5;
            font-family: 'Plus Jakarta Sans', Arial, sans-serif;
            color: #17231f;
        }

        /* ================= SIDEBAR (TIDAK DIUBAH) ================= */
        .sidebar {
            width: 260px;
            height: 100vh;
            background: #032c1f;
            position: fixed;
            left: 0;
            top: 0;
            padding: 22px 18px;
            color: white;
            z-index: 100;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 21px;
            font-weight: bold;
            margin-bottom: 35px;
            color: white;
        }

        .brand i {
            color: #b5f000;
            font-size: 28px;
        }

        .menu-title {
            color: #6f8b82;
            font-size: 11px;
            font-weight: bold;
            margin: 25px 10px 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu li {
            margin-bottom: 5px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 13px;
            color: #a9bbb5;
            text-decoration: none;
            padding: 12px 13px;
            border-radius: 10px;
            transition: 0.2s;
        }

        .menu a:hover,
        .menu a.active {
            background: #103d2e;
            color: white;
        }

        .menu a.active i {
            color: #b5f000;
        }

        .menu i {
            width: 22px;
            font-size: 17px;
        }

        .logout-link {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 13px;
            color: #a9bbb5;
            background: none;
            border: none;
            padding: 12px 13px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 15px;
            font-family: inherit;
            text-align: left;
        }

        .logout-link:hover {
            background: #103d2e;
            color: white;
        }

        .logout-link i {
            width: 22px;
            font-size: 17px;
        }

        .admin-profile {
            position: absolute;
            left: 18px;
            right: 18px;
            bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px;
            border: 1px solid #1c493b;
            border-radius: 14px;
        }

        .admin-avatar {
            width: 40px;
            height: 40px;
            background: #b5f000;
            color: #032c1f;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
        }

        .admin-name {
            font-size: 13px;
            font-weight: bold;
        }

        .admin-email {
            font-size: 10px;
            color: #8ca69e;
        }

        /* ================= MAIN CONTENT ================= */
        .main {
            margin-left: 260px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Topbar */
        .topbar {
            height: 75px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            border-bottom: 1px solid #e8ecea;
            position: sticky;
            top: 0;
            z-index: 99;
        }

        .search {
            width: 380px;
            position: relative;
        }

        .search input {
            width: 100%;
            border: 1px solid #e2e8e5;
            outline: none;
            background: #f8faf9;
            padding: 10px 45px 10px 20px;
            border-radius: 30px;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .search input:focus {
            background: #ffffff;
            border-color: #246b4b;
            box-shadow: 0 0 0 4px rgba(36, 107, 75, 0.1);
        }

        .search i {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #77847f;
        }

        .top-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .icon-button {
            width: 42px;
            height: 42px;
            border: 1px solid #e7ece9;
            background: white;
            border-radius: 12px;
            color: #334155;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s;
            cursor: pointer;
        }

        .icon-button:hover {
            background: #f0f4f2;
            color: #032c1f;
        }

        .administrator {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            font-size: 14px;
            padding: 6px 12px;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.2s;
        }

        .administrator:hover {
            background: #f4f6f5;
        }

        /* Content Area */
        .content {
            padding: 32px;
            flex: 1;
        }

        .page-header {
            margin-bottom: 28px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        .page-description {
            color: #64748b;
            font-size: 14px;
            margin-top: 4px;
        }

        /* Banner Welcome */
        .welcome {
            background: linear-gradient(135deg, #032c1f 0%, #064e3b 100%);
            color: white;
            border-radius: 20px;
            padding: 32px;
            height: 100%;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 10px 25px -5px rgba(3, 44, 31, 0.2);
        }

        .welcome h2 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .welcome p {
            color: #cbd5e1;
            font-size: 14px;
            max-width: 280px;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .welcome i.bg-icon {
            position: absolute;
            right: -10px;
            bottom: -30px;
            font-size: 160px;
            color: #b5f000;
            opacity: 0.15;
            pointer-events: none;
        }

        .welcome-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #b5f000;
            color: #032c1f;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            width: fit-content;
            transition: 0.2s;
        }

        .welcome-button:hover {
            background: #c3f524;
            color: #032c1f;
            transform: translateY(-2px);
        }

        /* Card Statistik */
        .stat-card {
            background: white;
            padding: 24px;
            border-radius: 20px;
            height: 100%;
            border: 1px solid #eef2f0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            transition: all 0.2s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.05);
            border-color: #d1fae5;
        }

        .stat-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .stat-icon.guru {
            background: #ecfdf5;
            color: #059669;
        }

        .stat-icon.siswa {
            background: #eff6ff;
            color: #2563eb;
        }

        .stat-icon.galeri {
            background: #fef3c7;
            color: #d97706;
        }

        .stat-title {
            color: #64748b;
            font-size: 13px;
            font-weight: 600;
        }

        .stat-number {
            font-size: 32px;
            font-weight: 800;
            color: #0f172a;
            margin: 12px 0 4px;
        }

        .stat-link {
            color: #059669;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            transition: gap 0.2s;
        }

        .stat-link:hover {
            gap: 8px;
            color: #047857;
        }

        /* Card Section Umum */
        .card-school {
            background: white;
            border-radius: 20px;
            padding: 24px;
            border: 1px solid #eef2f0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            height: 100%;
        }

        .card-header-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f1f5f9;
        }

        .card-title {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
        }

        /* Item Berita */
        .news-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 12px 0;
            border-bottom: 1px solid #f8faf9;
            transition: background 0.2s;
        }

        .news-item:last-child {
            border-bottom: none;
        }

        .news-img {
            width: 64px;
            height: 64px;
            object-fit: cover;
            border-radius: 12px;
            flex-shrink: 0;
        }

        .news-icon-placeholder {
            width: 64px;
            height: 64px;
            border-radius: 12px;
            background: #ecfdf5;
            color: #059669;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            flex-shrink: 0;
        }

        .news-title {
            font-size: 14px;
            font-weight: 600;
            color: #1e293b;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-date {
            font-size: 12px;
            color: #94a3b8;
            margin-top: 4px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* Galeri Grid */
        .gallery-item {
            position: relative;
            border-radius: 14px;
            overflow: hidden;
            aspect-ratio: 4 / 3;
            background: #f1f5f9;
        }

        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }

        .gallery-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #94a3b8;
            font-size: 32px;
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 12px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.75), transparent);
            color: white;
            font-size: 12px;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #94a3b8;
        }

        .empty-state i {
            font-size: 40px;
            margin-bottom: 10px;
            display: block;
            opacity: 0.5;
        }

        /* Responsive Adjustment */
        @media(max-width: 992px) {
            .sidebar {
                width: 220px;
            }

            .main {
                margin-left: 220px;
            }

            .search {
                width: 260px;
            }
        }

        @media(max-width: 768px) {
            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
            }

            .search {
                display: none;
            }

            .content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR (TIDAK DIUBAH) -->
    <aside class="sidebar">
        <div class="brand">
            <i class="bi bi-mortarboard-fill"></i>
            <span>SMK YPC</span>
        </div>

        <div class="menu-title">Menu</div>
        <ul class="menu">
            <li>
                <a href="{{ url('/dashboard') }}" class="active">
                    <i class="bi bi-grid-fill"></i>
                    Dashboard
                </a>
            </li>
        </ul>

        <div class="menu-title">Data Sekolah</div>
        <ul class="menu">
            <li>
                <a href="{{ url('/profil') }}">
                    <i class="bi bi-building"></i>
                    Profil Sekolah
                </a>
            </li>
            <li>
                <a href="{{ url('/guru') }}">
                    <i class="bi bi-person-workspace"></i>
                    Guru
                </a>
            </li>
            <li>
                <a href="{{ url('/siswa') }}">
                    <i class="bi bi-people-fill"></i>
                    Siswa
                </a>
            </li>
        </ul>

        <div class="menu-title">Konten</div>
        <ul class="menu">
            <li>
                <a href="{{ url('/ekstrakurikuler') }}">
                    <i class="bi bi-trophy-fill"></i>
                    Ekstrakurikuler
                </a>
            </li>
            <li>
                <a href="{{ url('/galeri') }}">
                    <i class="bi bi-images"></i>
                    Galeri
                </a>
            </li>
            <li>
                <a href="{{ url('/berita') }}">
                    <i class="bi bi-newspaper"></i>
                    Berita
                </a>
            </li>
        </ul>

        <div class="menu-title">Sistem</div>
        <ul class="menu">
            <li>
                <a href="{{ url('/user') }}">
                    <i class="bi bi-person-gear"></i>
                    Pengguna
                </a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-link">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>

        <div class="admin-profile">
            <div class="admin-avatar">A</div>
            <div>
                <div class="admin-name">Administrator</div>
                <div class="admin-email">admin@email.com</div>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="main">

        <!-- TOPBAR -->
        <header class="topbar">
            <button class="icon-button d-md-none">
                <i class="bi bi-list"></i>
            </button>

            <div class="search">
                <input type="text" placeholder="Cari data sekolah...">
                <i class="bi bi-search"></i>
            </div>

            <div class="top-right">
                <button class="icon-button" title="Full Screen">
                    <i class="bi bi-arrows-fullscreen"></i>
                </button>
                <button class="icon-button" title="Notifikasi">
                    <i class="bi bi-bell"></i>
                </button>
                <div class="administrator">
                    <div class="admin-avatar">A</div>
                    <span>Administrator</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
            </div>
        </header>

        <!-- CONTENT -->
        <main class="content">

            <!-- PAGE TITLE -->
            <div class="page-header">
                <h1 class="page-title">Dashboard</h1>
                <p class="page-description">Selamat datang kembali di Sistem Informasi Sekolah SMK YPC</p>
            </div>

            <!-- STATISTIK SECTION -->
            <div class="row g-4 mb-4">
                <!-- Welcome Banner -->
                <div class="col-xl-5 col-lg-6">
                    <div class="welcome">
                        <h2>Selamat Datang 👋</h2>
                        <p>Kelola informasi sekolah dengan mudah, cepat, dan terorganisir.</p>
                        <a href="{{ url('/profil') }}" class="welcome-button">
                            Lihat Profil Sekolah <i class="bi bi-arrow-right"></i>
                        </a>
                        <i class="bi bi-mortarboard-fill bg-icon"></i>
                    </div>
                </div>

                <!-- Card Guru -->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div>
                            <div class="stat-header">
                                <span class="stat-title">Total Guru</span>
                                <div class="stat-icon guru">
                                    <i class="bi bi-person-badge-fill"></i>
                                </div>
                            </div>
                            <div class="stat-number">{{ $jumlahGuru ?? 0 }}</div>
                        </div>
                        <a href="{{ url('/guru') }}" class="stat-link">
                            Lihat Guru <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Card Siswa -->
                <div class="col-xl-4 col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div>
                            <div class="stat-header">
                                <span class="stat-title">Total Siswa</span>
                                <div class="stat-icon siswa">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                            </div>
                            <div class="stat-number">{{ $jumlahSiswa ?? 0 }}</div>
                        </div>
                        <a href="{{ url('/siswa') }}" class="stat-link">
                            Lihat Siswa <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- BERITA & GALERI SECTION -->
            <div class="row g-4">
                <!-- Section Berita -->
                <div class="col-lg-7">
                    <div class="card-school">
                        <div class="card-header-title">
                            <div class="card-title">Berita Kegiatan Terbaru</div>
                            <a href="{{ url('/berita') }}" class="stat-link">Lihat Semua</a>
                        </div>

                        @if(isset($beritaTerbaru) && $beritaTerbaru->count() > 0)
                            @foreach($beritaTerbaru as $berita)
                                <div class="news-item">
                                    @if(!empty($berita->gambar))
                                        {{-- Yus path public/images/ --}}
                                        <img src="{{ asset('images/' . $berita->gambar) }}" class="news-img"
                                            alt="{{ $berita->judul }}">
                                    @else
                                        <div class="news-icon-placeholder">
                                            <i class="bi bi-newspaper"></i>
                                        </div>
                                    @endif

                                    <div>
                                        <div class="news-title">{{ $berita->judul }}</div>
                                        <div class="news-date">
                                            <i class="bi bi-calendar3"></i> {{ $berita->tanggal }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="empty-state">
                                <i class="bi bi-newspaper"></i>
                                <p class="mb-0">Belum ada berita kegiatan terbaru.</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Section Galeri -->
                <div class="col-lg-5">
                    <div class="card-school">
                        <div class="card-header-title">
                            <div class="card-title">Galeri Terbaru</div>
                            <a href="{{ url('/galeri') }}" class="stat-link">Lihat Semua</a>
                        </div>

                        <div class="row g-3">
                            @if(isset($galeriTerbaru) && $galeriTerbaru->count() > 0)
                                @foreach($galeriTerbaru as $galeri)
                                    <div class="col-6">
                                        <div class="gallery-item">
                                            @if(!empty($galeri->gambar))
                                                {{-- Yus path public/images/ --}}
                                                <img src="{{ asset('images/' . $galeri->gambar) }}" class="gallery-img"
                                                    alt="{{ $galeri->judul }}">
                                            @else
                                                <div class="gallery-placeholder">
                                                    <i class="bi bi-image"></i>
                                                </div>
                                            @endif
                                            <div class="gallery-caption">{{ $galeri->judul }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12">
                                    <div class="empty-state">
                                        <i class="bi bi-images"></i>
                                        <p class="mb-0">Belum ada koleksi galeri.</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="text-center py-4 text-muted border-top mt-auto bg-white" style="font-size: 13px;">
            © {{ date('Y') }} Sistem Informasi Sekolah • SMK YPC
        </footer>

    </div>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>