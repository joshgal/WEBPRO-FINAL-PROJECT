<!DOCTYPE html>
<html>
<head>
	<title>Krowd</title>
  <!-- Styling -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/main.11b91c4a.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/main_menu.css')?>"/>
  <!-- Javascript -->
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/js/header.js')?>"></script>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('assets/img/favicon.png')?>" sizes="16x16" type="image/png">
</head>
<body>
<style>
  
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
						<div class="menu_item">
							 <a class="item_link"><img src="<?= base_url('assets/img/user.jpg');?>"style= "width:48px; border-radius:24px;"></a>
						</div>
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
						<div class="menu_item">
							 <a class="item_link"><img src="<?= base_url('assets/img/user.jpg');?>"style= "width:48px; border-radius:24px;"></a>
						</div>
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
