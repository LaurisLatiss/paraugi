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
 					<a class="navbar-brand" href="./index.php">IT palīdzība</a>
 				</div>

 				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 					<ul class="nav navbar-nav">
                        <li><a href="./index.php">Sākumlapa</a></li>
                        <li class="active"><a href="#">Mūsu pakalpojumi<span class="sr-only">(current</span></a></li>
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


    <div class="container" id="atkape">
    <div class="row">
        <div class="col-lg-4">
            <div class="well">
                <h2 class="muted">IT PALĪDZĪBA</h2>
                <p><span class="label label-success">POPULĀRS</span></p>
                <ul>
                    <li>Datoru remonts</li>
                    <li>Datoru diagnostika</li>
                    <li>Online palīdzība</li>
                </ul>          
                <p>Ieradīsimies pie jums uz mājām un novērtēsim jūsu sitāciju attiecībā uz ierīci. Ja būs iespējams, tad labosim problēmu uz vietas, bet ja būsnepieciešam, tad to pārvietosim uz ofisu un atgriezīsim salabotu.</p>
                <hr>
                <h3>€5 / h</h3>
                <hr>
                <p><a class="btn btn-success btn-large" href="#"><i class="icon-ok"></i>Pieteikt pakalpojumu</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="well">
                <h2 class="text-warning">ONLINE PALĪDZĪBA</h2>
                <p><span class="label label-success">POPULĀRS</span></p>
                <ul>
                    <li>info</li>
                    <li>info</li>
                    <li>info</li>
                </ul>          
                <p>Nezinu ko ievadīt</p>
                <hr>
                <h3>Cena</h3>
                <hr>
                <p><a class="btn btn-success btn-large" href="#"><i class="icon-ok"></i>Pieteikt pakalpojumu</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="well">
                <h2 class="text-info">MĀJAS LAPAS IZVEIDE</h2>
                <p><span class="label label-info">IZDEVĪGI</span></p>
                <ul>
                    <li>Koncepcijas izstrāde</li>
                    <li>Mājas lapu dizains (70-300€)</li>
                    <li>HTML5 kods(100-300€)</li>
                    <li>Mājas lapas uzturēšana(15€/h)</li>
                </ul>          
                <p>Tiek izveidots individuāls dizains vienkāršiem risinājumie līdz pat saražģītiem. Dizains izstrādāts un pārvērsts kodā attiecīgi pircēja prasībām. Vēlaties uzlabot savu mājas lapu? Jūs droši varat vērsties pie mums un labosim šo problēmu!</p>
                <hr>
                <h3>170-600€</h3>
                <hr>
              <p><a class="btn btn-success btn-large" href="#"><i class="icon-ok"></i>Pieteikt pakalpojumu</a></p>
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