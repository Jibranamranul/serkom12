<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - SMK YPC Tasikmalaya</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f4f6f5;
            font-family: 'Plus Jakarta Sans', Arial, sans-serif;
            color: #1e293b;
        }

        /* KONTEN UTAMA */
        .content {
            margin-left: 260px;
            padding: 32px;
            min-height: 100vh;
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

        /* BANNER HERO PROFIL */
        .hero-banner {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background: linear-gradient(135deg, #032c1f 0%, #064e3b 100%);
            color: white;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(3, 44, 31, 0.15);
        }

        .hero-img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            opacity: 0.35;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 32px;
            background: linear-gradient(to top, rgba(3, 44, 31, 0.95), transparent);
        }

        .hero-badge {
            background: #b5f000;
            color: #032c1f;
            font-size: 12px;
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 12px;
            width: fit-content;
        }

        .hero-title {
            font-size: 32px;
            font-weight: 800;
            margin: 0 0 8px 0;
        }

        .hero-sub {
            color: #cbd5e1;
            font-size: 15px;
            margin: 0;
        }

        /* CARD SEKOLAH */
        .card-school {
            background: white;
            border-radius: 20px;
            padding: 28px;
            border: 1px solid #eef2f0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            height: 100%;
        }

        .card-title-custom {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f1f5f9;
        }

        .card-title-custom i {
            color: #059669;
            font-size: 20px;
        }

        /* IDENTITAS ITEM */
        .info-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 14px;
        }

        .info-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: #ecfdf5;
            color: #059669;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }

        .info-label {
            font-size: 12px;
            color: #64748b;
            margin-bottom: 2px;
        }

        .info-value {
            font-weight: 600;
            color: #1e293b;
        }

        /* VISI MISI BOX */
        .visi-box {
            background: #f8faf9;
            border-left: 4px solid #059669;
            padding: 16px 20px;
            border-radius: 0 12px 12px 0;
            font-style: italic;
            color: #334155;
            margin-bottom: 24px;
            font-weight: 500;
        }

        .misi-list {
            padding-left: 20px;
            margin: 0;
        }

        .misi-list li {
            margin-bottom: 10px;
            color: #475569;
            line-height: 1.6;
            font-size: 14px;
        }

        /* STATISTIK RINGKAS */
        .stat-box {
            background: #f8faf9;
            border-radius: 14px;
            padding: 16px;
            text-align: center;
            border: 1px solid #edf2f0;
        }

        .stat-val {
            font-size: 24px;
            font-weight: 800;
            color: #059669;
        }

        .stat-lbl {
            font-size: 12px;
            color: #64748b;
            font-weight: 600;
            margin-top: 4px;
        }

        /* RESPONSIVE */
        @media(max-width: 992px) {
            .content {
                margin-left: 220px;
            }
        }

        @media(max-width: 768px) {
            .content {
                margin-left: 0;
                padding: 20px;
            }
            .hero-title {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

    {{-- SIDEBAR --}}
    @include('layout.sidebar')

    {{-- KONTEN UTAMA --}}
    <main class="content">

        <!-- HEADER -->
        <div class="page-header">
            <h1 class="page-title">Profil Sekolah</h1>
            <p class="page-description">Informasi lengkap mengenai SMK YPC Tasikmalaya</p>
        </div>

        <!-- BANNER DENGAN FOTO -->
        <div class="hero-banner">
            <!-- Ganti src di bawah ini dengan nama file foto sekolah Anda di folder assets/images/ -->
            <img src="{{ asset('assets/images/gedung.jpg') }}" alt="Gedung SMK YPC Tasikmalaya" class="hero-img">
            <div class="hero-overlay">
                <span class="hero-badge"><i class="bi bi-patch-check-fill"></i> Terakreditasi A</span>
                <h1 class="hero-title">SMK YPC Tasikmalaya</h1>
                <p class="hero-sub"><i class="bi bi-geo-alt-fill text-warning me-1"></i> Jl. Kompleks YPC Singaparna, Kabupaten Tasikmalaya, Jawa Barat</p>
            </div>
        </div>

        <div class="row g-4">

            <!-- TENTANG & VISI MISI -->
            <div class="col-lg-7">
                <div class="card-school">
                    <div class="card-title-custom">
                        <i class="bi bi-building-gear"></i>
                        <span>Tentang Sekolah</span>
                    </div>

                    <p style="color: #475569; line-height: 1.7; font-size: 14px;">
                        SMK YPC Tasikmalaya merupakan salah satu Sekolah Menengah Kejuruan unggulan di Kabupaten Tasikmalaya yang berkomitmen mencetak lulusan berakhlak mulia, kompeten, dan siap kerja di dunia industri maupun kewirausahaan.
                    </p>

                    <div class="card-title-custom mt-4">
                        <i class="bi bi-compass-fill"></i>
                        <span>Visi & Misi</span>
                    </div>

                    <h6 class="fw-bold mb-2 text-dark">Visi Sekolah:</h6>
                    <div class="visi-box">
                        "Menjadi Sekolah Menengah Kejuruan yang Unggul, Berkarakter Islami, Berwawasan Lingkungan, serta Mampu Bersaing di Tingkat Nasional dan Global."
                    </div>

                    <h6 class="fw-bold mb-2 text-dark">Misi Sekolah:</h6>
                    <ol class="misi-list">
                        <li>Menyelenggarakan pendidikan kejuruan berlandaskan nilai-nilai keagamaan dan karakter mulia.</li>
                        <li>Meningkatkan kualitas pembelajaran berbasis teknologi dan sesuai kebutuhan Dunia Usaha / Dunia Industri (DUDI).</li>
                        <li>Mengembangkan sarana prasarana praktek kerja kejuruan standar modern.</li>
                        <li>Mewujudkan kemitraan strategis dengan berbagai industri berskala nasional dan internasional.</li>
                    </ol>
                </div>
            </div>

            <!-- INFORMASI & DOKUMENTASI -->
            <div class="col-lg-5">
                <div class="card-school">
                    <div class="card-title-custom">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Informasi Identitas</span>
                    </div>

                    <div class="info-list">
                        <div class="info-item">
                            <div class="info-icon"><i class="bi bi-hash"></i></div>
                            <div>
                                <div class="info-label">NPSN</div>
                                <div class="info-value">20210712</div>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon"><i class="bi bi-award-fill"></i></div>
                            <div>
                                <div class="info-label">Status & Akreditasi</div>
                                <div class="info-value">Swasta / Akreditasi A</div>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon"><i class="bi bi-envelope-at-fill"></i></div>
                            <div>
                                <div class="info-label">Email Resmi</div>
                                <div class="info-value">info@smkypc.sch.id</div>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
                            <div>
                                <div class="info-label">Telepon</div>
                                <div class="info-value">(0265) 545411</div>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon"><i class="bi bi-globe"></i></div>
                            <div>
                                <div class="info-label">Website Resmi</div>
                                <div class="info-value">www.smkypc.sch.id</div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" style="border-color: #f1f5f9;">

                    <!-- STATISTIK RINGKAS -->
                    <div class="row g-2">
                        <div class="col-4">
                            <div class="stat-box">
                                <div class="stat-val">A</div>
                                <div class="stat-lbl">Akreditasi</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-box">
                                <div class="stat-val">6+</div>
                                <div class="stat-lbl">Jurusan</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-box">
                                <div class="stat-val">1000+</div>
                                <div class="stat-lbl">Siswa</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>