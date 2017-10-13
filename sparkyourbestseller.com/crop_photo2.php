<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$targ_w = $_POST['w'];
$targ_h = $_POST['h'];

// quality
$jpeg_quality = 100;
// photo path
$src = $_POST['photo_url'];

//// test file format
//$photo_format = exif_imagetype($src) ;
//// create new image based on the target sizes
//if ($photo_format == IMAGETYPE_JPEG) {
//$img_r = imagecreatefromjpeg($src);
//} elseif ($photo_format == IMAGETYPE_PNG) {
//$img_r = imagecreatefrompng($src);
//} elseif ($photo_format == IMAGETYPE_GIF) {
//$img_r = imagecreatefromgif($src);
//} else {
//echo 'error format';
//exit;
//}

// create new jpeg image based on the target sizes
$img_r = imagecreatefromjpeg($src);

//header("content-type: image/jpeg");
imagefilter($img_r, IMG_FILTER_GRAYSCALE); 
// imagefilter($img_r, IMG_FILTER_CONTRAST, -255);    


$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
// crop photo
imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'], $targ_w,$targ_h,$_POST['w'],$_POST['h']);
// create the physical photo
imagejpeg($dst_r,$src,$jpeg_quality);

// display the  photo - "?time()" to force refresh by the browser
//echo '<img src="'.$src.'?'.time().'">';

$con = mysqli_connect("localhost", "root", "", "sparklive");
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}
ob_start();
include_once("check_login_status.php");
if($user_ok == true){
$username = "User";
 $connect = mysqli_connect("localhost", "root", "", "sparklive");
                $sq=mysqli_query($connect,"SELECT * FROM users WHERE  username='$log_username' LIMIT 1");
                while($s=mysqli_fetch_array($sq))
                {   $email=$s['email'];
                 //session_start();
                    $username = $s['username'];
                 $_SESSION['email']=$email;
                }
$goal_email = $_SESSION['email'];
$goal_text=$_SESSION['goal'];
                
// $goal_email = $_SESSION['email'];
// $goal = mysqli_query($con, "SELECT `goal` from goal WHERE email='$goal_email' ORDER BY `s_no` DESC LIMIT 1");
// while($g = mysqli_fetch_array($goal)){
//     $goal_text = $g['goal'];
// }

    
$temp_id= $_SESSION['id'];
$email=$_SESSION['email'];
//$goal=$_SESSION['goal'];
$title=$_SESSION['title'];
$sname=$_SESSION['sname'];
$aname=$_SESSION['aname'];

mysqli_query($con, "INSERT INTO scollable (temp_id,title,sname,aname,name,email,whenneed) VALUES ('{$_SESSION['id']}','{$_SESSION['title']}','{$_SESSION['sname']}','{$_SESSION['aname']}','$src','{$_SESSION['email']}',now())");

if(mysqli_affected_rows($con)){



include("PHPMailer/PHPMailer/PHPMailerAutoload.php");

            $account="reachout@happcoach.com";
            $password="CoachHapp99";
            $to= $email;

            $from="reachout@happcoach.com";
            $from_name="Happ Coach";
             $msg='<!DOCTYPE html><html><head><title></title></head><body><table><tbody><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" id="" style="font-family:&quot;Arial&quot;;background-color:#34495e;padding:30px 30px 0 30px" width="600"><tbody><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" height="50" id="" style="font-family:&quot;Arial&quot;;padding:0 0 20px 0;font-size:13px" width="100%"><tbody><tr><td align="left" class="" id="" style="margin:0;padding:0" valign="middle"><a class="" data-saferedirecturl="" href="" style="text-decoration:none;color:#fff" target="_blank"><img alt="" class="" src="http://sparkyourbestseller.com/img/logo.png" style="max-width: 45%; border-radius: 5px; "></a></td></tr></tbody></table></td></tr><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" id="" style="font-family:&quot;Arial&quot;;background-color:#fff;font-size:13px;color:#46535e;border-radius:3px" width="100%"><tbody><tr><td align="left" valign="top"><p></p><table cellpadding="0" cellspacing="0" class="m_4434876126266125253padding-top-20 m_4434876126266125253center-content" style="font-family:&quot;Arial&quot;;font-size:14px!important;line-height:24px;color:#46535e;padding:0 20px 5px" width="100%"><tbody><tr><td>Dear User,</td></tr><tr><td>&nbsp;</td></tr><tr><td>The journey of a thousand miles begins with one single step. Articulating a goal that is challenging and inspirational is indeed the most important step.</td></tr><tr><td><br>Congratulations and wishing you the very best to achieve your goal - <span style="font-weight: bold; ">"<b>'.$goal_text.'</b>"</span>&nbsp;</td></tr><tr><td><br>Feel free to get in touch with us for any assistance. Click here to book a free coaching session around your goal. You can also explore a few one-on-one coaching module with certified coaches here ...<br>Go ahead and become the best version of yourself. After all, this is one bestseller that you can judge by its cover!</td></tr><tr><td>&nbsp;</td></tr><tr><td height="10"></td></tr><tr><td class="">Cheers,</td></tr><tr><td>Team Happ Coach</td></tr></tbody></table><a data-saferedirecturl="" href="" style="text-decoration:none" target="_blank"><img class="" src=""></a></td></tr></tbody></table></td></tr><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="20" id="" style="font-family:&quot;Arial&quot;;font-size:12px;color:#666" width="100%"><tbody style="color: #fff; "><tr><td align="center" valign="top">Show us some love. Like &amp; Follow us. Spread the word about SparkTheBestseller!<br><a href="https://www.facebook.com/happcoach"><img alt="Facebook" class="" src="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png" style="margin:10px 10px 0 0; height: 36px; width: 36px;"></a> <a href="https://twitter.com/happcoach" style="text-decoration:none" target="_blank"><img alt="Twitter" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Twitter_bird_logo_2012.svg/1259px-Twitter_bird_logo_2012.svg.png" style="margin:10px 10px 0 0;height: 36px; width: 36px;"></a><a href="https://www.linkedin.com/company-beta/13195949/" style="text-decoration:none" target="_blank"><img alt="LinkedIN" src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/linkedin-512.png" style="margin:10px 10px 0 0; height: 36px; width: 36px;"></a></td></tr><tr><td align="center" class="" id="" style="font-size: 120%;color: #fff; padding-top:10px; font-weight: bold;" valign="bottom">Powered by:<br><img src="http://sparkyourbestseller.com/img/happcoach.png"></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></body></html>';
            // $msg='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>'; // HTML message
            $subject="Congratulations!";

            // echo "now assigning variables<br>";

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth= true;
            $mail->Port =587; // Or 587 or 465
            $mail->Username= $account;
            $mail->Password= $password;
            $mail->SMTPSecure = 'tls';
            $mail->From = $from;
            $mail->FromName= $from_name;
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $msg;
            $mail->addAddress($to);

            // echo "now  mailig <br>";

            //echo $email.'<br>'.$msg;

            $mail->Send();




    echo $temp_id;
    mysqli_close($con);  
}  
  // session_destroy();

}
else{
//session_start();
    
$temp_id= $_SESSION['id'];
$email=$_SESSION['email'];
//$goal=$_SESSION['goal'];
$title=$_SESSION['title'];
$sname=$_SESSION['sname'];
$aname=$_SESSION['aname'];
$phone=$_SESSION['phone'];
$goal_email = $_SESSION['email'];
$goal_text=$_SESSION['goal'];

$sql = "INSERT INTO scollable (temp_id,title,sname,aname,name,email,whenneed,phone) VALUES ('{$_SESSION['id']}','{$_SESSION['title']}','{$_SESSION['sname']}','{$_SESSION['aname']}','$src','{$_SESSION['email']}',now(),'{$_SESSION['phone']}')";

//die($sql);
$query = mysqli_query($con, $sql);
if(mysqli_affected_rows($con)){



include("PHPMailer/PHPMailer/PHPMailerAutoload.php");

            $account="reachout@happcoach.com";
            $password="CoachHapp99";
            $to= $email;

            $from="reachout@happcoach.com";
            $from_name="Happ Coach";
              $msg='<!DOCTYPE html><html><head><title></title></head><body><table><tbody><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" id="" style="font-family:&quot;Arial&quot;;background-color:#34495e;padding:30px 30px 0 30px" width="600"><tbody><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" height="50" id="" style="font-family:&quot;Arial&quot;;padding:0 0 20px 0;font-size:13px" width="100%"><tbody><tr><td align="left" class="" id="" style="margin:0;padding:0" valign="middle"><a class="" data-saferedirecturl="" href="" style="text-decoration:none;color:#fff" target="_blank"><img alt="" class="" src="http://sparkyourbestseller.com/img/logo.png" style="max-width: 45%; border-radius: 5px; "></a></td></tr></tbody></table></td></tr><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" id="" style="font-family:&quot;Arial&quot;;background-color:#fff;font-size:13px;color:#46535e;border-radius:3px" width="100%"><tbody><tr><td align="left" valign="top"><p></p><table cellpadding="0" cellspacing="0" class="m_4434876126266125253padding-top-20 m_4434876126266125253center-content" style="font-family:&quot;Arial&quot;;font-size:14px!important;line-height:24px;color:#46535e;padding:0 20px 5px" width="100%"><tbody><tr><td>Hi,</td></tr><tr><td>&nbsp;</td></tr><tr><td>The journey of a thousand miles begins with one single step. Articulating a goal that is challenging and inspirational is indeed the most important step.</td></tr><tr><td><br>Congratulations and wishing you the very best to achieve your goal - <span style="font-weight: bold; ">"<b>'.$goal_text.'</b>"</span>&nbsp;</td></tr><tr><td><br>Feel free to get in touch with us for any assistance. Click here to book a free coaching session around your goal. You can also explore a few one-on-one coaching module with certified coaches here ...<br>Go ahead and become the best version of yourself. After all, this is one bestseller that you can judge by its cover!</td></tr><tr><td>&nbsp;</td></tr><tr><td height="10"></td></tr><tr><td class="">Cheers,</td></tr><tr><td>Team Happ Coach</td></tr></tbody></table><a data-saferedirecturl="" href="" style="text-decoration:none" target="_blank"><img class="" src=""></a></td></tr></tbody></table></td></tr><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="20" id="" style="font-family:&quot;Arial&quot;;font-size:12px;color:#666" width="100%"><tbody style="color: #fff; "><tr><td align="center" valign="top">Show us some love. Like &amp; Follow us. Spread the word about SparkTheBestseller!<br><a href="https://www.facebook.com/happcoach"><img alt="Facebook" class="" src="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png" style="margin:10px 10px 0 0; height: 36px; width: 36px;"></a> <a href="https://twitter.com/happcoach" style="text-decoration:none" target="_blank"><img alt="Twitter" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Twitter_bird_logo_2012.svg/1259px-Twitter_bird_logo_2012.svg.png" style="margin:10px 10px 0 0;height: 36px; width: 36px;"></a><a href="https://www.linkedin.com/company-beta/13195949/" style="text-decoration:none" target="_blank"><img alt="LinkedIN" src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/linkedin-512.png" style="margin:10px 10px 0 0; height: 36px; width: 36px;"></a></td></tr><tr><td align="center" class="" id="" style="font-size: 120%;color: #fff; padding-top:10px; font-weight: bold;" valign="bottom">Powered by:<br><img src="http://sparkyourbestseller.com/img/happcoach.png"></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></body></html>';
            // $msg='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>'; // HTML message
            $subject="Congratulations!";

            // echo "now assigning variables<br>";

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth= true;
            $mail->Port =587; // Or 587 or 465
            $mail->Username= $account;
            $mail->Password= $password;
            $mail->SMTPSecure = 'tls';
            $mail->From = $from;
            $mail->FromName= $from_name;
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $msg;
            $mail->addAddress($to);

            // echo "now  mailig <br>";

            //echo $email.'<br>'.$msg;

            $mail->Send();


    
    echo $temp_id;
	mysqli_close($con);  
}
   //session_destroy();
}
//header("Location:gallery1.php?id=".$_SESSION['id']);
?>
