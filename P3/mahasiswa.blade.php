<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        
        @keyframes gradientMotion {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(-45deg, #00c6ff, #0072ff, #4facfe, #00f2fe);
            background-size: 400% 400%;
            animation: gradientMotion 10s ease infinite;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(15px);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 114, 255, 0.2);
            width: 100%;
            max-width: 500px;
            border: 1px solid rgba(255, 255, 255, 0.6);
        }
        h1 {
            text-align: center;
            color: #0072ff;
            font-weight: 600;
            margin-bottom: 30px;
            font-size: 24px;
        }
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            background: white;
        }
        .styled-table thead tr {
            background-color: #0072ff;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th, .styled-table td {
            padding: 15px 20px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
            transition: all 0.3s ease;
        }
        .styled-table tbody tr:nth-of-type(even) { background-color: #f4faff; }
        .styled-table tbody tr:hover { background-color: #cce5ff; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Data Mahasiswa</h1>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Nama</strong></td>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <td><strong>Jurusan</strong></td>
                    <td>{{ $jurusan }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>