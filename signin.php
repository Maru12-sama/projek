<?php

include "fuction.php";
$email = $_POST["userReg"];
$password = $_POST["passReg"];
$passCek = $_POST["cekReg"];

$sql = "INSERT INTO daftar (email, password, confirm) VALUES ('$email', '$password', '$passCek')";

if(mysqli_query($conn, $sql)){
    header("Location: index.php");
}

?>