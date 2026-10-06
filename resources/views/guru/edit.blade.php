<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Guru - SI Sekolah</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7f6;
            color: #102a43;
        }

        .content {
            margin-left: 260px;
            padding: 40px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            max-width: 800px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
        }

        input,
        textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #d9e2df;
            border-radius: 8px;
        }

        textarea {
            min-height: 100px;
        }

        .foto-lama {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 10px;
            display: block;
        }

        .buttons {
            margin-top: 25px;
        }

        .btn {
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn-back {
            background: #e5e7eb;
            color: #333;
        }

        .btn-save {
            background: #059669;
            color: white;
        }

        .error {
            color: #dc2626;
            margin-bottom: 20px;
        }

    </style>

</head>

<body>

    <main class="content">

        <div class="card">

            <h1>Edit Data Guru</h1>

            <p>
                Ubah data guru yang dipilih.
            </p>


            @if($errors->any())

                <div class="error">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form
                action="{{ route('guru.update', $guru->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                @method('PUT')


                <div class="form-group">

                    <label>Nama Guru</label>

                    <input
                        type="text"
                        name="nama"
                        value="{{ old('nama', $guru->nama) }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>NIP</label>

                    <input
                        type="text"
                        name="nip"
                        value="{{ old('nip', $guru->nip) }}"
                    >

                </div>


                <div class="form-group">

                    <label>Jabatan</label>

                    <input
                        type="text"
                        name="jabatan"
                        value="{{ old('jabatan', $guru->jabatan) }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email', $guru->email) }}"
                    >

                </div>


                <div class="form-group">

                    <label>No. HP</label>

                    <input
                        type="text"
                        name="no_hp"
                        value="{{ old('no_hp', $guru->no_hp) }}"
                    >

                </div>


                <div class="form-group">

                    <label>Alamat</label>

                    <textarea name="alamat">{{ old('alamat', $guru->alamat) }}</textarea>

                </div>


                <div class="form-group">

                    <label>Foto Saat Ini</label>

                    @if($guru->foto)

                        <img
                            src="{{ asset('assets/images/' . $guru->foto) }}"
                            class="foto-lama"
                        >

                    @else

                        <p>Tidak ada foto.</p>

                    @endif

                </div>


                <div class="form-group">

                    <label>Ganti Foto</label>

                    <input
                        type="file"
                        name="foto"
                        accept=".jpg,.jpeg,.png,.webp"
                    >

                    <small>
                        Kosongkan jika tidak ingin mengganti foto.
                    </small>

                </div>


                <div class="buttons">

                    <a
                        href="{{ route('guru.index') }}"
                        class="btn btn-back"
                    >
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-save"
                    >
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

    </main>

</body>

</html>