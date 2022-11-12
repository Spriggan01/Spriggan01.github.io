<?php
	$namE = '/^actor-\d\d\z/';
	$path = __DIR__ . "/" . $actorFolder;
	$conts = scandir($path);

	$i = 0;
	foreach ($conts as $node) {
	 if (preg_match($namE, $node)) {
	 	$actorFolder = $node;
	 	$actor = require(__DIR__ . '/declare-actor.php');
	 	$data['actors'][] = [
	 		'fullName' => $actor['fullName'],
	 		'file' => $actorFolder
	 	];
	 	$i++;
	 }
	}
?>