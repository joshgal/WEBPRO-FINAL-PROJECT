<?php $this->load->view('page_header')?>

<link rel="stylesheet" href="<?= base_url('assets/css/main_menu.css')?>"/>

<style>
.backgorund_judul_main {
    margin-top: 80px;
    padding: 120px 0px 200px;
    background: url('<?= base_url('assets/img/collaborate.png')?>') center center / cover no-repeat;
    text-align: center
  }
</style>
<div class="backgorund_judul_main">
    <h1 id="judul">Collaborate To Make Bigger Things!</h1>
</div>

<div class="container" id="container_menu">
    <nav class="navbar navbar-expand-sm justify-content-between" id="navMainMenu">
      <ul class="navbar-nav nav-fill w-100 align-items-start">
        <li class="nav-item">
            <a class="nav-link active" id="ktg-menu" onclick="openMenu(event, 'Popular')">Popular</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'Music')">Music</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'Fashion')">Fashion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'Tech')">Technology</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'Art')">Art & Culture</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'Film')">Film & Video</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'Games')">Games</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'Publish')">Publishing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'Sosial')">Social</a>
        </li>
     </ul>
    </nav>
    <div class="card-deck">
    <div id="Popular" class="tabcontent">
    <?php foreach($project as $p){
      if (($p['popularity']=="yes")&&$p['admin_check']=="Accepted") {?>
      <div class="columns is-multiline">
          <div class="column is-6-tablet is-4-desktop is-3-widescreen">
            <div class="RC-ProjectCard">
              <div class="bungkuskartu card--container">
                <div class="card--header is-paddingless">
                  <a href="#">
                    <div class="card--img-cover">
                      <img src="<?= base_url('assets/img/default-project.png')?>" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                    </div>
                  </a>
                </div>
                <div class="card--body">
                  <div class="bungkusbadan">
                    <div class="bungkusbadan2">
                      <a href="<?= base_url('c_krowd_home/detil_project/')?><?= $p['id_project']?>">
                        <h3 class="title" style="font-family: 'Rubik' sans-serif; font-weight: bold; font-size: 20px; overflow-wrap: break-word;"><?= $p['judul_project']?>
                        </h3>
                      </a>
                      <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);"><?= $p['kategori']?>
                      </span>
                      <p class="sc_auth">
                        <span class="textBy">by</span>
                        <span class="textInitiator"><?= $p['username']?></span>
                      </p>
                      <div class="textDeskripsi"><?= $p['short_desc']?>
                      </div>
                    </div>
                    <div>
                      <progress class="progress is-danger is-12 is-small" value="<?= $p['joined_user']?>" max="<?= $p['max_user']?>" style="margin-bottom: 5px;"></progress>
                      <div class="columns is-mobile" style="margin: 0px;">
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                          <span class="textBy"><?= $p['joined_user']?>/<?= $p['max_user']?></span>
                          <span class="textCollaborator">Collaborators</span>
                        </div>
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                          <p class="time-left"><?= $p['days_left']?>
                            <span class="textDaysLeft">days left</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }} ?>
    </div>

    <div id="Music" class="tabcontent">
      <?php foreach($project as $p){
        if (($p['kategori']=="music")&&$p['admin_check']=="Accepted") {?>
        <div class="columns is-multiline">
          <div class="column is-6-tablet is-4-desktop is-3-widescreen">
            <div class="RC-ProjectCard">
              <div class="bungkuskartu card--container">
                <div class="card--header is-paddingless">
                  <a href="#">
                    <div class="card--img-cover">
                      <img src="<?= base_url('assets/img/default-project.png')?>" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                    </div>
                  </a>
                </div>
                <div class="card--body">
                  <div class="bungkusbadan">
                    <div class="bungkusbadan2">
                      <a href="<?= base_url('c_krowd_home/detil_project/')?><?= $p['id_project']?>">
                        <h3 class="title" style="font-family: 'Rubik' sans-serif; font-weight: bold; font-size: 20px; overflow-wrap: break-word;"><?= $p['judul_project']?>
                        </h3>
                      </a>
                      <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);"><?= $p['kategori']?>
                      </span>
                      <p class="sc_auth">
                        <span class="textBy">by</span>
                        <span class="textInitiator"><?= $p['username']?></span>
                      </p>
                      <div class="textDeskripsi"><?= $p['short_desc']?>
                      </div>
                    </div>
                    <div>
                      <progress class="progress is-danger is-12 is-small" value="<?= $p['joined_user']?>" max="<?= $p['max_user']?>" style="margin-bottom: 5px;"></progress>
                      <div class="columns is-mobile" style="margin: 0px;">
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                          <span class="textBy"><?= $p['joined_user']?>/<?= $p['max_user']?></span>
                          <span class="textCollaborator">Collaborators</span>
                        </div>
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                          <p class="time-left"><?= $p['days_left']?>
                            <span class="textDaysLeft">days left</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }} ?>
      </div>

    <div id="Fashion" class="tabcontent">
      <?php foreach($project as $p){
        if (($p['kategori']=="fashion")&&$p['admin_check']=="Accepted") {?>
        <div class="columns is-multiline">
          <div class="column is-6-tablet is-4-desktop is-3-widescreen">
            <div class="RC-ProjectCard">
              <div class="bungkuskartu card--container">
                <div class="card--header is-paddingless">
                  <a href="#">
                    <div class="card--img-cover">
                      <img src="<?= base_url('assets/img/default-project.png')?>" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                    </div>
                  </a>
                </div>
                <div class="card--body">
                  <div class="bungkusbadan">
                    <div class="bungkusbadan2">
                      <a href="<?= base_url('c_krowd_home/detil_project/')?><?= $p['id_project']?>">
                        <h3 class="title" style="font-family: 'Rubik' sans-serif; font-weight: bold; font-size: 20px; overflow-wrap: break-word;"><?= $p['judul_project']?>
                        </h3>
                      </a>
                      <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);"><?= $p['kategori']?>
                      </span>
                      <p class="sc_auth">
                        <span class="textBy">by</span>
                        <span class="textInitiator"><?= $p['username']?></span>
                      </p>
                      <div class="textDeskripsi"><?= $p['short_desc']?>
                      </div>
                    </div>
                    <div>
                      <progress class="progress is-danger is-12 is-small" value="<?= $p['joined_user']?>" max="<?= $p['max_user']?>" style="margin-bottom: 5px;"></progress>
                      <div class="columns is-mobile" style="margin: 0px;">
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                          <span class="textBy"><?= $p['joined_user']?>/<?= $p['max_user']?></span>
                          <span class="textCollaborator">Collaborators</span>
                        </div>
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                          <p class="time-left"><?= $p['days_left']?>
                            <span class="textDaysLeft">days left</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }} ?>
    </div>

    <div id="Tech" class="tabcontent">
      <?php foreach($project as $p){
      if (($p['popularity']=="yes")&&$p['admin_check']=="Accepted") {?>
      <div class="columns is-multiline">
        <div class="column is-6-tablet is-4-desktop is-3-widescreen">
          <div class="RC-ProjectCard">
            <div class="bungkuskartu card--container">
              <div class="card--header is-paddingless">
                <a href="#">
                  <div class="card--img-cover">
                    <img src="<?= base_url('assets/img/default-project.png')?>" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                  </div>
                </a>
              </div>
              <div class="card--body">
                <div class="bungkusbadan">
                  <div class="bungkusbadan2">
                    <a href="<?= base_url('c_krowd_home/detil_project/')?><?= $p['id_project']?>">
                      <h3 class="title" style="font-family: 'Rubik' sans-serif; font-weight: bold; font-size: 20px; overflow-wrap: break-word;"><?= $p['judul_project']?>
                      </h3>
                    </a>
                    <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);"><?= $p['kategori']?>
                    </span>
                    <p class="sc_auth">
                      <span class="textBy">by</span>
                      <span class="textInitiator"><?= $p['username']?></span>
                    </p>
                    <div class="textDeskripsi"><?= $p['short_desc']?>
                    </div>
                  </div>
                  <div>
                    <progress class="progress is-danger is-12 is-small" value="<?= $p['joined_user']?>" max="<?= $p['max_user']?>" style="margin-bottom: 5px;"></progress>
                    <div class="columns is-mobile" style="margin: 0px;">
                      <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                        <span class="textBy"><?= $p['joined_user']?>/<?= $p['max_user']?></span>
                        <span class="textCollaborator">Collaborators</span>
                      </div>
                      <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                        <p class="time-left"><?= $p['days_left']?>
                          <span class="textDaysLeft">days left</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }} ?>
    </div>

    <div id="Art" class="tabcontent">
      <?php foreach($project as $p){
        if (($p['kategori']=="art")&&$p['admin_check']=="Accepted") {?>
        <div class="columns is-multiline">
          <div class="column is-6-tablet is-4-desktop is-3-widescreen">
            <div class="RC-ProjectCard">
              <div class="bungkuskartu card--container">
                <div class="card--header is-paddingless">
                  <a href="#">
                    <div class="card--img-cover">
                      <img src="<?= base_url('assets/img/default-project.png')?>" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                    </div>
                  </a>
                </div>
                <div class="card--body">
                  <div class="bungkusbadan">
                    <div class="bungkusbadan2">
                      <a href="<?= base_url('c_krowd_home/detil_project/')?><?= $p['id_project']?>">
                        <h3 class="title" style="font-family: 'Rubik' sans-serif; font-weight: bold; font-size: 20px; overflow-wrap: break-word;"><?= $p['judul_project']?>
                        </h3>
                      </a>
                      <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);">Art and Culture
                      </span>
                      <p class="sc_auth">
                        <span class="textBy">by</span>
                        <span class="textInitiator"><?= $p['username']?></span>
                      </p>
                      <div class="textDeskripsi"><?= $p['short_desc']?>
                      </div>
                    </div>
                    <div>
                      <progress class="progress is-danger is-12 is-small" value="<?= $p['joined_user']?>" max="<?= $p['max_user']?>" style="margin-bottom: 5px;"></progress>
                      <div class="columns is-mobile" style="margin: 0px;">
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                          <span class="textBy"><?= $p['joined_user']?>/<?= $p['max_user']?></span>
                          <span class="textCollaborator">Collaborators</span>
                        </div>
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                          <p class="time-left"><?= $p['days_left']?>
                            <span class="textDaysLeft">days left</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }} ?>
      </div>
    </div>

    <div id="Film" class="tabcontent">
      <?php foreach($project as $p){
        if (($p['kategori']=="film&video")&&$p['admin_check']=="Accepted") {?>
        <div class="columns is-multiline">
          <div class="column is-6-tablet is-4-desktop is-3-widescreen">
            <div class="RC-ProjectCard">
              <div class="bungkuskartu card--container">
                <div class="card--header is-paddingless">
                  <a href="#">
                    <div class="card--img-cover">
                      <img src="<?= base_url('assets/img/default-project.png')?>" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                    </div>
                  </a>
                </div>
                <div class="card--body">
                  <div class="bungkusbadan">
                    <div class="bungkusbadan2">
                      <a href="<?= base_url('c_krowd_home/detil_project/')?><?= $p['id_project']?>">
                        <h3 class="title" style="font-family: 'Rubik' sans-serif; font-weight: bold; font-size: 20px; overflow-wrap: break-word;"><?= $p['judul_project']?>
                        </h3>
                      </a>
                      <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);">Film & Video
                      </span>
                      <p class="sc_auth">
                        <span class="textBy">by</span>
                        <span class="textInitiator"><?= $p['username']?></span>
                      </p>
                      <div class="textDeskripsi"><?= $p['short_desc']?>
                      </div>
                    </div>
                    <div>
                      <progress class="progress is-danger is-12 is-small" value="<?= $p['joined_user']?>" max="<?= $p['max_user']?>" style="margin-bottom: 5px;"></progress>
                      <div class="columns is-mobile" style="margin: 0px;">
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                          <span class="textBy"><?= $p['joined_user']?>/<?= $p['max_user']?></span>
                          <span class="textCollaborator">Collaborators</span>
                        </div>
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                          <p class="time-left"><?= $p['days_left']?>
                            <span class="textDaysLeft">days left</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }} ?>
      </div>
    </div>

    <div id="Games" class="tabcontent">
      <?php foreach($project as $p){
        if (($p['kategori']=="games")&&$p['admin_check']=="Accepted") {?>
        <div class="columns is-multiline">
          <div class="column is-6-tablet is-4-desktop is-3-widescreen">
            <div class="RC-ProjectCard">
              <div class="bungkuskartu card--container">
                <div class="card--header is-paddingless">
                  <a href="#">
                    <div class="card--img-cover">
                      <img src="<?= base_url('assets/img/default-project.png')?>" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                    </div>
                  </a>
                </div>
                <div class="card--body">
                  <div class="bungkusbadan">
                    <div class="bungkusbadan2">
                      <a href="<?= base_url('c_krowd_home/detil_project/')?><?= $p['id_project']?>">
                        <h3 class="title" style="font-family: 'Rubik' sans-serif; font-weight: bold; font-size: 20px; overflow-wrap: break-word;"><?= $p['judul_project']?>
                        </h3>
                      </a>
                      <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);"><?= $p['kategori']?>
                      </span>
                      <p class="sc_auth">
                        <span class="textBy">by</span>
                        <span class="textInitiator"><?= $p['username']?></span>
                      </p>
                      <div class="textDeskripsi"><?= $p['short_desc']?>
                      </div>
                    </div>
                    <div>
                      <progress class="progress is-danger is-12 is-small" value="<?= $p['joined_user']?>" max="<?= $p['max_user']?>" style="margin-bottom: 5px;"></progress>
                      <div class="columns is-mobile" style="margin: 0px;">
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                          <span class="textBy"><?= $p['joined_user']?>/<?= $p['max_user']?></span>
                          <span class="textCollaborator">Collaborators</span>
                        </div>
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                          <p class="time-left"><?= $p['days_left']?>
                            <span class="textDaysLeft">days left</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }} ?>
      </div>
    </div>

    <div id="Publish" class="tabcontent">
      <?php foreach($project as $p){
        if (($p['kategori']=="publishing")&&$p['admin_check']=="Accepted") {?>
        <div class="columns is-multiline">
          <div class="column is-6-tablet is-4-desktop is-3-widescreen">
            <div class="RC-ProjectCard">
              <div class="bungkuskartu card--container">
                <div class="card--header is-paddingless">
                  <a href="#">
                    <div class="card--img-cover">
                      <img src="<?= base_url('assets/img/default-project.png')?>" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                    </div>
                  </a>
                </div>
                <div class="card--body">
                  <div class="bungkusbadan">
                    <div class="bungkusbadan2">
                      <a href="<?= base_url('c_krowd_home/detil_project/')?><?= $p['id_project']?>">
                        <h3 class="title" style="font-family: 'Rubik' sans-serif; font-weight: bold; font-size: 20px; overflow-wrap: break-word;"><?= $p['judul_project']?>
                        </h3>
                      </a>
                      <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);"><?= $p['kategori']?>
                      </span>
                      <p class="sc_auth">
                        <span class="textBy">by</span>
                        <span class="textInitiator"><?= $p['username']?></span>
                      </p>
                      <div class="textDeskripsi"><?= $p['short_desc']?>
                      </div>
                    </div>
                    <div>
                      <progress class="progress is-danger is-12 is-small" value="<?= $p['joined_user']?>" max="<?= $p['max_user']?>" style="margin-bottom: 5px;"></progress>
                      <div class="columns is-mobile" style="margin: 0px;">
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                          <span class="textBy"><?= $p['joined_user']?>/<?= $p['max_user']?></span>
                          <span class="textCollaborator">Collaborators</span>
                        </div>
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                          <p class="time-left"><?= $p['days_left']?>
                            <span class="textDaysLeft">days left</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }} ?>
      </div>
    </div>

    <div id="Sosial" class="tabcontent">
      <?php foreach($project as $p){
        if (($p['kategori']=="sosial")&&$p['admin_check']=="Accepted") {?>
        <div class="columns is-multiline">
          <div class="column is-6-tablet is-4-desktop is-3-widescreen">
            <div class="RC-ProjectCard">
              <div class="bungkuskartu card--container">
                <div class="card--header is-paddingless">
                  <a href="#">
                    <div class="card--img-cover">
                      <img src="<?= base_url('assets/img/default-project.png')?>" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                    </div>
                  </a>
                </div>
                <div class="card--body">
                  <div class="bungkusbadan">
                    <div class="bungkusbadan2">
                      <a href="<?= base_url('c_krowd_home/detil_project/')?><?= $p['id_project']?>">
                        <h3 class="title" style="font-family: 'Rubik' sans-serif; font-weight: bold; font-size: 20px; overflow-wrap: break-word;"><?= $p['judul_project']?>
                        </h3>
                      </a>
                      <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);"><?= $p['kategori']?>
                      </span>
                      <p class="sc_auth">
                        <span class="textBy">by</span>
                        <span class="textInitiator"><?= $p['username']?></span>
                      </p>
                      <div class="textDeskripsi"><?= $p['short_desc']?>
                      </div>
                    </div>
                    <div>
                      <progress class="progress is-danger is-12 is-small" value="<?= $p['joined_user']?>" max="<?= $p['max_user']?>" style="margin-bottom: 5px;"></progress>
                      <div class="columns is-mobile" style="margin: 0px;">
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                          <span class="textBy"><?= $p['joined_user']?>/<?= $p['max_user']?></span>
                          <span class="textCollaborator">Collaborators</span>
                        </div>
                        <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                          <p class="time-left"><?= $p['days_left']?>
                            <span class="textDaysLeft">days left</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }} ?>
      </div>
    </div>
  </div>
  </div>

<?php $this->load->view('page_footer')?>
