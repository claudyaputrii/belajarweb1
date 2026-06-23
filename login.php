<?php
session_start();

require_once "database.php";
require_once "users.php";

$username = $_POST['input_username'];
$password = $_POST['input_password'];


$db = new Database();
$conn = $db->connect();
$user = new Users($conn);

$ditemukan = $user->login($username, $password);

if($ditemukan == false){
    $_SESSION['pesan_kesalahan']= 'Login gagal';
    header("Location: index.php");
    exit;
}else{
    $_SESSION['is_logged_in'] = true;
    header("Location: dashboard/index.php");
    if (!isset($_SESSION['login_count'])) {
    $_SESSION['login_count'] = 0;
}
    $_SESSION['login_count']++;

    header('Location: dashboard/index.php');    
    exit;
}

 
if($password == $password_valid &&
    $username == $username_valid);

echo "Selamat Datang" . $username ;
echo "<br />";
echo "Password Anda" . $password ;