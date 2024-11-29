<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia</title>
    <link rel="stylesheet" href="{{ asset('css/PembimbingAkademik/perwalian.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <x-navbar>Pembimbing Akademik</x-navbar>

    <div class="container">
    <button class="back-btn" onclick="history.back()">← Back</button>
    <div class="card">
        <h1>Perwalian</h1>
            <div class="filters">
                <select>
                    <option>S1 Informatika</option>
                    <option>S1 Teknik Elektro</option>
                </select>
                <select>
                    <option>Semester 5</option>
                    <option>Semester 6</option>
                </select>
            </div>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>IRS & KHS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>M. Dimas Saputra</td>
                            <td>24060122140159</td>
                            <td>
                                <button class="btn verify" onclick="redirectToVerifikasiIRS()">Verifikasi IRS</button>
                                <button class="btn">IRS</button>
                                <button class="btn">KHS</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>    
        </div>
        <script>
            function redirectToVerifikasiIRS() {
                window.location.href = "{{ route('VerifikasiIRS.PembimbingAkademik') }}";
            }
        </script>
</body>
</html>