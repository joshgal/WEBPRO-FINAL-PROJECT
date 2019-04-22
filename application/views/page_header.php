<!DOCTYPE html>
<html>
<head>
	<title>Krowd</title>

  <!-- Styling -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/main.11b91c4a.css')?>"/>

	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>


	<!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('assets/img/favicon.png')?>" sizes="16x16" type="image/png">

  <script>
    function openCity(evt, kategori) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(kategori).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>

</head>
<body>
<style>
  .bungkus{
    min-height: 100vh;
    background: rgb(242, 245, 247) none repeat scroll 0% 0%;
    overflow: auto;
    position: relative;
  }
  .bungkus_header{
    position: fixed;
    width: 100%;
    height: 80px;
    z-index: 1000;
    box-shadow: rgba(0, 0, 0, 0.06) 0px 10px 20px;
    background: white;
  }
  .box_navigasi{
    height: 80px;
    top: 12px;
  }
  .max_height, [data-css-3pug2w] {
    max-height: 80px;
  }
  .max_pos {
    max-height: 100%;
    line-height: 32px;
  }
  .css-c9d96w, [data-css-c9d96w] {
    display: flex;
    height: 100%;
    margin-right: 20px;
    align-content: center;
    justify-content: flex-end;
  }
  .menu_item, [data-css-19t8ts8] {
    display: flex;
    border-bottom: 2px solid white;
  }
  .button_group {
    display: flex;
    margin: 20px 10px;
  }
  .item_link {
    width: 100%;
    height: 100%;
    text-align: center;
    line-height: 75px;
    color: rgb(155, 155, 155);
    opacity: 1;
    white-space: nowrap;
    margin: 0px 10px;
  }
  .nav_button_login {
    display: inline-block;
    box-sizing: border-box;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;
    cursor: pointer;
    letter-spacing: 1px;
    text-align: center;
    font-size: 0.875rem;
    font-weight: 600;
    color: rgb(238, 48, 89);
    max-width: 100px;
    padding: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(238, 48, 89);
    border-image: initial;
    border-radius: 5px;
    background: white;
    margin: auto;
    transition: 0.2s;
  }
  .nav_button_regis {
    display: inline-block;
    box-sizing: border-box;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;
    cursor: pointer;
    letter-spacing: 1px;
    text-align: center;
    font-size: 0.875rem;
    font-weight: 600;
    color: white;
    max-width: 100px;
    padding: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(230, 50, 80, 0.9);
    border-image: initial;
    border-radius: 5px;
    background: rgb(238, 48, 89);
    margin: auto;
    transition: 0.2s;
  }
  </style>

	<?php
	$login = base_url('Auth/login');
	//Belum Login klik initiate bakal masuk ke page login

	if($this->session->userdata('username')) {
		$login = base_url('C_krowd_initiate');
	// Kalau udah login masuk ke page initiate
	}?>

	<div class="bungkus">
    <div class="bungkus_header">
      <div class="box_navigasi container">
        <div class="max_height columns">
          <div class="css-nil logo column is-12-mobile is-6-tablet is-inline-block is-paddingless">
            <a href="<?= base_url('c_krowd_home')?>" style="display: inline-block; height: 100%;">
            <img src="<?= base_url('assets/img/logo.png')?>" alt="logo" class="max_pos">
          </a>
          <div class="is-hidden-tablet is-inline-block" style="line-height: 80px; position: absolute; right: 15px;">
            <button class="button navbar-burger" style="display: inline-block; vertical-align: middle;">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
          <div class="is-hidden-tablet navbar-menu">
            <div class="menu_item">
              <a href="<?= base_url('C_krowd_home/about')?>" class="item_link">About</a>
            </div>
            <div class="menu_item">
              <a href="<?= $login?>" class="item_link">Initiate +</a>
            </div>
						<?php
						if($this->session->userdata('username')){
						?>
						<!-- HTML Kalau udah login bakal muncul icon profile-->
						<a href="/login" class="item_link"><img src="<?= base_url('assets/img/user.jpg');?>"style= "width:48px;"> </a>
						<?php
						} else {
						?>
						<!-- HTML Kalau belum login muncul button login dan regiter-->
						<div class="button_group">
								<a class="btn nav_button_login" href="<?=base_url('Auth/login')?>">Login</a>
						</div>
						<div class="button_group">
							<a class="btn nav_button_regis" href="<?= base_url('Auth/registrasi')?>">Register</a>
						</div>
						<?php
						}
						?>

          </div>
        </div>



        <div class="column is-hidden-mobile is-6-tablet is-inline-block is-paddingless">
          <div class="css-c9d96w">
            <div class="menu_item">
              <a href="<?= base_url('C_krowd_home/about')?>" class="item_link">About</a>
            </div>
            <div class="menu_item">
              <a href="<?= $login?>" class="item_link">Initiate +</a>
            </div>
						<?php
						if($this->session->userdata('username')){
						?>
 						<!-- HTML Kalau udah login bakal muncul icon profile-->
						<a href="/login" class="item_link"><img src="<?= base_url('assets/img/user.jpg');?>"style= "width:48px; border-radius:24px;"> </a>
						<?php
						} else {
						?>
						<!-- HTML Kalau belum login muncul button login dan regiter-->
						<div class="button_group">
              	<a class="btn nav_button_login" href="<?=base_url('Auth/login')?>">Login</a>
            </div>
            <div class="button_group">
              <a class="btn nav_button_regis" href="<?= base_url('Auth/registrasi')?>">Register</a>
            </div>
						<?php
						}
						?>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="Loading__loading___1m_fZ">
        <div class="Loading__bar___21yOt" style="background: rgb(238, 48, 89); width: 0%; display: none;">
          <div class="Loading__peg___3Y_28">

          </div>
        </div>
      </div>
    </div>
  </div>
