<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sinar Akademia</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .header {
      background-color: #007f80;
      color: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .user-menu {
      display: flex;
      align-items: center;
    }

    .user-icon {
      width: 30px;
      height: 30px;
      margin-left: 10px;
    }

    .container {
      display: flex;
    }

    .nav {
      width: 200px;
      background-color: #007f80;
      color: white;
      padding: 20px;
    }

    .nav ul {
      list-style: none;
      padding: 0;
    }

    .nav ul li {
      margin-bottom: 10px;
    }

    .nav ul li a {
      color: white;
      text-decoration: none;
    }

    .main {
      flex: 1;
      padding: 20px;
    }

    .tabs {
      display: flex;
      margin-bottom: 20px;
    }

    .tab {
      padding: 10px 20px;
      border: 1px solid #ccc;
      border-bottom: none;
      cursor: pointer;
      background-color: white;
    }

    .tab.active {
      background-color: #007f80;
      color: white;
    }

    .details {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .info {
      width: 40%;
    }

    .add-course {
      width: 50%;
    }

    .schedule table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .schedule th,
    .schedule td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    .event {
      background-color: #cde7ef;
    }
  </style>
</head>
<body>
  <x-navbar>Mahasiswa</x-navbar>
  <div class="container">
    <nav class="nav">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">IRS - INDEX</a></li>
      </ul>
    </nav>

    <main>
      <section class="content">
        <h2>Buat IRS - INDEX</h2>
        <div class="tabs">
          <button class="tab active">Buat IRS</button>
          <button class="tab">IRS</button>
          <button class="tab">KHS</button>
          <button class="tab">Transkrip</button>
        </div>

        <div class="details">
          <div class="info">
            <p>Nama: </p>
            <p>NIM: </p>
            <p>Tahun Ajaran: 2024/2025</p>
            <p>Semester: 5</p>
            <p>IPK: 4.00</p>
            <p>IPS: 4.00</p>
            <p>Max beban SKS: 24</p>
          </div>

          <div class="add-course">
            <label for="add-course">Tambah Mata Kuliah:</label>
            <select id="add-course">
              <option value="struktur-data">Struktur Data</option>
              <option value="proyek">Proyek Perangkat Lunak</option>
            </select>
          </div>
        </div>

        <div class="schedule">
          <table>
            <thead>
              <tr>
                <th>Waktu</th>
                <th>Senin</th>
                <th>Selasa</th>
                <th>Rabu</th>
                <th>Kamis</th>
                <th>Jumat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>07:00</td>
                <td class="event">Pengembangan Berbasis Platform<br>(07:00 - 09:20)<br>E101</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>08:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>09:30</td>
                <td></td>
                <td></td>
                <td class="event">Komputasi Tersebar dan Paralel<br>(09:30 - 11:10)<br>E102</td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

  <footer class="footer">
    <p>&copy; 2024 Sinar Akademia</p>
  </footer>
</body>
</html>