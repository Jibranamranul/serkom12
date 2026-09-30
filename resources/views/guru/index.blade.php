<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Guru - SI Sekolah</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7f6;
            color: #102a43;
        }

        /* Sidebar */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;

            width: 260px;
            height: 100vh;

            background: #032c1f;
            color: white;

            padding: 22px 18px;

            overflow-y: auto;
        }


        /* Logo */

        .brand {
            display: flex;
            align-items: center;

            gap: 10px;

            font-size: 21px;
            font-weight: bold;

            margin-bottom: 35px;
        }

        .brand i {
            color: #b5f000;
            font-size: 27px;
        }

        /* Judul Menu */
        .menu-title {
            color: #6f8b82;

            font-size: 10px;
            font-weight: bold;

            margin: 25px 10px 10px;

            text-transform: uppercase;

            letter-spacing: 1px;
        }

        /* Menu */

        .menu-item {
            display: flex;
            align-items: center;

            gap: 13px;

            padding: 12px 13px;

            border-radius: 10px;

            color: #a9bbb5;

            text-decoration: none;

            transition: 0.2s;

            margin-bottom: 5px;
        }

        .menu-item:hover {
            background: #103d2e;
            color: white;
        }

        .menu-item.active {
            background: #103d2e;
            color: white;
        }

        .menu-item.active i {
            color: #b5f000;
        }

        .menu-item i {
            width: 22px;
            font-size: 17px;
        }

        /* Content */
        .main-content {
            margin-left: 260px;

            padding: 40px;

            min-height: 100vh;
        }

        .page-title {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .page-description {
            color: #637b8a;
            font-size: 13px;
            margin-bottom: 38px;
        }

        /* SEARCH */

        .search-box {
            background: white;
            border-radius: 15px;
            padding: 14px 20px;
            margin-bottom: 25px;
        }

        .search-input {
            width: 275px;
            padding: 11px 15px;
            border: 1px solid #dce6e3;
            border-radius: 9px;
            outline: none;
            font-size: 13px;
        }

        .search-input:focus {
            border-color: #00a77b;
        }

        /* GURU */

        .guru-container {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 20px;
        }

        .guru-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
            transition: 0.2s;
        }

        .guru-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.08);
        }

        .guru-img-wrapper {
            height: 220px;
            overflow: hidden;
            background: #e8f1ee;
        }

        .guru-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .guru-body {
            padding: 20px;
        }

        .guru-title {
            font-size: 17px;
            margin-bottom: 8px;
            color: #102a43;
        }

        .guru-jabatan {
            color: #00a77b;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .guru-info {
            border-top: 1px solid #edf1f0;
            padding-top: 13px;
        }

        .guru-info-item {
            display: flex;
            gap: 9px;
            font-size: 11px;
            color: #425466;
            margin-bottom: 9px;
        }

        .guru-info-item i {
            color: #00a77b;
            font-size: 14px;
        }

        .empty-data {
            background: white;
            padding: 30px;
            border-radius: 12px;
            color: #637b8a;
        }

        @media (max-width: 1100px) {
            .guru-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 700px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 200px;
            }

            .guru-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div class="brand">
            <i class="bi bi-mortarboard-fill"></i>
            <span>SMK YPC</span>
        </div>

        <div class="menu-title">
            Menu
        </div>

        <a href="{{ route('dashboard') }}" class="menu-item">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>

        <div class="menu-title">
            Data Sekolah
        </div>

        <a href="{{ route('sekolah') }}" class="menu-item">
            <i class="bi bi-building"></i>
            <span>Profil Sekolah</span>
        </a>

        <a href="{{ route('guru.index') }}" class="menu-item active">
            <i class="bi bi-person-badge"></i>
            <span>Guru</span>
        </a>

        <a href="{{ route('siswa.index') }}" class="menu-item">
            <i class="bi bi-people-fill"></i>
            <span>Siswa</span>
        </a>

        <div class="menu-title">
            Konten
        </div>

        <a href="{{ route('ekstrakurikuler.index') }}" class="menu-item">
            <i class="bi bi-trophy-fill"></i>
            <span>Ekstrakurikuler</span>
        </a>

        <a href="{{ route('galeri') }}" class="menu-item">
            <i class="bi bi-images"></i>
            <span>Galeri</span>
        </a>

        <a href="{{ route('berita') }}" class="menu-item">
            <i class="bi bi-newspaper"></i>
            <span>Berita</span>
        </a>

        <div class="menu-title">
            Sistem
        </div>

        <a href="#" class="menu-item">
            <i class="bi bi-person-gear"></i>
            <span>Pengguna</span>
        </a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit" class="menu-item"
                style="width:100%; background:none; border:none; cursor:pointer; text-align:left;">

                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>

            </button>
        </form>

    </aside>


    <!-- CONTENT -->

    <main class="main-content">

        <h1 class="page-title">
            Data Guru
        </h1>

        <p class="page-description">
            Daftar guru dan tenaga pendidik SMK YPC Tasikmalaya
        </p>


        <!-- SEARCH -->

        <div class="search-box">

            <input type="text" id="searchGuru" class="search-input" placeholder="🔍  Cari guru...">

        </div>


        <!-- DATA GURU -->

        <div class="guru-container">

            @forelse ($gurus as $guru)

                <div class="guru-card">

                    <div class="guru-img-wrapper">

                        @if ($guru->foto)

                            <img src="{{ asset('assets/images/' . $guru->foto) }}" alt="{{ $guru->nama }}" class="guru-img">

                        @else

                            <div style="
                                                                        height:100%;
                                                                        display:flex;
                                                                        align-items:center;
                                                                        justify-content:center;
                                                                        color:#637b8a;
                                                                    ">
                                Tidak ada foto
                            </div>

                        @endif

                    </div>


                    <div class="guru-body">

                        <h3 class="guru-title">
                            {{ $guru->nama }}
                        </h3>

                        <div class="guru-jabatan">
                            {{ $guru->jabatan }}
                        </div>


                        <div class="guru-info">

                            <div class="guru-info-item">
                                <i class="bi bi-person-vcard"></i>

                                <span>
                                    NIP:
                                    <strong>
                                        {{ $guru->nip }}
                                    </strong>
                                </span>
                            </div>


                            <div class="guru-info-item">
                                <i class="bi bi-envelope"></i>

                                <span>
                                    {{ $guru->email }}
                                </span>
                            </div>


                            <div class="guru-info-item">
                                <i class="bi bi-telephone"></i>

                                <span>
                                    {{ $guru->no_hp }}
                                </span>
                            </div>


                            <div class="guru-info-item">
                                <i class="bi bi-geo-alt"></i>

                                <span>
                                    {{ $guru->alamat }}
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="empty-data">
                    Belum ada data guru.
                </div>

            @endforelse

        </div>

    </main>


    <script>

        const searchInput = document.getElementById('searchGuru');

        searchInput.addEventListener('keyup', function () {

            const keyword = this.value.toLowerCase();

            const cards = document.querySelectorAll('.guru-card');

            cards.forEach(function (card) {

                const text = card.innerText.toLowerCase();

                if (text.includes(keyword)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }

            });

        });

    </script>

</body>

</html>