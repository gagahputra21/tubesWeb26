<?php

session_start();
require_once 'includes/koneksi.php';

if(!isset($conn)){
    die('Database connection not established.');
}

if(!isset($_SESSION['pengguna_nik'])){
    header("Location: login.php");
    exit;
}

$message='';

if(isset($_POST['input'])){

    $nik=$_SESSION['pengguna_nik'];

    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $pass3=$_POST['pass3'];

    $query=mysqli_query(
        $conn,
        "SELECT password
        FROM pengguna
        WHERE nik='$nik'"
    );

    $data=mysqli_fetch_assoc($query);

    if($data['password']!=$pass1){

        $message=
        "Password lama salah";

    }elseif($pass2!=$pass3){

        $message=
        "Konfirmasi password tidak cocok";

    }else{

        mysqli_query(
            $conn,
            "UPDATE pengguna
            SET password='$pass2'
            WHERE nik='$nik'"
        );

        header("Location: profil.php");
        exit;
    }
}

include 'includes/header.php';
?>

<div class="container py-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card">

<div class="card-header bg-danger text-white">
Ubah Password
</div>

<div class="card-body">

<?php if($message!=''): ?>

<div class="alert alert-danger">
<?= $message ?>
</div>

<?php endif; ?>

<form method="POST">

<div class="mb-3">

<label>Password Lama</label>

<input
type="password"
name="pass1"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password Baru</label>

<input
type="password"
name="pass2"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Konfirmasi Password</label>

<input
type="password"
name="pass3"
class="form-control"
required>

</div>

<button
name="input"
class="btn btn-danger w-100">

Simpan

</button>

</form>

</div>
</div>
</div>
</div>
</div>

<?php include 'includes/footer.php'; ?>