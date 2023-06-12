<?php
session_start();
require_once 'show.php'

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello<?= ($_SESSION['user']['firstname']) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>




  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a>
        <img src="uploads/<?= $_SESSION['user']['avatar'] ?>" alt="accountPhoto" width="50" height="44">
      </a>
      <a class="navbar-brand" href="#"><?= ($_SESSION['user']['firstname']) ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

        <form class="d-flex" method="post" role="search">

          <button class="btn btn-outline-danger" name="exit" type="submit">Exit</button>
        </form>
      </div>
    </div>
  </nav>

  <form action="profprocess.php" method="post" enctype="multipart/form-data">
    <label>Comment</label><br>
    <input type="text" name="comment"><br>
    <label>picture</label><br><br>
    <input type="file" name="photo"><br><br>
    <button type="submit" name="registration_submit">add</button>
  </form>

  <div class="text-center">

    <img src="uploads/<?= $img[2] ?>" class="rounded" alt="..." width="600" height="450">
    <span><?= $img[1] ?></span>

  </div>

  <?php
  //$connect = mysqli_connect('localhost','root', '', 'test-db');




  if (isset($_POST['exit'])) {
    header('Location: index.php');
  }
  session_abort();


  ?>

<table>
  <tr>
    <th>Name</th>
    <th>L Name</th>
    <th>Email</th>
    <th>Photo</th>
  </tr>
  <?php
  while($user_all = mysqli_fetch_row($check_user)) 
  {
  ?>
 <tr>
  <td><?=$user_all[1]?></td>
  <td><?=$user_all[2]?></td>
  <td><?=$user_all[4]?></td>
  <td><img height="60" width="60" src="uploads/<?=$user_all[6]?>"> </td>
  <td>
    <form action="profile.php" method="post">
    <input type="hidden" name="firstName" value="<?=$user_all[1]?>">
      <input type="hidden" name="email" value="<?=$user_all[4]?>">
    <input type="submit" value="send email">
    </form>
  </td>
 </tr>
<?php } ?>
</table>
<div>
  <?php
if(isset($_POST['email'])){
  ?>
  <form action="sendEmail.php" method="POST">
    <label for="name">name:</label>
    <input type="text" name="name" value="<?= ($_SESSION['user']['firstname']) ?>"><br><br>

    <label for="email">Email:</label>
    <input type="hiddeng" name="email" value="<?=$_POST['email']?>"><br><br>

    <label for="message">message:</label><br>
    <textarea name="message" id="message" cols="30" rows="10" required></textarea><br><br>

    <input type="submit" value="SEND">
</form>
<?php

}


  ?>
</div>

</body>

</html>