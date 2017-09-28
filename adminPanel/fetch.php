<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "dezine");
$columns = array('enqId', 'siteLocation', 'categoryOption', 'subCategoryOption', 'entryTime');

$query = "SELECT * FROM architecture_enquiries WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'entryTime BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (enqId LIKE "%'.$_POST["search"]["value"].'%" 
  OR siteLocation LIKE "%'.$_POST["search"]["value"].'%" 
  OR categoryOption LIKE "%'.$_POST["search"]["value"].'%" 
  OR subCategoryOption LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY enqId DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["enqId"];
 $sub_array[] = $row["siteLocation"];
 $sub_array[] = $row["categoryOption"];
 $sub_array[] = $row["subCategoryOption"];
 $sub_array[] = $row["entryTime"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM architecture_enquiries";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>