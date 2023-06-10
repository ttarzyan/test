<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '', 'test-db');
    // Получаем данные из формы
    $comment = $_POST['comment'];   
  
        if(!empty($_FILES['photo'])){
            $file = $_FILES['photo'];
            $photo = time() . $file['name'];
            $path = __DIR__ . '/uploads/' . $photo;

            if(!move_uploaded_file($file['tmp_name'], $path)){
                echo 'error photo';
            }
        }      
    
        mysqli_query($connect, "INSERT INTO `comment`( `text`, `photo`) VALUES ('$comment','$photo')");
        
        header('Location: profile.php');

       