<?php
session_start();

function conn(){
    return mysqli_connect("localhost","root","","movie");
}