<?php
$maintenant = new DateTime('now', new DateTimeZone('Europe/Paris'));
var_dump($maintenant->format('Y-m-d H:i:s'));