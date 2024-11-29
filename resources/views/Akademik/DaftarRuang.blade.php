<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia - Daftar Ruangan</title>
    <link rel="stylesheet" href="{{ asset('css/Akademik/DaftarRuang.css') }}">
</head>
<body>
    <x-navbar>Bagian Akademik</x-navbar>
    

    <div class="container">
        <button class="back-btn" onclick="history.back()">← Back</button>

        <div class="title">
            <h2>Daftar Ruang</h2>
        </div>
        <div class="card">
            <div class="accordion">
                <x-table-gedung>
                    Gedung A 
                    <div class="room">
                        <span class="room-status">Informatika, Fisika</span>
                    </div>
                </x-table-gedung>
                <x-table-gedung>
                    Gedung B 
                    <div class="room">
                        <span class="room-status">Statistika, Biologi</span>
                    </div>
                </x-table-gedung>
                <x-table-gedung>
                    Gedung C
                    <div class="room">
                        <span class="room-status">Fisika, Statistika</span>
                    </div>
                </x-table-gedung>
                <x-table-gedung>
                    Gedung D 
                    <div class="room">
                        <span class="room-status">Informatika, Biologi</span>
                    </div>
                </x-table-gedung>
                <x-table-gedung>
                    Gedung E 
                    <div class="room">
                        <span class="room-status">Matematika, Kimia</span>
                    </div>
                </x-table-gedung>
        </div>
    </div>
    <script>
        function redirectTodashboard() {
            window.location.href = "{{ route('dashboard') }}";
        }
    </script>
</body>
</html>
