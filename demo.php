<?php
$maintenant = new DateTime();
$avant = new DateTime("2024-09-01");

$difference = $maintenant->diff($avant);

var_dump($maintenant->add($difference));
