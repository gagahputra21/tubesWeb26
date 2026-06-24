<?php
session_start();
include 'includes/koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Daftar Pendonor</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
<div class="container">
<a class="navbar-brand fw-bold" href="home.php">
PMI NTB
</a>
</div>
</nav>

<div class="container py-5">

<div class="row justify-content-center">

<div class="col-lg-8">

<div class="card shadow">

<div class="card-header bg-danger text-white">
<h4 class="mb-0">Pendaftaran Pendonor</h4>
</div>

<div class="card-body">

<form action="submit.php" method="POST">

<div class="row">

<div class="col-md-6 mb-3">
<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>NIK</label>
<input type="text" name="nik" class="form-control" required>
</div>

</div>

<div class="row">

<div class="col-md-6 mb-3">
<label>Jenis Kelamin</label>
<select name="kelamin" class="form-select">
<option value="L">Laki-laki</option>
<option value="P">Perempuan</option>
</select>
</div>

<div class="col-md-6 mb-3">
<label>Golongan Darah</label>
<select name="golongan" class="form-select">
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>
</select>
</div>

</div>

<div class="mb-3">
<label>Domisili</label>
<select name="kota" class="form-select">
<option>Mataram</option>
<option>Lombok Barat</option>
<option>Lombok Timur</option>
<option>Lombok Tengah</option>
<option>Lombok Utara</option>
<option>Sumbawa</option>
<option>Bima</option>
</select>
</div>

<div class="row">

<div class="col-md-6 mb-3">
<label>Tempat Lahir</label>
<input type="text" name="tempat_l" class="form-control">
</div>

<div class="col-md-2 mb-3">
<label>Tanggal</label>
<input type="number" name="tanggal_l" class="form-control">
</div>

<div class="col-md-2 mb-3">
<label>Bulan</label>
<input type="number" name="bulan_l" class="form-control">
</div>

<div class="col-md-2 mb-3">
<label>Tahun</label>
<input type="number" name="tahun_l" class="form-control">
</div>

</div>

<div class="mb-3">
<label>No Telepon</label>
<input type="text" name="telfon" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<hr>

<h5>Akun Login</h5>

<div class="mb-3">
<label>Username</label>
<input type="text" name="uname" class="form-control">
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="pass" class="form-control">
</div>

<input type="hidden" name="status" value="1">

<button type="submit" class="btn btn-danger">
Daftar Sekarang
</button>

<a href="login.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>
</div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>