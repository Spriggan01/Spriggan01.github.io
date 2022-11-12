<?php
	$namE = '/^actor-\d\d\z/';
	$path = __DIR__ ."/../data";
	$conts = scandir($path);

	$i = 0;
	foreach ($conts as $node) {
    	if (preg_match($namE, $node)) {
        $last_actor = $node;
    	}
	}
$actor_index = (String)(((int)substr($last_actor, -1, 2)) + 1);
if(strlen($actor_index) == 1) {
	$actor_index = "0" . $actor_index;
}
$newActorName = "actor-" . $actor_index;

mkdir(__DIR__ . "/../data/" . $newActorName);
$f = fopen(__DIR__ . "/../data/" . $newActorName . "/actor.txt", "w");

fwrite($f,"FirstName LastName; ;Country");
fclose($f);
header('Location: ../index.php?actor=' . $newActorName);
?>