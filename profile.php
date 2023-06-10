<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authorization and registration</title>
    <link rel="stylesheet" href="style/css/main.css">
</head>
<body>
<h1>hellooooo</h1>
<?php
echo $_SESSION['message'];
print_r($_FILES['avatar']);

?>
   
</body>
</html>