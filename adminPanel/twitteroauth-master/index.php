<?php
session_start();
//add autoload note:do check your file paths in autoload.php
require "autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
//this code will run when returned from twiter after authentication
if(isset($_SESSION['oauth_token'])){
  $oauth_token=$_SESSION['oauth_token'];unset($_SESSION['oauth_token']);
  $consumer_key = 'EZKOfyBB9m47ACMDiOGQLAprs';
  $consumer_secret = 'E3d80PxNn7Y3SfRhu3amPKLcunDX6rlxlfCwLGYlffAqabo6BM';
  $connection = new TwitterOAuth($consumer_key, $consumer_secret);
 //necessary to get access token other wise u will not have permision to get user info
  $params=array("oauth_verifier" => $_GET['oauth_verifier'],"oauth_token"=>$_GET['oauth_token']);
  $access_token = $connection->oauth("oauth/access_token", $params);
  //now again create new instance using updated return oauth_token and oauth_token_secret because old one expired if u dont u this u will also get token expired error
  $connection = new TwitterOAuth($consumer_key, $consumer_secret,
  $access_token['oauth_token'],$access_token['oauth_token_secret']);
  $content = $connection->get("account/verify_credentials");
  print_r($content->id);
}
else{
  // main startup code
  $consumer_key = 'EZKOfyBB9m47ACMDiOGQLAprs';
  $consumer_secret = 'E3d80PxNn7Y3SfRhu3amPKLcunDX6rlxlfCwLGYlffAqabo6BM';
  //this code will return your valid url which u can use in iframe src to popup or can directly view the page as its happening in this example

  $connection = new TwitterOAuth($consumer_key, $consumer_secret);
  $temporary_credentials = $connection->oauth('oauth/request_token', array("oauth_callback" =>'http://localhost/twitteroauth-master/'));
  $_SESSION['oauth_token']=$temporary_credentials['oauth_token'];       $_SESSION['oauth_token_secret']=$temporary_credentials['oauth_token_secret'];$url = $connection->url("oauth/authorize", array("oauth_token" => $temporary_credentials['oauth_token']));
// REDIRECTING TO THE URL
  header('Location: ' . $url); 
}
?>