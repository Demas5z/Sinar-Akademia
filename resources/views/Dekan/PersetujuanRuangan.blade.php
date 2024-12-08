<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persetujuan Ruangan - Dekan</title>
    <link rel="stylesheet" href="{{ asset('css/Dekan/PersetujuanRuang.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <x-navbar>Dekan</x-navbar>

    <div class="container">
        <button class="back-btn" onclick="history.back()">← Back</button>
        <h2>🏛️ Persetujuan Ruangan</h2>

        <div class="alert"></div> <!-- Tempat untuk pesan sukses/gagal -->

        <!-- Tombol Setujui Semua -->
        <button class="approve-all-btn">Setujui Semua</button>

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
    // Ketika tombol "Setujui Semua" diklik
        $('.approve-all-btn').click(function () {
            // Cek apakah ada tombol "Setujui" yang tersedia
            var pendingButtons = $('.approve-btn'); // Semua tombol "Setujui"
            
            if (pendingButtons.length === 0) {
                // Jika tidak ada tombol "Setujui", tampilkan pesan
                showAlert("Semua ruangan sudah disetujui!", "success");
            } else {
                // Konfirmasi sebelum menyetujui semua
                if (confirm("Apakah Anda yakin ingin menyetujui semua ruangan?")) {
                    // Iterasi setiap tombol "Setujui" dan trigger klik
                    pendingButtons.each(function () {
                        $(this).trigger('click'); // Memicu event klik untuk setiap tombol
                    });
                }
            }
        });

        // Ketika tombol Setujui diklik
        $('.approve-btn').click(function () {
            var button = $(this); // Simpan referensi tombol yang diklik
            var namaRuang = button.data('nama_ruang'); // Mengambil data-nama_ruang

            // Kirim request AJAX untuk menyetujui ruang
            $.ajax({
                url: "{{ route('update.status.ruang') }}", // Route untuk update status ruangan
                method: "POST",
                data: {
                    _token: $("meta[name='csrf-token']").attr('content'), // CSRF Token
                    Nama_Ruang: namaRuang // Nama ruang yang akan diupdate
                },
                success: function (response) {
                    if (response.status === 'success') {
                        // Update status pada tabel
                        var row = button.closest('tr'); // Baris terkait tombol
                        row.find('td:nth-child(4)').text('setuju'); // Update kolom status
                        row.find('td:nth-child(5)').text(''); // Hapus tombol Setujui
                        
                        // Tampilkan pesan sukses
                        showAlert('Ruang "' + namaRuang + '" berhasil disetujui!', 'success');
                    } else {
                        showAlert(response.message, 'error'); // Tampilkan pesan error jika ada
                    }
                },
                error: function () {
                    showAlert('Terjadi kesalahan saat menyetujui ruang: ' + namaRuang, 'error');
                }
            });
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
