<style>

body{
  background: url('img/background.jpg');
  font: 12px arial;
}
#container{
  width: 300px;
  margin :200px auto;
  background: #66ccff;
  border: 1px solid #fff;
  color: #fff;
  padding: 15px;
}
h3{
  border-bottom: 1px dotted #fff;
  padding: 5px 10px;
  margin-top: 20px;
}
td{
  color:black;
  padding: 5px 10px;
}


</style>
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
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td> Re-enter Password</td>
				<td><input type="password" name="re_password" placeholder="Re-enter Password"></td>
			</tr>
				<td><button type="submit">Sign me up!</button></td>
			</tr>
				<td>Have an account ? <a href="<?= base_url('auth/Login');?>">Login</a></td>
			</table>
		</form>
</div>
