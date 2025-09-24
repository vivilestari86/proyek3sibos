<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Customer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Bagian header biru melengkung */
        .header {
            background: #1a1aff; /* biru tua */
            height: 250px;
            border-bottom-left-radius: 50% 40%;
            border-bottom-right-radius: 50% 40%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 22px;
        }

        .header p {
            margin: 5px 0 0;
            font-size: 14px;
        }

        /* Container form */
        .container {
            width: 400px;
            margin: -80px auto 40px;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #1a1aff;
        }

        input, button {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        button {
            background: #0000ff;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0000cc;
        }

        .success {
            color: green;
            text-align: center;
            margin-top: 10px;
        }

        .errors {
            color: red;
            margin-top: 10px;
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .register-link a {
            color: #1a1aff;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Bagian biru atas -->
    <div class="header">
        <h1>Selamat Datang Kembali</h1>
        <p>Silakan login untuk melanjutkan</p>
    </div>

    <!-- Form Login -->
    <div class="container">
        <h3>LOGIN</h3>

        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="register-link">
            <p>Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a></p>
        </div>
    </div>
</body>
</html>
