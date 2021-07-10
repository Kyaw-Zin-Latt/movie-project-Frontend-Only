<?php
if (empty($_SESSION['user_name'])){
    header("Location:login.php");
}