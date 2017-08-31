


<?php
function fbLikeCount($id,$appid,$appsecret){
  $json_url ='https://graph.facebook.com/'.$id.'?access_token='.$appid.'|'.$appsecret.'&fields=fan_count';
  $json = file_get_contents($json_url);
  $json_output = json_decode($json);
  //Extract the likes count from the JSON object
  if($json_output->fan_count){
    return $fan_count = $json_output->fan_count;
  }else{
    return 0;
  }
}
echo "Facebook likes count:";
echo fbLikeCount('Qleverlabs','177026192840360','865a453c4f6f733b9bbf6e4187d9441a');
echo '<br><br>';
?>

<?php 
require_once('TwitterAPIExchange.php'); //get it from https://github.com/J7mbo/twitter-api-php

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
'oauth_access_token' => "808916059763998721-48fmzNRyxA63IESzhZSGqFBis2De4Cx",
'oauth_access_token_secret' => "TuUGBhWpy6DSW6iWShB6EjWbatAvY1XfAAdzpOaLD5tyO",
'consumer_key' => "gLKwyLuL7kdWSEXy5vIFF1rJe",
'consumer_secret' => "leIkOyWCdeaDepegSwb9ojceFNWF5ug1kWtPaELW4U1GQI8yDM"
);

$ta_url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=DezineBox';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$follow_count=$twitter->setGetfield($getfield)
->buildOauth($ta_url, $requestMethod)
->performRequest();
$data = json_decode($follow_count, true);
$followers_count=$data[0]['user']['followers_count'];

echo $followers_count;
?>

<script type=”text/javascript” src=” http://platform.linkedin.com/in.js “>
api_key: '81ybbv6d31p86c';
onLoad: onLinkedInLoad
authorize: true
</script>
<script type=”text/javascript”>
function onLinkedInLoad() {
	
IN.API.Raw(“/companies/13248154:(num-followers)”)
.result( function(result) { document.getElementById(“statusDiv”).innerHTML = result.numFollowers;
} )
.error( function(error) {  /*do nothing*/  } )
;
}
</script>

