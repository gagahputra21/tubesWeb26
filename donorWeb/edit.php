<?php session_start(); require_once __DIR__ . '/includes/koneksi.php'; if(!isset($conn)){ die('Database connection not established.'); } if(!isset($_SESSION['pengguna_nik'])){ header("Location: login.php"); exit; } $nik=$_SESSION['pengguna_nik']; $query=mysqli_query( $conn, "SELECT * FROM pengguna WHERE nik='$nik'" ); $row=mysqli_fetch_array($query); if(isset($_POST['edit'])){ $kota=$_POST['kota']; $telfon=$_POST['telfon']; $email=$_POST['email']; $status= isset($_POST['status']) ? $_POST['status'] : $row['status']; mysqli_query( $conn, "UPDATE pengguna SET kota='$kota', telfon='$telfon', email='$email', status='$status' WHERE nik='$nik'" ); header("Location: profil.php"); exit; } include 'includes/header.php'; ?>

<div class="container py-4">

<div class="row justify-content-center">

<div class="col-lg-8">

<div class="card">

<div class="card-header bg-danger text-white"> <h4>Edit Profil</h4> </div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label class="form-label"> Domisili </label>

<select name="kota" class="form-select">

<option selected> <?= $row['kota']; ?> </option>

<option>Mataram</option> <option>Lombok Barat</option> <option>Lombok Timur</option> <option>Lombok Tengah</option> <option>Lombok Utara</option> <option>Sumbawa</option> <option>Bima</option>

</select>

</div>

<div class="mb-3">

<label class="form-label"> No Telepon </label>

<input type="text" name="telfon" class="form-control" value="<?= $row['telfon']; ?>">

</div>

<div class="mb-3">

<label class="form-label"> Email </label>

<input type="email" name="email" class="form-control" value="<?= $row['email']; ?>">

</div>

<div class="mb-3">

<label class="form-label"> Status Pendonor </label>

<select name="status" class="form-select">

<option value="1" <?= $row['status']==1 ? 'selected':''; ?>> Aktif </option>

<option value="0" <?= $row['status']==0 ? 'selected':''; ?>> Non Aktif </option>

</select>

</div>

<button name="edit" class="btn btn-danger">

Simpan Perubahan

</button>

<a href="profil.php" class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</div>

</div>

<!-- <?php include 'includes/footer.php'; ?> -->