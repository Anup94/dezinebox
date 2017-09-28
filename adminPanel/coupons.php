<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
$dbConnect = new dbConnect();
$query="SELECT * FROM coupons";
$result=$dbConnect->conn->query($query);
$coupons=array();
if(mysqli_num_rows($result)>0) {
  $coupons=$result;
}

if(isset($_GET['delpost'])){ 
  define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','dezine');

$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);

  $stmt = $db->prepare('DELETE FROM coupons WHERE couponId = :couponId') ;
  $stmt->execute(array(':couponId' => $_GET['delpost']));

  header('Location: coupons.php?action=deleted');
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

      <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
    if (confirm("Are you sure you want to delete "))
    {
      window.location.href = 'coupons.php?delpost=' + id;
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

            <form name="couponForm" method="post" action="validate.php?task=price_change" enctype="multipart/form-data">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Coupons</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                   
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                 
                    <div class="pull-right">
                    <button type="button" data-toggle="modal" data-target="#couponForm" class="btn btn-info btn-xs">Add Coupon</button>
                  </div><table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                                <tr class="text-uppercase text-nowrap">
                                  <th>Coupon Id</th>
                                    <th>Code</th>
                                    <th>Usage Times</th>
                                    <th>Discount %</th>
                      <th>options</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($coupons as $row) {
                                ?>
                                <tr>
                                  <td><?php echo $row['couponId'];?></td>
                                  <td><?php echo $row['couponCode'];?></td>
                                  <td><?php echo $row['usageTimes'];?></td>
                        <td><?php echo $row['discount'];?></td>
                                  <input type="hidden" id="<?php echo $row['couponId'];?>" value="<?php echo $row['couponCode'];?>">
                     
                               <td><a href="javascript:delpost('<?php echo $row['couponId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>
                                </tr>
                                <?php
                              }
                              ?>
                            </tbody>
                    </table>
                    <button type="submit"   class="btn btn-primary" >Save</button>
                  </div>
                </div>
              </div>
              </form>

             

             

          
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
      <script src="js\thirdparty\0_jquery.min.js"></script>
        <script>
  
  
  function deleteThis(id){
    
    
    var r = confirm("Do you really want to delete this coupon??");
if (r == true) {
   var cId = $('#'+id).val();
   console.log(cId);
    $.post('/admin/validate.php?task=deleteCoupon', {"code":cId}, function(res){
      $("#vendorsTable").load(location.href + " #vendorsTable");
    });
}
}
  </script>
  
  <form name="couponForm" id="couponForm" class="modal fade" tabindex="-1" role="dialog" method="post" action="validate.php?task=add_coupon">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Coupon</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Code</label>
            <input type="text" class="form-control" name="couponCode" required/>
          </div>
          <div class="form-group">
            <label>Usage Times</label>
            <input type="number" value="1" min="1" class="form-control" name="usageTimes" required/>
          </div>
          <div class="form-group">
            <label>Discount %</label>
            <input type="number" max="100" min="1" class="form-control" name="discount" required/>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Coupon</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <script type="text/javascript" src="js/coupons.js"></script>
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