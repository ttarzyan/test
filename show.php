<?php    


$connect = mysqli_connect('localhost', 'root', '', 'test-db');

$check_comment = mysqli_query($connect, "SELECT * FROM `comment` ");


$res = mysqli_fetch_row($check_comment);
foreach($res as $key => $img){
    echo "<pre>";
     print_r($key[$img]);
     echo "</pre>";
}


?>