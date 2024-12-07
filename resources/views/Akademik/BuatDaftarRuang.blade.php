<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia - Daftar Ruangan</title>
    <link rel="stylesheet" href="{{ asset('css/Akademik/BuatDaftarRuang.css') }}">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <x-navbar>Akademik</x-navbar>

    <div class="container">
        <a class="back-btn" href="/dashboard">← Back</a>
        <div class="header">
            <h2>Buat Daftar Ruangan</h2>
        </div>

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
                    <label for="Gedung">Gedung:</label>
                    <select id="Gedung" name="Gedung" required>
                        <option value="">Pilih Gedung</option>
                        @foreach ($gedungs as $gedung)
                            <option value="{{ $gedung }}">{{ $gedung }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="submit-btn">Tambah Ruangan</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            const endpoint = '/get-ruang'; // Endpoint backend untuk mendapatkan data ruangan

            // Event handler untuk toggle accordion dan load ruangan
            $('.accordion-header').on('click', function () {
                const item = $(this).closest('.accordion-item');
                const gedung = $(this).data('gedung');
                const roomListContainer = $(`#room-list-${gedung.toLowerCase()}`);

                if (!item.hasClass('loaded')) { // Cegah pemuatan ulang jika sudah pernah dimuat
                    roomListContainer.html('<p>Memuat ruangan...</p>'); // Tampilkan pesan loading
                    $.get(endpoint, function (data) {
                        if (Array.isArray(data) && data.length > 0) {
                            // Filter ruangan berdasarkan gedung dan status 'belum'
                            const filteredRooms = data.filter(room => room.Gedung === gedung && room.Status === 'belum');
                            roomListContainer.empty(); // Kosongkan list sebelumnya

                            if (filteredRooms.length > 0) {
                                const roomList = $('<ul></ul>');
                                filteredRooms.forEach(room => {
                                    roomList.append(`<li>${room.Nama_Ruang} (Status: ${room.Status})</li>`);
                                });
                                roomListContainer.append(roomList);
                            } else {
                                roomListContainer.html('<p>Tidak ada ruangan dengan status "belum" tersedia.</p>');
                            }

                            item.addClass('loaded'); // Tandai bahwa data telah dimuat
                        } else {
                            roomListContainer.html('<p>Data ruangan kosong atau tidak valid.</p>');
                        }
                    }).fail(function () {
                        roomListContainer.html('<p>Gagal memuat data ruangan. Silakan coba lagi nanti.</p>');
                    });
                }

                // Toggle accordion
                item.toggleClass('active');
                $('.accordion-item').not(item).removeClass('active');
            });
        });
    </script>
</body>

</html>
