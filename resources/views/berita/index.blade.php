<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Berita - SMK YPC</title>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f7f6;
            font-family: Arial, sans-serif;
            color: #17231f;
        }
/* CONTENT */

        .content {
            margin-left: 240px;
            padding: 40px;
        }

        .content h1 {
            margin-top: 0;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .description {
            color: #637b8a;
            font-size: 14px;
            margin-bottom: 30px;
        }

    /* BERITA */
        .berita-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .berita-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.05);
            transition: 0.2s;
        }

        .berita-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        .berita-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
            background: #e8f1ee;
        }

        .no-image {
            height: 200px;
            background: #e8f1ee;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #637b8a;
        }

        .berita-body {
            padding: 20px;
        }

        .berita-tanggal {
            color: #00a77b;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .berita-title {
            font-size: 18px;
            margin: 0 0 12px;
            color: #102a43;
        }

        .berita-isi {
            color: #637b8a;
            font-size: 13px;
            line-height: 1.6;
        }

        .empty-data {
            background: white;
            padding: 30px;
            border-radius: 15px;
            color: #637b8a;
        }
/* RESPONSIVE */

        @media (max-width: 1100px) {

            .berita-container {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 700px) {

            .content {
                margin-left: 200px;
                padding: 25px;
            }

            .berita-container {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

    {{-- SIDEBAR --}}
    @include('layout.sidebar')

<!-- CONTENT -->

    <main class="content">

        <h1>Berita Sekolah</h1>

        <p class="description">
            Informasi dan berita terbaru SMK YPC Tasikmalaya
        </p>

<!-- DATA BERITA -->

        <div class="berita-container">

            @forelse ($beritas as $berita)

                <div class="berita-card">

                    {{-- GAMBAR --}}
                    @if ($berita->gambar)

                        <img
                            src="{{ asset('assets/images/' . $berita->gambar) }}"
                            alt="{{ $berita->judul }}"
                            class="berita-image"
                        >

                    @else

                        <div class="no-image">
                            <i class="bi bi-image" style="font-size:40px;"></i>
                        </div>

                    @endif


                    <div class="berita-body">

                        {{-- TANGGAL --}}
                        <div class="berita-tanggal">

                            <i class="bi bi-calendar3"></i>

                            {{ $berita->tanggal->format('d M Y') }}

                        </div>


                        {{-- JUDUL --}}
                        <h2 class="berita-title">

                            {{ $berita->judul }}

                        </h2>


                        {{-- ISI --}}
                        <p class="berita-isi">

                            {{ Str::limit($berita->isi, 150) }}

                        </p>

                    </div>

                </div>

            @empty

                <div class="empty-data">

                    <i class="bi bi-newspaper"></i>

                    Belum ada berita sekolah.

                </div>

            @endforelse

        </div>

    </main>


</body>

</html>