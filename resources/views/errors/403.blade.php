<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Akses Ditolak</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fef2f2; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .box { background: #fff; border: 1px solid #fecaca; padding: 32px; border-radius: 8px; text-align: center; max-width: 450px; }
        h1 { color: #b91c1c; font-size: 48px; margin: 0 0 10px; }
        p { color: #374151; margin-bottom: 20px; }
        a { display: inline-block; background: #1f2937; color: #fff; text-decoration: none; padding: 10px 18px; border-radius: 6px; }
    </style>
</head>
<body>
    <div class="box">
        <h1>403</h1>
        <h2>Akses Ditolak</h2>
        <p>{{ $exception->getMessage() ?: 'Anda tidak memiliki hak akses ke halaman ini!' }}</p>
        <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
    </div>
</body>
</html>