<?php
$maintenant = new DateTime();
$avant = new DateTime("2024-09-01");

var_dump($maintenant->diff($avant));
