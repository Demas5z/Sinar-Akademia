<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persetujuan Ruangan - Dekan</title>
    <link rel="stylesheet" href="{{ asset('css/Akademik/PersetujuanRuang.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* (Include the CSS changes mentioned above) */
    </style>
</head>
<body>
    <x-navbar>Dekan</x-navbar>

    <div class="container">
        <button class="back-btn" onclick="history.back()">← Back</button>
        <h2>🏛️ Persetujuan Ruangan</h2>

        <div class="alert"></div> <!-- Tempat untuk pesan sukses/gagal -->

        <div class="card">
            <table id="ruang-table">
                <thead>
                    <tr>
                        <th>Nama Ruangan</th>
                        <th>Kuota</th>
                        <th>Program Studi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ruangs as $ruang)
                        <tr>
                            <td>{{ $ruang->Nama_Ruang }}</td>
                            <td>{{ $ruang->Kuota }}</td>
                            <td>{{ $ruang->Prodi }}</td>
                            <td>{{ $ruang->Status }}</td>
                            <td>
                                @if($ruang->Status == 'belum')
                                    <button class="approve-btn" data-nama_ruang="{{ $ruang->Nama_Ruang }}">Setujui</button>
                                @else
                                    Sudah disetujui
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>

    $(document).ready(function () {
        // Ketika tombol Setujui diklik
        $('.approve-btn').click(function () {
            var namaRuang = $(this).data('nama_ruang');  // Mengambil data-nama_ruang
            
            // Tampilkan konfirmasi dan pastikan pengguna yakin
            if (confirm("Apakah Anda yakin ingin menyetujui ruang: " + namaRuang + "?")) {
                // Kirim request AJAX untuk menyetujui ruang
                $.ajax({
                    url: "{{ route('update.status.ruang') }}", // Menggunakan route yang sudah ada
                    method: "POST",
                    data: {
                        _token: $("meta[name='csrf-token']").attr('content'), // CSRF Token
                        Nama_Ruang: namaRuang  // Menggunakan 'Nama_Ruang' untuk sesuai dengan kolom di database
                    },
                    success: function (response) {
                        if (response.status === 'success') {
                            // Update status pada tabel
                            $('tr').each(function () {
                                if ($(this).find('td:first').text() === namaRuang) {
                                    $(this).find('td:nth-child(4)').text('setuju'); // Update kolom status
                                    $(this).find('td:nth-child(5)').text(''); // Menghapus tombol Setujui
                                }
                            });

                            // Tampilkan pesan sukses
                            showAlert('Persetujuan berhasil!', 'success');
                        } else {
                            showAlert(response.message, 'error'); // Menampilkan pesan error jika ada
                        }
                    },
                    error: function () {
                        showAlert('Terjadi kesalahan saat menyetujui ruang!', 'error');
                    }
                });
            }
        });

        // Fungsi untuk menampilkan alert
        function showAlert(message, type) {
            var alertBox = $('.alert');
            alertBox.text(message);
            alertBox.removeClass('alert-success alert-error').addClass('alert-' + type);
            alertBox.show();
            setTimeout(function () {
                alertBox.fadeOut();
            }, 3000);
        }
    });
</script>

</body>
</html>
