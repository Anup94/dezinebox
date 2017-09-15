<!doctype>
<!DOCTYPE html>
<html>
<head>
	<title>Anything</title>
</head>
<body>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xls-trial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


require_once "EXCEL/classes/PHPExcel.php";

	$tmpfname = "2019.csv" ;
	$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
	$excelObj = $excelReader->load($tmpfname);
	$worksheet = $excelObj->getActiveSheet();
	$lastrow = $worksheet->getHighestRow();

	echo "<table>";
	for($row = 1 ; $row <= $lastrow; $row++) {
		echo "<tr><td>";
	$name = $worksheet->getCell('A'.$row)->getValue();
echo $name;
		echo "</td><td>";
	$highschool = $worksheet->getCell('B'.$row)->getValue();
	echo $highschool;


		echo "</td><td>";
$state = $worksheet->getCell('C'.$row)->getValue();
	echo $state;


echo "</td><td>";
$club =  $worksheet->getCell('D'.$row)->getValue();
echo $club;


		echo "</td><td>";
	$college =  $worksheet->getCell('E'.$row)->getValue();
	echo   $college ;

		echo "</td><td>";
	$division =  $worksheet->getCell('F'.$row)->getValue();
	echo   $division ;

		echo "</td><td>";
$position =  $worksheet->getCell('G'.$row)->getValue();
echo $position;
	


	

	

	$sql = 'INSERT INTO commitment (name ,highschool , state ,club ,college , division, position , year , gender) values("'.$name.'" , 
	"'.$highschool.'" , "'.$state.'","'.$club.'", "'.$college.'" , "'.$division.'" , "'.$position.'"  ,  "2019" , "boys") ';
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
	echo "</table>";
?>
</body>
</html>