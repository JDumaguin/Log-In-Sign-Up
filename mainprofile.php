<?php
session_start();
$email="";
$view="false";
if(isset($_SESSION["user"])){
	$email = (isset($_GET['email']) ? $_GET['email'] : null);
}
if(!(isset($_SESSION["login"]))){
	header("location: index.php");
	}

include("connection.php");
$result=$conn->query("SELECT * FROM tbltry WHERE email='". $email ."'");
$rows=$result->rowcount();
while($data=$result->fetch(PDO::FETCH_BOTH)){
$fname=ucwords(strtolower($data["name"]));
}
/*send message*/
if(isset($_POST["sendB"])){
include("connection.php");
$conn->query("INSERT INTO tbl_msg VALUES('". $_POST["tobox"] ."','". $_POST["subject"] ."','". $_POST["msg"] ."','". $fname ."','". $view ."')");
header("location: mainprofile.php?email=".$email."#");
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
*{
	font-family: sans-serif;
padding:0;
margin:0;
}
#msgForm{
	position:fixed;
	left:50%;
	border: 1px solid black;
	padding:10px;
	background-color: white;
	width:50%;
	max-width: 400px;
	border-radius: 5px;
	/*Animation*/
	transform: translate(-50%,300%);
	-moz-transform: translate(-50%,300%);
	-webkit-transform: translate(-50%,300%);
	-ms-transform: translate(-50%,300%);
	transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-webkit-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
}
.msg:before{
	content: "";
	display: none;
	position: fixed;
	background-color: rgba(0,0,0,0.8);
	top:0;
	left:0;
	width: 100%;
	height: 100%;
}
.msg:target:before{
	display:block;
}
.msg:target #msgForm{
	display:block;
	transform: translate(-50%,0);
	-moz-transform: translate(-50%,0);
	-webkit-transform: translate(-50%,0);
	-ms-transform: translate(-50%,0);
}
.user{
	padding:20px;
	font-size:1.5em;
}
.navbar{
	list-style-type: none;
	margin:0;
	padding:0;
	overflow: hidden;
	border:1px solid black;
	height:25px;
}
li{
	float:left;
	display:inline-block;
	background-color: #3b5998;
	margin:0;
	padding:0;
}
li a{
	display:block;
	color:#8b9dc3;
	margin:0;
	padding:5px;
	text-decoration: none;
}
li a:hover{
	transition: all 250ms ease-in-out;
	background-color:#5174BD;
}

</style>
</head>
<body>
	<div id="cont">
	<div class="user">
	<?php
	echo ("Welcome ".$fname."");
	?>
	</div>
	<ul class="navbar">
		<li><a href="#msgBox">Message</a></li>
		<li><a href="inbox.php">Inbox</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<div id="msgBox" class="msg">
		<form id="msgForm" method="POST">
			<label>To: </label><input type="text" name="tobox" id="toBox" placeholder="email" style="width:370px;" required /><br>
			<br><label>Subject:</label><br>
			<input type="text" name="subject" style="width:370px;" required /><br>
			<br><label>Message:</label><br>
			<textarea name="msg" id="Msg" cols="47" rows="15" required ></textarea><br>
			<br><input type="submit" name="sendB" id="sendb" value="Send" style="padding:5px; width:80px; cursor:pointer; background-color: #1a75ff; border-radius:5px; color: white; border:none;"/><br>
			<br><a href="#" name="cancl" id="cancl" style="width:100px; padding:5px; padding-left:17px; padding-right:17px; height:10px; border:none; text-decoration:none; color:black; background-color: #1a75ff; color: white; border-radius:5px;">Cancel</a>
		</form>
	</div>
	
</div>
</body>
</html>