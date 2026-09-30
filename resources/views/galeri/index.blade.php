<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri - SMK YPC</title>

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

        .content {
            margin-left: 240px;
            padding: 40px;
            min-height: 100vh;
        }

        .content h1 {
            margin-top: 0;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .description {
            color: #637b8a;
            margin-bottom: 30px;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .gallery-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
            transition: 0.2s;
        }

        .gallery-card:hover {
            transform: translateY(-4px);
        }

        .gallery-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .no-image {
            width: 100%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e8f1ee;
            color: #637b8a;
        }

        .gallery-body {
            padding: 18px;
        }

        .gallery-title {
            font-size: 17px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .gallery-date {
            font-size: 12px;
            color: #00a77b;
            margin-bottom: 10px;
        }

        .gallery-description {
            font-size: 13px;
            color: #637b8a;
            line-height: 1.6;
        }

        .empty-data {
            background: white;
            padding: 30px;
            border-radius: 15px;
            color: #637b8a;
        }

        @media (max-width: 1100px) {
            .gallery-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 700px) {
            .content {
                margin-left: 200px;
                padding: 25px;
            }

            .gallery-container {
                grid-template-columns: 1fr;
            }
        }

    </style>

</head>

<body>

 <!-- Sidebar -->
    @include('layout.sidebar')


    <main class="content">

        <h1>Galeri</h1>

        <p class="description">
            Dokumentasi kegiatan dan aktivitas SMK YPC Tasikmalaya
        </p>


        <div class="gallery-container">

            @forelse ($galeris as $galeri)

                <div class="gallery-card">

                    @if ($galeri->gambar)

                        <img
                            src="{{ asset('assets/images/' . $galeri->gambar) }}"
                            alt="{{ $galeri->judul }}"
                            class="gallery-image"
                        >

                    @else

                        <div class="no-image">
                            <i class="bi bi-image" style="font-size:40px;"></i>
                        </div>

                    @endif


                    <div class="gallery-body">

                        <div class="gallery-title">
                            {{ $galeri->judul }}
                        </div>

                        <div class="gallery-date">

                            <i class="bi bi-calendar3"></i>

                            {{ $galeri->tanggal }}

                        </div>

                        <div class="gallery-description">

                            {{ $galeri->keterangan }}

                        </div>

                    </div>

                </div>

            @empty

                <div class="empty-data">

                    <i class="bi bi-images"></i>

                    Belum ada data galeri.

                </div>

            @endforelse

        </div>

    </main>

</body>

</html>