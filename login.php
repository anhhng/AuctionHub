


<html>
<head>
	<title>Login</title>
	<style type="text/css">
	#loginForm {
		margin-top:10%; 
		margin-left:10%;
	}
	input{
        margin-top:15px;
    }
    
	</style>
</head>



<body>
<nav>
<?php include ('nav.php'); ?>	
</nav>
<form id="loginForm"method='post' action="log-in.php">
	<table>
	<tr>
		<td>Username (email):</td>
		<td><input type="email" name="userName" autofocus required/></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type='password' name='password' required/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type='Submit' name='Submit' value='Login'/>
		<input type='button' value='Register' onclick="location.href='register.php' " /></td>
	</tr>
	</table>
	</form>

</body>

</html>