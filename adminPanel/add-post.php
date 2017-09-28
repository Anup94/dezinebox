<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';

$dbConnect = new dbConnect();
$query="SELECT * FROM box_types";
$result=$dbConnect->conn->query($query);
$boxes=array();
if(mysqli_num_rows($result)>0) {
	$boxes=$result;

}
?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
      <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>

		  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>
  </head>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">


  <?php include_once 'navbar.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <br><br>
            
            <div class="clearfix"></div>



		
					
					
			
						<?php

	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($postTitle ==''){
			$error[] = 'Please enter the title.';
		}

		if($postDesc ==''){
			$error[] = 'Please enter the description.';
		}

		if($postCont ==''){
			$error[] = 'Please enter the content.';
		}

		if(!isset($error)){



				$target = "images/".basename($_FILES['image']['name']);


        $image = $_FILES['image']['name'];

        move_uploaded_file($_FILES['image']['tmp_name'], $target);


        $filename = $image;

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO blog_posts (postTitle,postDesc,postCont,postDate,postImage) VALUES (:postTitle, :postDesc, :postCont, :postDate, :postImage)') ;
				$stmt->execute(array(
					':postTitle' => $postTitle,
					':postDesc' => $postDesc,
					':postCont' => $postCont,
					':postDate' => date('Y-m-d H:i:s'),
					':postImage' => $filename, 
				));

				//redirect to index page
				header('Location: index.php?action=added');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>
					
				
					<div class="panel panel-widget forms-panel">
					
						<div class="forms">
								
								<div class="form-three widget-shadow">
			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
									
										<div class="form-group">
											<label for="smallinput" class="col-sm-2 control-label label-input-sm">Title</label>
											<div class="col-sm-8">
											<input type='text' class="form-control1 input-sm" id="smallinput" name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>'>
										
											</div>
										</div>
										<div class="form-group">
											<label for="mediuminput" class="col-sm-2 control-label">Description</label>
											<div class="col-sm-8">
														<textarea name='postDesc' cols='60' rows='3'><?php if(isset($error)){ echo $_POST['postDesc'];}?></textarea>
											</div>
										</div>
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Content</label>
											<div class="col-sm-8">
												<textarea name='postCont' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postCont'];}?></textarea>
											</div>
										</div>
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Image</label>
											<div class="col-sm-8">
												<input type="file" name="image"> <?php if(isset($error)){ echo $_POST['postImage'];}?>
											</div>
										</div>

										<div class="col-sm-offset-2"> 
												<button type="submit" name="submit" value="submit" class="btn btn-primary">Add Blog</button> 
											</div> 
							
									</form>




						
						</div>
					</div>
					
					
				<!-- //input-forms -->
			</div>
		</div>
		<!-- footer -->
		        <footer>
          <div class="pull-right">
            Designed by <a href="http://qleverlabs.com/">Qleverlabs</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        </div>
    </div>
		<!-- //footer -->

	<script src="js/bootstrap.js"></script>
	    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
</body>

<!-- Mirrored from p.w3layouts.com/demos/july-2016/22-07-2016/colored_admin_panel/web/inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Jul 2017 11:28:10 GMT -->
</html>



