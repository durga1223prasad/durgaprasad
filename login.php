<!DOCTYPE html/>
<html>
<head>
<meta charset="utf-8">
<meta name="view part"content="width=device-width,initial_scale=1">
<title>Login</title>
<style type="text/css">
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:"sans-serif";
}
body{
display:flex;
justify-content:center;
align-items:center;
min-height:100vh;
background:dark salmon;
}
</style>
</head>
<body>
<form method="post"action="validate.php">
</table>
<tr>
<td colspan=2>
<input class="input-box"type="textbox"name=userName"placeholder="userID"id="userName_ID">
</td>
</tr>
<tr>
<td colspan="2">
<input type="password" name="password" placeholder="password" id="password_ID" class="input_box">
</td>
</tr>
<tr>
<td>
<iniput type="checkbox"name="remember"value="1">
</td>
<td>
Remember Me
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" vlue="login" name="login">
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_COOKIE['UserName'])and isset($_COOKIE['password']))
{
$ un = $_COOKIE['user Name'];
$ pass = $_COOKIE['password'];
echo"<script>
document.getElementById('userName_ID').value='$un';
document.getElementById('password_ID').value=$pass';
</script>";
}
?>