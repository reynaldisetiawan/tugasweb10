<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'tugas10');

    if (!$conn){
        echo "".mysqli_connect_error();
    }
?>