<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Jadwal Kuliah</title>
    <link rel="stylesheet" href="{{ asset('css/Dekan/PersetujuanJadwal.css') }}">
</head>
<body>
    <x-navbar>Dekan</x-navbar>
    

    <div class="container">
        <button class="back-btn" onclick="history.back()">← Back</button>
        <h2>📅 Pengajuan Jadwal Kuliah</h2>
        <div class="card">
            
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Pengajuan Jadwal Kuliah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Informatika</td>
                        <td>Belum disetujui</td>
                        <td class="action-buttons">
                            <button class="btn btn-open">📄Buka File</button>
                            <button class="btn btn-approve">Setuju</button>
                            <button class="btn btn-reject">Tolak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Biologi</td>
                        <td>Belum disetujui</td>
                        <td class="action-buttons">
                            <button class="btn btn-open">📄Buka File</button>
                            <button class="btn btn-approve">Setuju</button>
                            <button class="btn btn-reject">Tolak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Fisika</td>
                        <td>Belum disetujui</td>
                        <td class="action-buttons">
                            <button class="btn btn-open">📄Buka File</button>
                            <button class="btn btn-approve">Setuju</button>
                            <button class="btn btn-reject">Tolak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Statistika</td>
                        <td>Belum disetujui</td>
                        <td class="action-buttons">
                            <button class="btn btn-open">📄Buka File</button>
                            <button class="btn btn-approve">Setuju</button>
                            <button class="btn btn-reject">Tolak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Kimia</td>
                        <td>Belum disetujui</td>
                        <td class="action-buttons">
                            <button class="btn btn-open">📄Buka File</button>
                            <button class="btn btn-approve">Setuju</button>
                            <button class="btn btn-reject">Tolak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bioteknologi</td>
                        <td>Belum disetujui</td>
                        <td class="action-buttons">
                            <button class="btn btn-open">📄Buka File</button>
                            <button class="btn btn-approve">Setuju</button>
                            <button class="btn btn-reject">Tolak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td>Belum disetujui</td>
                        <td class="action-buttons">
                            <button class="btn btn-open">📄Buka File</button>
                            <button class="btn btn-approve">Setuju</button>
                            <button class="btn btn-reject">Tolak</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>
