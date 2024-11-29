<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia</title>
    <link rel="stylesheet" href="{{ asset('css/dashboardPA.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="navbar">
        <h1 class="logo">Sinar Akademia</h1>
        <div class="user-info">
            <div class="user-icon">👤</div>
            <span class="user-role">Dosen</span>
            <div class="dropdown">⏷</div>
        </div>
    </header>

    <main class="container">
        <section class="profile-card">
            <div class="profile-image">
                <img src="https://via.placeholder.com/80" alt="Profile Icon">
            </div>
            <div class="profile-info">
                <div class="info-row">
                    <span>Nama :</span> <span>Aris Sugiharto</span>
                    <span>Email :</span> <span>arissugiharto@gmail.com</span>
                </div>
                <div class="info-row">
                    <span>Tanggal Lahir :</span> <span>11-08-1971</span>
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
            <div class="menu-card"  onclick=" redirectToJadwal()">
                <div class="menu-icon">🎓</div>
                <p>Penjadwalan</p>
            </div>
            <div class="menu-card">
                <div class="menu-icon">👨‍👩‍👧‍👦</div>
                <p>Perwalian</p>
            </div>
        </section>
    </main>
</body>
</html>

<script>
    function redirectToJadwal() {
            window.location.href = "{{ route('kaprodi.jadwal') }}";
        }
</script>
