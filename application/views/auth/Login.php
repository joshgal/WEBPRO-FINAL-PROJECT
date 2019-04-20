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
  <h3><p align="center">Login </p></h3>
    <form method ="POST" action="<?= base_url('auth/login')?>">
      <table>
          <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Username"
                autofocus>
            </td>
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
          <tr>
            <td colspan="2" align="center">New to Krowd ?<a href="<?php echo site_url();?>auth/registrasi"><b>Signup</b></a>
            </td>
          </td>
      </table>
    </form>
</div>
