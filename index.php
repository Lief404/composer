<?php

require 'vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;
use GuzzleHttp\Client;

$testArray = [
    'name' => 'Alief Muhammad Sugata',
    'nim' => '223443026',
    'major' => 'Teknik Otomasi Manufaktur dan Mekatronika'
];

VarDumper::dump($testArray);

$client = new Client();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/1');

echo "\n\n";
echo "Response from Guzzle HTTP client:\n";
echo $response->getBody();
