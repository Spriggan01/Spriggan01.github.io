<?php
unlink(__DIR__ . "/../data/" . $_GET['actor'] . "/" . $_GET['file']);
header('Location: ../index.php?actor=' . $_GET['actor']);
?>