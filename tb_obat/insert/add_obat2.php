<!DOCTYPE html>
<html>

<head>
    <title>Formulir Obat</title>
    <style>
    body {
        font-family: 'Poppins', Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #F0F8FF;
    }

    h1 {
        margin-bottom: 20px;
    }

    #all {
        width: 95%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #title {
        color: #007BFF;
    }

    #form {
        width: 50%;
        padding: 20px;
        border-radius: 15px;
        background-color: #F0F8FF;
        /* Neumorphism shadow */
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1), -5px -5px 10px rgba(255, 255, 255, 0.7);
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #007BFF;
    }

    input[type="text"],
    input[type="number"],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: none;
        border-radius: 10px;
        background-color: #f2f2f2;
        /* Neumorphism shadow */
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1), -2px -2px 4px rgba(255, 255, 255, 0.5);
        font-family: 'Poppins', Arial, sans-serif;
        color: #333;
    }

    textarea {
        resize: vertical;
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 15px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-weight: bold;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <div id="all">
        <h1 id="title">Tambah Obat</h1>
        <form action="proses_add_obat.php" method="post" id="form">
            <label for="id_supplier">ID Supplier:</label>
            <select id="id_supplier" name="id_supplier">
                <!-- your options here -->
            </select>

            <label for="nama_obat">Nama Obat:</label>
            <input type="text" id="nama_obat" name="nama_obat" placeholder="Nama Obat">

            <label for="kategori_obat">Kategori Obat:</label>
            <input type="text" id="kategori_obat" name="kategori_obat" placeholder="Kategori Obat">

            <label for="harga_jual">Harga Jual:</label>
            <input type="number" id="harga_jual" name="harga_jual" placeholder="Harga Jual">

            <label for="harga_beli">Harga Beli:</label>
            <input type="number" id="harga_beli" name="harga_beli" placeholder="Harga Beli">

            <label for="stok_obat">Stok:</label>
            <input type="number" id="stok_obat" name="stok_obat" placeholder="Stok Obat">

            <label for="keterangan">Keterangan:</label>
            <textarea id="keterangan" name="keterangan" rows="4" cols="50" placeholder="Keterangan"></textarea>

            <input type="submit" value="Simpan Data Obat">
        </form>
    </div>
</body>

</html>