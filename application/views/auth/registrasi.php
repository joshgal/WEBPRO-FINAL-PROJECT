<style>
	.progress-bar {
    color: #333;
} 



* {
    -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	outline: none;
}

   
body {
	
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
	margin-top: 60px;

}

form[role=register] {
	color: #5d5d5d;
	padding: 26px 32px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
  width: 1000px;
   max-width: 500px;
   box-shadow: rgba(0, 0, 0, 0.08) 0px 7px 13px;
   margin: 100px auto 80px;
   background: rgb(255, 255, 255);
}
	form[role=register] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=register] input,
	form[role=register] button {
		font-size: 18px;
		margin: 16px 0;
	}
	form[role=register] > div {
		text-align: center;
	}
	
.form-links {
	text-align: center;
	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}
	.submit {
    margin-top: 30px;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;
    cursor: pointer;
    letter-spacing: 1px;
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    color: white;
    width: 100%;
    margin-bottom: 20px;
    padding: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(228, 228, 228);
    border-image: initial;
    border-radius: 5px;
    background: rgb(238, 49, 89);
    transition: all 0.2s ease 0s;
}

</style>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4" >
	
      <section class="register-form">
		<form method="post" action="<?= base_url('auth/registrasi');?>" role="register">
		<h1 style="margin-top: 0px; margin-bottom: 40px; text-align: center; font-family: heading; font-weight: bold; font-size: 24px;">Register</h1>
		<?= form_error('username','<div class="text-danger" role="alert">', '</div>');?>
		<?= form_error('email','<div class="text-danger" role="alert">', '</div>');?>
		<?= form_error('password','<div class="text-danger" role="alert">', '</div>');?>
		<?= form_error('submit','<div class="text-danger" role="alert">', '</div>');?>
          <input type="text" name="username" placeholder="Username" value="<?= set_value('username');?>" style="width: 100%; margin-bottom: 20px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;">
          <input type="text" name="email"value="<?= set_value('email');?>"  style="width: 100%; margin-bottom: 20px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" id="email" placeholder="Email">
		  <input type="password" name= "password"style="width: 100%; margin-bottom: 20px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" id="password" placeholder="Password">
		  <input type="password" name ="re_password" style="width: 100%; margin-bottom: 20px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" id="re_pasword" placeholder="Re-Enter Password">
			<input type="checkbox" name="submit" id="terms" value="on">
		  <label for="terms" style="padding-left: 5px;">I agree with Krowd's<a href="/terms" style="text-decoration: none; outline: none; padding-left: 5px;">terms and condition</a></label>   
          <div class="pwstrength_viewport_progress"></div>
          
          
		  <button type="submit" name="go" class="submit RC-RedButton">sign me up!</button>
		  <hr>
          <div>
		  <p>Have an account ?<a href="<?= base_url('auth/login');?>" style="padding-left: 5px;">Login</a></p>
          </div>
          
        </form>
        
       
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
   
  
  
</div>