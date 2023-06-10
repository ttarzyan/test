<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello<?=($_SESSION['user']['firstname'])?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

   


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a >
      <img src="uploads/<?=$_SESSION['user']['avatar']?>" alt="accountPhoto" width="40" height="34">
    </a>
    <a class="navbar-brand" href="#"><?=($_SESSION['user']['firstname'])?></a>
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


<?php

if(isset($_POST['exit'])){
    header('Location: index.php');
}
session_abort();

?>



  </body>
</html>