<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah</title>
    <link rel="stylesheet" href="{{ asset('css/Kaprodi/jadwalKaprodi.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
</head>
<body>
    <div class="header-bar">
        <h3>Sinar Akademia</h3>
        <a href="{{ route('kaprodi.dashboard') }}" class="back-button">↤ Kembali</a>
    </div>

    <!-- Form Pencarian -->
    <div class="search-wrapper">
        <form action="{{ route('jadwal.showForm') }}" method="GET">
            <input type="text" name="search" placeholder="Cari Mata Kuliah" value="{{ request('search') }}">
            <button type="submit">Cari</button>
        </form>
    </div>

    <div class="calendar-wrapper">
        <div class="calendar-container">
            <div class="course-list">
                @foreach ($mataKuliah as $mk)
                    <div class="course-item" data-id="{{ $mk->id }}" data-sks="{{ $mk->sks }}" draggable="true">
                        <p>{{ $mk->nama_mk }} ({{ $mk->sks }} SKS)</p>
                    </div>
                @endforeach
            </div>

            <div class="schedule-table" id="scheduleTable">
                <table>
                    <thead>
                        <tr>
                            <th>WAKTU</th>
                            <th>SENIN</th>
                            <th>SELASA</th>
                            <th>RABU</th>
                            <th>KAMIS</th>
                            <th>JUMAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $startTime = 7;  
                        $endTime = 18;  
                        for ($hour = $startTime; $hour < $endTime; $hour++):   
                            $startTimeFormatted = sprintf("%02d:00", $hour);  
                            $endTimeFormatted = sprintf("%02d:00", $hour + 1);  
                            $timeRange = $startTimeFormatted . " - " . $endTimeFormatted;  
                        ?>   
                            <tr>
                                <td class="time-column"><?= $timeRange ?></td>
                                <td class="drop-area" data-day="senin" data-time="<?= $timeRange ?>"></td>
                                <td class="drop-area" data-day="selasa" data-time="<?= $timeRange ?>"></td>
                                <td class="drop-area" data-day="rabu" data-time="<?= $timeRange ?>"></td>
                                <td class="drop-area" data-day="kamis" data-time="<?= $timeRange ?>"></td>
                                <td class="drop-area" data-day="jumat" data-time="<?= $timeRange ?>"></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const courseItems = document.querySelectorAll('.course-item');
    const dropAreas = document.querySelectorAll('.drop-area');

    courseItems.forEach(function(item) {
        item.addEventListener('dragstart', function(event) {
            event.dataTransfer.setData('courseId', item.dataset.id);
            event.dataTransfer.setData('courseSks', item.dataset.sks);
        });
    });

    dropAreas.forEach(function(area) {
        area.addEventListener('dragover', function(event) {
            event.preventDefault();
        });

        area.addEventListener('drop', function(event) {
            event.preventDefault();

            const courseId = event.dataTransfer.getData('courseId');
            const courseSks = parseInt(event.dataTransfer.getData('courseSks'), 10);
            const day = area.dataset.day;
            const time = area.dataset.time;

            const selectedCourse = document.querySelector(`.course-item[data-id="${courseId}"]`);
            const courseName = selectedCourse.querySelector('p').textContent;

            // Hitung waktu akhir berdasarkan SKS
            const startHour = parseInt(area.dataset.time.split(":")[0]);
            const endHour = startHour + courseSks;
            const timeRange = `${startHour}:00 - ${endHour}:00`;

            // Tambahkan konten jadwal kuliah ke dalam tabel tanpa pemisah
            const cellContent = `
                <div>
                    <strong>${courseName}</strong><br>
                    Waktu: ${timeRange} <br>
                    Ruangan: <select class="dynamic-select" id="roomSelect-${courseId}">
                        <option value="">Pilih Ruangan</option>
                        <!-- Ruangan akan dimuat di sini -->
                    </select>
                </div>
            `;
            area.innerHTML = cellContent;
            area.setAttribute('data-course-id', courseId);

            // Atur rowspan pada kolom waktu
            adjustTimeRow(area, startHour, courseSks);

            // Memuat daftar ruangan dari backend
            fetch('{{ url("/ruangan") }}')
                .then(response => response.json())
                .then(ruangs => {
                    const roomSelect = document.getElementById(`roomSelect-${courseId}`);
                    ruangs.forEach(ruang => {
                        const option = document.createElement('option');
                        option.value = ruang.Nama_Ruang;
                        option.textContent = ruang.Nama_Ruang;
                        roomSelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error loading rooms:', error);
                });

            // Simpan jadwal ke backend
            saveSchedule(courseId, day, time, timeRange);
        });
    });

    // Fungsi untuk menyesuaikan kolom waktu
    function adjustTimeRow(area, startHour, sks) {
        const tableRow = area.parentNode;
        const timeCell = tableRow.querySelector('td:first-child');
        const rowsToMerge = sks;

        // Atur rowspan pada sel waktu
        timeCell.setAttribute('rowspan', rowsToMerge);

        // Hapus sel waktu berikutnya yang akan digabungkan
        let nextRow = tableRow.nextElementSibling;
        for (let i = 1; i < rowsToMerge; i++) {
            if (nextRow) {
                const nextTimeCell = nextRow.querySelector('td:first-child');
                if (nextTimeCell) {
                    nextTimeCell.remove();
                }
                nextRow = nextRow.nextElementSibling;
            }
        }
    }

    // Simpan jadwal ke backend
    function saveSchedule(courseId, day, startTime, timeRange) {
        fetch('{{ route('store-jadwal') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                courseId: courseId,
                day: day,
                time: timeRange,
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Jadwal tersimpan:', data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
});
    </script>
</body>
</html>
