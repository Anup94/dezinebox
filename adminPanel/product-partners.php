<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
$dbConnect = new dbConnect();
$query="SELECT *,u.userId as userId FROM users u
LEFT JOIN users_type_map utm ON u.userId=utm.userId
LEFT JOIN product_partners pp ON pp.userId=u.userId
WHERE utm.userTypeId='".$dbConnect->const->userTypeId->productPartners."'";
$result=$dbConnect->conn->query($query);
$users=array();
if(mysqli_num_rows($result)>0) {
  $users=$result;
}

   if(isset($_GET['delpost'])){ 
  define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','dezine');

$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);

  $stmt = $db->prepare('DELETE FROM product_partners WHERE userId = :userId') ;
  $stmt->execute(array(':userId' => $_GET['delpost']));
  $stmt1 = $db->prepare('DELETE FROM users_type_map WHERE userId = :userId') ;
  $stmt1->execute(array(':userId' => $_GET['delpost']));
  header('Location: product-partners.php?action=deleted');
  exit;
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
      <script type="text/javascript">
  var projects=<?php echo json_encode($projects);?>
  </script>
      <script language="JavaScript" type="text/javascript">
  function delpost(userId, title)
  {
    if (confirm("Are you sure you want to delete "))
    {
      window.location.href = 'product-partners.php?delpost=' + userId;
    }
  }
  </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
  <?php include_once 'navbar.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Product Partners</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearf ix"></div>
                  </div>
                  <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                   <thead>
                           <tr class="text-uppercase text-nowrap">
                             <th>Date</th>
                              <th>Enterprise Name</th>
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>LinkedIn Profile </th>
                              <th>Product Type </th>
                     
                              <th>Experience</th>
                              <th>Address</th>
                              <th>Website</th>
                              <th>Catalog</th>
                              <th>Google Drive</th>
                              <th>Action</th>
                          </tr>
                      </thead>

                               <tbody>
                        <?php foreach ($users as $row) {
                          ?>
                          <tr data-user="<?php echo $row['userId'];?>">
                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['entName'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['mobile'];?></td>
                                  <td><a href="//<?php echo $row['linkedInProfile'] ?>"> &nbsp &nbsp<?php echo $row['linkedInProfile'];?></a></td>
                            <td><?php echo $row['productType'];?></td>
           
                            <td><?php echo $row['experience'];?></td>
                            <td><?php echo $row['address'];?></td>
                             <td><a href="//<?php echo $row['website'] ?>"> &nbsp &nbsp<?php echo $row['website'];?></a></td>
                      
                            <td>
                              <?php if(!empty($row['catalog'])):?>
                                <a href=<?php echo $row['catalog'];?> target="_blank">View Catalog</a>
                              <?php endif;?>
                            </td>
                            <td><a href="//<?php echo $row['googleDrive'] ?>"> &nbsp &nbsp<?php echo $row['googleDrive'];?></a></td>
                            <td>  <a href="javascript:delpost('<?php echo $row['userId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  
                  </div>
                </div>
              </div>
             
              <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Projects</h4>
          </div>
          <div class="modal-body no-padding">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Area</th>
                  <th>Highlight</th>
                  <th>Description</th>
                  <th>Portfolio</th>
                  <th>Linkedin</th>
                </tr>
                <tbody></tbody>
              </thead>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

             

             

          
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Designed by <a href="http://qleverlabs.com/">Qleverlabs</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
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
<!-- Google Analytics -->


  </body>






</html>