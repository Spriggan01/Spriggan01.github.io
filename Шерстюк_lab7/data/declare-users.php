<?php
$f = fopen(__DIR__ . "/users.txt", "r");
while(!feof($f)) {
	$rowStr = fgets($f);
	$rowArr = explode(";", $rowStr);
	$user = [
		"name" => $rowArr[0],
		"pwd" => $rowArr[1],
		"rights" => $rowArr[2],
	];
	$data['users'][] = $user;
}
fclose($f);
?>