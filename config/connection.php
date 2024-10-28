<?php
    $server='localhost';
    $user='root';
    $pass='';
    $dbname='mapato';

    $conn=mysqli_connect($server,$user,$pass,$dbname);

    if(!$conn){
        die(mysqli_error($conn));
    }
    ?>
