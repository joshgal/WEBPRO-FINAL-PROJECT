<!DOCTYPE html>
<html>
<head>
	<title>Krowd</title>
	
  <!-- Styling -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
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
	<nav class="navbar navbar-expand-sm navbar-light" id="navbar">
  	<a class="navbar-brand mr-auto" href="<?= base_url()?>" style="padding-left: 73px;">
  	  <img src="<?= base_url('assets/img/logo.png')?>" width="190" height="70" class="d-inline-block align-top" alt="logo">
  	</a>  
    <div class="navbar-collapse collapse justify-content-between">
      <ul class="navbar-nav mr-auto">
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Initiate +</a>
        </li>
      </ul>
    </div>
	</nav>

	<div id="container-bg" style="background-image: url('<?= base_url('assets/img/background.jpg')?>')">
        <div class="row justify-content-md-center" id="welcome">
            <div class="col-md-10 align-center">
                <h1 class="text-center" id="judul">
                    Collaborate To Make 
                    <br>Bigger Things!
                </h1>
            </div>
        </div>
  </div>