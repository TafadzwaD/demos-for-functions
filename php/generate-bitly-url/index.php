<?php

include './vendor/autoload.php';

use GuzzleHttp\Client;

$url = $_ENV['APPWRITE_FUNCTION_DATA'];

// bitly base url
$bitly_api_url = 'https://api-ssl.bitly.com/';

try {
    $guzzleclient = new Client([
        // Base URI is used with relative requests
        'base_uri' => $bitly_api_url,
    ]);


    if (filter_var($url, FILTER_VALIDATE_URL) === FALSE)
        throw new Exception('url is not valid!', 500);

    $response = $guzzleclient->request('POST', 'v4/bitlinks', [
        'json' => [
            'long_url' => $url
        ],
        'headers' => [
            'Authorization' => $_ENV['BITLY_ACCESS_TOKEN']
        ],
        'verify' => false,
    ]);

    if (!in_array($response->getStatusCode(), [200, 201]))
        throw new Exception($e->getMessage(), $response->getStatusCode());

    $response = json_decode($response->getBody());
    echo $response->link;
} catch (Exception $e) {
    echo $e->getMessage();
}
