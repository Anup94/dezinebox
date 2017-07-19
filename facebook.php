<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	</head>

<body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1571301269586732',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  FB.getLoginStatus(function(response)
  {
  	if(response.status == 'connected') {
  		document.getElementById('status').innerHTML = 'we are connected.';
  	}
  	else if(response.status == 'not_authorized') {
  		document.getElementById('status').innerHTML = 'we are not logged in.';
  	} else
  	document.getElementById('status').innerHTML = 'we are not logged into facebook';

  })

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  	function login() {
  		FB.login(function(response){
  	if(response.status == 'connected') {
  		document.getElementById('status').innerHTML = 'we are connected.';
  	}
  	else if(response.status == 'not_authorized') {
  		document.getElementById('status').innerHTML = 'we are not logged in.';
  	} else
  	document.getElementById('status').innerHTML = 'we are not logged into facebook';

  }
  			)
  	}

</script>


<div id="status"></div>
<button onclick="login()">Login</button>



</body>
</html>



