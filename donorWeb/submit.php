<?php

include 'koneksi.php';
if (!isset($conn) && isset($koneksi)) {
    $conn = $koneksi;
}
if (!isset($conn)) {
    die('Database connection not established.');
}

$nama=$_POST['nama'];
$nik=$_POST['nik'];
$kota=$_POST['kota'];
$kelamin=$_POST['kelamin'];
$tempat_l=$_POST['tempat_l'];

$tanggal_l=$_POST['tanggal_l'];
$bulan_l=$_POST['bulan_l'];
$tahun_l=$_POST['tahun_l'];

$golongan=$_POST['golongan'];

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$telfon=$_POST['telfon'];
$email=$_POST['email'];
$status=$_POST['status'];

$sql=
"INSERT INTO pengguna
VALUES(
'$nik',
'$nama',
'$kota',
'$kelamin',
'$tempat_l',
'$tanggal_l',
'$bulan_l',
'$tahun_l',
'$golongan',
'$uname',
'$pass',
'$telfon',
'$email',
'$status',
'0',
'0',
'1'
)";

$success=mysqli_query(
    $conn,
    $sql
);

include 'header.php';
?>

<div class="container py-5">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card text-center">

<div class="card-body">

<?php if($success): ?>

<h2 class="text-success">
Pendaftaran Berhasil
</h2>

<p>
Akun Anda sedang menunggu
verifikasi admin.
</p>

<?php else: ?>

<h2 class="text-danger">
Pendaftaran Gagal
</h2>

<p>
<?= mysqli_error($conn); ?>
</p>

<?php endif; ?>

<a
href="home.php"
class="btn btn-danger">

Kembali ke Home

</a>

</div>

</div>

</div>

</div>

</div>

<?php include 'footer.php'; ?>