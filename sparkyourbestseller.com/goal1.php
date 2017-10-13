<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			#SparkYourBestseller
		</title>
		<meta content="Adtile" name="author">
		<meta content="width=device-width,initial-scale=1" name="viewport">
		<link href="cssh/styles.css" rel="stylesheet"><!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="cssh/ie.css">
    <![endif]-->

		<script src="jsh/responsive-nav.js">
		</script>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<title>
		</title><!--Boosttrap-->

		<script src="js/jquery.min.js">
		</script><!--FullPage Scrolling-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="cssc/style.css" rel="stylesheet">
		<link href="cssc/jquery.Jcrop.min.css" rel="stylesheet" type="text/css">
		<link href="csstext/normalize.css" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="csstext/demo.css" rel="stylesheet" type="text/css">
		<link href="csstext/set3goal.css" rel="stylesheet" type="text/css">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
		</script>
		<script src="bootbox.min.js">
		</script>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--    Boostrap popup-->

		<script>
		                   (function() {
		                       [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {    
		                           new SelectFx(el);
		                       } );
		                   })();
		</script><!--
      
     <script language="javascript" type="text/javascript">
     $(document).ready(function(){
                    $('#phone').hide();
 $("#Field3").on('keyup',function(){
        var my=$(this).val();
        var len=my.length;
        if(len>10){
        $('#phone').show('slow');
        
        
        }
     });
        
});
        
      
     </script>
-->

		<script type="text/javascript">
		        function validate () {
		            var area = $('#area').val();
		            var other = $('#Field4').val();
		            var goal = $('#Field3').val();
		            if(area == null || area == ""){
		                bootbox.alert('Please select an area first!');
		                return false;
		            }
		            else if(area == "Other" && other == ""){
		                bootbox.alert('Please enter an area!');
		                return false;
		            }
		            else if(goal == null || goal == ""){
		                bootbox.alert('Please enter your goal!');
		                return false;           
		            }
		            else{
		                $.ajax({
		                    type: 'GET',
		                    url: 'save_goal.php?'+ $('#goal_form').serialize(),
		                    success: function(r){
		                        $('#Bravo').show(500);
		                        $('#spark').attr('onClick','window.location="template.php"');
		                        $('#spark').show(500);                  
		                    }
		                })
		                return true;
		            }
		        }
		</script>
		<script language="javascript" type="text/javascript">
		                            $(document).ready(function(){
		                           $('#phone').hide();
		                                
		                                   $("#showss").click(function(){
		                              
		                            $('#phone').show('slow');
		                            
		                            });

		                       });
		</script>
		<script type="text/javascript">

		bravo = 0;
		chal=0;

		console.log(bravo);


		// function prompt_OtherGoal(){

		//              // bootbox.prompt("This is the default prompt!", function(result){ console.log(result); });

		             
		//                  bootbox.alert({
		//                      message: "Imagine a book without a title!",
		//                      backdrop: true,
		//                      className: 'modal-style',
		//                      callback: function () {
		//                        document.getElementById('name').focus();
		//                    }
		//                  });
		              
		             
		//              }







		        function newOpt (area) {
		            if(area == 'Other'){


		              $('#challenging').hide(500);
		                $('#inspiring').hide(500);
		                $('#captured').hide(500);
		                $('#rework').hide(500);
		                $('#Bravo').hide(500);
		                $('#goal0').hide(500);
		                $('#new_area').show(500);
		                document.getElementById('Field3').value=' ';
		                document.getElementById('Field4').value=' ';
		                

		                  // bootbox.prompt("Please Specify Your Goal Category!", function(result){ console.log(result); });

		                 
		                // function prompt_OtherGoal();
		            }
		            else{
		                $('#new_area').hide();
		                $('#goal0').show(500);
		                
		                 document.getElementById('Field3').value=' ';
		                document.getElementById('Field4').value=' ';
		            }
		        }


		</script>
		<script type="text/javascript">
		        $(function(){
		            $('#is_challenging1').click(function(){
		                $('#challenging').hide();
		                $('#inspiring').show(500);
		                $('html, body').animate({scrollTop:$(document).height()}, 'slow');
		            });
		            $('#is_challenging2').click(function(){
		                $('#challenging').hide();
		                $('#inspiring').hide();
		                $('#captured').hide();
		                $('#rework').show(500);
		                $('html, body').animate({scrollTop:$(document).height()}, 'slow');
		            });

		            $('#is_inspiring1').click(function(){
		                $(this).attr('class','btn btn-warning');
		                $('#inspiring').hide();
		                $('#captured').show(500);
		                $('html, body').animate({scrollTop:$(document).height()}, 'slow');
		            });
		            $('#is_inspiring2').click(function(){
		                $('#challenging').hide();

		                $('#inspiring').hide();
		                $('#captured').hide();
		                $('#rework').show(500);
		                $('html, body').animate({scrollTop:$(document).height()}, 'slow');
		            });

		            $('#is_captured1').click(function(){
		                $(this).attr('class','btn btn-warning');
		                $('#captured').hide();
		                 document.getElementById('goal_submit').click();

		                // return validate();
		                $('#Bravo').show(500);
		                $('#spark').show(500);
		                bravo=1;
		                console.log(bravo);
		                $('html, body').animate({scrollTop:$(document).height()}, 'slow');
		                
		            });
		            $('#is_captured2').click(function(){
		                $('#challenging').hide();
		                
		                $('#inspiring').hide();
		                $('#captured').hide();
		                $('#rework').show(500);
		            });

		            $('#want_rework1').click(function(){
		                $('#rework').hide(500);
		                $('#captured').hide(500);
		                $('#inspiring').hide(500);
		                $('#challenging').hide(500);
		                chal=0;
		                // $('#goal0').hide(500);
		                $('#Bravo').hide(500);
		                bravo=0;
		                $('#Field3').val('')


		            });
		            $('#want_rework2').click(function(){
		                $('#rework').hide();
		                $('#goal_submit').hide();
		                 document.getElementById('goal_submit').click();

		                $('#Bravo').show(500);
		                $('#spark').attr("onClick","return validate()");
		                $('#spark').show(500);  
		                bravo=1;
		                console.log(bravo);
		            });
		        });












		      $(document).ready(function(){
		          $(".btn").hover(function(){
		              $(this).css({"color": "white", "border": "1px solid white"});
		          }, function(){
		              $(this).css({ "border": "1px solid #00bdff", "color": "#00dbff" });
		          });
		      });

		     $(document).ready(function(){
		        $("button").click(function(){
		            $("p").hide(1000);
		        });
		     });


		        $("#hide").click(function(){
		        $("p").hide();
		     });

		     $("#show").click(function(){
		        $("p").show(500);
		     });

		     // $(document).ready(function(){
		     // $("div").hide(1000);
		     // }


		     $(document).ready(function(){
		     $('#goal0').hide();
		     $('#spark').hide();
		     $('#challenging').hide();
		     chal=0;
		     bravo = 0;

		        
		        // $("#area").change(function(){
		        //     // alert("The text has been changed.");
		        //     // $('#goal0').show(500);
		        // });
		     });

		     // $(document).ready(function(){


		     //       $("#Field4").keyup(function(){
		            
		             

		     //          if (Field4.value.length>3) {
		     //          if (chal!=1) {
			    //           if (bravo!=1) {
			    //                  $('#goal0').show(500);
			                    
			    //                 $('html, body').animate({scrollTop:$(document).height()}, 'slow');
			    //           }
			    //           else
			    //           {

			    //           }
		     //      }
		     //      }
		     //       else if(Field4.value.length<1)
		     //      {
		     //      	$('#goal0').hide(500);
		     //          $('#challenging').hide(500);
		     //          chal=0;
		     //            $('#inspiring').hide(500);
		     //            $('#captured').hide(500);
		     //            $('#rework').hide(500);
		     //            $('#Bravo').hide(500);
		     //            bravo=0;
		                
		     //      }



		     //       });


		     //   $("#Field3").keyup(function(){
		     //    	console.log(Field3.value.length)
		
		     //      if (Field3.value.length>3) {
		     //          if (chal!=1) {
			    //           if (bravo!=1) {
			    //                 $('#challenging').show(500);
			    //                 chal=1;
			    //                 $('html, body').animate({scrollTop:$(document).height()}, 'slow');
			    //           }
			    //           else
			    //           {

			    //           }
		     //      }
		     //      }
		     //      else if(Field3.value.length<1)
		     //      {
		     //          $('#challenging').hide(500);
		     //          chal=0;
		     //            $('#inspiring').hide(500);
		     //            $('#captured').hide(500);
		     //            $('#rework').hide(500);
		     //            $('#Bravo').hide(500);
		     //            bravo=0;
		                
		     //      }


		     //    });

		     
		     

		     // });











function category_entered(){
		            
		             

		              
		              if (chal!=1) {
			              if (bravo!=1) {
			                     $('#goal0').show(500);
			                    
			                    $('html, body').animate({scrollTop:$(document).height()}, 'slow');
			              }
			              else
			              {

			              }
		          
		          }
		           else 
		          {
		          	$('#goal0').hide(500);
		              $('#challenging').hide(500);
		              chal=0;
		                $('#inspiring').hide(500);
		                $('#captured').hide(500);
		                $('#rework').hide(500);
		                $('#Bravo').hide(500);
		                bravo=0;
		                
		          }
		      }



		          


		   function goal_entered(){
		        	
		              if (chal!=1) {
			              if (bravo!=1) {
			                    $('#challenging').show(500);
			                    chal=1;
			                    $('html, body').animate({scrollTop:$(document).height()}, 'slow');
			              }
			              else
			              {

			              }
		          }
		          
		          else 
		          {
		              $('#challenging').hide(500);
		              chal=0;
		                $('#inspiring').hide(500);
		                $('#captured').hide(500);
		                $('#rework').hide(500);
		                $('#Bravo').hide(500);
		                bravo=0;
		                
		          }


		        }

		     
		     


















		</script>
		<style>
		         body {
		           overflow:hidden;
		        }
		         .carousel-inner > .item > img,
		         .carousel-inner > .item > a > img {
		             width: 70%;
		             padding-left: 200000px;
		         }
		         
		         * {
		         -webkit-box-sizing: border-box;
		         -moz-box-sizing: border-box;
		         box-sizing: border-box;
		        }



		        form > div {
		         clear: both;
		         overflow: hidden;
		         padding: 1px;
		         margin: 0 0 10px 0;
		        }
		        form > div > fieldset > div > div {
		         margin: 0 0 5px 0;
		        }
		        form > div > label,
		        legend {
		           width: 25%;
		         float: left;
		         padding-right: 10px;
		        }
		        form > div > div,
		        form > div > fieldset > div {
		         width: 75%;
		         float: right;
		        }
		        form > div > fieldset label {
		           font-size: 90%;
		        }
		        fieldset {
		           border: 0;
		         padding: 0;
		        }

		        input[type=text],
		        input[type=email],
		        input[type=url],
		        input[type=password],
		        textarea {
		           width: 100%;
		        /*
		         border-top: 1px solid #ccc;
		         border-left: 1px solid #ccc;
		         border-right: 1px solid #eee;
		         border-bottom: 1px solid #eee;
		        */
		        }
		        input[type=text],
		        input[type=email],
		        input[type=url],
		        input[type=password] {
		        /*  width: 25%;*/
		        }
		        input[type=text]:focus,
		        input[type=email]:focus,
		        input[type=url]:focus,
		        input[type=password]:focus,
		        textarea:focus {
		         outline: 0;
		         border-color: #4697e4;
		        }

		        @media (max-width: 600px) {
		         form > div {
		           margin: 0 0 15px 0; 
		         }
		         form > div > label,
		         legend {
		             width: 100%;
		           float: none;
		           margin: 0 0 5px 0;
		         }
		         form > div > div,
		         form > div > fieldset > div {
		           width: 100%;
		           float: none;
		         }
		         input[type=text],
		         input[type=email],
		         input[type=url],
		         input[type=password],
		         textarea,
		         select {
		           width: 100%; 
		         }
		        }
		        @media (min-width: 1200px) {
		         form > div > label,
		           legend {
		           text-align: center;
		         }
		        }

		        .btn {
		          color: #00bdff;
		          border: 1px solid #00bdff;
		        }
		             
		</style>
		<script>
		</script>
	</head>
	<body>
		<header>
			<?php 
			                              error_reporting (0);
			                              include_once("menu.php");
			                        include_once("check_login_status.php");
			                            session_start();
			                               $connect = mysqli_connect("localhost", "root", "", "sparklive");
			                                // $connect = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
			                                $sq=mysqli_query($connect,"SELECT * FROM users WHERE  username='$log_username' LIMIT 1");
			                                while($s=mysqli_fetch_array($sq))
			                                {   $email=$s['email'];
			                                 session_start();
			                                 $_SESSION['email']=$email;
			                                 //echo $_SESSION['email'];
			                                }
			                    
			                        ?>
		</header>

		<section id="projects" style="padding: 0px;">
			<div class="container" style="text-align:left;margin-top: 50px; min-width: 95%;">
				<!-- <form action="template.php" enctype="multipart/form-data" id="goal_form" method="post" name="goal_form"> -->

				<div class="col-xs-12 yk_panel_background" style="min-height:0px;">
					<form action="template.php" enctype="multipart/form-data" id="goal_form" method="post" name="goal_form">
						<div style="width: 90%;">
							<label class="desc" for="Field1" id="title1" style="color: #FFCC66;font-size: 24px;font-weight: inherit;margin-top:5%;">Goal Setting</label>
						</div>
						<br>

						<div style="">
							<label class="desc" for="Field1" id="title1"><img height="50px" src="img/magnifier_white.png" width="50px"></label>
							<section style="padding:0px;text-align:left;">
								<!--                            <label class="select-label">Choose Your Goal Category</label>-->
								<select id="area" name="area" onchange="newOpt(this.value)">
									<option data-class="icon-food" value="">
										Choose Your Goal Category
									</option>
									<option data-class="icon-food" value="Boss Management">
										Boss Management
									</option>
									<option data-class="icon-shirt" value="Carrier Development">
										Career Development
									</option>
									<option data-class="icon-shirt" value="Financial Planning">
										Financial Planning
									</option>
									<option data-class="icon-shirt" value="Health & Wellness">
										Health & Wellness
									</option>
									<option data-class="icon-shirt" value="Parenting">
										Parenting
									</option>
									<option data-class="icon-shirt" value="Personality Development">
										Personality Development
									</option>
									<option data-class="icon-shirt" value="Relationship">
										Relationship
									</option>
									<option data-class="icon-money" value="Stress Management">
										Stress Management
									</option>
									<option data-class="icon-heart" value="Team Management">
										Team Management
									</option>
									<option data-class="icon-shirt" value="Time Management">
										Time Management
									</option>
									<option data-class="icon-camera" value="Work-Life Balance">
										Work-Life Balance
									</option>
									<option data-class="icon-camera" value="Other">
										Other
									</option>
								</select>
							</section>

							<p id='lol0'>
							</p>
							<script>

							                                   var e = document.getElementById("area");
							                                   var strUser = e.options[e.selectedIndex].value;
							                                   document.getElementById("lol0").innerHTML = strUser;
							                                   if(strUser!="")
							                                   {
							                                   window.alert(5 + 6);
							                                   }




							                                                     <script src="jsgoal/classie.js">
							</script> 
							<script src="jsgoal/selectFx.js">
							</script> 
							<script>
							                                                           (function() {
							                                                               [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {    
							                                                                   new SelectFx(el);
							                                                               } );
							                                                           })();
							</script>
						</div>
						<br>

						<div id="new_area" style="display:none;">
							<label class="desc" id="title4"></label>
							<p class='field required'>
								<span class="input input--nao" style="margin-left:0px;"><input class="input__field input__field--nao" id='Field4' name='other_area' spellcheck="false" style="margin-right:200px;" tabindex="3" type="text" value=""> <label class="input__label input__label--nao" for="input-3"><span class="input__label-content input__label-content--nao">Please Specify Your Goal Category</span></label> <svg class="graphic graphic--nao" height="100%" preserveaspectratio="none" viewbox="0 0 1200 60" width="300%">
								<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
								</path></svg></span>
							</p>
							<label onclick="category_entered()" style="cursor: pointer;" ><img style="max-width:14%;margin: 10% 60% 0% 0%;" src="img/arrow.png"    ></label>
						</div>

						<div id="goal0" style="">
							<label class="desc" id="title3" style="margin-top:40px"><img height="50px" src="img/ruler_white.png" width="50px"></label>
							<p class='field required'>
								<span class="input input--nao" style="margin-left:0px;"><input required="required" class="input__field input__field--nao" id='Field3' name='goal' onfocus="$('html, body').animate({scrollTop:$(document).height()}, 'slow');" spellcheck="false" style="margin-right:200px;" tabindex="3" type="text" value=""> <label class="input__label input__label--nao" for="input-2"><span class="input__label-content input__label-content--nao">What is your Goal ?</span></label> <svg class="graphic graphic--nao" height="100%" preserveaspectratio="none" viewbox="0 0 1200 60" width="300%">
								<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
							</p>
							<label onclick="goal_entered()" style="cursor: pointer;" ><img style="max-width:14%;margin: 10% 60% 0% 0%;" src="img/arrow.png" ></label>
						</div>

						<div id="challenging">
							<label class="desc" id="title5" style="margin-top:50px"><img height="50px" src="img/finished.png" width="50px"></label>
							<p class='field required'>
								<span class="input input--nao" style="margin-left:0px;"><label class="input__label input__label--nao" for="input-4"><span class="input__label-content input__label-content--nao">Is your goal challenging and will entail an audacious stretch?</span></label><br>
								<br>
								<br>
								<input class="btn" id="is_challenging1" name="is_challenging1" style="background: transparent;border: 1px solid #00bdff;color: #00dbff;font-weight: bold;" type="button" value="Yes"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="btn" id="is_challenging2" name="is_challenging2" style="background: transparent;border: 1px solid #00bdff;color: #00dbff;font-weight: bold;" type="button" value="No"></span>
							</p>
						</div>

						<div id="inspiring" style="display:none">
							<label class="desc" id="title6" style="margin-top:50px"><img height="50px" src="img/thumbsup.png" width="50px"></label>
							<p class='field required'>
								<span class="input input--nao" style="margin-left:0px;"><label class="input__label input__label--nao" for="input-5"><span class="input__label-content input__label-content--nao">Does the goal really inspire you?</span></label><br>
								<br>
								<input class="btn" id="is_inspiring1" name="is_inspiring1" style="background: transparent;border: 1px solid #00bdff;color: #00dbff;font-weight: bold;" type="button" value="Yes"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="btn" id="is_inspiring2" name="is_inspiring2" style="background: transparent;border: 1px solid #00bdff;color: #00dbff;font-weight: bold;" type="button" value="No"></span>
							</p>
						</div>

						<div id="captured" style="display:none">
							<label class="desc" id="title7" style="margin-top:50px"><img height="50px" src="img/direction.png" width="50px"></label>
							<p class='field required'>
								<span class="input input--nao" style="margin-left:0px;"><label class="input__label input__label--nao" for="input-6"><span class="input__label-content input__label-content--nao">Does your goal capture the big picture instead of getting stuck in the micro?</span></label><br>
								<br>
								<br>
								<br>
								<br>
								<input class="btn" id="is_captured1" name="is_captured1" style="background: transparent;border: 1px solid #00bdff;color: #00dbff;font-weight: bold;" type="button" value="Yes"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="btn" id="is_captured2" name="is_captured2" style="background: transparent;border: 1px solid #00bdff;color: #00dbff;font-weight: bold;" type="button" value="No"></span>
							</p>
						</div>

						<div id="rework" style="display:none">
							<label class="desc" id="title8" style="margin-top:50px"><img height="50px" src="img/ruler_white.png" width="50px"></label>
							<p class='field required'>
								<span class="input input--nao" style="margin-left:0px;"><label class="input__label input__label--nao" for="input-7"><span class="input__label-content input__label-content--nao">Would you want to rework your goal?</span></label><br>
								<br>
								<input class="btn" id="want_rework1" name="want_rework1" style="background: transparent;border: 1px solid #00bdff;color: #00dbff;font-weight: bold;" type="button" value="Yes"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="btn" id="want_rework2" name="want_rework2" style="background: transparent;border: 1px solid #00bdff;color: #00dbff;font-weight: bold;" type="button" value="No"></span>
							</p>
						</div>
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--
                        
                         <button type="submit" onClick="return validate()" name ="sub" class="btn btn-default" data-toggle="collapse">→</button>

-->
					 <a data-toggle="collapse" id="goal_submit" onclick="return validate()" name="sub" style=" display: none; cursor:pointer"><img data-toggle="collapse" height="40px" id="sub" name="sub"  src="icons/right-arrow.png" width="40px"></a> <input name="submitted" type="hidden" value="1"><br>
						<!--                    <button id="showss">Show</button>-->

						<div class="collapse" id="Bravo" style="">
							<label class="desc" for="Field3" id="title3"><img height="50px" src="img/trophy-cup-on-lectern-of-podium_white.png" width="50px"></label>
							<div>
								<h4 style="color:#FFFFFF;">
									Bravo! Now, visualize you have achieved your goal and have started the journey of penning a bestseller...!
								</h4>
							</div>
						</div>
						<!-- <input class="btn btn-primary yk_button_spark" id="spark" name="sub" style="float: right; margin: 0% 0% 2% 0%;" type="submit" value="Let's Spark!"> -->
					</form>
					<script src="jsh/scroll.js">
					</script> 
					<script src="jstext/classie.js">
					</script> 
					<script>
					                                        (function() {
					                                            // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
					                                            if (!String.prototype.trim) {
					                                                (function() {
					                                                    // Make sure we trim BOM and NBSP
					                                                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
					                                                    String.prototype.trim = function() {
					                                                        return this.replace(rtrim, '');
					                                                    };
					                                                })();
					                                            }

					                                            [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					                                                // in case the input is already filled..
					                                                if( inputEl.value.trim() !== '' ) {
					                                                    classie.add( inputEl.parentNode, 'input--filled' );
					                                                }

					                                                // events:
					                                                inputEl.addEventListener( 'focus', onInputFocus );
					                                                inputEl.addEventListener( 'blur', onInputBlur );
					                                            } );

					                                            function onInputFocus( ev ) {
					                                                classie.add( ev.target.parentNode, 'input--filled' );
					                                            }

					                                            function onInputBlur( ev ) {
					                                                if( ev.target.value.trim() === '' ) {
					                                                    classie.remove( ev.target.parentNode, 'input--filled' );
					                                                }
					                                            }
					                                        })();









					// bootbox.prompt("This is the default prompt!", function(result){ console.log(result); });













					</script>
				</div>
				<a href="template.php"><input class="btn btn-primary yk_button_spark" id="spark" name="sub" style="float: right; font-size: 18px;" type="button" value="Let's Spark!"></a> <!-- </form> -->
				<br>
				<br>
			</div>
		</section>
	</body>
</html>