<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia</title>
    <link rel="stylesheet" href="{{ asset('css/Dekan/Persetujuan.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="navbar">
        <h1 class="logo">Sinar Akademia</h1>
        <div class="user-info">
            <div class="user-icon">👤</div>
            <span class="user-role">Dekan</span>
            <div class="dropdown">⏷</div>
        </div>
    </header>
    
    
    <main class="container">
    <button class="back-btn" onclick="history.back()">← Back</button>
        <section class="menu-section">
            <div class="menu-card" onclick="redirectToPersetujuanJadwal()">
                <div class="menu-icon">📅</div>
                <p>Jadwal Kuliah</p>
            </div>
            <div class="menu-card" onclick="redirectToPersetujuanRuang()">
                <div class="menu-icon">🏛️</div>
                <p>Ruangan</p>
            </div>
        </section>
    </main>

    <script>
        function redirectToPersetujuanJadwal() {
            window.location.href = "{{ route('persetujuan.jadwal.dekan') }}";
        }
        function redirectToPersetujuanRuang() {
            window.location.href = "{{ route('persetujuan.ruang.dekan') }}";
        }
    </script>
</body>
</html>
