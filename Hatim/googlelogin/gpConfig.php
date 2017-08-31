<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '738833224187-qq7gjn3vr3ivnrcgc9jjtrdvmnejk65d.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'PuX9C633Z5ay1X1eIg_cZjdZ'; //Google client secret
$redirectURL = 'http://localhost/hatim/googlelogin/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>