<?php
session_start();
include 'includes/koneksi.php';
if (!isset($conn)) {
    $conn = mysqli_connect('localhost', 'root', '', 'donor');
    if (!$conn) {
        die('Koneksi database gagal: ' . mysqli_connect_error());
    }
}
if(!isset($_SESSION['pengguna_nik'])){
    header("location:log in.php");
    exit;
}
$nik = $_SESSION['pengguna_nik'];
$query = mysqli_query($conn, "SELECT * FROM pengguna WHERE nik='$nik'");
$row = mysqli_fetch_array($query);
include 'includes/header.php'; ?>

<div class="container py-4">

<div class="row justify-content-center">

<div class="col-lg-8">

<div class="card">

<div class="card-header bg-danger text-white">

<h5 class="mb-0">

Profil Pendonor

</h5>

</div>

<div class="card-body">

<div class="row g-4">

<div class="col-md-6"> <strong>Nama</strong><br> <?= $_SESSION['pengguna_nama']; ?> </div>

<div class="col-md-6"> <strong>NIK</strong><br> <?= $_SESSION['pengguna_nik']; ?> </div>

<div class="col-md-6"> <strong>Golongan Darah</strong><br> <?= $row['goldar']; ?> </div>

<div class="col-md-6"> <strong>Kota</strong><br> <?= $row['kota']; ?> </div>

<div class="col-md-6"> <strong>Telepon</strong><br> <?= $row['telfon']; ?> </div>

<!-- <div class="col-md-6"> <strong>Jumlah Donor</strong><br> <?= $row['jumlah_donor']; ?> </div> -->

<div class="col-md-12">

<strong>Status Pendonor</strong><br>

<?php if($row['status']==1){ echo '<span class="badge bg-success">Aktif</span>'; }else{ echo '<span class="badge bg-secondary">Non Aktif</span>'; } ?>

</div>

<div class="col-md-12">

<a href="edit.php" class="btn btn-danger">

Edit Profil

</a>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

<!-- <?php include 'includes/footer.php'; ?> -->