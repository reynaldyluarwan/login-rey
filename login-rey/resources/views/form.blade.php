<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f4f4f4;
        }
        
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .form-group input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        @section('content')
        <h2>Form Pendaftaran Mahasiswa Baru</h2>
        <form method="post" action="{{route('simpanMahasiswa')}}">
            @csrf
            <div class="form-group">
                <label for="ID_Mahasiswa">ID Mahasiswa:</label>
                <input type="text" id="ID_Mahasiswa" name="ID_Mahasiswa" required>
            </div>
            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" id="NIM" name="NIM" required>
            </div>
            <div class="form-group">
                <label for="Nama_Mahasiswa">Nama Mahasiswa:</label>
                <input type="text" id="Nama_Mahasiswa" name="Nama_Mahasiswa" required>
            </div>
            <div class="form-group">
                <label for="Jurusan">Jurusan:</label>
                <input type="text" id="Jurusan" name="Jurusan" required>
            </div>
            <div class="form-group">
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
