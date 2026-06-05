<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        
        @keyframes gradientMotion {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(-45deg, #141E30, #243B55, #2980b9, #2c3e50);
            background-size: 400% 400%;
            animation: gradientMotion 15s ease infinite;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            width: 100%;
            max-width: 500px;
        }
        h1 {
            text-align: center;
            color: #1a252f;
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
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background: white;
        }
        .styled-table thead tr {
            background-color: #2980b9;
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
        .styled-table tbody tr:nth-of-type(even) { background-color: #f8f9fa; }
        .styled-table tbody tr:hover { background-color: #d6eaf8; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Detail Produk</h1>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Informasi</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Nama Produk</strong></td>
                    <td>{{ $nama_produk }}</td>
                </tr>
                <tr>
                    <td><strong>Harga</strong></td>
                    <td><span style="color: #27ae60; font-weight: 600;">{{ $harga }}</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>