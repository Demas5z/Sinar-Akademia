<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .header-bar {
            background: linear-gradient(90deg, #20b2aa, #008080);
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .header-bar h3 {
            margin: 0;
            font-size: 24px;
            letter-spacing: 1px;
        }

        .header-bar .user-menu {
            display: flex;
            align-items: center;
            position: relative;
            cursor: pointer;
        }

        .header-bar .user-menu i {
            font-size: 20px;
            margin-left: 10px;
            transition: transform 0.3s;
        }

        .header-bar .user-menu i:hover {
            transform: scale(1.2);
        }

        .dropdown-profile {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            z-index: 100;
            padding: 10px 0;
            width: 200px;
        }

        .dropdown-profile a {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            text-decoration: none;
            color: #008080;
            transition: background-color 0.3s;
        }

        .dropdown-profile a i {
            margin-right: 10px;
        }

        .dropdown-profile a:hover {
            background-color: #e0f7f7;
        }

        .main-container {
            padding: 30px;
            transition: filter 0.3s;
        }

        .profile-card {
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #20b2aa, #008080);
            color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .profile-icon-container {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background-color: rgba(224, 247, 247, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
        }

        .profile-icon-container i {
            font-size: 40px;
            color: #008080;
        }

        .profile-card-content {
            text-align: left;
        }

        .profile-card-content h5 {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
        }

        .profile-card-content p {
            margin: 5px 0;
            font-size: 16px;
        }

        .cards-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .info-card {
            text-align: center;
            background: linear-gradient(135deg, #f5f5f5, #e0f7f7);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
            width: 260px;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .info-card:hover {
            transform: translateY(-10px);
        }

        .info-card i {
            font-size: 40px;
            color: #008080;
            margin-bottom: 10px;
        }

        .info-card h5 {
            margin: 10px 0 5px;
            font-size: 18px;
        }

        .status-section {
            background: linear-gradient(135deg, white, #e0f7f7);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .status-section h6 {
            font-size: 18px;
            font-weight: bold;
        }

        .status-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .status-item {
            text-align: center;
            flex: 1;
            padding: 10px;
        }

        .status-item i {
            font-size: 24px;
            color: #008080;
            margin-bottom: 5px;
        }

        .status-item h6 {
            margin: 0;
            font-size: 16px;
        }

        .status-item p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <x-navbar>Mahasiswa</x-navbar>

    <div class="main-container">
        <!-- Profile Card -->
        <div class="profile-card">
            <div class="profile-icon-container">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="profile-card-content">
                <h5>Rudi Ambatublow</h5>
                <p>NIM: 24060122140177</p>
                <p>INFORMATIKA S1</p>
            </div>
        </div>

        <!-- Info Cards Row -->
        <div class="cards-container">
            <div class="info-card" onclick="redirectToAkademik()">
                <i class="fas fa-university"></i>
                <h5>AKADEMIK</h5>
                <p>TA 2024/2025 Ganjil</p>
            </div>
            <div class="info-card">
                <i class="fas fa-trophy"></i>
                <h5>IPk</h5>
                <p>4.00</p>
            </div>
            <div class="info-card">
                <i class="fas fa-book"></i>
                <h5>SKSk</h5>
                <p>144</p>
            </div>
            <div class="info-card" onclick="redirectToRegistrasi()">
                <i class="fas fa-user-check"></i>
                <h5>AKADEMIK STATUS</h5>
                <p>Mahasiswa Aktif</p>
            </div>
        </div>

        <!-- Status Akademik -->
        <div class="status-section">
            <h6>Status Akademik</h6>
            <div class="status-row">
                <div class="status-item">
                    <i class="fas fa-calendar-alt"></i>
                    <p>Semester Akademik Saat Ini</p>
                    <h6>2024/2025 Ganjil</h6>
                </div>
                <div class="status-item">
                    <i class="fas fa-user-tie"></i>
                    <p>Dosen Wali</p>
                    <h6>Adhe Setya Pramayoga, M.T.</h6>
                </div>
                <div class="status-item">
                    <i class="fas fa-check-circle"></i>
                    <p>Status Akademik</p>
                    <h6>AKTIF</h6>
                </div>
            </div>
        </div>

        <!-- Today News -->
        <div class="status-section">
            <h6>Today News</h6>
            <div class="status-row">
                <div class="status-item">
                    <i class="fas fa-newspaper"></i>
                    <p>News Item 1</p>
                </div>
                <div class="status-item">
                    <i class="fas fa-newspaper"></i>
                    <p>News Item 2</p>
                </div>
                <div class="status-item">
                    <i class="fas fa-newspaper"></i>
                    <p>News Item 3</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script>
        // Redirect to akademik page
        function redirectToAkademik() {
            window.location.href = "{{ route('akademik') }}";
        }

        // Redirect to registrasi page
        function redirectToRegistrasi() {
            window.location.href = "{{ route('academic.status') }}";
        }
        // Toggle dropdown for profile
        function toggleProfileDropdown() {
            const profileDropdown = document.getElementById('profile-dropdown');
            profileDropdown.style.display = (profileDropdown.style.display === 'block') ? 'none' : 'block';
        }

        // Close profile dropdown when clicking outside
        window.addEventListener('click', function (event) {
            const profileDropdown = document.getElementById('profile-dropdown');
            if (!profileDropdown.contains(event.target) && !event.target.closest('.user-menu')) {
                profileDropdown.style.display = 'none';
            }
        });
    </script>
</body>
</html>

