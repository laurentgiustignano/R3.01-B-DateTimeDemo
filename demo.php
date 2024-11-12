<?php
$maintenant = new DateTime();

$dateAffichable = $maintenant->format('d/m/Y');

echo "Ce cours est dans le calendrier à la date du {$dateAffichable}.\n";
