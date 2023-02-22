<?php
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "system";

    $conn = mysqli_connect($servername, 
                           $username,
                           $password,
                           $database);
    
    //Checking connection
    if (!$conn) {
        die ("Connection failed : " . mysqli_connect_error());
    }
    echo "Connection success";

?>