<?php

   session_start();


include 'db_cridential.php';

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($connect,"utf8");
if (!$connect) {
    die("database connection failed.");
}

date_default_timezone_set("Asia/Dhaka");

$slashCount = explode('/', $_SERVER['REQUEST_URI']);
$extra      = count($slashCount) - 3;
if ($extra == 1) {
    $addDot = '../';
} else if ($extra == 2) {
    $addDot = '../../';
} else if ($extra == 3) {
    $addDot = '../../../';
} else if ($extra == 4) {
    $addDot = '../../../../';
} else if ($extra == 5) {
    $addDot = '../../../../../';
} else {
    $addDot = '';
}

// user activaty log
if(isset($_SESSION['id'])){
   $user_id  = $_SESSION['id'];
   
}





?>