<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia</title>
    <link rel="stylesheet" href="{{ asset('css/Kaprodi/dashboardKaprodi.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>   
    <x-navbar>Dosen</x-navbar>

    <main class="container">
        <section class="profile-card">
            <div class="profile-image">
                <img src="https://via.placeholder.com/80" alt="Profile Icon">
            </div>
            <div class="profile-info">
                <div class="info-row">
                    <div class="info-item">
                        <span class="label">Nama :</span>
                        <span class="value">Aris Sugiharto</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Email :</span>
                        <span class="value">arissugiharto@gmail.com</span>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-item">
                        <span class="label">Tanggal Lahir :</span>
                        <span class="value">11-08-1971</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Kota Lahir :</span>
                        <span class="value">Yogyakarta</span>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-item">
                        <span class="label">Alamat :</span>
                        <span class="value">Jl. Contoh Alamat</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Jabatan Struktural :</span>
                        <span class="value">-</span>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-item">
                        <span class="label">Nomor HP :</span>
                        <span class="value">081234567890</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Jabatan Fungsional :</span>
                        <span class="value">-</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-cards">
            <div class="menu-wrapper">
                <div class="menu-card" onclick="redirectToJadwal()">
                    <div class="icon">📅</div>
                    <p>Penjadwalan</p>
                </div>
            </div>
            <div class="menu-wrapper">
                <div class="menu-card"onclick="redirectToBuatJadwal()">
                    <div class="icon">🗒️</div>
                    <p>Buat Jadwal</p>
                </div>
            </div>
        </section>

        <section class="status-section">
            <div class="status-card waiting">
                <button class="status-button">Menunggu Persetujuan</button>
                <p>Status Penjadwalan</p>
            </div>
            <div class="status-card verified">
                <div class="number">596/730</div>
                <p>Mahasiswa Terverifikasi</p>
            </div>
        </section>
    </main>
</body>
</html>

    <script>
        function redirectToJadwal() {
            window.location.href = "{{ route('kaprodi.jadwal') }}";
        }
        function redirectToBuatJadwal() {
            window.location.href = "{{ route('kaprodi.buatmatkul') }}";
        }
    </script>
    
