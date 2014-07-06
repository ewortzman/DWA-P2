<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>xkcd Password Generator</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css"/>

</head>
<body>
	<div class="container">
		<h1>xkcd Password Generator</h1>
		<div class="navbar">
    	<div class="navbar-inner">
	     	<div class="container">
       		<ul class="nav">
	         	<li id="home-link" class="active"><a href="#">Home</a></li>
  	        <li id="comic-link"><a href="#">Comic</a></li>
        	</ul>
      	</div>
    	</div>
  	</div>

  	<div class="hero-unit">
    	<div id="main-content">
        <?php require "generator.php" ?>
      </div>
 		</div>
	</div>

 

	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

	<script src="js/bootstrap.js"></script>

  <script type="text/javascript">
  var main = $("#main-content");
  var home = $("#home-link");
  var comic = $("#comic-link");

  home.click(function(){
    home.addClass("active");
    comic.removeClass("active");
    main.load("generator.php");
  });

  comic.click(function(){
    home.removeClass("active");
    comic.addClass("active");
    main.load("comic.php");
  });
  </script>
</body>
</html>