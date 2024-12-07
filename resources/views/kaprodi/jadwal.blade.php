<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Schedule</title>  
    
    <!-- Link ke file CSS -->  
    <link rel="stylesheet" href="{{ asset('css/Kaprodi/jadwalKaprodi.css') }}">  
</head>  
<body>  
    <!-- Header Bar -->  
    <div class="header-bar">  
        <h3>Sinar Akademia</h3>  
        <a href="{{ route('kaprodi.dashboard') }}" class="back-button">↤ Back</a>  
    </div>  

    <!-- Calendar -->  
    <div class="calendar-wrapper">  
        <div class="calendar-container">  
            <!-- Left Column - Course Selector -->  
            <div class="course-selector">  
            <div class="select-block">  
                    <label for="semester">Pilih Semester</label>  
                    <div class="select-wrapper">  
                        <select id="semester">  
                            <option value="1">Semester 1</option>  
                            <option value="2">Semester 2</option>  
                            <option value="3">Semester 3</option>  
                            <option value="4">Semester 4</option>  
                            <option value="5">Semester 5</option>  
                            <option value="6">Semester 6</option>  
                            <option value="7">Semester 7</option>  
                            <option value="8">Semester 8</option>  
                        </select>  
                    </div>  
                </div>

                <div class="select-block">  
                    <label for="course">Pilih Mata Kuliah</label>  
                    <div class="select-wrapper">  
                        <select id="course">  
                            <!-- Options will be dynamically updated based on semester -->  
                        </select>  
                    </div>  
                </div>  

                <div class="select-block">  
                    <label for="sks">Pilih SKS</label>  
                    <div class="select-wrapper">  
                        <select id="sks">  
                            <option value="1">1 SKS</option>  
                            <option value="2">2 SKS</option>  
                            <option value="3">3 SKS</option>  
                            <option value="4">4 SKS</option>  
                        </select>  
                    </div>  
                </div>  

                <div class="select-block">  
                    <label for="class">Pilih Kelas</label>  
                    <div class="select-wrapper">  
                        <select id="class">  
                            <option value="1">A</option>  
                            <option value="2">B</option>  
                            <option value="3">C</option>  
                            <option value="4">D</option>
                            <option value="5">E</option>  
                        </select>  
                    </div>  
                </div>  

                <!-- Pilih Ruangan -->
                <div class="select-block">  
                    <label for="room">Pilih Ruangan</label>  
                    <div class="select-wrapper">  
                        <select id="room" name="room">
                            <option value="">-- Pilih Ruangan --</option>  
                            @foreach($ruangan as $room)
                                <option value="{{ $room->id }}">{{ $room->Nama_Ruang }}</option>
                            @endforeach
                        </select>  
                    </div>  
                </div>


                <!-- Add Button -->  
                <section class="status-section">  
                    <button class="save-button" id="saveButton">Save</button>  
                </section>  

                <!-- Selected Schedule List -->  
                <section class="status-section">  
                    <ul class="schedule-list" id="scheduleList"></ul>  
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
                        // Generate time slots from 07:00 to 18:00  
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

<script>
    // Data Mata Kuliah per Semester
    const coursesBySemester = {
        1: [
            "Matematika Diskrit", "Algoritma dan Pemrograman", "Basis Data", 
            "Pemrograman Web", "Struktur Data"
        ],
        2: [
            "Sistem Operasi", "Jaringan Komputer", "Kecerdasan Buatan",
            "Rekayasa Perangkat Lunak", "Kalkulus"
        ],
        3: [
            "Pemrograman Lanjut", "Analisis dan Desain Sistem", "Teori Automata", 
            "Komputasi Paralel", "Kecerdasan Bisnis"
        ],
        4: [
            "Sistem Terdistribusi", "Keamanan Komputer", "Cloud Computing",
            "Big Data", "Data Mining"
        ],
        5: [
            "Metodologi Penelitian", "Software Engineering", "Machine Learning",
            "Teori Graf", "Robotika"
        ],
        6: [
            "Sistem Informasi Manajemen", "Manajemen Proyek TI", "Aplikasi Web Lanjut",
            "Mobile Programming", "E-Commerce"
        ],
        7: [
            "Kewirausahaan", "Etika Profesi", "Sistem Keamanan Jaringan",
            "Design Patterns", "Advanced Database Systems"
        ],
        8: [
            "Magang", "Tugas Akhir", "Skripsi", "Penyusunan Laporan", "Sistem Informasi TI"
        ]
    };
    // Event listener untuk mengupdate mata kuliah berdasarkan semester
    document.getElementById("semester").addEventListener("change", function() {
        const semester = this.value;
        const courseSelect = document.getElementById("course");
        const courses = coursesBySemester[semester] || [];

        // Hapus semua opsi di dropdown Mata Kuliah
        courseSelect.innerHTML = "";

        // Tambahkan opsi default "Pilih Mata Kuliah"
        const defaultOption = document.createElement("option");
        defaultOption.value = "";
        defaultOption.textContent = "Pilih Mata Kuliah";
        courseSelect.appendChild(defaultOption);

        // Tambahkan mata kuliah berdasarkan semester yang dipilih
        courses.forEach(function(course) {
            const option = document.createElement("option");
            option.value = course;
            option.textContent = course;
            courseSelect.appendChild(option);
        });
    });

    // Set default value untuk Semester agar mata kuliah muncul saat halaman pertama kali dimuat
    document.getElementById("semester").dispatchEvent(new Event("change"));

    document.getElementById('ruangan').addEventListener('change', function() {
        var selectedRoom = this.value;
        console.log('Ruangan yang dipilih: ' + selectedRoom);
    });
    

    // Fungsi untuk menambahkan mata kuliah ke jadwal
    document.querySelectorAll(".add-button").forEach(function(button) {
        button.addEventListener("click", function() {
            // Ambil informasi dari dropdown
            const semester = document.getElementById("semester").value;
            const course = document.getElementById("course").value;
            const sks = document.getElementById("sks").value;
            const classCount = document.getElementById("class").value;

            // Cek apakah semua data sudah dipilih
            if (!semester || !course || !sks || !classCount) {
                alert("Pastikan Anda memilih semua informasi!");
                return;
            }

            // Ambil waktu dan hari dari button yang diklik
            const day = this.getAttribute("data-day");
            const time = this.getAttribute("data-time");

            // Buat elemen baru untuk jadwal yang ditambahkan
            const scheduleCell = this.parentElement;
            const scheduleRow = scheduleCell.parentElement;
            const newEntry = document.createElement("div");
            newEntry.classList.add("schedule-entry");
            newEntry.innerHTML = `${course} (${sks} SKS, ${classCount} kelas)`;

            // Tambahkan entri ke sel yang sesuai dengan waktu dan hari
            const dayCell = scheduleRow.querySelector(`td[data-day="${day}"]`);
            if (dayCell) {
                dayCell.appendChild(newEntry);
            }
        });
    });
    
</script>


</body>  
</html> 