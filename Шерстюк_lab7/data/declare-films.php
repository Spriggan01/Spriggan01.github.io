<?php
$namE = '/^film-\d\d.txt\z/';
$path = __DIR__ ."/" . $actorFolder;
$conts = scandir($path);

$i = 0;
foreach ($conts as $node) {
    if (preg_match($namE, $node)) {
        $data['films'][$i] = require __DIR__ .'/declare-film.php';
        $i++;
    }
}
?>