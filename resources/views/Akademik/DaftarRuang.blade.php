<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia - Daftar Ruangan</title>
    <link rel="stylesheet" href="{{ asset('css/Akademik/DaftarRuang.css') }}">
</head>
<body>
    <div class="navbar">
        <div class="logo" onclick="redirectTodashboard()">Sinar Akademia</div>
        <div class="user-info">
            <div class="user-role">Bagian Akademik</div>
        </div>
    </div>
    

    <div class="container">
        <button class="back-btn" onclick="history.back()">← Back</button>
        <div class="title">
            <h1>Daftar Ruang</h1>
        </div>
        <div class="card">
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">Gedung A <span class="status">▼</span></div>
                    <div class="accordion-body">
                        <div class="room">Ruang A101 <span class="room-status">Informatika, Fisika</span></div>
                        <div class="room">Ruang A102 <span class="room-status">Belum disetujui</span></div>
                        <div class="room">Ruang A103 <span class="room-status">Belum disetujui</span></div>
                        <div class="room">Ruang A303 <span class="room-status">Belum disetujui</span></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Gedung B <span class="status">▼</span></div>
                    <div class="accordion-body">
                        <div class="room">Belum disetujui</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Gedung C <span class="status">▼</span></div>
                    <div class="accordion-body">
                        <div class="room">Belum disetujui</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Gedung D <span class="status">▼</span></div>
                    <div class="accordion-body">
                        <div class="room">Belum disetujui</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Gedung E <span class="status">▼</span></div>
                    <div class="accordion-body">
                        <div class="room">Belum disetujui</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const accordionHeaders = document.querySelectorAll('.accordion-header');
        accordionHeaders.forEach(header => {
            header.addEventListener('click', () => {
                const parent = header.parentElement;
            parent.classList.toggle('active');
                });
        });

        function redirectTodashboard() {
            window.location.href = "{{ route('dashboard') }}";
        }
    </script>
</body>
</html>
