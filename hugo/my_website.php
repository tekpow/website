<!DOCTYPE HTML>

<!--   /\  /\_   _  __ _  ___     /\/\   __ _ _ __ ___ ___  __ _ _   _                                
      / /_/ / | | |/ _` |/ _ \   /    \ / _` | '__/ __/ _ \/ _` | | | |                               
     / __  /| |_| | (_| | (_) | / /\/\ \ (_| | | | (_|  __/ (_| | |_| |                               
     \/ /_/  \__,_|\__, |\___/  \/    \/\__,_|_|  \___\___|\__,_|\__,_|                               
              |___/                                                      -->

<html lang="en">
  <title>LolPow</title>
  <head>

    <!-- Cascading Stylesheets -->
    <link href="bootstrap.css" rel="stylesheet" type="text/css">
    <link href="hugo.css" rel="stylesheet" type="text/css">
    <link href="dropdown.css" rel="stylesheet" type="text/css">

    <!-- Site Icon -->
    <link href="../res/ico/Tray_32.png" rel="shortcut icon">

    <!-- Scripts -->
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/npm.js"></script>
  </head>

  <div class="all">

    <!-- NavBar -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
	<div class="navbar-header">

	  <!-- Logo -->
	  <a class="logo" href="#" title="League Stats"><img src="../res/ico/logo2.png"></a>
	  
	  <!-- Form Summoner -->
	  <div class="form1">
	    <form class="navbar-form navbar-left" method="post" action="index.php">
              <div class="form-group">
	      	  <!-- Region Selector -->
		  <span class="region">
		    <form 
		       <button title="Choose EUW" class="btn btn-default" type="submit">EUW</button>
		       <button title="Choose NA" class="btn btn-default" type="submit">NA</button>
		  </span>
		  <input type="text" class="form-control" name="player" placeholder="Search Summoner">
              </div>
              <button title="Get Stats" type="submit" class="btn btn-default">Go!</button>
	    </form>
	  </div>

	</div>
      </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron">
      <span class="col-md-4">
      </span>
      <span class="col-md-4">
	<h1 class="text-center">LoL Scouter</h1>
	<P class="text-center"> Enter a summoner name and we will fetch the stats for the Account</p>
      </span>
      <span class="col-md-4">
      </span>  
    </div>

    <!-- Footer -->
    <div class="footer">
    </div>
  </div>