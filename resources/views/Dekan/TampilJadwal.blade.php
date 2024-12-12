<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Informatika - Dekan</title>
    <link rel="stylesheet" href="{{ asset('css/Dekan/TampilJadwal.css') }}">
    <style>
        .schedule-item {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            margin: 2px 0;
            padding: 5px;
            font-size: 0.8em;
            border-radius: 3px;
        }
        .schedule-cell {
            vertical-align: top;
            padding: 5px !important;
        }
    </style>
</head>
<body>
    <x-navbar>Dekan</x-navbar>

    <div class="container">
        <button class="back-btn" onclick="history.back()">← Back</button>
        <h2>🗓️ Jadwal Informatika</h2>

        <div class="calendar-wrapper">
            <div class="calendar-container">
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
                                    @foreach(['senin', 'selasa', 'rabu', 'kamis', 'jumat'] as $day)
                                        <td class="schedule-cell" data-day="{{ $day }}" data-time="{{ $timeRange }}">
                                            @php
                                                $daySchedules = isset($jadwals[$day]) ? $jadwals[$day] : collect([]);
                                                $cellSchedules = $daySchedules->filter(function($jadwal) use ($startTimeFormatted, $endTimeFormatted) {
                                                    $scheduleStart = $jadwal->waktu_mulai;
                                                    $scheduleEnd = $jadwal->waktu_selesai;
                                                    
                                                    return 
                                                        ($scheduleStart >= $startTimeFormatted && $scheduleStart < $endTimeFormatted) ||
                                                        ($scheduleEnd > $startTimeFormatted && $scheduleEnd <= $endTimeFormatted) ||
                                                        ($scheduleStart <= $startTimeFormatted && $scheduleEnd >= $endTimeFormatted);
                                                });
                                            @endphp
                                            
                                            @foreach($cellSchedules as $jadwal)
                                                <div class="schedule-item">
                                                    <strong>{{ $jadwal->mataKuliah->nama_mk }}</strong>
                                                    <br>
                                                    Ruang: {{ $jadwal->ruangan->Nama_Ruang }}
                                                    <br>
                                                    {{ $jadwal->waktu_mulai }} - {{ $jadwal->waktu_selesai }}
                                                </div>
                                            @endforeach
                                        </td>
                                    @endforeach
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>