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

    <h1>Reģistrēties</h1>
    <span></span>

<?php
    
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'error=empty') !== false){
        echo "Aizpildiet visus lauciņus!";
    }
    elseif(strpos($url, 'error=username') !== false){
        echo "Lietotājvārds jau eksistē!";
    }

    if (isset($_SESSION['id'])) {
        echo "You are already logged in!";
    }   else {
        echo "<form action='login-system/signup.inc.php' method='POST'> 
                <input type='text' name='first' placeholder='Firstname'><br>
                <input type='text' name='last' placeholder='Lastname'><br>
                <input type='text' name='uid' placeholder='Username'><br>
                <input type='password' name='pwd' placeholder='Password'><br>
                <button type='submit'>SIGN UP</button>
            </form>";
 	}
?>


    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>