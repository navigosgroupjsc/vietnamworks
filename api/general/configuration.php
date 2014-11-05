<?php
/**
 * Staging API server:      https://api-staging.vietnamworks.com
 * Production API server:   https://api.vietnamworks.com
 *
 * Request:
 *      GET https://{api_server_domain}/general/configuration/
 *      headers:
 *          CONTENT-MD5: your_api_key
 *
 * Response on error:
 *      HTTP/1.1 400 Bad Request
 *      Content-Type: application/json
 *      body:
 *          {
 *              "meta": {
 *                  "code": 400,
 *                  "message": "explain about happened error"
 *              }
 *          }
 *
 * Response on success:
 *      HTTP/1.1 200 OK
 *      Content-Type: application/json
 *      body:
 *          {
 *              "meta": {
 *                  "code": 200
 *              },
 *              "data": {
 *                  ...
 *              }
 *          }
 */

$apiKey         = 'your_api_key';
$apiHost        = 'https://api-staging.vietnamworks.com';
$apiPath        = '/general/configuration/';

$ch = curl_init();

curl_setopt_array($ch, array(
    CURLOPT_URL             => $apiHost.$apiPath,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_SSL_VERIFYPEER  => false,   // ignore SSL verification
    CURLOPT_HTTPGET         => true,    // http request method is GET
    CURLOPT_HTTPHEADER      => array("CONTENT-MD5: $apiKey"),
));

$response = curl_exec($ch);
$info = curl_getinfo($ch);

if ($info['http_code'] == 200 && !empty($response))  {
    $response = json_decode($response, true);
    echo 'Response: '.print_r($response, true);
} else {
    //unknown error
    echo "An error happened: \n".curl_error($ch)."\nInformation: ".print_r($info, true)."\nResponse: $response";
}

curl_close($ch);