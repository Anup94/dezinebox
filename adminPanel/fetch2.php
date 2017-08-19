<?php
ini_set('display_errors', 'Off');
$connect = mysqli_connect("localhost", "root", "", "dezine") or die('error');

$query = "SELECT * FROM interior_enquiries WHERE 8!=1 ";

if($_POST["is_date_search"] == "yes")
{
 $query .= ' AND order_date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= ' AND 
  (enqId LIKE "%'.$_POST["search"]["value"].'%" 
  OR selectedArea LIKE "%'.$_POST["search"]["value"].'%" 
  OR budget LIKE "%'.$_POST["search"]["value"].'%" 
  OR categoryOption LIKE "%'.$_POST["search"]["value"].'%")
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


if($_POST['start']=='')
{

	$_POST['start']=1;
}


if($_POST['length']=='')
{

	$_POST['length']=10;
}


if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}


$demo=$query.$query1;

//echo $demo;
$result = mysqli_query($connect, $demo);
$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

//echo $query.$query1;

$data1 = array();
$data = array();
 //$sub_array = array();

while($row = mysqli_fetch_assoc($result))
{

$data1[] = $row;
}


foreach ($data1 as $key => $value) {
	$data[]=$value;
	echo $value;
}



var_dump($data);
function get_all_data($connect)
{
 $query1 = "SELECT * FROM interior_enquiries";
 $result1 = mysqli_query($connect, $query1);
 return mysqli_num_rows($result1);
}


$max=get_all_data($connect);


$output = array(
 "draw"    => intval($_REQUEST['draw']),
 "recordsTotal"  => intval($max) ,
 "recordsFiltered" => intval($number_filter_row),
 "data"    => $data
);

echo json_encode($output);

?>