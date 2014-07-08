<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>xkcd Password Generator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h1>xkcd Password Generator<small>Created with Bootstrap</small></h1>
      <!-- Tab navigation -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#generator" role="tab" data-toggle="tab">Generator</a></li>
        <li><a href="#comic" role="tab" data-toggle="tab">Comic</a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane fade in active" id="generator"> <!-- Generator pane -->
          <form class="">
            <div class="row">
              <div class="col-md-12">
                <fieldset><legend>Password Generator</legend></fieldset>
              </div>
            </div> <!-- row -->
            <div class="row">
              <div class="col-md-12">
                <h2><input class="input-xlarge" id="password" value="" readonly></h2>
              </div>
            </div> <!-- row -->
            <div class="row">
              <div class="col-md-2">
                <select class="form-control" id="wordCount">
                  <option value="" disabled selected style='display:none;'>Word Count</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                </select>
              </div>
              <div class="col-md-2">
                <select class="form-control" id="delimiter">
                  <option value="" disabled selected style='display:none;'>Delimiter</option>
                  <option value=".">.</option>
                  <option value=",">,</option>
                  <option value="-">-</option>
                  <option value="_">_</option>
                  <option value=" "> </option>
                </select>
              </div>
            </div> <!-- row -->
            <br>
            <div id="countAlert"></div>
            <div id="delimiterAlert"></div>
            <div class="row">
              <div class="col-md-2">
                <button type="button" id="submit" class="btn btn-primary btn-lg">
                  Submit <span class="glyphicon glyphicon-circle-arrow-right"></span>
                </button>
              </div>
            </div>

          </form>
        </div>

        <div class="tab-pane fade" id="comic"> <!-- Comic pane -->
          <img alt="" src="http://imgs.xkcd.com/comics/password_strength.png" />
        </div>
      </div>
    </div> <!-- container-fluid -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript">
    // Tab switching
    $('#generator a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })

    $('#comic a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })

    // Generate new password
    $('#submit').click(function (){
      var die=false;

      if ($("#wordCount").val() == null){
        $("#countAlert").html('<div class="alert alert-danger" role="alert">Please select a word count</div>');
        die=true;
      } else {
        $("#countAlert").html("");
      }
      if ($("#delimiter").val() == null){
        $("#delimiterAlert").html('<div class="alert alert-danger" id="delimiterAlert" role="alert">Please select a delimiter</div>');
        die=true;
      } else {
        $("#delimiterAlert").html("");
      }

      if (die){
        return;
      }

      $.post("generator.php", 
            { 
              wordCount:$("#wordCount").val(),
              delimiter:$("#delimiter").val()
            },
            function (data, status){
              $("#password").val(data);
            },
            "text");
    });
    </script>
  </body>