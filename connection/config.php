<?php

function openConnection(){
    $hotsname= "localhost";
    $username= "root";
    $password= "";
    $database= "php_login_system";

    $conn = new mysqli($hotsname, $username, $password, $database);

    if ($conn ->connect_error){
        die ("connection failed" . $conn->connect_error);
    }

    echo "koneksinya berhasil!";
}