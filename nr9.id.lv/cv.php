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
              <li><a href="./pakalpojumi.php">Mūsu pakalpojumi</a></li>
              <li class="active"><a href="#">CV<span class="sr-only">(current</span></a></li>
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
    <div class="box">
      <div class="box-icon">
        <img src="./img/cv_attels.jpeg" class="img-circle" width="150" height="150">
      </div>
      <div class="info">
        <h2 class="text-center">Sveiki<font color="#629BCE">.</font> Es esmu <font color="#629BCE">Lauris Latišs</font></h2>
        <p class="text-muted"><center>Web dizaineris</center></p>
        <p>Sveiki! Kā redzat, Jūs esat nonākuši līdz manam CV. Īsumā par mani - esmu cilvēks kas aizraujas ar datoriem un mājaslapu programmēšanu. Ļoti komunikabls un esmu gatavs uz jaunām iespējām un eksperimentiem. Droši varat izlasīt tālāk par manām spējām zemāk.</p>     
      </div>
    </div>



    <div class="row">
      <div class="col-lg-12">
        <h1 class="cv_virsrakts">Par mani</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col col-md-6 col-sm-6">
        <h2><span class="fa fa-1x fa-user"></span> Pilnais vārds</h2>
        <p class="text-muted">Lauris Eduards Latišs</p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <h2><span class="fa fa-1x fa-envelope-o"></span> E-pasts</h2>
        <p class="text-muted">lauris.eduards@gmail.com</p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <h2><span class="fa fa-1x fa-calendar"> Dzimšanas datums</h2>
        <p class="text-muted">14. decembris 1998. gads</p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <h2><span class="fa fa-1x fa-map-marker"> Dzīvesvieta</h2>
        <p class="text-muted">Rīga, Latvija</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h1 class="cv_virsrakts">Prasmes</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col col-md-6 col-sm-6">
        <h2>Photoshop</h2>
        <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
          <span class="sr-only">40% Complete</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col col-md-6 col-sm-6">
        <h2>CSS3</h2>
        <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
          <span class="sr-only">20% Complete</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col col-md-6 col-sm-6">
        <h2>HTML5</h2>
        <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
          <span class="sr-only">30% Complete</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col col-md-6 col-sm-6">
        <h2>Java</h2>
        <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
          <span class="sr-only">20% Complete</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h1 class="cv_virsrakts">Izglītība</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h2>Rīgas 64. vidusskola</h2>
        <p class="text-muted">2005 - 2014</p> 
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6"> 
        <h2>Rīgas Valsts tehnikums</h2>  
        <p class="text-muted">2014 - pašlaik</p> 
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h1 class="cv_virsrakts">Darba pieredze</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h2>SIA "Best4Sport"</h2>
        <p class="text-muted">2015 - 2016</p> 
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6"> 
        <h2>SIA "Sporta Centrs"</h2>  
        <p class="text-muted">2017 - pašlaik</p> 
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h1 class="cv_virsrakts">Valodu prasmes</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <h2>Latviešu valoda</h2>
        <p class="text-muted">Dzimtā</p> 
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6"> 
        <h2>Angļu valoda</h2>  
        <p class="text-muted">runā un sapratnē teicami, rakstos labi.</p> 
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6"> 
        <h2>Krievu valoda</h2>  
        <p class="text-muted">runā un sapratnē vidēji, rakstos vāji.</p> 
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h1 class="cv_virsrakts">Citas prasmes</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h2>B kategorijas autovadītāja apliecība</h2>
        <p class="text-muted">No 03.02.2017</p> 
      </div>
    </div>
  </div>


 

  <div class="footer">
  <footer class="footer">
    <div class="container">
      <p class="text-muted">IT palīdzība, Copyright &copy; 2017</p>
    </div>
  </footer>
  </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>