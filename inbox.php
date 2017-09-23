<?php
include("connection.php");
include("mainprofile.php");
$result=$conn->query("SELECT * FROM tbl_msg WHERE to='". $SESSION["email"] ."'");
$rows=$result->rowcount();
if($rows >= 1){
	while($data=$result->fetch(PDO::FETCH_BOTH)){
	$subject=ucwords(strtolower($data["subject"]));
	$view=$data["view"];
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
<?php
if($view==false){
echo "<strong>$subject</strong>";
}else{
echo "$subject";
}
?>
</body>
</html>