<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - SMK YPC</title>

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

        /* ACTION & FILTER BAR */
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

        .filter-group {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .search-box {
            position: relative;
            width: 280px;
        }

        .search-box input {
            width: 100%;
            padding: 9px 16px 9px 40px;
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

        .select-filter {
            padding: 9px 14px;
            border: 1px solid #e2e8e5;
            border-radius: 10px;
            outline: none;
            font-size: 14px;
            background: #f8faf9;
            color: #334155;
            cursor: pointer;
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

        /* CARD TABEL */
        .card-table {
            background: white;
            border-radius: 20px;
            border: 1px solid #eef2f0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            padding: 24px;
            overflow: hidden;
        }

        .table-custom {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .table-custom th {
            background: #f8faf9;
            color: #475569;
            font-weight: 700;
            font-size: 13px;
            padding: 14px 16px;
            border-bottom: 2px solid #eef2f0;
            text-align: left;
        }

        .table-custom td {
            padding: 16px;
            border-bottom: 1px solid #f1f5f9;
            font-size: 14px;
            color: #334155;
            vertical-align: middle;
        }

        .table-custom tr:hover td {
            background: #fcfdfc;
        }

        /* SISWA AVATAR & BADGE */
        .siswa-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .siswa-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #a7f3d0;
        }

        .siswa-nama {
            font-weight: 700;
            color: #0f172a;
        }

        .siswa-nisn {
            font-size: 12px;
            color: #64748b;
        }

        .badge-jurusan {
            background: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
            display: inline-block;
        }

        .badge-status {
            background: #dcfce7;
            color: #15803d;
            font-size: 11px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 12px;
        }

        /* TOMBOL AKSI */
        .btn-action {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #e2e8e5;
            background: white;
            color: #475569;
            transition: 0.2s;
            text-decoration: none;
        }

        .btn-action:hover {
            background: #059669;
            color: white;
            border-color: #059669;
        }

        .btn-action.delete:hover {
            background: #ef4444;
            color: white;
            border-color: #ef4444;
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

    {{-- SIDEBAR --}}
    @include('layout.sidebar')

    {{-- KONTEN UTAMA --}}
    <main class="content">

        <!-- HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Data Siswa</h1>
                <p class="page-description">Kelola informasi data siswa SMK YPC Tasikmalaya</p>
            </div>
        </div>

        <!-- BAR PENCARIAN & FILTER -->
        <div class="action-bar">
            <div class="filter-group">
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Cari nama atau NISN...">
                </div>



            </div>

            <a href="#" class="btn-tambah">
                <i class="bi bi-person-plus-fill"></i> Tambah Siswa
            </a>
        </div>

        <!-- TABEL DATA SISWA -->
        <div class="card-table">
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Siswa</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Jenis Kelamin</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($siswa as $item)

                            <tr>

                                {{-- NO --}}
                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                {{-- SISWA --}}
                                <td>
                                    <div class="siswa-info">

                                        <img src="{{ asset('assets/images/avatar.png') }}" alt="Avatar"
                                            class="siswa-avatar">

                                        <div>

                                            <div class="siswa-nama">
                                                {{ $item->nama }}
                                            </div>

                                            <div class="siswa-nisn">
                                                NISN: {{ $item->nisn }}
                                            </div>

                                        </div>

                                    </div>
                                </td>

                                {{-- KELAS --}}
                                <td>
                                    <strong>
                                        {{ $item->kelas }}
                                    </strong>
                                </td>

                                {{-- JURUSAN --}}
                                <td>
                                    <span class="badge-jurusan">
                                        {{ $item->jurusan }}
                                    </span>
                                </td>

                                {{-- JENIS KELAMIN --}}
                                <td>
                                    {{ $item->jenis_kelamin }}
                                </td>

                                {{-- STATUS --}}
                                <td>
                                    <span class="badge-status">
                                        {{ $item->status }}
                                    </span>
                                </td>

                                {{-- AKSI --}}
                                <td class="text-center">

                                    <a href="#" class="btn-action" title="Detail">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a href="#" class="btn-action" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <a href="#" class="btn-action delete" title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </a>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>