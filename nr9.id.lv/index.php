<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <title>IT palīdzība</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
 </head>
 <body>
 	<header>
 		<nav class="navbar navbar-default navbar-fixed-top">
 			<div class="container-fluid">
 				<div class="navbar-header">
 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
 						<span class="sr-only">Toggle navigation</span>
      					<span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
 					</button>
 					<a class="navbar-brand" href="#">IT palīdzība</a>
 				</div>
 				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 					<ul class="nav navbar-nav">
 						<li class="active"><a href="#">Sākumlapa<span class="sr-only">(current</span></a></li>
 						<li><a href="./pakalpojumi.php">Mūsu pakalpojumi</a></li>
 						<li><a href="./cv.php">CV</a></li>
 						<li><a href="./kontakti.php">Kontakti</a></li>
 					</ul>
 					<ul class="nav navbar-nav navbar-right">
                        <?php
                            if (isset($_SESSION['id'])) {                       
                                echo "<li><a>Jūs esat pierakstījies kā "; echo $_SESSION['id']; echo "</a></li>
                                <li><a href='login-system/logout.inc.php'>Izrakstīties</a></li>";
                            } else {
     					        echo "<li><a href='login.php'>Pierakstīties</a></li>
                                    <li><a href='signup.php'>Reģistrēties</a></li>";
                            }
                        ?>
 					</ul>
 				</div>
 			</div>
 		</nav>
 	</header>

 	<div>
 		<img src="./img/web-coding2.png" class="web-coding2">
 	</div>

 		<div class="container">
		<div class="apraksts">
			<div class = "row">
				<div class="col-md-6">
					<h1>Par mums</h1>
				</div>
				<div class="col-md-6">
					IT palīdzība realizē profesionālu palīdzību IT vidē cilvēkiem, kuriem tā ir nepieciešama. Mēs piedāvājam pakalpojumus sākot ar parastākajām IT konsultācijām pa tālruni līdz pat profesionālas mājaslapas izveidošanas.
				</div>
			</div>
		</div>
		<div class="apraksts">
			<div class = "row">
				<div class="col-md-6">
					<h1>Ar ko mēs atšķiramies?</h1>
				</div>
				<div class="col-md-6">
					Mūsu komanda piedāvā profesionālu darbu iespējami ātrā laika posma, bet tas viss par īpaši zemām cenām salīdzinājumā ar citiem konkurentiem.
				</div>
			</div>

		</div>
	</div>

 	<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-desktop"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">IT palīdzība</h4>
                    <p>Saražģijumi ar mājas datoru un nespējat ar to tik gala? Esam šeit lai palīdzētu! Mūsu komanda ieradīsies pie jums uz mājam un atrisinās jūsu problēmu.</p>
                    <a href="./pakalpojumi.php" class="btn">Lasīt tālāk</a>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-code"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Mājas lapas izveide</h4>
                    <p>Mēs piedāvājam izstrādāt mūsdienīgu mājaslapu pēc jūsu iecerēm. Mēs piedāvājam izstrādāt mūsdienīgu mājaslapu pēc jūsu iecerēm.</p>
                    <a href="./pakalpojumi.php" class="btn">Lasīt tālāk</a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-phone"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Online palīdzība</h4>
                    <p>Mēs piedāvājam izstrādāt mūsdienīgu mājaslapu pēc jūsu iecerēm. Mēs piedāvājam izstrādāt mūsdienīgu mājaslapu pēc jūsu iecerēm.</p>
                    <a href="./pakalpojumi.php" class="btn">Lasīt tālāk</a>
                </div>
            </div>
        </div>
	</div>
</div>


<footer class="footer">
	<div class="container">
		<p class="text-muted">IT palīdzība, Copyright &copy; 2017</p>
	</div>
</footer>
 
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>