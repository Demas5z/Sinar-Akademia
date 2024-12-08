<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia</title>
    <link rel="stylesheet" href="{{ asset('css/Dekan/dashboardDekan.css') }}">
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
            <div class="menu-card" onclick="redirectToPersetujuan()">
                <div class="menu-icon">📖</div>
                <p>Persetujuan</p>
            </div>
        </section>
    </main>

    <script>
        function redirectToPersetujuan() {
            window.location.href = "{{ route('persetujuan.dekan') }}";
        }
    </script>
</body>
</html>
