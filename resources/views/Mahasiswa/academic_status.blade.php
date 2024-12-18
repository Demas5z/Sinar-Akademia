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
    <!-- SweetAlert2 CSS -->  
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">  
    <style>  
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');  

        body {  
            font-family: 'Quicksand', sans-serif;  
            background-color: #f5f5f5;  
            margin: 0;  
            padding: 0;  
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);  
        }  

        .container {  
            max-width: 900px;  
            margin: 40px auto;  
            background: white;  
            padding: 30px;  
            border-radius: 15px;  
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);  
            position: relative;  
            overflow: hidden;  
        }  

        .back-btn {  
            display: inline-block;  
            margin-bottom: 20px;  
            padding: 10px 15px;  
            font-size: 14px;  
            background-color: #38b8a4;  
            color: white;  
            border: none;  
            border-radius: 5px;  
            cursor: pointer;  
            text-decoration: none;  
            transition: all 0.3s ease;  
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);  
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
            transition: all 0.3s ease;  
            background-color: #ffffff;  
            border: 1px solid #ddd;  
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);  
            cursor: pointer;  
        }  

        .btn-aktif {  
            background-color: #00796b;  
        }  

        .btn-cuti {  
            background-color: #d32f2f;  
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
    <x-navbar>Mahasiswa</x-navbar>  

    <!-- Main Content -->  
    <div class="container">  
        <button class="back-btn" onclick="history.back()">← Back</button>  
        <h1>Pilih Status Akademik</h1>  
        <p>Silakan pilih salah satu status akademik berikut untuk semester ini</p>  
        <div class="options">  
            <!-- Card Aktif -->  
            <div class="card" onclick="showAktifConfirmation()">   
                <h3>Aktif</h3>  
                <p>Anda akan mengikuti kegiatan perkuliahan pada semester ini serta mengisi Isian Rencana Studi (IRS).</p>  
                <button class="btn btn-aktif">AKTIF</button>  
            </div>  
            <!-- Card Cuti -->  
            <div class="card" onclick="showCutiConfirmation()">  
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

    <!-- Scripts -->  
    <!-- SweetAlert2 JS -->  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>  
    <script>  
        function showAktifConfirmation() {  
            Swal.fire({  
                title: 'Konfirmasi Status Aktif',  
                text: 'Apakah Anda yakin ingin mengaktifkan status akademik Anda untuk semester ini?',  
                icon: 'question',  
                showCancelButton: true,  
                confirmButtonColor: '#00796b',  
                cancelButtonColor: '#d32f2f',  
                confirmButtonText: 'Ya, Aktifkan!',  
                cancelButtonText: 'Batal'  
            }).then((result) => {  
                if (result.isConfirmed) {  
                    document.getElementById('status').textContent = 'AKTIF';  
                    Swal.fire({  
                        title: 'Status Aktif Berhasil!',  
                        text: 'Anda telah mengaktifkan status akademik untuk semester ini.',  
                        icon: 'success',  
                        confirmButtonColor: '#00796b'  
                    });  
                }  
            });  
        }  

        function showCutiConfirmation() {  
            Swal.fire({  
                title: 'Konfirmasi Cuti Akademik',  
                text: 'Apakah Anda yakin ingin mengambil cuti akademik untuk semester ini?',  
                icon: 'warning',  
                showCancelButton: true,  
                confirmButtonColor: '#00796b',  
                cancelButtonColor: '#d32f2f',  
                confirmButtonText: 'Ya, Ambil Cuti!',  
                cancelButtonText: 'Batal'  
            }).then((result) => {  
                if (result.isConfirmed) {  
                    document.getElementById('status').textContent = 'CUTI';  
                    Swal.fire({  
                        title: 'Cuti Akademik Berhasil!',  
                        text: 'Anda telah mengambil cuti akademik untuk semester ini.',  
                        icon: 'success',  
                        confirmButtonColor: '#d32f2f'  
                    });  
                }  
            });  
        }  
    </script>  
</body>  
</html>