<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <title>Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
 </head>
 <body>

 <div class="header">
     <a href="index.php">Atgriezties</a>
 </div>

    <h1>Pierakstīties</h1>
    <span></span>

    <form action="login-system/login.inc.php" method="POST"> 
        <input type="text" placeholder="Username" name="uid">
        <input type="password" placeholder="Password" name="pwd">
        <button type='submit'>LOGIN</button>
    </form>
 	



    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>