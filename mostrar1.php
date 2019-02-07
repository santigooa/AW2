<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/propio.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Index</a></li>
             
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <li><a href="mostrar1.php">Mostrar1</a></li>
              <li><a href="mostrar2.php">Mostrar2</a></li>
			  <li><a href="insertar.php">Insertar</a></li>
			  <li><a href="modificar.php">Modificar</a></li>
			  <li><a href="eliminar.php">Eliminar</a><li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
		<p>Els equips son:</p>
		<?php
			$servidor = "localhost";
			$usuari = "root";
			$password = "";
			$db = "futbol";

			// Create connection
			$conn = new mysqli($servidor, $usuari, $password, $db);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connexió KO: " . $conn->connect_error);
			} 
			else {

				$sql = "SELECT nom, localitat, web, escut FROM equips";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					echo "<table class=\"table table-striped\">";
					echo "<tr><th>Nom</th><th>Localitat</th><th>Web</th><th>Escut</th></tr>";
					while($rows = $result->fetch_assoc()) {
						echo "<tr><td>" . $rows['nom'] . "</td><td>" . $rows['localitat'] . "</td><td>" . $rows['web'] . "</td><td><img src=\"" . $rows['escut'] . "\"></td></tr>";
					}
					echo "</table>";
				} else {
					echo "0 registres";
				}
				$conn->close();
			}
		?>
	  
	  
	  
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
