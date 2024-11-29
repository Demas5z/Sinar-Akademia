<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia</title>
    <link rel="stylesheet" href="{{ asset('css/PembimbingAkademik/verifikasiIRS.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div id="content">
        <div class="navbar">
            <div class="logo">Sinar Akademia</div>
            <div class="user-info">
                <div class="user-role">Pembimbing Akademik</div>
            </div>
        </div>

        <div class="container">
            <button class="back-btn" onclick="history.back()">← Back</button>
            <div class="header">
                <h1>IRS - INDEX</h1>
                <div class="info">
                    <p>Nama: M. Dimas Seputra</p>
                    <p>NIM: 24000122140159</p>
                    <p>Prodi: Informatika</p>
                    <p>Tahun Ajaran: 2024/2025 Ganjil</p>
                </div>
            </div>
            <div class="card">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Kode MK</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Semester</th>
                            <th>SKS</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PAIK6501</td>
                            <td>Pengembangan berbasis Platform</td>
                            <td>5</td>
                            <td>4</td>
                            <td>BARU</td>
                        </tr>
                        <tr>
                            <td>PAIK6504</td>
                            <td>Proyek Perangkat Lunak</td>
                            <td>5</td>
                            <td>3</td>
                            <td>BARU</td>
                        </tr>
                        <tr>
                            <td>PAIK6503</td>
                            <td>Sistem Informasi</td>
                            <td>5</td>
                            <td>3</td>
                            <td>BARU</td>
                        </tr>
                        <tr>
                            <td>PAIK6301</td>
                            <td>Pembelajaran Mesin</td>
                            <td>5</td>
                            <td>3</td>
                            <td>BARU</td>
                        </tr>
                        <tr>
                            <td>PAIK6502</td>
                            <td>Komputasi Tersebar dan Paralel</td>
                            <td>5</td>
                            <td>3</td>
                            <td>BARU</td>
                        </tr>
                    </tbody>
                </table>
                <div class="buttons">
                    <button class="agree">Setuju</button>
                    <button class="disagree">Tidak Setuju</button>
                </div>
            </div>
        </div>
    </div>

    <div id="blur-message" class="blur-message">
        <div class="popup">
            <h2>Anda telah menyetujui IRS</h2>
            <button onclick="closePopup()">Tutup</button>
        </div>
    </div>

    <script>
document.querySelector('.agree').addEventListener('click', function() {
    document.getElementById('table').classList.add('blur');
    document.getElementById('blur-message').classList.add('show');
});

document.querySelector('.disagree').addEventListener('click', function() {
    document.getElementById('table').classList.remove('blur');
    document.getElementById('blur-message').classList.remove('show');
});


function closePopup() {
    document.getElementById('blur-message').classList.remove('show');
    document.getElementById('table').classList.remove('blur');
}

    </script>
</body>
</html>
