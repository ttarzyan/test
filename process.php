<?php
session_start();
//require_once 'connect.php';

if (isset($_POST['resolution_submit'])) {
    
    processResolution();
} elseif (isset($_POST['registration_submit'])) {
 
    processRegistration();
}

function processResolution()
{
    
    $connect = mysqli_connect('localhost','root', '', 'test-db');
    // Получаем данные из формы
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
    if(mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
       $_SESSION['user'] = [
        "id" => $user['id'],
        "firstname" => $user['firstname'],
        "lastname" => $user['lastname'],
        "avatar" => $user['avatar']
       ];
       header('Location: profile.php');
    
    }else{
        $_SESSION['message'] = 'Wrong login or password';
        
        header('Location: index.php');
    }
    




   
}



function processRegistration()
{
   
    $connect = mysqli_connect('localhost', 'root', '', 'test-db');
    // Получаем данные из формы
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    
    if ($password === $password_confirm) {
        if(!empty($_FILES['avatar'])){
            $file = $_FILES['avatar'];
            $photo = time() . $file['name'];
            $path = __DIR__ . '/uploads/' . $photo;

            if(!move_uploaded_file($file['tmp_name'], $path)){
                echo 'error photo';
            }
        }

    
    
        $password = md5($password);
    
        mysqli_query($connect, "INSERT INTO `users`( `firstname`, `lastname`, `login`, `email`, `password`, `avatar`) VALUES ('$firstName','$lastName','$login','$email','$password','$photo')");
        $_SESSION['message'] = 'Registration completed successfully';
        header('Location: index.php');
    
    } else {
        $_SESSION['message'] = 'Password mismatch';
        header('Location: index.php');
    }
    
}


?>