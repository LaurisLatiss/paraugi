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
              <li><a href="./cv.php">CV</a></li>
              <li class="active"><a href="#">Kontakti<span class="sr-only">(current</span></a></li>
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

  <div class="container">
    <div class="apraksts" id="atkape">
      <div class = "row">
        <div class="col-md-6">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.662327591042!2d24.179093115977548!3d56.95458638089182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eece6b623145f1%3A0xf80b6d962ccaf600!2sPurvciema+iela+57%2C+Vidzemes+priek%C5%A1pils%C4%93ta%2C+R%C4%ABga%2C+LV-1035!5e0!3m2!1slv!2slv!4v1488053590112"></iframe>
          </div>
        </div>
        <div class="col-md-6">
            <h3>Adrese</h3>
            <p>Purvciema iela 57</p>
            <h3>Tālrunis</h3> 
            <p>+37120202977</p>
            <h3>E-pasts</h3>
            <p>lauris.eduards@gmail.com</p>
        </div>
      </div>
    </div>
    <div class="apraksts">
      <div class = "row">
        <div class="col-md-6">
          <h1></h1>
        </div>
        <div class="col-md-6">
          
        </div>
      </div>

    </div>
  </div>

<div class="container">
<h1>Jautājiet mums</h1>
<form>
  <div class="form-group">
    <label for="Email">E-pasta adrese</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required="true">
    <small id="emailHelp" class="form-text text-muted">Mēs nenodosim Jūsu e-pasta adresi citiem.</small>
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Jautājuma kategorija</label>
    <select class="form-control" id="Select">
      <option>Mūsu pakalpojumi</option>
      <option>Darba laiks un kvalitāte</option>
      <option>Piedāvājumi</option>
      <option>Sūdzības</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Textarea">Jūsu jautājums</label>
    <textarea class="form-control" id="Textarea" rows="3" required="true"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Pielikums</label>
    <input type="file" class="form-control-file" id="InputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Pievienojiet attēlus, ja jums ir nepieciešams norādīt problēmu vizuāli.</small>
  </div>
  <fieldset class="form-group">
    <legend>Vai esat mūsu klients?</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" required="true">
        Jā
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Nē
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Vai vēlaties saņemt mūsu piedāvājumus uz e-pastu?
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Iesniegt</button>
</form>
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