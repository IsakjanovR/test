<?php
include "connect.php";
if (isset($_POST['delet']) && is_numeric($_POST["delet"])){
    $delete = $_POST['delet'];
    $query = mysqli_query($db_connect,"DELETE FROM `comments` WHERE `id` = $delete");
}
