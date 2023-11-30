<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/form.css">
    <title>Form Pemesanan Tiket</title>
</head>
<body>
    <h1 class="form-title">Form Pemesanan Tiket</h1>
    <form action="{{ url('save-book') }}" method="post">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        @csrf
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama_lengkap">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="telepon" name="no_telp">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal Pemesanan:</label>
            <input type="date" id="tanggal" name="tgl_pemesanan">
        </div>

        <input type="submit" value="Kirim" style="margin-top: 10px; margin-bottom: 0;">

        @if(session('pdfLink'))
            <div style="text-align: center;">
                <a href="{{ asset(session('pdfLink')) }}" style="text-decoration: none;" download>
                    <button class="unduh-pdf-button" id="downloadBtn">Unduh PDF</button>
                </a>
            </div>
        @endif

    </form>

    <center>
        <button class="back-btn"><a href="{{ route('home') }}" style="text-decoration: none; color: white;">Kembali</a></button>
    </center>

</body>
</html>
