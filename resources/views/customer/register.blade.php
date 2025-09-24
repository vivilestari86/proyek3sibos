<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Customer</title>
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

        input, select, button {
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
    </style>
</head>
<body>
    <!-- Bagian biru atas -->
    <div class="header">
        <h1>Selamat Datang di Layanan Service Rumah Tangga</h1>
        <p>Nikmati layanan kami sesuai kebutuhan anda</p>
    </div>

    <!-- Form Registrasi -->
    <div class="container">
        <h3>DAFTAR</h3>

        <form action="{{ url('/register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nama" required>
            <input type="text" name="alamat" placeholder="Alamat" required>
            <input type="text" name="no_hp" placeholder="No Handphone" required>
            
            <select name="jenis_kelamin" required>
                <option value="">Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Daftar</button>
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
    </div>
</body>
</html>
