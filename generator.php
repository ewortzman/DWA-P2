<?php 

function pw_gen(){
	$words = file("static/word-list.txt");

	$res = "";

	$newword=$words[rand(0, count($words)-1)];
	$res.=$newword." ";
	$newword=$words[rand(0, count($words)-1)];
	$res.=$newword." ";
	$newword=$words[rand(0, count($words)-1)];
	$res.=$newword." ";
	$newword=$words[rand(0, count($words)-1)];
	$res.=$newword;

	echo $res;
}

?>

<form action="." method="POST">
  <div class="row">
    <div class="col-lg-6">
      <input type="text" class="form-control" id="password" value="<?php pw_gen(); ?>">
    </div>
  </div>
  <div class="row">
  	<button id="generate" type="submit" class="btn btn-default btn-lg">
  		<span class="glyphicon glyphicon-star"></span> Generate
	</button>
  </div>
</form>