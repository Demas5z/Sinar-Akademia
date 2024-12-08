<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah</title>
    <link rel="stylesheet" href="{{ asset('css/Kaprodi/jadwalKaprodi.css') }}">
</head>
<body>
    <!-- Header Bar -->
    <div class="header-bar">
        <h3>Sinar Akademia</h3>
        <a href="{{ route('kaprodi.dashboard') }}" class="back-button">↤ Kembali</a>
    </div>

    <!-- Kalender -->
    <div class="calendar-wrapper">
        <div class="calendar-container">
            <!-- Kolom Kiri - Pemilihan Mata Kuliah -->
            <div class="course-selector">
                <div class="select-block">
                    <label for="course">Pilih Mata Kuliah</label>
                    <div class="select-wrapper">
                        <select id="course" name="course">
                            <option value="">-- Pilih Mata Kuliah --</option>
                            @foreach ($mataKuliah as $mk)
                                <option value="{{ $mk->id }}" data-jumlah-kelas="{{ $mk->jumlah_kelas }}">{{ $mk->nama_mk }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Pemilihan Kelas -->
                <div class="select-block">
                    <label for="class">Pilih Kelas</label>
                    <div class="select-wrapper">
                        <select id="class" name="class">
                            <option value="">-- Pilih Kelas --</option>
                        </select>
                    </div>
                </div>

                <!-- Pemilihan Ruangan -->
                <div class="select-block">
                    <label for="room">Pilih Ruangan</label>
                    <div class="select-wrapper">
                        <select id="room" name="room">
                            <option value="">-- Pilih Ruangan --</option>
                            @foreach ($ruangan as $r)
                                <option value="{{ $r->Nama_Ruang }}">{{ $r->Nama_Ruang }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <section class="status-section">
                    <button class="save-button" id="saveButton">Simpan</button>
                </section>
            </div>

            <!-- Tabel Jadwal -->
            <div class="schedule-table">
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
                        // Menampilkan slot waktu dari 07:00 hingga 18:00  
                        $startTime = 7;  
                        $endTime = 18;  
                        for ($hour = $startTime; $hour < $endTime; $hour++):   
                            $startTimeFormatted = sprintf("%02d:00", $hour);  
                            $endTimeFormatted = sprintf("%02d:00", $hour + 1);  
                            $timeRange = $startTimeFormatted . " - " . $endTimeFormatted;  
                        ?>   
                            <tr>
                                <td><?= $timeRange ?></td>
                                <td><button class="add-button" data-day="senin" data-time="<?= $timeRange ?>">Tambah</button></td>
                                <td><button class="add-button" data-day="selasa" data-time="<?= $timeRange ?>">Tambah</button></td>
                                <td><button class="add-button" data-day="rabu" data-time="<?= $timeRange ?>">Tambah</button></td>
                                <td><button class="add-button" data-day="kamis" data-time="<?= $timeRange ?>">Tambah</button></td>
                                <td><button class="add-button" data-day="jumat" data-time="<?= $timeRange ?>">Tambah</button></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  

    <script>
    document.getElementById('course').addEventListener('change', function() {
        var courseSelect = this;
        var classSelect = document.getElementById('class');
        var jumlahKelas = courseSelect.options[courseSelect.selectedIndex].dataset.jumlahKelas;
        
        // Kosongkan dropdown kelas sebelumnya
        classSelect.innerHTML = '<option value="">-- Pilih Kelas --</option>';
        
        // Jika ada mata kuliah yang dipilih
        if (jumlahKelas) {
            for (var i = 0; i < jumlahKelas; i++) {
                var option = document.createElement('option');
                option.value = String.fromCharCode(65 + i);  // A, B, C, dst
                option.text = 'Kelas ' + String.fromCharCode(65 + i);
                classSelect.appendChild(option);
            }
        }
    });
    </script>
</body>
</html>
