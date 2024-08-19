<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Toko Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 30px;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .form-container {
            width: 45%;
        }

        .table-container {
            width: 50%;
            margin-right: 30px;
        }

        h1, h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .reset-button {
            background-color: #d9534f;
        }

        .reset-button:hover {
            background-color: #c9302c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f8f8f8;
            font-weight: bold;
        }

        .error {
            background-color: #f2dede;
            color: #a94442;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <?php

    session_start();

    if (!isset($_SESSION['barang'])) {
        $_SESSION['barang'] = [];
    }

    function tambahbarang($nama, $harga, $stok, $kategori) 
    {
        $_SESSION['barang'] = [
            'nama' => $nama,
            'harga' => $harga,
            'stok' => $stok,
            'kategori' => $kategori
        ];
    }

    function resetdata()

    {
        unset($_SESSION['barang']);
        $_SESSION['barang'] = [];   
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['tambah_barang'])) {
            
            tambahbarang(
                $_POST['nama'],
                $_POST['harga'],
                $_POST['stok'],
                $_POST['kategori'],
                
            );
        }

        if (isset($_POST['rest_data'])) {
            resetdata();
        }
    }
    
    ?>

    <h1>TOKO SRC BANTUL</h1>

    <div class="container">
        
        <div class="form-container">
            <h2>Tambah Barang</h2>
            <form method="POST" action="">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" id="nama_barang" name="nama"  >

                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga"  >

                <label for="stok">Stok:</label>
                <input type="number" id="stok" name="stok" >

                <label for="kategori">Kategori:</label>
                <select id="kategori" name="kategori" >
                    <option value="">Pilih Kategori</option>
                    <option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Pakaian">Pakaian</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Makanan">Minuman</option>
                    <option value="Alat Tulis">Alat Tulis</option>
                    <option value="Alat Kantor">Alat Kantor</option>
                    <option value="Alat Olahraga">Alat Olahraga</option>
                </select>

                <input type="submit" name="tambah_barang" value="Tambah Barang">
                <input type="submit" name="reset_data" class="reset-button" value="Reset Data">
               
            </form>
            
        </div>

        
        <div class="table-container">
            <h2>Daftar Barang di Toko</h2>
            <?php


            
        if (!empty($_SESSION['barang'])) {
           

            echo "<table>";
            echo "<tr><th>nama barang</th><th>harga</th><th>stok</th><th>kategori</th></tr>";

            foreach ($_SESSION['barang'] as $item) {
              
                echo "<tr>";
                echo "<td>" . $item['nama'] . "</td>";
                echo "<td>Rp." . $item['harga'] . "</td>";
                echo "<td>" . $item['stok'] . "</td>";
                echo "<td>" . $item['kategori'] . "</td>";
                echo "</tr>";

            }


           
            echo "</table>";
        } else {
            echo "<div class='error'>tidak ada barang di toko saat ini.</div>";
        }



            ?>
        </div>
    </div>
</body>
</html>