<?php $this->load->view('page_header')?>
<style>

.card-container.card {
    max-width: 1500px;
}
/*
 * Card component
 */
.card {
    background-color: #f4f4f4;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 150px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.bg-profile img{
  width: 1500px;
  height: 400px;
}
.photo-profile img{
  border-radius: 100%;
  width: 120px;
  height: 120px;
  position: relative;
  bottom: 40px;
}
.name-profile{
  position: relative;
  bottom: 20px;
  margin-bottom: 40px;
}
.card-profile{
  background: #fff;
}
.card-menuprofile{
  margin-top: 24px;
}
.info{
  margin-bottom: 32px;
}
.about{
  margin-bottom: 16px;
}



/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent2 {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
tr.border_bottom td {
  border-bottom:1pt solid black;
}
</style>
<div class="container">
  <div class="card card-container">
    <?php foreach ($profile as $row ) { ?>

      <div class="card-profile">
        <div class="bg-profile">
          <img src="<?= base_url('assets/img/default-project.png')?>"/>
        </div>
        <div class="info-profile">
            <div class="photo-profile text-center">
              <img src="<?= base_url('assets/img/user.jpg')?>">
            </div>
            <div class="name-profile text-center">
                <h3 style="font-size: 40px; font-weigh: bold;"><?= $row->username?></h3>
                <h4 style="font-size: 16px;">Joined 24-04-2019</h4>
            </div>
            <div class="col-12 row text-center info">
              <div class="col-6">Initiated Project 0</div>
              <div class="col-6">Collaborated Project 0</div>
            </div>
        </div>
      </div>
    <?php } ?>
      <div class="card-menuprofile bg-white">

     <nav class="navbar navbar-expand-sm justify-content-between" id="navMainMenu">
      <ul class="navbar-nav nav-fill w-100 align-items-start">
        <li class="nav-item">
            <a class="nav-link active" id="ktg-menu" onclick="openMenu(event, 'about')">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'project')">Project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu">&nbsp;</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu">&nbsp;</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu">&nbsp;</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu">&nbsp;</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu">&nbsp;</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu">&nbsp;</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu">&nbsp;</a>
        </li>
     </ul>
    </nav>
    <div class="tabcontent" id="about">
      <div class="container" style="width: 80%; padding: 16px;">

        <table class="floating simpletable">
    <col width=100><col width=600><col width=100>
    <tbody>
        <tr class="border_bottom" style="height: 50px;"><td colspan="1"><strong>Short Bio</strong></td><td><?= $row->short_bio?></td></tr>
        <tr class="border_bottom" style="height: 50px;"><td colspan="1"><strong>Experience</strong></td><td><?= $row->experience?></td></tr>
        <tr class="border_bottom" style="height: 50px;"><td colspan="1"><strong>Portfolio</strong></td><td><?= $row->portfolio?></td></tr>
    </tbody>
</table>
        <!-- <div class="about tablinks row">
          <h3 style="font-size: 16px; font-weight: bold;">Short Bio</h3>
          <div><?= $row->short_bio?></div>
          <hr>
        </div>
        <div class="about tablinks">
          <h3 style="font-size: 16px; font-weight: bold;">Experience</h3>
          <hr>
        </div>
        <div class="about tablinks">
          <h3 style="font-size: 16px; font-weight: bold;">Portfolio</h3>
          <hr>
        </div> -->
</div>
</div>


<div class="tabcontent" id="project">
      <div class="container" style="margin: 26px;">
        <div class="about">
         <h1 style="font-size: 32px; margin-bottom: 24px;"><strong>Initiated</strong></h1>
         <p>No project initiated</p>
        </div>
        <div class="about">
         <h1 style="font-size: 32px; margin-bottom: 24px;"><strong>Project</strong></h1>
         <p>No project initiated</p>
        </div>
</div>
</div>

</div>
<script>
function openMen(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<?php $this->load->view('page_footer')?>
