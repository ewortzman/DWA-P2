<?php 

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