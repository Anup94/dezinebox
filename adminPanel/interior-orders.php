<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
$dbConnect = new dbConnect();
$query="SELECT * FROM interior_enquiries aq
LEFT JOIN users u ON aq.userId=u.userId
LEFT JOIN construction_types ct ON ct.constTypeId=aq.constTypeId
ORDER BY aq.entryTime DESC
";
$result=$dbConnect->conn->query($query);
$users=array();
if(mysqli_num_rows($result)>0) {
  $users=$result;
}
$formEle=array(
          "constTypeId"=>"category",
                    "categoryOption"=>"Sub Category",
                    "subCategoryOption"=>"Theme",
                    "selectedArea"=>"AREA (SQ-FEET)",
      "moreDetails"=>"File",
      "budget"=>"Budget",
      "siteLocation"=>"Site Location",
      "driveLink"=>"Drive Link",
      "specificDetails"=>"Any Specific Detail",
      "price"=>"Price",
    "Paid"=>"Paid",
    "status"=>"Status",
    "payment_doc"=>"Payment Doc"

      );
if(isset($_GET['delpost'])){ 
  define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','dezine');

$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);

   $query="SELECT * FROM interior_enquiries aq
LEFT JOIN users u ON aq.userId=u.userId
LEFT JOIN construction_types ct ON ct.constTypeId=aq.constTypeId
GROUPBY month
";
}

if(isset($_GET['delpost'])){ 
  define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','dezine');

$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);

  $stmt = $db->prepare('DELETE FROM interior_enquiries WHERE enqId = :enqId') ;
  $stmt->execute(array(':enqId' => $_GET['delpost']));

  header('Location: interior-orders.php?action=deleted');
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
      window.location.href = 'interior-orders.php?delpost=' + id;
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
                 <!--  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <form name="couponForm" method="post" action="validate.php?task=price_change" enctype="multipart/form-data">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Interior Enquiries</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                 
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">

                      <thead>
<tr class="text-uppercase text-nowrap">

<th>Date</th>
<th>Order Id</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<?php foreach ($formEle as $key => $value) {
    echo "<th>".$value."</th>";
}
    ?>
      <th>Action</th>
</tr>

</thead>


                        <tbody>
                            <?php foreach ($users as $row) {
                                if($row['Paid'] == "YES"){
                                ?>
                                
                                <tr style="background-color:#7fdd7f;">
                              
                                     <td><?php echo $row['entryTime'];?></td>
                                    <td><?php echo $row['enqId'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['mobile'];?></td>
                                     <?php foreach ($formEle as $key => $value) {
                                         if($value == "Payment Doc"){
                                             echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
                                             
                                         }else if($value == "File"){
                                            if($row[$key]) echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
                                            else echo "<td>Not uploaded</td>";
                                         }else if($value == "category"){
                                              if($row[$key] == '1')echo "<td>Residential</td>";
                                             if($row[$key] == '2')echo "<td>Commercial</td>";
                                             if($row[$key] == '3')echo "<td>Hospitality</td>";
                                             if($row[$key] == '4')echo "<td>Institutional</td>";
                                             
                                         }else{
                                        echo "<td>".$row[$key]."</td>";
                                         }
                                    }
                                    ?>
                                      <td>    <a href="javascript:delpost('<?php echo $row['userId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>
                                </tr>
                                
                                
                                <?php
                                }else{
                                    ?>
                                    
                                    
                                    <tr>
                                    <td><?php echo $row['entryTime'];?></td>
                                    <td><?php echo $row['enqId'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['mobile'];?></td>
                                     <?php foreach ($formEle as $key => $value) {
                                         if($value == "Payment Doc"){
                                             if($row[$key]){
                                             echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
                                             }else{
                                                 echo "<td></td>";
                                                 
                                             }
                                         }else if($value == "File"){
                                             
                                            if($row[$key]) echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
                                            else echo "<td>Not uploaded</td>";
                                         }else if($value == "category"){
                                              if($row[$key] == '1')echo "<td>Residential</td>";
                                             if($row[$key] == '2')echo "<td>Commercial</td>";
                                             if($row[$key] == '3')echo "<td>Hospitality</td>";
                                             if($row[$key] == '4')echo "<td>Institutional</td>";
                                             
                                         }else{
                                        echo "<td>".$row[$key]."</td>";
                                         }
                                    }
                                    ?>

                                    <td><a href="javascript:delpost('<?php echo $row['enqId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>
                                </tr>
                                
                                    
                                    
                                    <?php
                                    
                                }
                            }
                            ?>
                        </tbody>
                    </table>
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