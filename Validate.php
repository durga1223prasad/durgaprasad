<?php
if(isset($_POST['login']))
{
$ server="localhost";
$ user="root";
$ password="3 ";
$ db="test";
$ con=new mysqli($server,$user,$password,$db);
$ user=$_POST['userName'];
$ password=$_POST['user Name'];
$ remember =$_POST['password'];
$ sql ="select * from users where User_Name='$user'and password'";
$ rs=$con->query($sql);
if($rs->num_rows>0)
{
session_start();
$_SESSION['userName']=$user;
$_SESSION['password']=$password;
if(isset($_POST['remember']))
{
setcookie("userName",$user,time()+60*60*7);
setcookie("password",$password,time()+60*60*7);
header("location:welcome.php");
}
}
else
{
echo"Either userName or Password is INVALID!"."<br>"." <a href='login.php'>clickhere</a> to try again";
}
}
else
{
}
?>