<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia - Daftar Ruangan</title>
    <link rel="stylesheet" href="{{ asset('css/Akademik/BuatDaftarRuang.css') }}">
</head>
<body>
    <x-navbar>Bagian Akademik</x-navbar>

    <div class="container">
        <button class="back-btn" onclick="history.back()">← Back</button>

        <div class="header">
            <h2>Buat Daftar Ruangan</h2>
            <div class="header-actions">
                <button class="upload-btn">Upload Daftar</button>
            </div>
        </div>

        <div class="card">
            <div class="accordion">
                <x-table-gedung>
                    Gedung A
                    <div class="room">
                        <select>
                            <option value="">Program Studi</option>
                            <option value="">Biologi</option>
                            <option value="">Fisika</option>
                            <option value="">Informatika</option>
                            <option value="">Kimia</option>
                            <option value="">Matematika</option>
                            <option value="">Statistika</option>
                        </select>
                        <select>
                            <option value="">Program Studi</option>
                            <option value="">Biologi</option>
                            <option value="">Fisika</option>
                            <option value="">Informatika</option>
                            <option value="">Kimia</option>
                            <option value="">Matematika</option>
                            <option value="">Statistika</option>
                        </select>
                </div>
                </x-table-gedung>
                <x-table-gedung>
                    Gedung B
                    <div class="room">
                        <select>
                            <option value="">Program Studi</option>
                            <option value="">Biologi</option>
                            <option value="">Fisika</option>
                            <option value="">Informatika</option>
                            <option value="">Kimia</option>
                            <option value="">Matematika</option>
                            <option value="">Statistika</option>
                        </select>
                        <select>
                            <option value="">Program Studi</option>
                            <option value="">Biologi</option>
                            <option value="">Fisika</option>
                            <option value="">Informatika</option>
                            <option value="">Kimia</option>
                            <option value="">Matematika</option>
                            <option value="">Statistika</option>
                        </select>
                </div>
                </x-table-gedung>
                <x-table-gedung>
                    Gedung C
                    <div class="room">
                        <select>
                            <option value="">Program Studi</option>
                            <option value="">Biologi</option>
                            <option value="">Fisika</option>
                            <option value="">Informatika</option>
                            <option value="">Kimia</option>
                            <option value="">Matematika</option>
                            <option value="">Statistika</option>
                        </select>
                        <select>
                            <option value="">Program Studi</option>
                            <option value="">Biologi</option>
                            <option value="">Fisika</option>
                            <option value="">Informatika</option>
                            <option value="">Kimia</option>
                            <option value="">Matematika</option>
                            <option value="">Statistika</option>
                        </select>
                </div>
                </x-table-gedung>
                <x-table-gedung>
                    Gedung D
                    <div class="room">
                        <select>
                            <option value="">Program Studi</option>
                            <option value="">Biologi</option>
                            <option value="">Fisika</option>
                            <option value="">Informatika</option>
                            <option value="">Kimia</option>
                            <option value="">Matematika</option>
                            <option value="">Statistika</option>
                        </select>
                        <select>
                            <option value="">Program Studi</option>
                            <option value="">Biologi</option>
                            <option value="">Fisika</option>
                            <option value="">Informatika</option>
                            <option value="">Kimia</option>
                            <option value="">Matematika</option>
                            <option value="">Statistika</option>
                        </select>
                </div>
                </x-table-gedung>
                <x-table-gedung>
                    Gedung E
                    <div class="room">
                        <select>
                            <option value="">Program Studi</option>
                            <option value="">Biologi</option>
                            <option value="">Fisika</option>
                            <option value="">Informatika</option>
                            <option value="">Kimia</option>
                            <option value="">Matematika</option>
                            <option value="">Statistika</option>
                        </select>
                        <select>
                            <option value="">Program Studi</option>
                            <option value="">Biologi</option>
                            <option value="">Fisika</option>
                            <option value="">Informatika</option>
                            <option value="">Kimia</option>
                            <option value="">Matematika</option>
                            <option value="">Statistika</option>
                        </select>
                </div>
                </x-table-gedung>
            </div>
        </div>
    </div>

    <script>
        function redirectTodashboard() {
            window.location.href = "{{ route('dashboard') }}";
        }

    </script>
</body>
</html>
