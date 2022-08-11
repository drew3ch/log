<?php
if (!file_exists('stat.txt')) {
	fopen("stat.txt", "w");
}
if(empty(file_get_contents('stat.txt'))) {
	file_put_contents('stat.txt', 0);
}
$stat = file_get_contents('stat.txt') + 1;
file_put_contents('stat.txt', $stat);
header('Content-Type: image/jpeg');
readfile('logo.jpg');
?>
