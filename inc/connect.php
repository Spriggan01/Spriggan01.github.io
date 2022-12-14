<?php
    $connect = mysqli_connect('localhost', 'root', '', 'chamomileShop');

    if(!$connect) {
        die('Error connect to DataBase');
    }
?>