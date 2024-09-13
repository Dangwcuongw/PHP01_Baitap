<?php
    $server='localhost';
    $user='root';
    $pass='';
    $database='sqlb5';

    $conn =  new mysqLi($server,$user,$pass,$database);

    if ($conn){
        mysqli_query($conn, "SET NAMES 'utf8' ");
    }
    else{
        echo "Kết nối kh thành công";
    }
?>