<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinar Akademia</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .header {
            background-color: #20B2AA;
            color: white;
            padding: 15px 20px;
            font-size: 20px;
        }

        .container {
            width: 90%;
            margin: 20px auto;
        }

        .semester-dropdown {
            background-color: #0A4741;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .semester-select {
            width: 200px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .table-container {
            background-color: #0A4741;
            padding: 20px;
            border-radius: 5px;
        }

        .data-table {
            width: 100%;
            background-color: white;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        .data-table th {
            background-color: white;
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
            font-weight: bold;
        }

        .data-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .view-button {
            background-color: #0A4741;
            color: white;
            border: none;
            padding: 6px 20px;
            border-radius: 15px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }

        .number-col {
            width: 5%;
            text-align: center;
        }

        .name-col {
            width: 40%;
        }

        .nim-col {
            width: 40%;
        }

        .action-col {
            width: 15%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        Sinar Akademia
    </div>

    <div class="container">
        <div class="semester-dropdown">
            <select class="semester-select">
                <option>Semester 5</option>
            </select>
        </div>

        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th class="number-col">NO</th>
                        <th class="name-col">NAMA</th>
                        <th class="nim-col">NIM</th>
                        <th class="action-col">IRS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $index => $mhs)
                    <tr>
                        <td class="number-col">{{ $index + 1 }}</td>
                        <td class="name-col">{{ $mhs->nama }}</td>
                        <td class="nim-col">{{ $mhs->nim }}</td>
                        <td class="action-col">
                            <button class="view-button">View</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>