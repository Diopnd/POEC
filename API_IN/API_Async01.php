<?php
/*
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
*/
//composer require guzzlehttp/guzzle
require 'vendor/autoload.php';  // Assurez-vous que le fichier autoload.php est correctement inclus

use GuzzleHttp\Client;
use GuzzleHttp\Promise;
//use GuzzleHttp\Promise\settle;

// Fonction pour effectuer une requête à l'API
function fetchDataAsync($url)
{
    $client = new Client();

    // Créer une promesse pour la requête
    return $client->getAsync($url);
}

// Liste des URLs de l'API que vous souhaitez interroger de manière asynchrone
$apiUrls = [
    'https://data.metropole-rouen-normandie.fr/api/explore/v2.1/catalog/datasets/eco-counter-sites/records?limit=20',
    'https://api.example.com/endpoint2',
    'https://api.example.com/endpoint3',
];




// Utiliser Promise\all pour obtenir les résultats
// Créer un tableau de promesses pour toutes les requêtes asynchrones
$promises = [];
foreach ($apiUrls as $url) {
    $promises[] = fetchDataAsync($url);
}

// Attendre que toutes les promesses soient résolues
//$responses = Promise\all($promises)->wait();
//$results = Promise\unwrap($promises);
//$responses = Promise\settle($promises)->wait();

// Traiter les résultats
foreach ($responses as $response) {
    try {
        $data = $response->getBody()->getContents();
        echo "Données : $data\n";
    } catch (\Exception $e) {
        echo "Échec de la requête : " . $e->getMessage() . "\n";
    }
}
?>
