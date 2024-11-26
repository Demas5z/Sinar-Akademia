<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia - Daftar Ruangan</title>
    <link rel="stylesheet" href="{{ asset('css/Akademik/BuatDaftarRuang.css') }}">
</head>
<body>
    <div class="navbar">
        <div class="logo" onclick="redirectTodashboard()">Sinar Akademia</div>
        <div class="user-info">
            <div class="user-role">Bagian Akademik</div>
        </div>
    </div>

    <div class="container">
        <button class="back-btn" onclick="history.back()">← Back</button>

        <div class="header">
            <h2>Buat Daftar Ruangan</h2>
            <div class="header-actions">
                <button class="upload-btn">Upload Daftar</button>
            </div>
        </div>

        <div class="card">
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">Gedung A <span class="status">▼</span></div>
                    <div class="accordion-body">
                        <div class="room">
                            <span>Ruang A101</span>
                            <select>
                                <option value="">Program Studi</option>
                                <option value="">Biologi</option>
                                <option value="">Fisika</option>
                                <option value="">Informatika</option>
                                <option value="">Kimia</option>
                                <option value="">Matematika</option>
                                <option value="">Statistika</option>
                            </select>
                            <select>
                                <option value="">Program Studi</option>
                                <option value="">Biologi</option>
                                <option value="">Fisika</option>
                                <option value="">Informatika</option>
                                <option value="">Kimia</option>
                                <option value="">Matematika</option>
                                <option value="">Statistika</option>
                            </select>
                        </div>
                        <div class="room">
                            <span>Ruang A102</span>
                            <select>
                                <option value="">Program Studi</option>
                                <option value="">Biologi</option>
                                <option value="">Fisika</option>
                                <option value="">Informatika</option>
                                <option value="">Kimia</option>
                                <option value="">Matematika</option>
                                <option value="">Statistika</option>
                            </select>
                            <select>
                                <option value="">Program Studi</option>
                                <option value="">Biologi</option>
                                <option value="">Fisika</option>
                                <option value="">Informatika</option>
                                <option value="">Kimia</option>
                                <option value="">Matematika</option>
                                <option value="">Statistika</option>
                            </select>
                        </div>
                        <div class="room">
                            <span>Ruang A103</span>
                            <select>
                                <option value="">Program Studi</option>
                                <option value="">Biologi</option>
                                <option value="">Fisika</option>
                                <option value="">Informatika</option>
                                <option value="">Kimia</option>
                                <option value="">Matematika</option>
                                <option value="">Statistika</option>
                            </select>
                            <select>
                                <option value="">Program Studi</option>
                                <option value="">Biologi</option>
                                <option value="">Fisika</option>
                                <option value="">Informatika</option>
                                <option value="">Kimia</option>
                                <option value="">Matematika</option>
                                <option value="">Statistika</option>
                            </select>
                        </div>
                        <div class="room">
                            <span>Ruang A303</span>
                            <select>
                                <option value="">Program Studi</option>
                                <option value="">Biologi</option>
                                <option value="">Fisika</option>
                                <option value="">Informatika</option>
                                <option value="">Kimia</option>
                                <option value="">Matematika</option>
                                <option value="">Statistika</option>
                            </select>
                            <select>
                                <option value="">Program Studi</option>
                                <option value="">Biologi</option>
                                <option value="">Fisika</option>
                                <option value="">Informatika</option>
                                <option value="">Kimia</option>
                                <option value="">Matematika</option>
                                <option value="">Statistika</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Gedung B <span class="status">▼</span></div>
                    <div class="accordion-body"></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Gedung C <span class="status">▼</span></div>
                    <div class="accordion-body"></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Gedung D <span class="status">▼</span></div>
                    <div class="accordion-body"></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Gedung E <span class="status">▼</span></div>
                    <div class="accordion-body"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const headers = document.querySelectorAll('.accordion-header');
        headers.forEach(header => {
            header.addEventListener('click', () => {
                header.parentElement.classList.toggle('active');
            });
        });

        function redirectTodashboard() {
            window.location.href = "{{ route('dashboard') }}";
        }

    </script>
</body>
</html>
