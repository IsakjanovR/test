<?php
include "connect.php";
if (isset($_POST['name']) && isset($_POST['text'])){
    $name = $_POST['name'];
    $text = $_POST['text'];
    $query = mysqli_query($db_connect,"INSERT INTO `comments` SET `username`= '$name', `text` ='$text'");
    if ((mysqli_errno($db_connect) == 0)) {
    } else {
        echo mysqli_error($db_connect);

    }
}