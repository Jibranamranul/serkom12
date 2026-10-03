<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Guru - SI Sekolah</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* =========================
           RESET
        ========================= */

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f7f6;
            font-family: Arial, sans-serif;
            color: #17231f;
        }


        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            width: 260px;
            height: 100vh;

            position: fixed;
            left: 0;
            top: 0;

            background: #032c1f;

            padding: 22px 18px;

            color: white;

            overflow-y: auto;
        }


        /* =========================
           LOGO
        ========================= */

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


        /* =========================
           JUDUL MENU
        ========================= */

        .menu-title {
            color: #6f8b82;

            font-size: 10px;
            font-weight: bold;

            margin: 25px 10px 10px;

            text-transform: uppercase;

            letter-spacing: 1px;
        }


        /* =========================
           MENU
        ========================= */

        .menu {
            list-style: none;

            padding: 0;
            margin: 0;
        }

        .menu li {
            margin-bottom: 5px;
        }

        .menu a {
            display: flex;
            align-items: center;

            gap: 13px;

            padding: 12px 13px;

            border-radius: 10px;

            color: #a9bbb5;

            text-decoration: none;

            transition: 0.2s;
        }

        .menu a:hover {
            background: #103d2e;
            color: white;
        }

        .menu a.active {
            background: #103d2e;
            color: white;
        }

        .menu a.active i {
            color: #b5f000;
        }

        .menu i {
            width: 22px;

            font-size: 17px;
        }


        /* =========================
           USER
        ========================= */

        .sidebar-user {
            position: absolute;

            bottom: 18px;

            left: 16px;
            right: 16px;

            display: flex;
            align-items: center;

            gap: 10px;

            padding: 12px;

            border: 1px solid #18513e;

            border-radius: 12px;
        }

        .user-avatar {
            width: 38px;
            height: 38px;

            border-radius: 50%;

            background: #b5f000;

            color: #032c1f;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: bold;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-info strong {
            font-size: 13px;
        }

        .user-info small {
            font-size: 10px;

            color: #8da69d;
        }
    

/* KONTEN */

        .content {
            margin-left: 240px;

            padding: 40px;
        }

        .content h1 {
            margin-top: 0;
        }

        .card {
            background: white;

            padding: 25px;

            border-radius: 15px;

            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        }

        .logout-link {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 13px;
            color: #a9bbb5;
            background: none;
            border: none;
            text-decoration: none;
            padding: 12px 13px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 15px;
            font-family: Arial, sans-serif;
            text-align: left;
        }

        .logout-link:hover {
            background: #103d2e;
            color: white;
        }

        .logout-link i {
            width: 22px;
            font-size: 17px;
        }
    </style>

    <!-- #region -->
</head>


<body>


  <!-- SIDEBAR -->

    <aside class="sidebar">

        <!-- LOGO -->
        <div class="brand">

            <i class="bi bi-mortarboard-fill"></i>

            <span>SMK YPC </span>

        </div>


        <!-- MENU -->
        <div class="menu-title">
            MENU
        </div>

        <ul class="menu">

            <li>
                <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">

                    <i class="bi bi-grid-fill"></i>

                    <span>Dashboard</span>

                </a>
            </li>

        </ul>


        <!-- DATA SEKOLAH -->
        <div class="menu-title">
            DATA SEKOLAH
        </div>

        <ul class="menu">

            <li>
                <a href="{{ url('/profil') }}" class="{{ request()->is('profil') ? 'active' : '' }}">

                    <i class="bi bi-building"></i>

                    <span>Profil Sekolah</span>

                </a>
            </li>


            <li>
                <a href="{{ url('/guru') }}" class="{{ request()->is('guru') ? 'active' : '' }}">

                    <i class="bi bi-person-workspace"></i>

                    <span>Guru</span>

                </a>
            </li>


            <li>
                <a href="{{ url('/siswa') }}" class="{{ request()->is('siswa') ? 'active' : '' }}">

                    <i class="bi bi-people-fill"></i>

                    <span>Siswa</span>

                </a>
            </li>

        </ul>


        <!-- KONTEN -->
        <div class="menu-title">
            KONTEN
        </div>

        <ul class="menu">

            <li>
                <a href="{{ url('/ekstrakurikuler') }}" class="{{ request()->is('ekstrakurikuler') ? 'active' : '' }}">

                    <i class="bi bi-trophy-fill"></i>

                    <span>Ekstrakurikuler</span>

                </a>
            </li>


            <li>
                <a href="{{ url('/galeri') }}" class="{{ request()->is('galeri') ? 'active' : '' }}">

                    <i class="bi bi-images"></i>

                    <span>Galeri</span>

                </a>
            </li>


            <li>
                <a href="{{ url('/berita') }}" class="{{ request()->is('berita') ? 'active' : '' }}">

                    <i class="bi bi-newspaper"></i>

                    <span>Berita</span>

                </a>
            </li>

        </ul>


        <!-- SISTEM -->
        <div class="menu-title">
            SISTEM
        </div>

        <ul class="menu">

            <li>
                <a href="{{ url('/user') }}">

                    <i class="bi bi-person-gear"></i>

                    <span>Pengguna</span>

                </a>
            </li>


            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="logout-link">
                        <i class="bi bi-box-arrow-right"></i>
                        Logout
                    </button>
                </form>
            </li>

        </ul>


        <!-- USER ADMIN -->
        <div class="sidebar-user">

            <div class="user-avatar">
                A
            </div>

            <div class="user-info">

                <strong>Administrator</strong>

                <small>admin@email.com</small>

            </div>

        </div>

    </aside>




</body>

</html>