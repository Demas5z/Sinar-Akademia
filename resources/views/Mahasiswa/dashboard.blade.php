<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/Mahasiswa/dashboard.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                <h5>Rudi Tabuti</h5>  
                <p>NIM: 24060122140166</p>  
                <p>Informatika</p>  
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

