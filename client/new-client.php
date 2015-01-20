<?php

//echo 'hiiiiiiii';
//echo '<pre>';
//print_r($_SERVER['HTTP_COOKIE']);
////print_r($_POST);
////print_r($_GET['code']);
//$token = $_GET['code'];
//https://localhost/myauth/?q=oauth2/user/profile&access_token=0f758ed5c6ee79c8f5d52232cf834fa2e7c98c94
//$url = "http://localhost/myauth/?q=oauth2/token&code=" . $_GET['code'] . '&grant_type=authorization_code';
//
//$curl = curl_init($url);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // have curl_exec return a string
////curl_setopt($curl, CURLOPT_COOKIE, $_SERVER['HTTP_COOKIE']); // use the previously saved session
//// make the request
//curl_setopt($curl, CURLOPT_VERBOSE, true); // output to command line
//curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
//$response = curl_exec($curl);
//curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//    'Accept: application/json',
//    "Content-Type", "application/x-www-form-urlencoded"
//));
//$http_status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//curl_close($curl);
//print $http_status_code;
//print "RESPONSE:\n";
//var_dump($response);


$url = 'http://localhost/myauth/?q=oauth2/token';
$fields = array(
    'code' => urlencode($_GET['code']),
    'grant_type' => urlencode('authorization_code'),
    'client_id' => urlencode('myclient'),
    'client_secret' => urlencode('123456'),
//    'age' => urlencode($age),
//    'email' => urlencode($email),
//    'phone' => urlencode($phone)
);

//url-ify the data for the POST
foreach ($fields as $key => $value) {
    $fields_string .= $key . '=' . $value . '&';
}
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

$decoded = json_decode(curl_exec($ch), true);

//close connection
curl_close($ch);

