<?php

require_once('autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdherentApi();
$id = '56'; // int |

try {
    $result = $api_instance->getAdherentByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdherentApi->getAdherentByID: ', $e->getMessage(), PHP_EOL;
}

?>