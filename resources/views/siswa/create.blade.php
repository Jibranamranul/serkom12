<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Siswa - SMK YPC</title>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            margin: 0;
            background: #f4f6f5;
            font-family: Arial, sans-serif;
        }

        .content {
            margin-left: 260px;
            padding: 35px;
        }

        .card {
            background: white;
            max-width: 800px;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 4px 20px rgba(0,0,0,.05);
        }

        h1 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: 600;
        }

        input,
        select {
            width: 100%;
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
        }

        .btn {
            padding: 11px 18px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-simpan {
            background: #059669;
            color: white;
        }

        .btn-kembali {
            background: #64748b;
            color: white;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    @include('layout.sidebar')

    <main class="content">

        <div class="card">

            <h1>Tambah Siswa</h1>

            @if ($errors->any())
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('siswa.store') }}" method="POST"
                enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" required>
                </div>

                <div class="form-group">
                    <label>NISN</label>
                    <input type="text" name="nisn" value="{{ old('nisn') }}">
                </div>

                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" name="kelas" value="{{ old('kelas') }}" required>
                </div>

                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" value="{{ old('jurusan') }}" required>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>

                    <select name="jenis_kelamin" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Status</label>

                    <select name="status" required>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" accept=".jpg,.jpeg,.png,.webp">
                </div>

                <button type="submit" class="btn btn-simpan">
                    <i class="bi bi-save"></i>
                    Simpan
                </button>

                <a href="{{ route('siswa.index') }}" class="btn btn-kembali">
                    Kembali
                </a>

            </form>

        </div>

    </main>

</body>

</html>