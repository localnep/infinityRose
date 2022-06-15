<?php
session_start();
//Include Google client library
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';
/* * Configuration and setup Google API */
$clientId = '771213202197-073t7g2tj8f0mb9eh9m4ikekhdrht6g7.apps.googleusercontent.com';
$clientSecret = 'oNNQ-AZRtqdwAfVHA2pECx0t';
$redirectURL = 'http://localhost/infinity/googleapi/index.php';
//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('garibank');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);
$google_oauthV2 = new Google_Oauth2Service($gClient);
?>