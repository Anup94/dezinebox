   <script>  
   
   
</script>
<link rel="stylesheet" href="assets/styles/auth-forms.css">
<script src="assets/js/vendor/google-fonts.js"></script>
 <form class="modal fade c-content-login-form" id="forget-password-form" role="dialog" action="validate.php?task=forgot" method="post">
    <div class="modal-dialog">
          <div class="modal-content c-square" style="background-color: #fff; opacity: 0.7">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                <p style='color:transparent;font-family:"Open Sans", "Helvetica Neue", Helvetica, sans-serif'>To recover your password please fill in your email address</p>
                
                    <div class="form-group">
                        <label for="forget-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="email" placeholder="Email" name="email"> </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
            
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</form>
        <!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<form class="modal fade c-content-login-form" id="signup-form" action="validate.php?task=submit_signup" method="post" method="post" name="signup-form" role="dialog">
    <div class="modal-dialog">
          <div class="modal-content c-square" style="background-color: #fff; opacity: 0.7">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                <p style="color:transparent">Please fill in below form to create an account with us</p>
                <form>
                	<div class="form-group">
                        <label for="signup-username" class="hide">Name</label>
                        <input type="text" class="form-control input-lg c-square" id="Name" name="name" required placeholder="Name"> </div>
                    <div class="form-group">
                        <label for="signup-username" class="hide">Mobile</label>
                        <input type="text" class="form-control input-lg c-square" name="mobile" required id="Mobile" placeholder="Mobile"> </div>
                    <div class="form-group">
                        <label for="signup-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" name="email" required id="signup-email" placeholder="Email"> </div>
                    <div class="form-group">
                        <label for="signup-username" class="hide">Username</label>
                        <input type="text" class="form-control input-lg c-square" id="signup-username" name="username" required placeholder="Username"> </div>
                    <div class="form-group">
                        <label for="signup-fullname" class="hide">Password</label>
                        <input type="password" class="form-control input-lg c-square" id="password" name="password" placeholder="Password"> </div>
                   <div class="form-group">
                        <label for="signup-fullname" class="hide">Password</label>
                        <input type="password" class="form-control input-lg c-square" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"> </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
        <!-- END: CONTENT/USERh/SIGNUP-FORM -->
        <!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<form class="modal fade c-content-login-form" id="login-form" name="login-form" action="validate.php?task=login" method="post" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content c-square" style="background-color: #fff; opacity: 0.7">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Welcome!</h3>
                <p style="color:transparent">Let's make today a great day!</p>
                <form>
                    <div class="form-group">
                        <label for="login-email" class="hide">Email</label>
                        <input type="text" name="username" class="form-control input-lg c-square" id="login-email" placeholder="Username"> </div>
                    <div class="form-group">
                        <label for="login-password" class="hide">Password</label>
                        <input type="password" class="form-control input-lg c-square" name="password" id="login-password" placeholder="Password"> </div>
                    <div class="form-group">
                        <div class="c-checkbox">
                            <input type="checkbox" id="login-rememberme" class="c-check">
                            <label for="login-rememberme" class="c-font-thin c-font-17">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Remember Me </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                        <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                    </div>
                    <div class="clearfix">
                        <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                            <span>or signup with</span>
                        </div>

                        <ul class="c-content-list-adjusted">
                            <li>
                                <a class=" btn-block c-btn-square btn-social btn-twitter" href="validate.php?task=twitter-login">
                                    <i class="fa fa-twitter" style="  background:12px 9px #1DA1F3;"></i> Twitter </a>
                            </li>
                           
                            <li>
                                <a class=" btn-block c-btn-square btn-social btn-google" href="validate.php?task=google-login">
                                    <i class="fa fa-google-plus" style="  background:12px 9px #D51615;"></i> Google </a>
                            </li>
                             <li>
                                <a class=" btn-block c-btn-square btn-social btn-google" href="validate.php?task=facebook-login">
                                    
                                    <i class="fa fa-facebook" style="  background:12px 9px #0E387C;"></i> Facebook </a> 
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</form>
<?php 
$task=@$_GET['task'];
if($task=='ask_login') {
    ?>
    
   
    <script type="text/javascript">
    $(document).ready(function() {

        $("#login-form").modal("show");
    })


   

    </script>
    <?php
}
?>