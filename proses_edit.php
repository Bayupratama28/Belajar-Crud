<?php
include 'koneksi.php';

$id = $_POST['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jurursan = $_POST['jurursan'];

$query = mysqli_query($conn, "UPDATE mahasiswa SET npm='$npm', nama='$nama', alamat='$alamat', telp='$telp', jurursan='$jurursan' WHERE id ='$id'")or die(mysqli_error($conn));

if ($query) {
    #code.....
    echo "<script>alert('Data Berhasil Edit');
        window.location='index.php';</script>";
}else{
    echo "<script>alert('Data Gagal !!!');</script>";
}
?>