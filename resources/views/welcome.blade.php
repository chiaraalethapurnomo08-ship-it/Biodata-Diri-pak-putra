
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ffe4ef;
            padding: 30px;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 20px #e8b5ca;
        }

        h1, h2 {
            text-align: center;
            color: #d94f86;
        }

        .data {
            background: #fff1f6;
            padding: 15px;
            margin: 12px 0;
            border-radius: 10px;
            color: #8e4264;
        }

        a {
            display: block;
            text-align: center;
            background: #df6396;
            color: white;
            padding: 13px;
            margin-top: 20px;
            border-radius: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>SELAMAT DATANG</h1>
    <h2>BIODATA DIRI</h2>

    @if($biodata)

        <div class="data">
            <b>Nama Lengkap:</b> {{ $biodata['nama'] }}
        </div>

        <div class="data">
            <b>Tempat, Tanggal Lahir:</b> {{ $biodata['ttl'] }}
        </div>

        <div class="data">
            <b>Alamat:</b> {{ $biodata['alamat'] }}
        </div>

        <div class="data">
            <b>Jenis Kelamin:</b> {{ $biodata['jenis_kelamin'] }}
        </div>

        <div class="data">
            <b>Hobi:</b> {{ $biodata['hobi'] }}
        </div>

        <div class="data">
            <b>Cita-cita:</b> {{ $biodata['cita_cita'] }}
        </div>

    @else

        <p style="text-align:center">
            Biodata belum diisi.
        </p>

    @endif

    <a href="/admin">EDIT BIODATA</a>

</div>

</body>
</html>
