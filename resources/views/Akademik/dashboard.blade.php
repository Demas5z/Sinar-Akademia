<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia</title>
    <link rel="stylesheet" href="{{ asset('css/Akademik/dashboardBA.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <x-navbar>Bagian Akademik</x-navbar>

    <main class="container">
        <section class="profile-card">
            <div class="profile-image">
                <img src="" alt="Profile Icon">
            </div>
            <div class="profile-info">
                <div class="info-row">
                    <span>Nama :</span> <span>Nama Dosen</span>
                    <span>Email :</span> <span>email@example.com</span>
                </div>
                <div class="info-row">
                    <span>Tanggal Lahir :</span> <span>01-01-1990</span>
                    <span>Kota Lahir :</span> <span>Yogyakarta</span>
                </div>
                <div class="info-row">
                    <span>Alamat :</span> <span>Jl. Contoh Alamat</span>
                    <span>Jabatan Struktural :</span> <span>-</span>
                </div>
                <div class="info-row">
                    <span>Nomor HP :</span> <span>081234567890</span>
                    <span>Jabatan Fungsional :</span> <span>-</span>
                </div>
            </div>
        </section>

        <section class="menu-section">
            <div class="menu-card" onclick="redirectToDaftarRuang()">
                <div class="menu-icon">🏛️</div>
                <p>Daftar Ruangan</p>
            </div>
        </section>
    </main>
    <script>
        function redirectToDaftarRuang() {
            window.location.href = "{{ route('daftar.ruang') }}";
        }


        function redirectTodashboard() {
            window.location.href = "{{ route('dashboard') }}";
        }
    </script>
</body>
</html>


