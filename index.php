<?php
session_start();
if(isset($_SESSION["login"])){
	if($_SESSION["login"]==true){
	header("location: mainprofile.php?email=".$_SESSION["user"]."");
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
label{
color:#8b9dc3;
}
#chkbox{
color:#8b9dc3;
}
div.LogInBan{
	position: absolute;
	border-top:none;
	background-color: #3b5998;
	top:0px;
	width:100%;
	left:0px;

}
div.lowerPart{
	position:absolute;
	top:80px;
}

#col{
	position:relative;
	float:right;
	width:180px;
}
a{
	color:#8b9dc3;
	text-decoration: none;
}
a:hover{
	text-decoration: underline;
}
#emailReg{
	width:345px;
}
#passReg{
	width:345px;
}
#reenter{
	width:345px;
}
#signupB{
width:200px;
height:60px;
}
#signupF{
position:relative;
left:800px;
top:30px;
}
#fname{
width:167.5px;
}
#lname{
width:167.5px;
}
#month{
position:relative;
left:15px;
}
#day{
position:relative;
left:16px;
}
#year{
position:relative;
left:17px;
}
#gender{
position:relative;
left:18px;
}
#errMSG{
position:relative;
left:300px;
}
<?php 
$errMsg="";
if(isset($_GET["login_attempt"])){
$errMsg="Invalid Username and/or Password!";
}
?>
</style>
</head>
<body>
<div class="LogInBan">
	<form action="login.php" method="post">
		<fieldset id="field1">
			<div id="col">
				<br>
				<input type="submit" name="login" class="login" value="Log In"/>
			</div>
			<div id="col">
				<label>Password</label><br>
				<input type="password" name="pass" id="pass"/><br>
				<a href="#">Forgot your password?</a>
			</div>
			<div id="col">
				<label>Email or Phone</label><br>
				<input type="text" name="email" id="email"/><br>
				<input type="checkbox" name="chkbox" id="chkbox" value="checkbox"/><label>Keep me logged in</label><br>
			</div>
			<span style="color:red;" id="errMSG"><?php echo $errMsg; ?></span>
		</fieldset>
	</form>
</div>
<div class="lowerPart">
	<form action="reg.php" method="post">
		<fieldset id="signupF">
			<legend><strong style="font-size:1.5em;">Sign Up</strong><br>It's free and always be.</legend><br>
			<input type="text" name="fname" id="fname" placeholder="First Name" required />
			<input type="text" name="lname" id="lname" placeholder="Last Name" required /><br>
			<br><input type="text" name="emailReg" id="emailReg" placeholder="Email or Mobile number" required /><br>
			<br><input type="password" name="reenter" id="reenter" placeholder="Enter Password" required /><br>
			<br><input type="password" name="passReg" id="passReg" placeholder="Re-enter Password" required /><br>
			<br><label>Birthday</label><br>
			<select name="month" id="month" required>
				<option>Month</option>
				<option>January</option>
				<option>February</option>
				<option>March</option>
				<option>April</option>
				<option>May</option>
				<option>June</option>
				<option>July</option>
				<option>August</option>
				<option>September</option>
				<option>October</option>
				<option>November</option>
				<option>December</option>
			</select>
			<select name="date" value="Day" id="day" required>
				<option>Day</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
			</select>
			<select name="year" id="year" required>
				<option>Year</option>
				<option>2018</option>
                <option>2017</option>
				<option>2016</option>
				<option>2015</option>
				<option>2014</option>
				<option>2013</option>
				<option>2012</option>
				<option>2011</option>
				<option>2010</option>
				<option>2009</option>
				<option>2008</option>
				<option>2007</option>
				<option>2006</option>
				<option>2005</option>
				<option>2004</option>
				<option>2003</option>
				<option>2002</option>
				<option>2001</option>
				<option>2000</option>
				<option>1999</option>
				<option>1998</option>
				<option>1997</option>
				<option>1996</option>
				<option>1995</option>
				<option>1994</option>
				<option>1993</option>
				<option>1992</option>
				<option>1991</option>
				<option>1990</option>
			</select><br>
			<label>Sex</label><br>
			<input type="checkbox" name="sex" value="Male" id="sexM"  />Male
			<input type="checkbox" name="sex" id="sexF" value="Female"  />Female
			</select><br>
			<br><input type="submit" name="signup" value="Sign Up" id="signupB">
		</fieldset>
	</form>
</div>
</body>
</html>