<?php
//common start

function showAlert($str,$message){
    return "<p class='alert alert-$str'>$message</p>";
}

//common end


//start auth

function register(){
    $name = $_POST['fname'];
    $name .= " ". $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;

}