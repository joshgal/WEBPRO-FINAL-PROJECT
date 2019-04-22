<?php $this->load->view('page_header')?>

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
                      <a href="#">
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
                      <a href="#">
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
                      <a href="#">
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
                    <a href="#">
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
                      <a href="#">
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
                      <a href="#">
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
                      <a href="#">
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
                      <a href="#">
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
                      <a href="#">
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

  <!-- <div class="collaborate-body container" style="position: relative; top: -90px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; box-shadow: rgba(0, 0, 0, 0.08) 0px 7px 13px; padding: 40px; min-height: 620px;">
  <div class="ant-tabs ant-tabs-top ant-tabs-line">
    <div role="tablist" class="ant-tabs-bar" tabindex="0">
      <div class="ant-tabs-nav-container">
        <span unselectable="unselectable" class="ant-tabs-tab-prev ant-tabs-tab-btn-disabled">
          <span class="ant-tabs-tab-prev-icon">
            
          </span>
        </span>
        <span unselectable="unselectable" class="ant-tabs-tab-next ant-tabs-tab-btn-disabled">
          <span class="ant-tabs-tab-next-icon">
            
          </span>
        </span>
        <div class="ant-tabs-nav-wrap">
          <div class="ant-tabs-nav-scroll">
            <div class="ant-tabs-nav ant-tabs-nav-animated">
              <div class="ant-tabs-ink-bar ant-tabs-ink-bar-animated" style="display: block; transform: translate3d(0px, 0px, 0px); width: 88px;">
                
              </div>
              <div role="tab" aria-disabled="false" aria-selected="true" class="ant-tabs-tab-active ant-tabs-tab">Popular
              </div>
              <div role="tab" aria-disabled="false" aria-selected="false" class=" ant-tabs-tab">Music
              </div>
              <div role="tab" aria-disabled="false" aria-selected="false" class=" ant-tabs-tab">Fashion
              </div>
              <div role="tab" aria-disabled="false" aria-selected="false" class=" ant-tabs-tab">Technology
              </div>
              <div role="tab" aria-disabled="false" aria-selected="false" class=" ant-tabs-tab">Art &amp; Culture
              </div>
              <div role="tab" aria-disabled="false" aria-selected="false" class=" ant-tabs-tab">Film &amp; Video
              </div>
              <div role="tab" aria-disabled="false" aria-selected="false" class=" ant-tabs-tab">Games
              </div>
              <div role="tab" aria-disabled="false" aria-selected="false" class=" ant-tabs-tab">Publishing
              </div>
              <div role="tab" aria-disabled="false" aria-selected="false" class=" ant-tabs-tab">Social
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ant-tabs-content ant-tabs-content-animated" style="margin-left: 0%;">
      <div role="tabpanel" aria-hidden="false" class="ant-tabs-tabpane ant-tabs-tabpane-active">
        <div class="columns is-multiline">
          <div class="column is-6-tablet is-4-desktop is-3-widescreen"><div class="RC-ProjectCard">
            <div class="bungkuskartu card--container">
              <div class="card--header is-paddingless"><a href="./project/4c882449-1d9a-417a-acec-f48b5035d2f1">
                <div class="card--img-cover"><img src="/assets/default-project.png" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                </div></a>
              </div>
              <div class="card--body">
                <div class="bungkusbadan card--content">
                  <div class="bungkusbadan2 card--content-top">
                    <a href="./project/4c882449-1d9a-417a-acec-f48b5035d2f1">
                      <h3 class="title" style="font-family: heading; font-weight: bold; font-size: 24px; overflow-wrap: break-word;">Aplikasi E-commerce untuk Farmasi Besar
                      </h3>
                    </a>
                    <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);">Technology
                    </span>
                    <p class="css-iu7k7s author">
                      <span class="textBy">by</span>
                      <span class="textInitiator">Prillyandini_Nurul</span>
                    </p>
                    <div class="textDeskripsi">Kami membuat aplikasi yang menghubungkan penyedia stok obat-obatan maupun alat kesehatan dengan apotek-apotek hingga rumah sakit.
                    </div>
                  </div>
                  <div><progress class="progress is-danger is-12 is-small" value="30" max="100" style="margin-bottom: 5px;">30%
                  </progress>
                  <div class="columns is-mobile" style="margin: 0px;">
                    <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                      <span class="textBy">3/10
                      </span>
                      <span class="textCollaborator">Collaborators
                      </span>
                    </div>
                    <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                      <p class="time-left">256
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
        <div class="column is-6-tablet is-4-desktop is-3-widescreen">
          <div class="RC-ProjectCard">
            <div class="bungkuskartu card--container">
              <div class="card--header is-paddingless">
                <a href="./project/cecd0007-ac8a-48be-acb9-b7830bc5f7e3">
                  <div class="card--img-cover">
                    <img src="https://storage.googleapis.com/krowd-2017/SAMAN_UPI_PURWAKARTA_20180109_182704_-_Luhung_Kawuryaning_P-2018-01-10-025933.jpg" style="width: 100%; height: 200px; object-fit: cover;" alt="card">
                  </div>
                </a>
              </div>
              <div class="card--body">
                <div class="bungkusbadan card--content">
                  <div class="bungkusbadan2 card--content-top">
                    <a href="./project/cecd0007-ac8a-48be-acb9-b7830bc5f7e3">
                      <h3 class="title" style="font-family: heading; font-weight: bold; font-size: 24px; overflow-wrap: break-word;">Saman Entrepreneur
                      </h3>
                    </a>
                    <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);">Art &amp; Culture
                    </span>
                    <p class="css-iu7k7s author">
                      <span class="textBy">by
                      </span>
                      <span class="textInitiator">Luhung_Kawuryaning
                      </span>
                    </p>
                    <div class="textDeskripsi">Almost no Saman dancers in Batam, I want to preserve the culture so that any event that there is entertainment or opening event is not only Melayu dance, but traditional dance outside Batam area.
                    </div>
                  </div>
                  <div>
                    <progress class="progress is-danger is-12 is-small" value="0" max="100" style="margin-bottom: 5px;">0%
                    </progress>
                    <div class="columns is-mobile" style="margin: 0px;">
                      <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                        <span class="textBy">0/8
                        </span>
                        <span class="textCollaborator">Collaborators
                        </span>
                      </div>
                      <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                        <p class="time-left">112
                          <span class="textDaysLeft">days left
                          </span>
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
    </div>
    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
  </div>
</div>
</div> -->
<!-- <table class="table table-striped table-bordered">
    <tr>
    <th>judul project</th>
    <th>kategori</th>
    </tr>
  <?php foreach($project as $p){ ?>
    <tr>
      <td><?php echo $p['judul_project']; ?></td>
      <td><?php echo $p['kategori']; ?></td>
    </tr>
  <?php } ?>
</table> -->


<?php $this->load->view('page_footer')?>