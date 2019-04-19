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
</style>
<div class="container">
  <div class="card card-container">
      <div class="card-profile">
        <div class="bg-profile">
          <img src="<?= base_url('assets/img/default-project.png')?>"/>
        </div>
        <div class="info-profile">
            <div class="photo-profile text-center">
              <img src="<?= base_url('assets/img/user.jpg')?>">
            </div>
            <div class="name-profile text-center">
                <h3 style="font-size: 40px; font-weigh: bold;">Basil Haidi</h3>
                <h4 style="font-size: 24px;">Tukang Basil</h4>
            </div>
            <div class="col-12 row text-center info">
              <div class="col-6">Test1</div>
              <div class="col-6">Test2</div>
            </div>
        </div>
      </div>

      <div class="card-menuprofile bg-white">
        <div id="navMainMenu" class="row container" style="margin-top: 18px;">
            <a class="nav-link active" id="ktg-menu" onclick="">About</a>
            <a class="nav-link w-75" id="ktg-menu" onclick="">Project</a>
      </div>
      <div class="container" style="padding: 40px; width: 1200px;">
        <div class="about">
          <h3 style="font-size: 16px; font-weight: bold;">Short Bio</h3>
          <hr>
        </div>
        <div class="about">
          <h3 style="font-size: 16px; font-weight: bold;">Experience</h3>
          <hr>
        </div>
        <div class="about">
          <h3 style="font-size: 16px; font-weight: bold;">Portfolio</h3>
          <hr>
        </div>
  </div>
</div>

<?php $this->load->view('page_footer')?>
