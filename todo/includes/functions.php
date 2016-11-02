<?php

/**
 * File name : functions.php
 * custom functions used the application
 * @author Sabitha 
 */
require_once 'config.php';

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'PUT':
        parse_str(file_get_contents("php://input"), $data);
        curlRequest($api_url, "todo", "PUT", $data);
        break;
    case 'POST':
        $data = $_POST;
        curlRequest($api_url, "todo", "POST", $data);
        break;
    case 'DELETE':
        parse_str(file_get_contents("php://input"), $data);
        print_r ($data) ;
        curlRequest($api_url, "todo", "DELETE", $data);
        break;
    
}

/**
 * Does CURL Operations
 *  @params string  api_url  api url
 * *  @params string  urlapi_url  url string
 * *  @params string  $method  Http method
 * *  @params Array  $data  result set
 * @return Array result array
 */
function curlRequest($api_url, $url, $method, $data = "") {
    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $api_url . $url,
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));
    if ($method == "PUT") {
        curl_setopt_array($curl, array(
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => http_build_query($data)
        ));
    }
     if ($method == "POST") {
        curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url . $url . "/" . $data["hiddenid_form"],
               CURLOPT_POSTFIELDS => http_build_query($data)
        ));
        if (isset($data['type']) && $data['type'] == "DELETE") {
            curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url . $url . "/" . $data["id"],
            CURLOPT_CUSTOMREQUEST => "DELETE",
               
        ));
            
        }
    }
    
// Send the request & save response to $resp
    $resp = curl_exec($curl);
// Close request to clear up some resources
    curl_close($curl);
    return json_decode($resp);
}
