<?php
if(!session_id()){
    session_start();
}

//Include Twitter client library 
include_once 'src/twitteroauth.php';

/*
 * Configuration and setup Twitter API
 */
$consumerKey = 'NYwJGGq0xG5ip8kKboHPi6byI';
$consumerSecret = 'jQDT83Vh7x68zCk9z5Ht6gDMaE7lnKfWTUoANH7jscgc573Rxb';
$redirectURL = 'http://localhost/hatim/twitterlogin';

?>