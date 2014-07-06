<?php 


function pw_gen(){
	$words = file("static/word-list.txt");
	// echo "<pre>";
	// foreach ($words as $key => $val):
	// 	echo $key." => ".$val;
	// endforeach;
	// echo "</pre>";

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

