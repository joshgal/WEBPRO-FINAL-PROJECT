<style>
	.progress-bar {
    color: #333;
} 

/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

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

form[role=login] {
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
	form[role=login] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=login] input,
	form[role=login] button {
		font-size: 18px;
		margin: 16px 0;
	}
	form[role=login] > div {
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
	.submit{
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
	
      <section class="login-form">
    <form method="post" action="<?= base_url('auth/login')?>" role="login">
    
    <h1 style="margin-top: 0px; margin-bottom: 40px; text-align: center; font-family: heading; font-weight: bold; font-size: 24px;">Login</h1>
    <?= $this->session->flashdata('flash'); ?>
    <?= form_error('username','<small class="text-danger">','</small>');?>
          <input type="text" name="username" placeholder="Username" value="<?= set_value('username');?>" style="width: 100%; margin-bottom: 20px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" >

          <input type="password" name="password" style="width: 100%; margin-bottom: 20px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" id="password" placeholder="Password"  >
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
		  <button type="submit" name="go" class="submit RC-RedButton">Login</button>
		  <hr>
          <div>
		  <p>New to Krowd?<a href="<?= base_url('auth/registrasi');?>" style="padding-left: 5px;">Signup</a></p>
          </div>
          
        </form>
        
       
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
   
  
  
</div>