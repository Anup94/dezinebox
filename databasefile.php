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

	$tmpfname = "girls-2020.csv" ;
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
	$college =  $worksheet->getCell('G'.$row)->getValue();
	echo   $college ;



	

	

	$sql = 'INSERT INTO commitment (name ,highschool , state ,club ,college , division, position , year , gender) values("'.$name.'" , 
	"'.$highschool.'" , "'.$state.'","'.$club.'", "'.$college.'" , "1" , " "  ,  "2020" , "girls") ';
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