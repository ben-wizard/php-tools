<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

if ($_POST["process"] === "balance") {
    $serialNumber = $_POST["serialNumber"];
    if (!isset($serialNumber)) {
        die(json_encode(["value" => "Lütfen kartın seri numarasını girin!"]));
    }

    $response = $client->request("GET", "https://e-komobil.com/services/api.php?process=balance&alias=" . $serialNumber);
    echo $response->getBody();
} else if ($_POST["process"] === "searchRoute") {
    $routeNumber = $_POST["routeNumber"];
    if (!isset($routeNumber)) {
        die(json_encode(["value" => "Lütfen bir otobüs numarası girin!"]));
    }

    $response = $client->request("GET", "https://e-komobil.com/yolcu_bilgilendirme_operations.php?cmd=searchRouteDirections&route_code=" . $routeNumber);
    echo $response->getBody();
}

?>