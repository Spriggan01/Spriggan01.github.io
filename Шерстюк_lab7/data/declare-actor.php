<?php
$f = fopen(__DIR__ . "/" . $actorFolder . "/actor.txt", "r");
$actStr = fgets($f);
$actArr = explode(";", $actStr);
fclose($f);

return [
    'fullName' => $actArr[0],
    'dob' => $actArr[1],
    'placeOfBirth' => $actArr[2],
];
?>