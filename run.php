<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authorization and registration</title>
    <link rel="stylesheet" href="style/css/main.css">
</head>
<body>
 


<?php
//echo $_SESSION['message'];

if (isset($_POST['login'])) {
    // login
 ?>

    <form action="process.php" method="post">
        <label>Login</label>    
        <input type="text" name="login" placeholder="login">
        <label>Password</label> 
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="resolution_submit">Sign in</button> 
    
        <p>
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </p>
<?php

    
} 
if (isset($_POST['register'])) {
    // register
    ?>

    <form action="process.php" method="post" enctype="multipart/form-data">
    <label>First name</label>
    <input type="text" name="firstName">
    <label>Last name</label>
    <input type="text" name="lastName">
    <label>Login</label>
    <input type="text" name="login">
    <label>Mail</label>
    <input type="email" name="email">
    <label>Profile picture</label>
    <input type="file" name="avatar">
    <label>password</label>
    <input type="password" name="password">
    <label>Confirmation password</label>
    <input type="password" name="password_confirm">
    <button type="submit" name="registration_submit" >Sign in</button>

    <p>
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </p>

<?php

}



?>


</body>
</html>













   