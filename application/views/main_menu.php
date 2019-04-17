<?php $this->load->view('page_header')?>

<div class="container" id="containerMenu">

    <nav class="navbar navbar-expand-sm justify-content-between" id="navMainMenu">
      <ul class="navbar-nav nav-fill w-100 align-items-start">
        <li class="nav-item">
            <a class="nav-link active" id="ktg-menu" onclick="openCity(event, 'Popular')">Popular</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openCity(event, 'Music')">Music</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openCity(event, 'Fashion')">Fashion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openCity(event, 'Tech')">Technology</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openCity(event, 'Art')">Art & Culture</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openCity(event, 'Film')">Film & Video</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openCity(event, 'Games')">Games</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openCity(event, 'Publish')">Publishing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openCity(event, 'Sosial')">Social</a>
        </li>
     </ul>
    </nav>

    <br>
    <br>
    <!-- Tab content -->
    <div id="Popular" class="tabcontent">
      <h3>London</h3>
      <p>London is the capital city of England.</p>
    </div>

    <div id="Music" class="tabcontent">
      <h3>Paris</h3>
      <p>Paris is the capital of France.</p>
    </div>

    <div id="Fashion" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div>

    <div id="Tech" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div> 

    <div id="Art" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div> 

    <div id="Film" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div> 

    <div id="Games" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div> 

    <div id="Publish" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div> 

    <div id="Sosial" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div> 

  </div>
  <?php $this->load->view('page_footer')?>