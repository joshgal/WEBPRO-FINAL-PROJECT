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
  max-width: 1000px;
}
</style>
<div class="container">
  <div class="card card-container">
      <div class="card-profile">
        <div class="bg-profile">
          <img src="<?= base_url('assets/img/collaborate.png')?>"/>
        </div>
        <div class="info-profile">

        </div>
      </div>
  </div>
</div>

<?php $this->load->view('page_footer')?>
