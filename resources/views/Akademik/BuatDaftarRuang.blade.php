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
        <button class="back-btn" onclick="history.back()">← Back</button>
        <div class="header">
            <h2>Buat Daftar Ruangan</h2>
            <div class="header-actions">
                <button class="download-btn">Download Daftar</button>
            </div>
        </div>

        <div class="card">
            <div class="accordion">
                @foreach ($gedungs as $gedung)
                    <div class="accordion-item">
                        <div class="accordion-header" data-gedung="{{ $gedung }}">Gedung {{ $gedung }} <span class="status">▼</span></div>
                        <div class="accordion-body">
                            <div class="room">
                                <span>Pilih Ruangan:</span>
                                <select id="room-select-{{ strtolower($gedung) }}" name="Nama_Ruang">
                                    <option value="">Pilih Ruangan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            const endpoint = '/get-ruang'; // Update sesuai endpoint backend Anda

            // Fetch ruangan dari backend
            $.get(endpoint, function (data) {
                if (Array.isArray(data) && data.length > 0) {
                    const groupedRooms = data.reduce((acc, room) => {
                        if (!acc[room.Gedung]) acc[room.Gedung] = [];
                        acc[room.Gedung].push(room);
                        return acc;
                    }, {});

                    Object.keys(groupedRooms).forEach(gedung => {
                        const roomDropdown = $(`#room-select-${gedung.toLowerCase()}`);
                        roomDropdown.empty().append('<option value="">Pilih Ruangan</option>');
                        groupedRooms[gedung].forEach(room => {
                            roomDropdown.append(`<option value="${room.Nama_Ruang}">${room.Nama_Ruang}</option>`);
                        });
                    });
                } else {
                    alert('Data ruangan kosong atau tidak valid.');
                }
            }).fail(function () {
                alert('Gagal memuat data ruangan. Silakan coba lagi nanti.');
            });

            // Toggle accordion
            $('.accordion-header').on('click', function () {
                const item = $(this).closest('.accordion-item');
                item.toggleClass('active');
                $('.accordion-item').not(item).removeClass('active');
            });
        });
    </script>
</body>

</html>
