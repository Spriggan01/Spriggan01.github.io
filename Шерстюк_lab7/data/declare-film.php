<?php
$f = fopen($path ."/". $node, "r");
$rowStr = fgets($f);
$rowArr = explode(";", $rowStr);
$film["file"] = trim($node);
$film["name"] = $rowArr[0];
$film["country"] = $rowArr[1];
$film["rd"] = $rowArr[2];
$film["quality"] = $rowArr[3];
fclose($f);

return $film;
?>
