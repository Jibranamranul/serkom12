<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler - SMK YPC Tasikmalaya</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

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
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        /* FILTER & SEARCH BAR */
        .action-bar {
            background: white;
            padding: 16px 24px;
            border-radius: 16px;
            border: 1px solid #eef2f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 28px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        }

        .search-box {
            position: relative;
            width: 320px;
        }

        .search-box input {
            width: 100%;
            padding: 10px 16px 10px 42px;
            border: 1px solid #e2e8e5;
            border-radius: 10px;
            outline: none;
            font-size: 14px;
            background: #f8faf9;
            transition: 0.2s;
        }

        .search-box input:focus {
            border-color: #059669;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.1);
        }

        .search-box i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
        }

        .btn-tambah {
            background: #059669;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: 0.2s;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-tambah:hover {
            background: #047857;
            color: white;
            transform: translateY(-2px);
        }

        /* CARD ESKUL GRID */
        .eskul-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
        }

        .eskul-card {
            background: white;
            border-radius: 20px;
            border: 1px solid #eef2f0;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .eskul-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(3, 44, 31, 0.08);
            border-color: #a7f3d0;
        }

        /* BANNER FOTO ESKUL */
        .eskul-img-wrapper {
            position: relative;
            height: 180px;
            overflow: hidden;
            background: #032c1f;
        }

        .eskul-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .eskul-card:hover .eskul-img {
            transform: scale(1.06);
        }

        .eskul-badge {
            position: absolute;
            top: 14px;
            right: 14px;
            background: rgba(3, 44, 31, 0.85);
            backdrop-filter: blur(8px);
            color: #b5f000;
            font-size: 11px;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 20px;
            border: 1px solid rgba(181, 240, 0, 0.3);
        }

        .eskul-body {
            padding: 24px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .eskul-title {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .eskul-desc {
            font-size: 13px;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 20px;
            flex: 1;
        }

        .eskul-info {
            border-top: 1px solid #f1f5f9;
            padding-top: 16px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            font-size: 13px;
            color: #475569;
        }

        .eskul-info-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .eskul-info-item i {
            color: #059669;
            font-size: 16px;
            width: 18px;
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

            .action-bar {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    //Sidebar//
    @include('layout.sidebar')

    //Kontent Utama//
    <main class="content">

        //Header Page//
        <div class="page-header">
            <div>
                <h1 class="page-title">Ekstrakurikuler</h1>
                <p class="page-description">Daftar kegiatan pengembangan bakat dan minat siswa SMK YPC Tasikmalaya</p>
            </div>
        </div>
        <!-- //Search&Action// -->
        <div class="action-bar">
            <div class="search-box">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Cari ekstrakurikuler...">
            </div>

        </div>
        <!-- Daftar Eskul -->

        <div class="eskul-container">

            @forelse ($ekstrakurikulers as $eskul)

                <div class="eskul-card">

                    <div class="eskul-img-wrapper">

                        <img src="{{ asset('assets/images/' . $eskul->gambar) }}" alt="{{ $eskul->nama }}"
                            class="eskul-img">

                        <span class="eskul-badge">
                            {{ $eskul->kategori }}
                        </span>

                    </div>

                    <div class="eskul-body">

                        <h3 class="eskul-title">
                            {{ $eskul->nama }}
                        </h3>

                        <p class="eskul-desc">
                            {{ $eskul->deskripsi }}
                        </p>

                        <div class="eskul-info">

                            <div class="eskul-info-item">

                                <i class="bi bi-person-badge"></i>

                                <span>
                                    Pembina:
                                    <strong>
                                        {{ $eskul->pembina }}
                                    </strong>
                                </span>

                            </div>

                            <div class="eskul-info-item">

                                <i class="bi bi-calendar3"></i>

                                <span>
                                    Jadwal:
                                    <strong>
                                        {{ $eskul->jadwal }}
                                    </strong>
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="alert alert-info">
                    Belum ada data ekstrakurikuler.
                </div>

            @endforelse

        </div>


        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>