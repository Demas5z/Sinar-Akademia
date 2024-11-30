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
        margin-bottom: 30px;  
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
        padding: 10px 20px;  
        border: none;  
        border-radius: 5px;  
        background: linear-gradient(90deg, #20b2aa, #008080);  
        color: white;  
        cursor: pointer;  
        text-decoration: none;  
        font-size: 14px;  
        transition: all 0.3s ease;  
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);  
    }  

.back-button:hover {  
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);  
        transform: translateY(-2px);  
    }  

        /* Calendar Wrapper */  
.calendar-wrapper {  
        display: flex;  
        justify-content: center;  
        : 40px 20px;  
    }  

        /* Calendar Container */  
.calendar-container {  
        display: flex;  
        justify-content: space-between;  
        width: 80%;  
        background-color: white;  
        padding: 20px;  
        border-radius: 10px;  
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);  
    }  

        /* Left Column (Course Selector) */  
.course-selector {  
        width: 25%;  
        display: flex;  
        flex-direction: column;  
        padding-right: 20px;  
        gap: 20px;  
    }  

.select-block {  
        background: linear-gradient(135deg, #20b2aa, #008080);  
        border-radius: 10px;  
        padding: 15px;  
        position: relative;  
        overflow: hidden;  
    }  

.select-block::before {  
        content: '';  
        position: absolute;  
        top: 0;  
        right: 0;  
        width: 60px;  
        height: 60px;  
        background: rgba(255, 255, 255, 0.1);  
        border-radius: 50%;  
        transform: translate(30px, -30px);  
    }  

.select-block::after {  
        content: '';  
        position: absolute;  
        bottom: 0;  
        left: 0;  
        width: 40px;  
        height: 40px;  
        background: rgba(255, 255, 255, 0.1);  
        border-radius: 50%;  
        transform: translate(-20px, 20px);  
    }  

.select-block label {  
        color: white;  
        font-weight: bold;  
        margin-bottom: 12px;  
        font-size: 14px;  
        display: block;  
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);  
    }  

        /* Enhanced Select Styling */  
.select-wrapper {  
        position: relative;  
        background: white;  
        border-radius: 8px;  
        padding: 3px;  
    }  

.select-wrapper::after {  
        content: '▼';  
        position: absolute;  
        right: 15px;  
        top: 50%;  
        transform: translateY(-50%);  
        color: #20b2aa;  
        pointer-events: none;  
        font-size: 12px;  
    }  

.course-selector select {  
        width: 100%;  
        padding: 12px 35px 12px 15px;  
        font-size: 14px;  
        border-radius: 6px;  
        border: 1px solid rgba(32, 178, 170, 0.2);  
        background-color: white;  
        appearance: none;  
        cursor: pointer;  
        transition: all 0.3s ease;  
    }  

.course-selector select:hover {  
        border-color: #20b2aa;  
    }  

.course-selector select:focus {  
        outline: none;  
        border-color: #008080;  
        box-shadow: 0 0 0 3px rgba(32, 178, 170, 0.2);  
    }  

        /* Option Styling */  
.course-selector select option {  
        padding: 12px;  
        background-color: white;  
    }  

        /* Schedule Table */  
.schedule-table {  
        width: 70%;  
        overflow: hidden;  
    }  

table {  
        width: 100%;  
        border-collapse: collapse;  
        margin-top: 10px;  
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
        transition: background-color 0.3s ease;  
    }  

td:hover {  
        background-color: #e6f7f5;  
    }  

td:first-child {  
        font-weight: bold;  
        background-color: #e6f7f5;  
    }  

.status-section {  
        display: flex;  
        flex-direction: column;  
        gap: 20px;  
        margin-bottom: 20px;  
    }  

.status-card {  
        background: white;  
        border-radius: 10px;  
        text-align: center;  
        padding: 20px;  
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);  
        cursor: pointer;  
        transition: transform 0.3s;  
    }  

.status-card:hover {  
        transform: scale(1.05);  
    }  

.status-button {  
        background: #dc3545;  
        color: white;  
        border: none;  
        padding: 8px 16px;  
        border-radius: 5px;  
        margin-bottom: 10px;  
        cursor: pointer;  
        width: 100%;  
    }  

.save-button {  
        background: linear-gradient(90deg, #20b2aa, #008080);  
        color: white;  
        border: none;  
        padding: 8px 16px;  
        border-radius: 5px;  
        margin-bottom: 10px;  
        cursor: pointer;  
        transition: all 0.3s ease;  
        width: 100%;  
    }  

.save-button:hover {  
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);  
        transform: translateY(-2px);  
    }  

        @keyframes fadeIn {  
            from {  
                opacity: 0;  
                transform: translateY(10px);  
            }  
            to {  
                opacity: 1;  
                transform: translateY(0);  
            }  
        }  
.select-block {  
        animation: fadeIn 0.5s ease-out;  
    }  

    </style>  
</head>  
<body>  
    <!-- Header Bar -->  
    <div class="header-bar">  
        <h3>Sinar Akademia</h3>  
        <!-- Back Button with Laravel Route -->  
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
                            <option value="1">Matematika Diskrit</option>  
                            <option value="2">Algoritma dan Pemrograman</option>  
                            <option value="3">Basis Data</option>  
                            <option value="4">Pemrograman Web</option>  
                            <option value="5">Struktur Data</option>  
                            <option value="6">Sistem Operasi</option>  
                            <option value="7">Jaringan Komputer</option>  
                            <option value="8">Kecerdasan Buatan</option>  
                            <option value="9">Rekayasa Perangkat Lunak</option>  
                        </select>  
                    </div>  
                </div>  
                <section class="status-section">  
                    <div class="status-card waiting">  
                        <button class="status-button">Menunggu Persetujuan</button>  
                        <p>Status Penjadwalan</p>  
                    </div>  
                    <div> 
                        <button class="save-button">Save</button>  
                    </div>  
                </section>  
            </div>  

            <!-- Right Column - Schedule Table -->  
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
                        for ($hour = $startTime; $hour <= $endTime; $hour++):   
                            $time = sprintf("%02d:00", $hour);  
                        ?>  
                            <tr>  
                                <td><?= $time ?></td>  
                                <td></td>  
                                <td></td>  
                                <td></td>  
                                <td></td>  
                                <td></td>  
                            </tr>  
                        <?php endfor; ?>  
                    </tbody>  
                </table>  
            </div>  
        </div>  
    </div>  
</body>  
</html>