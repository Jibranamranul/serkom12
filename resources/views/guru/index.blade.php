<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Guru - SI Sekolah</title>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

        /* ================= SIDEBAR ================= */

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

        .menu-title {
            color: #6f8b82;
            font-size: 10px;
            font-weight: bold;
            margin: 25px 10px 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

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

        /* ================= CONTENT ================= */

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

        /* ================= ALERT ================= */

        .alert-success {
            background: #dcfce7;
            color: #166534;
            padding: 13px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        /* ================= ACTION BAR ================= */

        .action-bar {
            background: white;
            padding: 20px 24px;
            border-radius: 16px;
            border: 1px solid #eef2f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        }

        .search-box {
            position: relative;
            width: 280px;
        }

        .search-box input {
            width: 100%;
            padding: 11px 14px 11px 40px;
            border: 1px solid #d9e2df;
            border-radius: 9px;
            outline: none;
        }

        .search-box input:focus {
            border-color: #059669;
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
            cursor: pointer;
            text-decoration: none;
        }

        .btn-tambah:hover {
            background: #047857;
        }

        /* ================= GURU ================= */

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

        /* ================= ACTION GURU ================= */

        .guru-actions {
            display: flex;
            gap: 8px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #edf1f0;
        }

        .btn-edit {
            background: #059669;
            color: white;
            padding: 8px 12px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 12px;
        }

        .btn-edit:hover {
            background: #047857;
        }

        .btn-delete {
            background: #dc2626;
            color: white;
            padding: 8px 12px;
            border-radius: 8px;
            border: none;
            font-size: 12px;
            cursor: pointer;
        }

        .btn-delete:hover {
            background: #b91c1c;
        }

        .empty-data {
            background: white;
            padding: 30px;
            border-radius: 12px;
            color: #637b8a;
        }

        /* ================= RESPONSIVE ================= */

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
                padding: 25px;
            }

            .guru-container {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

    <!-- ================= SIDEBAR ================= -->

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

        @if(auth()->user()->role === 'operator')

            <a href="{{ route('pengguna.index') }}" class="menu-item">
                <i class="bi bi-person-gear"></i>
                <span>Pengguna</span>
            </a>

        @endif

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button type="submit"
                class="menu-item"
                style="width:100%; background:none; border:none; cursor:pointer; text-align:left;">

                <i class="bi bi-box-arrow-right"></i>

                <span>Logout</span>

            </button>

        </form>

    </aside>


    <!-- ================= CONTENT ================= -->

    <main class="main-content">

        <h1 class="page-title">
            Data Guru
        </h1>

        <p class="page-description">
            Daftar guru dan tenaga pendidik SMK YPC Tasikmalaya
        </p>


        {{-- Pesan sukses --}}

        @if(session('success'))

            <div class="alert-success">
                <i class="bi bi-check-circle"></i>
                {{ session('success') }}
            </div>

        @endif


        <!-- SEARCH & BUTTON -->

        <div class="action-bar">

            <div class="search-box">

                <i class="bi bi-search"></i>

                <input
                    type="text"
                    id="searchGuru"
                    placeholder="Cari nama atau NIP..."
                >

            </div>


            {{-- Tombol tambah hanya operator --}}

            @if(auth()->user()->role === 'operator')

                <a href="{{ route('guru.create') }}"
                    class="btn-tambah">

                    <i class="bi bi-person-plus-fill"></i>

                    Tambah Guru

                </a>

            @endif

        </div>


        <!-- DATA GURU -->

        <div class="guru-container">

            @forelse($guru as $item)

                <div class="guru-card">

                    <!-- FOTO -->

                    <div class="guru-img-wrapper">

                        @if($item->foto)

                            <img
                                src="{{ asset('assets/images/' . $item->foto) }}"
                                alt="{{ $item->nama }}"
                                class="guru-img"
                            >

                        @else

                            <div style="
                                height:100%;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                color:#637b8a;
                            ">

                                <i class="bi bi-person"
                                    style="font-size:60px;">
                                </i>

                            </div>

                        @endif

                    </div>


                    <!-- DATA -->

                    <div class="guru-body">

                        <h3 class="guru-title">
                            {{ $item->nama }}
                        </h3>

                        <div class="guru-jabatan">
                            {{ $item->jabatan }}
                        </div>


                        <div class="guru-info">

                            <div class="guru-info-item">

                                <i class="bi bi-person-vcard"></i>

                                <span>
                                    NIP:
                                    <strong>
                                        {{ $item->nip ?: '-' }}
                                    </strong>
                                </span>

                            </div>


                            <div class="guru-info-item">

                                <i class="bi bi-envelope"></i>

                                <span>
                                    {{ $item->email ?: '-' }}
                                </span>

                            </div>


                            <div class="guru-info-item">

                                <i class="bi bi-telephone"></i>

                                <span>
                                    {{ $item->no_hp ?: '-' }}
                                </span>

                            </div>


                            <div class="guru-info-item">

                                <i class="bi bi-geo-alt"></i>

                                <span>
                                    {{ $item->alamat ?: '-' }}
                                </span>

                            </div>

                        </div>


                        {{-- Edit & Hapus hanya operator --}}

                        @if(auth()->user()->role === 'operator')

                            <div class="guru-actions">

                                <a
                                    href="{{ route('guru.edit', $item->id) }}"
                                    class="btn-edit"
                                >

                                    <i class="bi bi-pencil-square"></i>

                                    Edit

                                </a>


                                <form
                                    action="{{ route('guru.destroy', $item->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data guru ini?')"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn-delete"
                                    >

                                        <i class="bi bi-trash"></i>

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        @endif

                    </div>

                </div>

            @empty

                <div class="empty-data">

                    <i class="bi bi-info-circle"></i>

                    Belum ada data guru.

                </div>

            @endforelse

        </div>

    </main>


    <!-- ================= SEARCH ================= -->

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