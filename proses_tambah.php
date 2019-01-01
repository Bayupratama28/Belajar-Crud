<?php
include 'koneksi.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jurursan = $_POST['jurursan'];

$query = mysqli_query($conn, "INSERT INTO mahasiswa ( id, npm, nama, alamat, telp, jurursan)
VALUES (0, '$npm', '$nama', '$alamat', '$telp', '$jurursan')") or die(mysqli_error($conn));

if ($query) {
    #code.....
    echo "<script>alert('Data Berhasil ditambah');
        window.location='index.php';</script>";
}else{
    echo "<script>alert('Data Gagal !!!');</script>";
}
?>