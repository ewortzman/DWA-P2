<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>xkcd Password Generator</title>

  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  <?php require "logic.php" ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

  

  <form action="." method="POST">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" id="password" value="<?php pw_gen() ?>">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <span class="glyphicon glyphicon-circle-arrow-right"></span>
            </button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </form>
</body>
</html>