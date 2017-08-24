
<?php
require("connect.php");
echo"<br>";

if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	//$extract = mysqli_query($connect,"INSERT INTO login(username,password) VALUES('$user','$pass')") or die("cannoct extract");
	$extract = mysqli_query($connect,"SELECT * FROM login WHERE username='$user' AND password='$pass' ") or die("cannoct extract");
	//$numrow = mysqli_num_rows($extract);
	$row = mysqli_fetch_assoc($extract);
	if($row['username'] == $user && $row['password'] == $pass)
	{
		$id=$row['id'];
		$username=$row['username'];
		$passw= $row['password'];
		echo "<center><h1 style='color:red'>WELCOME $username</h1></center>";
		
	}


	else 
		echo "<script type='text/javascript'>alert('Invalid user');</script>";
}
//$extract = mysqli_query($connect,"SELECT * FROM login ") or die("cannoct extract");
//echo mysqli_num_rows($extract); //no of rows present in table
//$write = mysqli_query($connect,"INSERT INTO login VALUES('','ak','amit')") or die("CANNOT INSERT");
//$update = mysqli_query($connect,"UPDATE login set username='sheela' where username='cr7'") or die("caoonoct Insert");
//$delete = mysqli_query($connect,"DELETE FROM login where id='3'") or die("could not delete");


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
margin:0 auto;
background-image:url("back1.jpg");
background-repeat:no-repeat;
background-size:100% 720px;
}
.container{
width:500px;
height:400px;
text-align:center;
background-color:rgba(53,73,94,0.7);
margin-top:150px; 
margin-left:400px;
border-radius:4px;
matgin:0 auto;}

.container img{
width:120px;
height:120px;
margin-top:-60px;
margin-bottom:30px;
}
input[type="text"],input[type="password"]{
height:45px;
width:300px;
font-size:18px;
margin-bottom:20px;
background-color:#fff;
padding-left:35px;
}
.a::before{
content:"\f007";
position:absolute;
padding-left:5px;
padding-top:7px;
color:#985986;
font-family:"FontAwesome";
font-size:35px;
}
.a:nth-child(2)::before{
content:"\f023";
}
.bt-login{
cursor:pointer;
padding:15px 30px;
border-radius:4px;
color:#fff;
border:none;
background-color:green;
border-bottom:4px solid blue;
}
a{
color:#fff;
text-decoration:none;
}
</style>
<script>
function ak(){
var a=document.form.username;
var b=document.form.password;
if(a.value == "" || b.value==""){
	alert("Username OR Password Cannot be Blank!!");
	return false;
}
if(b.value.length < 4){
	alert("Password Should be Minimum 8 Character");
	return false;
}
if(a.value.length < 3){
	alert("Username should be atleast 3 character");
	return false;
}
}
</script>
</head>
<body>
<div class="container">
<img src="dummy.jpg" alt="profile photo">
<form action="login.php" method="POST" name="form" onsubmit="return ak()">
<div class="a">
<input type="text" placeholder="Enter username" maxlength=10 name="username" ><br>
</div>
<div class="a">
<input type="password" placeholder="Enter password" maxlength=10 name="password" ><br>
</div>
<input type="submit" value="Login"  name="submit" class="bt-login "><br>
<br>
<a href="">Forgent password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register_1.php">Register ?</a>
</form>
</div>
</body>
</html>
