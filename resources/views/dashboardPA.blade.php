<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboardPA.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Sinar Akademia</h1>
            <div class="user-info">
                <span>Dosen</span>
                <div class="user-avatar">
                    <img src="/path/to/default-avatar.png" alt="User">
                </div>
            </div>
        </div>
    
        <div class="main-content">
            <!-- Sidebar -->
            <div class="sidebar">
                <ul>
                    <li><a href="#" class="active">Dashboard</a></li>
                    <li><a href="#">Perkuliahan</a></li>
                    <li><a href="#">Perwalian</a></li>
                </ul>
            </div>
    
            <!-- Profile Content -->
            <div class="profile-content">
                <div class="profile-header">
                    <h2>Profile</h2>
                </div>
                
                <div class="profile-details">
                    <!-- Profile Picture Section -->
                    <div class="profile-picture-section">
                        <div class="profile-picture">
                            <img src="/path/to/profile-image.png" alt="Profile Picture">
                        </div>
                        <p>Dosen Akademik</p>
                        <p class="role">Pembimbing Akademik</p>
                    </div>
    
                    <!-- Profile Info Section -->
                    <div class="profile-info-section">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td></td>
                                <td>Kota Lahir</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td></td>
                                <td>NIDN</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td></td>
                                <td>NIY</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td>:</td>
                                <td></td>
                                <td>Jabatan Struktural</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td></td>
                                <td>Jabatan Fungsional</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </table>
                        <div class="button-group">
                            <button class="btn btn-danger">Ubah Password</button>
                            <button class="btn btn-primary">Edit Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer>
            2024 © IND@Universitas Diponegoro.
        </footer>
    </div>
</body>
</html>