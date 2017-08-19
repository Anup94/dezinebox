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
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard - <?php echo SITE_TITLE;?></title>
  <?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/css.php";?>
      <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
    if (confirm("Are you sure you want to delete "))
    {
      window.location.href = 'interior-orders.php?delpost=' + id;
    }
  }
  </script>

     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />


  

 </head>
 <body>
 <div class="site-content">
    <section class="main-content">
      <?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/navs.php";?>
      <div class="wrapper container-fluid">
        <div class="fit-main-content">
          <div class="table-responsive">
  <div class="container box">
  
   <br />
   <div class="table-responsive">
    <br />
    <div class="row">
     <div class="input-daterange">
      <div class="col-md-4 col-sm-6 col-xs-6">
       <input type="text" name="start_entryTime" id="start_entryTime" class="form-control" />
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6">
       <input type="text" name="end_entryTime" id="end_entryTime" class="form-control" />
      </div>      
     </div>
     <div class="col-md-4">
      <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
     </div>
    </div>
    <br />
    <table class="table table-bordered" id="order_data" >
                     <thead>
                                <th>Action</th>
                                <th>Date</th>                        
                                <th>Order Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <?php foreach ($formEle as $key => $value) {
                                    echo "<th>".$value."</th>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $row) {
                                if($row['Paid'] == "YES"){
                                ?>
                                
                                <tr style="background-color:#7fdd7f;">
                                <td>    <a href="javascript:delpost('<?php echo $row['userId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>
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
                                </tr>
                                
                                
                                <?php
                                }else{
                                    ?>
                                    
                                    
                                    <tr>
                                    <td><a href="javascript:delpost('<?php echo $row['enqId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>
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
      </div>
  
    </section>
  </div>
  </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/scripts.php";?>

      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
 </body>
</html>



<script type="text/javascript" >
$(document).ready(function(){
 
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });

 fetch_data('no');

 function fetch_data(is_date_search, start_entryTime='', end_entryTime='')
 {
  var dataTable = $('#order_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"fetch3.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_entryTime:start_entryTime, end_entryTime:end_entryTime
    }
   }
  });
 }

 $('#search').click(function(){
  var start_entryTime = $('#start_entryTime').val();
  var end_entryTime = $('#end_entryTime').val();
  if(start_entryTime != '' && end_entryTime !='')
  {
   $('#order_data').DataTable().destroy();
   fetch_data('yes', start_entryTime, end_entryTime);
  }
  else
  {
   alert("Both Date is Required");
  }
 }); 
 
});
</script>
