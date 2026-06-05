<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        
        /* Animasi Background Bergerak */
        @keyframes gradientMotion {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            font-family: 'Poppins', sans-serif;
            /* Perpaduan 4 warna gradasi */
            background: linear-gradient(-45deg, #ff9a9e, #fecfef, #f6416c, #ffb199);
            background-size: 400% 400%;
            animation: gradientMotion 12s ease infinite; /* Durasi 12 detik, loop tak terbatas */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .card {
            /* Efek Glassmorphism (Kaca) */
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        h1 {
            text-align: center;
            color: #d81b60;
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
            background-color: #d81b60;
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
        .styled-table tbody tr:nth-of-type(even) { background-color: #fcfcfc; }
        .styled-table tbody tr:hover { background-color: #ffe0e9; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Biodata Profil</h1>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Atribut</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Nama</strong></td>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <td><strong>Kelas</strong></td>
                    <td>{{ $kelas }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>