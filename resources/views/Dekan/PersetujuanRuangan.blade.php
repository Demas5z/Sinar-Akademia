<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Jadwal Kuliah</title>
    <link rel="stylesheet" href="{{ asset('css/Dekan/PersetujuanRuang.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <x-navbar>Dekan</x-navbar>

    
    <div class="container">
        <button class="back-btn" onclick="history.back()">← Back</button>

        <div class="title">
            <h2>🏛️ Pengajuan Ruangan</h2>
        </div>
        <div class="card">
            <div class="accordion">
                @foreach ($gedungs as $gedung)
                    <div class="accordion-item">
                        <div class="accordion-header" data-gedung="{{ $gedung }}">Gedung {{ $gedung }} <span class="status">▼</span></div>
                        <div class="accordion-body">
                            <div class="room-list" id="room-list-{{ strtolower($gedung) }}">
                                <p>Memuat ruangan...</p> <!-- Placeholder sementara -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            const endpoint = '/get-ruang'; // Endpoint untuk mendapatkan data ruangan
            const updateEndpoint = '/update-status-ruang'; // Endpoint untuk update status

            // Event handler untuk toggle accordion dan load ruangan
            $('.accordion-header').on('click', function () {
                const item = $(this).closest('.accordion-item');
                const gedung = $(this).data('gedung');
                const roomListContainer = $(`#room-list-${gedung.toLowerCase()}`);

                if (!item.hasClass('loaded')) {
                    roomListContainer.html('<p>Memuat ruangan...</p>'); // Tampilkan pesan loading
                    $.get(endpoint, function (data) {
                        console.log(data); // Memeriksa data yang diterima
                        if (Array.isArray(data) && data.length > 0) {
                            const filteredRooms = data.filter(room => room.Gedung === gedung && room.Status === 'belum');
                            roomListContainer.empty(); // Kosongkan list sebelumnya

                            if (filteredRooms.length > 0) {
                                const roomList = $('<ul></ul>');
                                filteredRooms.forEach(room => {
                                    const roomItem = $(`
                                        <li>
                                            ${room.Nama_Ruang}
                                            <button class="approve-btn" data-Nama_Ruang="${room.Nama_Ruang}">Setujui</button>
                                        </li>
                                    `);

                                    roomItem.find('.approve-btn').on('click', function () {
                                        const namaRuang = $(this).data('Nama_Ruang');
                                        $.post(updateEndpoint, { nama_ruang: namaRuang }, function (response) {
                                            if (response.success) {
                                                alert(response.message);
                                                roomItem.remove(); // Hapus elemen setelah berhasil
                                            } else {
                                                alert(response.message);
                                            }
                                        }).fail(function () {
                                            alert('Gagal memperbarui status. Silakan coba lagi.');
                                        });
                                    });

                                    roomList.append(roomItem);
                                });
                                roomListContainer.append(roomList);
                            } else {
                                roomListContainer.html('<p>Tidak ada ruangan yang tersedia.</p>');
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
