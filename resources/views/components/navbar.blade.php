<style>
    /* Navbar */
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
    cursor: pointer;
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
</style>
<head>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<nav class="header-bar" >
        <h3 onclick="redirectToDashboard()">Sinar Akademia</h3>
        <div class="user-menu" onclick="toggleProfileDropdown()">
            <span>{{ $slot }}</span>
            <i class="fas fa-user-circle"></i>
            <div class="dropdown-profile" id="profile-dropdown">
                <a href="#"><i class="fas fa-user"></i> Biodata</a>
                <a href="#"><i class="fas fa-cog"></i> Setting</a>
                <a href="/"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
</nav>
<script>
        function toggleProfileDropdown() {
        const profileDropdown = document.getElementById('profile-dropdown');
        profileDropdown.style.display = (profileDropdown.style.display === 'block') ? 'none' : 'block';
        }

        function redirectToDashboard() {
            window.location.href = "{{ route('dashboard') }}";
        }

        window.addEventListener('click', function (event) {
        const profileDropdown = document.getElementById('profile-dropdown');
        if (!profileDropdown.contains(event.target) && !event.target.closest('.user-menu')) {
            profileDropdown.style.display = 'none';
        }
        });
</script>