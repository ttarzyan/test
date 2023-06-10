<?php    

// function showResolution()
// {

$connect = mysqli_connect('localhost', 'root', '', 'test-db');

$check_comment = mysqli_query($connect, "SELECT * FROM `comment` ");


$res = mysqli_fetch_all($check_comment);
foreach($res as $img){
    echo "<pre>";
     echo ($img[2]);
     echo "</pre>";
}

// }
?>