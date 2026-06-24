<?php

session_start();

if(!isset($_SESSION['pengguna_nik'])){
    header("Location: login.php");
    exit;
}