<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Pengguna - SI Sekolah</title>
</head>

<body>

    <h1>Data Pengguna</h1>

    {{-- Pesan berhasil --}}
    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    {{-- Pesan error --}}
    @if(session('error'))
        <p style="color: red;">
            {{ session('error') }}
        </p>
    @endif

    <a href="{{ route('pengguna.create') }}">
        + Tambah Pengguna
    </a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse($users as $user)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>

                    <td>
                        <a href="{{ route('pengguna.edit', $user->id_user) }}">
                            Edit
                        </a>

                        <form
                            action="{{ route('pengguna.destroy', $user->id_user) }}"
                            method="POST"
                            style="display:inline;"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('Yakin ingin menghapus pengguna ini?')"
                            >
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="6">
                        Belum ada data pengguna.
                    </td>
                </tr>

            @endforelse

        </tbody>
    </table>

</body>
</html>