<?php 

$count = $_POST["wordCount"];
$delimiter = $_POST["delimiter"];

$words = file("static/word-list.txt");

for ($i=0;$i<$count;$i++){
	$arr[] = trim($words[array_rand($words)]);
}

echo implode($delimiter, $arr);