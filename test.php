<?php
session_start();
$conn = mysqli_connect("localhost","root","","movie");
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
$query = mysqli_query($conn,$sql);
$userInfo = mysqli_fetch_object($query);

if ($userInfo){
    $_SESSION['user_name'] = $userInfo->name;
//    header("Location:index.php");

}