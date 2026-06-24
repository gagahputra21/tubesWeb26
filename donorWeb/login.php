<?php
session_start();
include 'includes/koneksi.php';

$error = '';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM pengguna
        WHERE username='$username'
        AND password='$password'"
    );

    if(mysqli_num_rows($query) > 0){

        $data = mysqli_fetch_assoc($query);

        $_SESSION['pengguna_nik'] = $data['nik'];
        $_SESSION['pengguna_nama'] = $data['nama'];
        $_SESSION['pengguna_username'] = $data['username'];

        header("Location: home.php");
        exit;

    }else{
        $error = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login - Cari Donor</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center align-items-center vh-100">

<div class="col-md-5">

<div class="card shadow">

<div class="card-header bg-danger text-white text-center">

<h3>Login Pendonor</h3>

</div>

<div class="card-body">

<?php if($error!=''){ ?>

<div class="alert alert-danger">

<?php echo $error; ?>

</div>

<?php } ?>

<form method="POST">

<div class="mb-3">

<label>Username</label>

<input
type="text"
name="username"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button
type="submit"
name="login"
class="btn btn-danger w-100">

Masuk

</button>

</form>

<div class="text-center mt-3">

<a href="forgot.php">
Lupa Password?
</a>

<br><br>

Belum punya akun?

<br>

<a
href="daftar.php"
class="btn btn-outline-danger mt-2">

Daftar Sekarang

</a>

</div>

</div>

</div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>