<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - SI Sekolah</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f3;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            width: 400px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            margin: 0;
            color: #003b2d;
        }

        .logo p {
            color: #777;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
        }

        input:focus {
            outline: none;
            border-color: #003b2d;
        }

        .btn-login {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #003b2d;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #005943;
        }

        .error {
            background: #ffe5e5;
            color: #c00;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="logo">
            <h1>🎓 S</h1>
            <p>Silakan login untuk masuk ke sistem</p>
        </div>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ url('/login') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Email</label>

                <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email" required>
            </div>

            <div class="form-group">
                <label>Password</label>

                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn-login">
                Login
            </button>

        </form>

    </div>

</body>

</html>