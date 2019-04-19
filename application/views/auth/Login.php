<!DOCTYPE html>
<html>
<head>
  
		<link rel="stylesheet"  >
		</head>

<body>
<br>
<br>
<br>
<br>
<br>
<div id="container">
<h3><p align="center">Login </p></h3>
<form method ="POST" action="<?= base_url('auth/login')?>">
<table>
<tr>
<td>Username</td>
<td><input type="text" name="username" placeholder="Username"
autofocus></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" placeholder="Password"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="login"
value="Login">
</td>
</tr>
<tr><td colspan="2" align="center">New to Krowd ?<a href="<?php echo site_url();?>auth/registrasi"><b>Signup</b></a></td>
</td>
</table>
</form>
</div>
</body>
</html>