<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <style>
        /* Global Reset */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Header Bar */
        .header-bar {
            background: linear-gradient(90deg, #20b2aa, #008080);
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            margin-bottom: 80px; /* Menambah jarak dengan tabel */
        }

        .header-bar h3 {
            margin: 0;
            font-size: 24px;
            letter-spacing: 1px;
        }

        /* Back Button */
        .back-button {
            position: absolute;
            bottom: -50px;
            left: 20px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: black;
            color: white;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .back-button:hover {
            background-color: gray;
        }

        /* Calendar Wrapper */
        .calendar-wrapper {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Changed from center to flex-start */
            min-height: calc(100vh - 160px); /* Adjusted height */
            padding: 20px 0 60px 0; /* Added padding top and bottom */
        }

        /* Calendar Container */
        .calendar-container {
            width: 70%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px 0; /* Added margin top and bottom */
        }

        /* Schedule Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #ccc;
            text-align: center;
            padding: 20px;
            font-size: 16px;
        }

        th {
            background-color: #20b2aa;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #f9f9f9;
        }

        td:first-child {
            font-weight: bold;
            background-color: #e6f7f5;
        }

        /* Dropdown Styling */
        .course-select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            font-size: 14px;
        }

        .course-select:hover {
            border-color: #20b2aa;
        }

        .course-select:focus {
            outline: none;
            border-color: #20b2aa;
            box-shadow: 0 0 5px rgba(32, 178, 170, 0.3);
        }
    </style>
</head>
<body>
    <!-- Header Bar -->
    <x-navbar>Ketua Program Studi</x-navbar>

    <!-- Calendar -->
    <div class="calendar-wrapper">
        <div class="calendar-container">
            <!-- Schedule Table -->
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
                    // Define courses array
                    $courses = [
                        'Pilih Mata Kuliah',
                        'Matematika Diskrit',
                        'Algoritma dan Pemrograman',
                        'Basis Data',
                        'Pemrograman Web',
                        'Struktur Data',
                        'Sistem Operasi',
                        'Jaringan Komputer',
                        'Kecerdasan Buatan',
                        'Rekayasa Perangkat Lunak'
                    ];

                    // Generate time slots from 07:00 to 18:00
                    $startTime = 7;
                    $endTime = 18;
                    for ($hour = $startTime; $hour <= $endTime; $hour++): 
                        $time = sprintf("%02d:00", $hour);
                    ?>
                        <tr>
                            <td><?= $time ?></td>
                            <?php for ($day = 1; $day <= 5; $day++): ?>
                            <td>
                                <select class="course-select" name="schedule[<?= $hour ?>][<?= $day ?>]">
                                    <?php foreach ($courses as $index => $course): ?>
                                        <option value="<?= $index ?>"><?= $course ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>