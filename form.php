<?php 
// You can access the values posted by jQuery.ajax
// through the global variable $_POST, like this:
$search = $_POST["search"];

$host= "localhost";
$username="root";
$password="";
$dbname="cr11_christians_petadoption";

$conn = mysqli_connect($host,$username,$password,$dbname);

$sql ="SELECT * FROM animals WHERE name LIKE '$search%'";

$result = mysqli_query($conn, $sql);

if ($result->num_rows == 0){
	echo "No result";
}elseif($result->num_rows == 1){
	$row = $result->fetch_assoc();
	echo $row["name"];
}else{
	$row = $result->fetch_all(MYSQLI_ASSOC);
	foreach($row as $row){
		echo$row["name"]."<br>";
	}
}
?>