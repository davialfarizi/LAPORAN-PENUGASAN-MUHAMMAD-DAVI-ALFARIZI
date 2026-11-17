<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Aplikasi Akademik</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; margin: 0; color: #1f2937; }
        header { background: #b91c1c; color: #fff; padding: 14px 24px; display: flex; justify-content: space-between; align-items: center; }
        .user-info { font-size: 14px; }
        .badge { background: #fff; color: #b91c1c; padding: 3px 8px; border-radius: 4px; font-weight: bold; text-transform: uppercase; font-size: 12px; margin-left: 6px; }
        nav { background: #1f2937; padding: 10px 24px; display: flex; flex-wrap: wrap; gap: 12px; }
        nav a { color: #f3f4f6; text-decoration: none; font-size: 14px; padding: 6px 10px; border-radius: 4px; }
        nav a:hover { background: #374151; }
        .container { max-width: 900px; margin: 24px auto; background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
        .btn-logout { background: #111827; color: #fff; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer; margin-left: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { border: 1px solid #d1d5db; padding: 10px; text-align: left; }
        th { background: #f3f4f6; }
    </style>
</head>
<body>
    <header>
        <div><strong>Sistem Informasi Akademik</strong></div>
        <div class="user-info">
            {{ auth()->user()->name }}
            <span class="badge">{{ auth()->user()->role }}</span>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    </header>

    <nav>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('manajemen.pengguna') }}">Manajemen Pengguna</a>
        <a href="{{ route('kelola.materi') }}">Kelola Materi</a>
        <a href="{{ route('lihat.materi') }}">Lihat Materi</a>
        <a href="{{ route('kelola.nilai') }}">Kelola Nilai</a>
        <a href="{{ route('lihat.nilai') }}">Lihat Nilai Pribadi</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>