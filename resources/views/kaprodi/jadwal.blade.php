<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <div class="calendar-wrapper">
        <div class="calendar-container">
            <div class="search-wrapper">
                <form action="{{ route('jadwal.showForm') }}" method="GET">
                    <input type="text" name="search" placeholder="Cari Mata Kuliah" value="{{ request('search') }}">
                    <button type="submit">Cari</button>
                </form>
            </div>
            
            <div class="course-list">
            @foreach ($mataKuliah as $mk)  
                @foreach ($mk->kelasLabels as $kelasLabel)  
                    <div   
                        class="course-item"   
                        data-id="{{ $mk->kode_mk }}"   
                        data-sks="{{ $mk->sks }}"   
                        data-jumlah-kelas="{{ $mk->jumlah_kelas }}"   
                        draggable="true"  
                    >  
                        <p>{{ $mk->nama_mk }} {{ $kelasLabel }} ({{ $mk->sks }} SKS)</p>  
                    </div>  
                @endforeach  
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
                        $startTime = 7;  // Jam mulai kuliah
                        $endTime = 18;   // Jam selesai kuliah
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

    <!-- Tombol Save -->
    <div class="save-wrapper">
        <button id="saveScheduleBtn">Simpan Jadwal</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {  
    const courseItems = document.querySelectorAll('.course-item');  
    const dropAreas = document.querySelectorAll('.drop-area');  
    const saveScheduleBtn = document.getElementById('saveScheduleBtn');  
    const resetScheduleBtn = document.getElementById('resetScheduleBtn');  
    const scheduleData = [];  

    // Fungsi untuk mengatur rowspan pada baris waktu  
    function adjustTimeRow(area, startHour, sks) {  
        const tableRow = area.parentNode;  
        const timeCell = tableRow.querySelector('td:first-child');  
        const rowsToMerge = sks;  

        timeCell.setAttribute('rowspan', rowsToMerge);  

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

    // Event listener untuk drag start pada mata kuliah  
    courseItems.forEach(function(item) {  
        item.addEventListener('dragstart', function(event) {  
            event.dataTransfer.setData('courseId', item.dataset.id);  
            event.dataTransfer.setData('courseSks', item.dataset.sks);  
            event.dataTransfer.setData('jumlahKelas', item.dataset.jumlahKelas);  
            event.dataTransfer.setData('courseName', item.querySelector('p').textContent);  
        });  
    });  

    // Event listener untuk drop area  
    dropAreas.forEach(function(area) {  
        area.addEventListener('dragover', function(event) {  
            event.preventDefault();  
        });  

        area.addEventListener('drop', function(event) {  
            // Cek apakah slot sudah terisi  
            if (area.querySelector('strong')) {  
                alert('Slot ini sudah terisi. Pilih slot lain.');  
                return;  
            }  
            event.preventDefault();  

            // Ambil data mata kuliah yang di-drop  
            const courseId = event.dataTransfer.getData('courseId');  
            const courseSks = parseInt(event.dataTransfer.getData('courseSks'), 10);  
            const jumlahKelas = parseInt(event.dataTransfer.getData('jumlahKelas'), 10);  
            const courseName = event.dataTransfer.getData('courseName');  
            const day = area.dataset.day;  
            const time = area.dataset.time;  

            // Hitung waktu mulai dan selesai  
            const startHour = parseInt(time.split(":")[0]);  
            const endHour = startHour + courseSks;  
            const waktuMulai = `${startHour}:00`;  
            const waktuSelesai = `${endHour}:00`;  

            // Buat elemen informasi mata kuliah  
            const courseInfoDiv = document.createElement('div');  
            courseInfoDiv.innerHTML = `  
                <strong>${courseName}</strong><br>  
                Waktu: ${waktuMulai} - ${waktuSelesai} <br>  
                Kelas: ${jumlahKelas}  
            `;  

            // Buat dropdown ruangan  
            const roomSelect = document.createElement('select');  
            roomSelect.classList.add('dynamic-select');  
            roomSelect.innerHTML = `<option value="">Pilih Ruangan</option>`;  

            // Event listener untuk dropdown ruangan  
            roomSelect.addEventListener('change', function() {  
                const existingScheduleIndex = scheduleData.findIndex(  
                    schedule =>   
                        schedule.day === day &&   
                        schedule.waktuMulai === waktuMulai  
                );  

                if (existingScheduleIndex !== -1) {  
                    scheduleData[existingScheduleIndex].room = this.value;  
                } else {  
                    scheduleData.push({  
                        courseId: courseId,  
                        day: day,  
                        waktuMulai: waktuMulai,  
                        waktuSelesai: waktuSelesai,  
                        room: this.value  
                    });  
                }  
            });  

            // Ambil daftar ruangan dari backend  
            fetch('{{ route('get.ruangan') }}', {  
                method: 'GET',  
                headers: {  
                    'Content-Type': 'application/json',  
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'  
                }  
            })  
            .then(response => response.json())  
            .then(ruangs => {  
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

            // Bersihkan area drop dan tambahkan informasi mata kuliah  
            area.innerHTML = '';  
            area.appendChild(courseInfoDiv);  
            area.appendChild(roomSelect);  

            // Atur rowspan  
            adjustTimeRow(area, startHour, courseSks);  
        });  
    });  

    // Event listener untuk tombol simpan jadwal  
    saveScheduleBtn.addEventListener('click', function() {  
        if (scheduleData.length === 0) {  
            alert("Tidak ada jadwal yang disusun!");  
            return;  
        }  

        // Validasi ruangan  
        const incompletSchedule = scheduleData.some(item => !item.room);  
        if (incompletSchedule) {  
            alert("Harap pilih ruangan untuk semua mata kuliah!");  
            return;  
        }  

        // Kirim data jadwal ke backend  
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        fetch('{{ route('store-jadwal') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            }, 
            body: JSON.stringify({  
                schedule: scheduleData.map(item => ({  
                    courseId: item.courseId,  
                    day: item.day,  
                    waktuMulai: item.waktuMulai,  
                    waktuSelesai: item.waktuSelesai,  
                    room: item.room  
                }))  
            })  
        })  
        .then(response => {  
            console.log('Response Status:', response.status);  
            return response.json();  
        })  
        .then(data => {  
            console.log('Jadwal tersimpan:', data);  
            alert('Jadwal berhasil disimpan!');  
        })  
        .catch(error => {  
            console.error('Full Error:', error);  
            alert('Terjadi kesalahan saat menyimpan jadwal.');  
        });  
    });  

    // Event listener untuk tombol reset jadwal  
    resetScheduleBtn.addEventListener('click', function() {  
        // Konfirmasi reset  
        const confirmReset = confirm('Apakah Anda yakin ingin mereset seluruh jadwal?');  
        
        if (confirmReset) {  
            // Bersihkan drop area  
            dropAreas.forEach(area => {  
                area.innerHTML = '';  
            });  

            // Reset data jadwal  
            scheduleData.length = 0;  

            // Reset tampilan waktu  
            const timeColumns = document.querySelectorAll('.time-column');  
            timeColumns.forEach(column => {  
                column.removeAttribute('rowspan');  
            });  

            alert('Jadwal berhasil direset.');  
        }  
    });  
});
    </script>
</body>
</html>
