<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Sinar Akademia - Daftar Ruangan</title>  
    <link rel="stylesheet" href="{{ asset('css/Akademik/BuatDaftarRuang.css') }}">  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
</head>  
<body>  
    <x-navbar>Akademik</x-navbar>  

    <div class="container">  
        <a class="back-btn" href="/dashboard">← Back</a>  

        <!-- Tampilkan pesan sukses -->  
        @if(session('success'))  
            <div class="alert alert-success">  
                {{ session('success') }}  
            </div>  
        @endif  

        <!-- Form untuk input data ruang -->  
        <div class="card" style="margin: 20px;">  
            <h3>Tambah Ruangan</h3>  
            <form id="room-form" method="POST" action="{{ route('create.ruang') }}">  
                @csrf  
                <div class="form-group">  
                    <label for="Nama_Ruang">Nama Ruangan:</label>  
                    <input type="text" id="Nama_Ruang" name="Nama_Ruang" required>  
                </div>  

                <div class="form-group">  
                    <label for="Kuota">Kuota:</label>  
                    <input type="number" id="Kuota" name="Kuota" required>  
                </div>  

                <div class="form-group">  
                    <label for="Prodi">Program Studi:</label>  
                    <input type="text" id="Prodi" name="Prodi" required placeholder="Masukkan nama Prodi">  
                </div>  

                <button type="submit" class="submit-btn">Tambah Ruangan</button>  
            </form>  
        </div>  

        <!-- Tabel untuk menampilkan data ruangan -->  
        <div class="card" style="margin-top: 40px;">  
            <h3>Daftar Ruangan</h3>  
            <table id="ruang-table" border="1" cellspacing="0" cellpadding="10">  
                <thead>  
                    <tr>  
                        <th>Nama Ruangan</th>  
                        <th>Kuota</th>  
                        <th>Program Studi</th>  
                        <th>Status</th>  
                    </tr>  
                </thead>  
                <tbody>  
                    @foreach ($ruangs as $ruang)  
                        <tr>  
                            <td>{{ $ruang->Nama_Ruang }}</td>  
                            <td>{{ $ruang->Kuota }}</td>  
                            <td>{{ $ruang->Prodi }}</td>  
                            <td>{{ $ruang->Status }}</td>  
                        </tr>  
                    @endforeach  
                </tbody>  
            </table>  
        </div>  
    </div>  

    <script>   
    $(document).ready(function () {  
        $('#room-form').on('submit', function (e) {  
            e.preventDefault(); // Mencegah form untuk submit secara normal  

            // Ambil data form  
            let formData = $(this).serialize();  

            // Kirim data ke server via POST  
            $.post("{{ route('create.ruang') }}", formData, function (data) {  
                if (data.success) {  
                    // Jika sukses, tampilkan pesan  
                    alert(data.message);  

                    // Tambahkan data baru ke tabel  
                    let newRow = `  
                        <tr>  
                            <td>${data.data.Nama_Ruang}</td>  
                            <td>${data.data.Kuota}</td>  
                            <td>${data.data.Prodi}</td>  
                            <td>${data.data.Status}</td>  
                        </tr>  
                    `;  
                    $('#ruang-table tbody').append(newRow);  

                    // Reset form  
                    $('#room-form')[0].reset();  
                } else {  
                    alert("Gagal menambahkan ruangan.");  
                }  
            }).fail(function (xhr, status, error) {  
                // Jika gagal, tampilkan error  
                alert("Terjadi kesalahan: " + error);  
            });  
        });  
    });   
    </script>  
</body>  
</html>
