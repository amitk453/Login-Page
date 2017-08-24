<!DOCTYPE html>
<html>
<head>
<style>
table,th,td{
	text-align:center;
	font-size:20px;
padding:10px;}

input[type=text],input[type=password]{
	width:100%;
	padding:12px 12px;
	margin:8px 0;
	box-sizing:border-box;
background-color:#fff;
}
input[type=submit]{
	width:50%;
	font-size:50;
	padding:15px;
	background-color:powderblue;
	
}
input[type=submit]:hover{
	background-color:blue;
}
.container{
width:500px;
height:400px;
text-align:center;

margin-top:100px; 
margin-left:400px;
border-radius:4px;
matgin:0 auto;}

.container img{
width:120px;
height:120px;
margin-top:-60px;
margin-bottom:30px;
}
body{
margin:0 auto;
background-image:url("back1.jpg");
background-repeat:repeat-x;
background-size:100% 720px;
}
header{
	color:red;
	background-color:purple;
	text-align:center;
	padding:20px;
}
</style>
<script>
function text(){
var a=document.form.password.value;
var b=document.form.password1.value;

if(a != b){
	alert("Password Doesn't Match");
	return false;
}
if(a ==""){
	alert("Username Cannot be Blank");
	return false;
}
if(b == ""){
	alert("password cannot be empty");
	return false;
}
if(a.value > 3){
	alert("Username should be atleast 3 character");
	return false;
}
if(b.length < 7){
	alert("Password should be minimum 8 Character!!");
	return false;
}
}
</script>
</head>
<body>
<header><h1>REGISTRATION FORM</h1></header>
<div class='container'>
<fieldset>
<legend>Sign up</legend>
<form action='register_1.php' method='POST' name='form'  onsubmit='return text()'>
<table width="100%" align="center">
<tr>
<th>Username</th>
<th>:</th>
<td><input type='text' name='username' id='u1' maxlength=10 placeholder='Enter Username'></td>
</tr>
<tr>
<th>Password</th>
<th>:</th>
<td><input type='password' name='password' id='p1' maxlength=8 placeholder='Enter Password'></td>
</tr>
<tr>
<th>Renter-Password</th>
<th>:</th>
<td><input type='password' name='password1' id="p2" maxlength=8 placeholder='Retype Password'></td>
</tr>
</table>
<center><input type='submit' name='submit' value='submit'></center><br>

<a href="login.php">Login</a>
</form><br>
</fieldset>
</div>
</body>
</html>
<?php
require("connect.php");
echo"<br>";
if(isset($_POST['submit'])){
$user = $_POST['username'];
$pass = $_POST['password'];

$ext  = mysqli_query($connect,"SELECT * FROM login ") or die("Connection Error");
$row = mysqli_fetch_assoc($ext);
if($row['username'] == $user ){
	echo"<script type='text/javascript'>alert('Username Already Exist');</script>";
}
//if($row['username']==$user && $row['password']==$pass){
	//echo"login...";
	//echo"<script type='text/javascript'>alert('Username Already Exist');</script>";
//}else{
	else{
	$extract = mysqli_query($connect,"INSERT INTO login(username,password) Values('$user','$pass')") or die("cannot");
  //echo "<script type='text/javascript'>alert('Successfully Submitted');</script>";
	echo"<script type='text/javascript'>alert('Successfully Submitted!!');</script> ";
	}
 // }
}
?>