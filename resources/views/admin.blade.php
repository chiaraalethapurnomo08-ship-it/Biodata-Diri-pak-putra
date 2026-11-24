
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Diri</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #ffe0ed, #fce4ec, #f8bbd0);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 15px;
        }

        .container {
            width: 100%;
            max-width: 550px;
            background: white;
            padding: 35px;
            border-radius: 25px;
            box-shadow: 0 10px 35px rgba(190, 70, 120, 0.15);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header .icon {
            font-size: 45px;
            margin-bottom: 10px;
        }

        .header h1 {
            color: #d94f86;
            font-size: 28px;
            margin-bottom: 8px;
        }

        .header p {
            color: #999;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            color: #a83d6c;
            font-weight: 600;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #f2c4d6;
            border-radius: 12px;
            outline: none;
            font-size: 14px;
            background: #fff8fb;
            color: #555;
            transition: 0.3s;
        }

        input:focus, select:focus {
            border-color: #e879a8;
            box-shadow: 0 0 0 3px #fce4ec;
            background: white;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #ec79a8, #d94f86);
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px #e9a3bf;
        }

        .back {
            text-align: center;
            margin-top: 22px;
        }

        .back a {
            color: #d94f86;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .back a:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            font-size: 12px;
            color: #c58ca5;
        }

        @media (max-width: 480px) {
            .container {
                padding: 25px 20px;
            }

            .header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <div class="icon">🌷</div>
        <h1>Form Biodata Diri</h1>
        <p>Silakan lengkapi data diri kamu di bawah ini ♡</p>
    </div>

    <form action="/admin" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama"
            placeholder="Masukkan nama lengkap kamu" required>
        </div>

        <div class="form-group">
            <label>Tempat, Tanggal Lahir</label>
            <input type="text" name="ttl"
            placeholder="Contoh: Sidoarjo, 20 Juni 2009" required>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat"
            placeholder="Masukkan alamat kamu" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="">Pilih jenis kelamin</option>
                <option value="Perempuan">Perempuan</option>
                <option value="Laki-laki">Laki-laki</option>
            </select>
        </div>

        <div class="form-group">
            <label>Hobi</label>
            <input type="text" name="hobi"
            placeholder="Apa hobi kamu?" required>
        </div>

        <div class="form-group">
            <label>Cita-cita</label>
            <input type="text" name="cita_cita"
            placeholder="Apa cita-cita kamu?" required>
        </div>

        <button type="submit">♡ SIMPAN BIODATA</button>

    </form>

    <div class="back">
        <a href="/">← Kembali ke Halaman Utama</a>
    </div>

    <div class="footer">
        Made with love ♡ Biodata Diri
    </div>

</div>

</body>
</html>
