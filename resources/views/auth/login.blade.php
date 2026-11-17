<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Akademik</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .card { background: #fff; padding: 28px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); width: 100%; max-width: 400px; }
        h2 { margin-top: 0; color: #1f2937; }
        .form-group { margin-bottom: 14px; }
        label { display: block; margin-bottom: 6px; font-weight: bold; font-size: 14px; }
        input { width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #b91c1c; color: #fff; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; }
        button:hover { background: #991b1b; }
        .error { background: #fee2e2; color: #991b1b; padding: 10px; border-radius: 6px; margin-bottom: 14px; font-size: 14px; }
        .info-box { margin-top: 18px; padding: 12px; background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 6px; font-size: 13px; color: #374151; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Login Aplikasi Akademik</h2>

        @if ($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Masuk</button>
        </form>

        <div class="info-box">
            <strong>Akun Pengujian (Password: password123):</strong><br>
            Admin: admin@akademik.test<br>
            Dosen: dosen@akademik.test<br>
            Mahasiswa: mahasiswa@akademik.test
        </div>
    </div>
</body>
</html>