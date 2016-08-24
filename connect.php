<?php
DEFINE ("HOST","localhost");
DEFINE ("USER","root");
DEFINE ("PASS","");
DEFINE ("DB","hotels.ru");
$db_connect = mysqli_connect(HOST, USER,PASS,DB);
mysqli_set_charset($db_connect,"UTF-8");