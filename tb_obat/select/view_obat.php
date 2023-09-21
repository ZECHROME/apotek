<?php
include "../../koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tb_obat ORDER BY id_obat DESC");
 //ASCENDING mengurutkan dari kecil ke besar
 //DESCENDING mengurutkan dari besar ke kecil
    # code...
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Id Obat</th>
                <th>Id Supplier</th>
                <th>Nama Obat</th>
                <th>Kategori Obat</th>
                <th>Harga Obat</th>
                <th>Harga Beli</th>
                <th>Stok Obat</th>
                <th>Keterangan</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php 
                while ($baris = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?= $baris['id_obat']; ?></td>
                <td><?= $baris['id_supplier']; ?></td>
                <td><?= $baris['nama_obat']; ?></td>
                <td><?= $baris['kategori_obat']; ?></td>
                <td><?= $baris['harga_jual']; ?></td>
                <td><?= $baris['harga_beli']; ?></td>
                <td><?= $baris['stok_obat']; ?></td>
                <td><?= $baris['keterangan']; ?></td>
                <td><a href="../update/edit_obat.php?idobat=<?= $baris['id_obat'];?>">Edit</a></td>
                <?php
                    $id_obat = $baris['id_obat'];
                    $hide_delete = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_obat 
                    INNER JOIN tb_detail_transaksi ON tb_obat.id_obat = tb_detail_transaksi.id_obat 
                    WHERE tb_obat.id_obat = $id_obat");
                    $cek = mysqli_fetch_row($hide_delete);

                    if($cek['0']==0){
                        ?>
                <td><a href="../delete/delete_obat.php?idobat=<?= $baris['id_obat'];?>">Delete</a></td>
                <?php
                    } else {
                        echo "<td></td>";
                    }
                ?>

            </tr>
            <?php
                }
            ?>
        </table>
    </center>

</body>

</html>