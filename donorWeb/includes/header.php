<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1">

<title>Cari Donor Darah</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link
href="assets/css/style.css"
rel="stylesheet">

</head>

<body>

<nav
class="navbar navbar-expand-lg navbar-dark bg-danger shadow">

<div class="container">

<a class="navbar-brand fw-bold"
href="home.php">

<img
src="assets/images/PMI.png"
height="40">

 CariDonor

</a>

<button
class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#nav">

<span
class="navbar-toggler-icon">
</span>

</button>

<div
class="collapse navbar-collapse"
id="nav">

<ul
class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link"
href="home.php">
Home
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="index.php">
Cari Donor
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="stock.php">
Stok Darah
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="event.php">
Event
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="tentangDonor.php">
Tentang Donor
</a>
</li>

<?php if(isset($_SESSION['pengguna_nik'])): ?>

<li class="nav-item dropdown">

<a
class="nav-link dropdown-toggle"
data-bs-toggle="dropdown"
href="#">

<?= $_SESSION['pengguna_username']; ?>

</a>

<ul class="dropdown-menu">

<li>
<a
class="dropdown-item"
href="profil.php">
Profil
</a>
</li>

<li>
<a
class="dropdown-item"
href="gantipass.php">
Ubah Password
</a>
</li>

<li>
<a
class="dropdown-item"
href="logout.php">
Keluar
</a>
</li>

</ul>

</li>

<?php else: ?>

<li class="nav-item">

<a
class="nav-link"
href="login.php">

Masuk

</a>

</li>

<?php endif; ?>

</ul>

</div>

</div>

</nav>

<div class="container mt-4">