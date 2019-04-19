<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" >
</head>	
<body>
<br>	
<br>
<br>
<br>
<br>

<div id="container">
<h3><p align="center">Registrasi</p></h3>
<form method="post" action="<?= base_url('auth/registrasi');?>" >
<table>
<tr>
<td>Username</td>
<td><input type="text" name="username"  value="<?=set_value('username')?>" placeholder ="Username"
autofocus><?= form_error('username')?></td>	
</tr>
<tr>
<td>Email</td>
<td><input type ="text" name="email"  value="<?=set_value('email')?>" placeholder="Email"></td>
</tr>
<tr><td>Password</td>
<td><input type="password" name="password" placeholder="Password"></td>
</tr>
<tr><td> Re-enter Password</td>
<td><input type="password" name="re_password" placeholder="Re-enter Password"></td>
</tr>
<td><button type="submit">Sign me up!</button></td>
</tr>	
<td>Have an account ? <a href="<?= base_url('auth/Login');?>">Login</a></td>
</form>
</table> 
</div>
</body>
</html>
