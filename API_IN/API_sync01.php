<?php

// Enregistrez le temps de début
$tempsDebut = microtime(true);

// URL de l'API que vous souhaitez appeler
$apiUrl = "https://data.metropole-rouen-normandie.fr/api/explore/v2.1/catalog/datasets/eco-counter-sites/records";

// Paramètres à envoyer à l'API (s'il y en a)
$params = array(
    'limit' => '20'
);

// Construire l'URL complète avec les paramètres (si nécessaire)
if (!empty($params)) {
    $apiUrl .= '?' . http_build_query($params);
}

// Configuration des options pour le contexte
$options = array(
    'http' => array(
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'method' => 'GET' // ou 'POST' selon les besoins
    )
);

// Créer le contexte
$context = stream_context_create($options);

// Appeler l'API et récupérer la réponse
$response = file_get_contents($apiUrl, false, $context);

// Vérifier si la requête a réussi
if ($response === FALSE) {
    die('Erreur lors de l\'appel à l\'API');
}

// Enregistrez le temps de fin
$tempsFin = microtime(true);
$tempsEcoule = ($tempsFin - $tempsDebut) * 1000;
// Affichez le temps écoulé
print( "Le temps écoulé est de : " . round($tempsEcoule, 2) . " millisecondes<br>");

// Traitement de la réponse
print( $response );
?>
