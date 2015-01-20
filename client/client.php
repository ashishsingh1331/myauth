<?php

//define("EFEED", 'http://localhost/myauth/?q=oauth2/authorize');
////define("EFEED", 'http://localhost/dservice');
//
//$consumer_key = 'myclient';
//$consumer_secret = '123456';
//try {
//    $oauth = new OAuth($consumer_key, $consumer_secret, OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_URI);
//    $oauth->enableDebug();
//} catch (Exception $exc) {
//    echo $exc->getTraceAsString();
//}
//
//
//try {
//    $data = $oauth->fetch(EFEED);
//} catch (Exception $exc) {
//    echo $exc->getTraceAsString();
//}
//
//
//
//$response_info = $oauth->getLastResponse();
//print $response_info;
//$array = json_decode($response_info);
//print_r($array);
//if ($array) {
//    $object = $array[0]; // The array could contain multiple instances of your content type
//    $title = $object->title; // title is a field of your content type
//}
//---------------------------------
//$oauth2_client_id = 'client3';
//$oauth2_secret = 'secret3';
//$oauth2_redirect = 'http://localhost/client/client.php';
//
//$oauth2_server_url = 'http://localhost/dservice/?q=oauth2/token';
//
//$query_params = array(
//    'response_type' => 'code',
//    'client_id' => $oauth2_client_id,
//    'redirect_uri' => $oauth2_redirect,
////    'scope' => 'https://www.googleapis.com/auth/glass.timeline'
//);
//
//$forward_url = $oauth2_server_url . '?' . http_build_query($query_params);
//
//header('Location: ' . $forward_url);
//$endpoint = "https://localhost/myauth/?q=oauth2/authorize";
//
//// Use one of the parameter configurations listed at the top of the post
//
//
//$curl = curl_init($endpoint);
//curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
//curl_setopt($curl, CURLOPT_HEADER, true);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($curl, CURLOPT_POST, true);
//curl_setopt($curl, CURLOPT_HEADER, 'Content-Type: application/x-www-form-urlencoded');
//
//// Remove comment if you have a setup that causes ssl validation to fail
////curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//$postData = "";
//
////This is needed to properly form post the credentials object
//foreach ($params as $k => $v) {
//    $postData .= $k . '=' . urlencode($v) . '&';
//}
//
//$postData = rtrim($postData, '&');
//
//
//try {
//    curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
//} catch (Exception $exc) {
//    echo $exc->getTraceAsString();
//}
//
//
//echo "Performing Request...";
//try {
//    $json_response = curl_exec($curl);
//    echo $json_response;
//} catch (Exception $exc) {
//    echo $exc->getTraceAsString();
//}
//
//
//
//$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//
//// evaluate for success response
//if ($status != 200) {
//    throw new Exception("Error: call to URL $endpoint failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl) . "\n");
//}
//curl_close($curl);
//
//return $json_response;
//
//
//$data = "type_category_id=4";
//
////
//
//$url = 'http://localhost/myauth/?q=oauth2/authorize';
//$fields = array(
//    'client_id' => urlencode('myclient'),
////    'client_secret' => urlencode('123456'),
////    'grant_type' => urlencode('client_credentials'),
////    'response_type' => urlencode('code'),
////    'redirect_uri' => urlencode('https://localhost/client/new-client.php'),
//);
//
////url-ify the data for the POST
//foreach ($fields as $key => $value) {
//    $fields_string .= $key . '=' . $value . '&';
//}
//rtrim($fields_string, '&');
//echo '<pre>';
////open connection
//$ch = curl_init();
//
////set the url, number of POST vars, POST data
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, count($fields));
//curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//    'Accept: application/json',
////    "Content-Type", "application/x-www-form-urlencoded"
//));
////execute post
//
//$result = curl_exec($ch);
////print_r(var_dump($result.'i m here'));
//$assocArray = json_decode($result, true);
//
//$access_token = $assocArray['access_token'];
//
//
//$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
////print_r( $status);
////close connection
//curl_close($ch);
//$fields = array(
//    'redirect_uri' => urlencode('https://localhost/client/new-client.php'),
//    'username' => urlencode('gl'),
//    'password' => urldecode('q'),
//    'token' => $result
//);
//
//$user_url = 'http://localhost/myauth/?q=oauth2/user/login';
//
////$ch = curl_init();
////
//////set the url, number of POST vars, POST data
////curl_setopt($ch, CURLOPT_URL, $user_url);
////curl_setopt($ch, CURLOPT_GET, count($fields));
////curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
////curl_setopt($ch, CURLOPT_HTTPHEADER, array(
////    'Accept: application/json',
//////    "Content-Type", "application/x-www-form-urlencoded"
////));
//////execute post
////$result = curl_exec($ch);
////$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
////print_r($result);
////-------------------------------------------------------
////
//$body = "username=" . utf8_encode('gl') . "&password=" . utf8_encode("q");
//
//$fp = curl_init();
//curl_setopt($fp, CURLOPT_URL, "http://localhost/myauth/?q=oauth2/user/login");
//curl_setopt($fp, CURLOPT_HEADER, 1);
//curl_setopt($fp, CURLOPT_POST, 1);
//curl_setopt($fp, CURLOPT_SSLVERSION, 3);
//curl_setopt($fp, CURLOPT_SSL_VERIFYPEER, FALSE);
//curl_setopt($fp, CURLOPT_SSL_VERIFYHOST, 2);
////curl_setopt($fp, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', 'charset=UTF-8'));
//curl_setopt($fp, CURLOPT_POSTFIELDS, $body);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//    'X-CSRF-Token:' . $access_token,
//    'Accept: application/json',
//));
//
//$response = json_decode(curl_exec($fp), true);
//
//$fp = curl_init();
//curl_setopt($fp, CURLOPT_URL, "http://localhost/myauth/?q=oauth2/user/logout");
//curl_setopt($fp, CURLOPT_HEADER, 1);
//curl_setopt($fp, CURLOPT_POST, 1);
//curl_setopt($fp, CURLOPT_SSLVERSION, 3);
//curl_setopt($fp, CURLOPT_SSL_VERIFYPEER, FALSE);
//curl_setopt($fp, CURLOPT_SSL_VERIFYHOST, 2);
//curl_setopt($fp, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', 'charset=UTF-8'));
//curl_setopt($fp, CURLOPT_POSTFIELDS, $body);
//
//$response = json_decode(curl_exec($fp), true);
//
//
//?>
<a href="http://localhost/myauth?q=oauth2%2Fauthorize&client_id=myclient&response_type=code&grant_type=authorization_code&state=profile&scope=user_profile">Login with drupal site</a>