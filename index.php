<?php

require 'vendor/autoload.php'; // Pastikan jalur ini benar

use Symfony\Component\VarDumper\VarDumper;
use GuzzleHttp\Client;

$testArray = [
    'name' => 'Alief Muhammad Sugata',
    'nim' => '223443026',
    'major' => 'Teknik Otomasi Manufaktur dan Mekatronika'
];

VarDumper::dump($testArray);

$client = new Client();

try {
    $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/1');
    echo "\n\n";
    echo "Response from Guzzle HTTP client:\n";
    echo $response->getBody();
} catch (\Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
