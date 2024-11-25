<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Status Akademik</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header-bar {
            background-color: #00796b;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header-bar h3 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }

        .header-bar i {
            font-size: 20px;
            margin-left: 10px;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .container p {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        .options {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .card {
            flex: 1;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
            background-color: #ffffff;
            border: 1px solid #ddd;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card img {
            max-width: 60px;
            margin-bottom: 15px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.1));
        }

        .card h3 {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            color: #555;
        }

        .card button {
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-aktif {
            background-color: #00796b;
        }

        .btn-aktif:hover {
            background-color: #005b4f;
        }

        .btn-cuti {
            background-color: #d32f2f;
        }

        .btn-cuti:hover {
            background-color: #a62727;
        }

        .footer {
            margin-top: 30px;
            padding: 20px;
            font-size: 14px;
            background-color: #f5f5f5;
            color: #333;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .footer span {
            font-weight: bold;
            color: #00796b;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header-bar">
        <h3>Sinar Akademia</h3>
        <div>
            <span>Mahasiswa</span>
            <i class="fas fa-user-circle"></i>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h1>Pilih Status Akademik</h1>
        <p>Silakan pilih salah satu status akademik berikut untuk semester ini</p>
        <div class="options">
            <!-- Card Aktif -->
            <div class="card" onclick="setStatus('Aktif')">
                <img src="{{ asset('images/active_icon.png') }}" alt="Aktif">
                <h3>Aktif</h3>
                <p>Anda akan mengikuti kegiatan perkuliahan pada semester ini serta mengisi Isian Rencana Studi (IRS).</p>
                <button class="btn btn-aktif">AKTIF</button>
            </div>
            <!-- Card Cuti -->
            <div class="card" onclick="setStatus('Cuti')">
                <img src="{{ asset('images/cuti_icon.png') }}" alt="Cuti">
                <h3>Cuti</h3>
                <p>Menghentikan kuliah sementara untuk semester ini tanpa kehilangan status sebagai mahasiswa Undip.</p>
                <button class="btn btn-cuti">CUTI</button>
            </div>
        </div>
        <!-- Footer Section -->
        <div class="footer">
            <h3>Status akademik Anda: <span id="status">STATUS BELUM DIPILIH</span></h3>
            <p>Untuk informasi lebih lanjut, silakan hubungi pihak akademik universitas Anda.</p>
        </div>
    </div>

    <!-- Script -->
    <script>
        function setStatus(status) {
            document.getElementById('status').textContent = status;
        }
    </script>
</body>
</html>
