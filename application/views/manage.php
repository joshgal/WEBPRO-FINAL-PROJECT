<?php $this->load->view('page_header')?>

<link rel="stylesheet" href="<?= base_url('assets/css/main_menu.css')?>"/>

<div class="container" id="container_menu" style="margin-top:160px">
  <div class="row">
    <div class="col-lg-9">
      <nav class="navbar navbar-expand-sm justify-content-between" id="navMainMenu" style="margin-bottom:16px;">
        <ul class="navbar-nav nav-tabs w-100 align-items-start">
          <li class="nav-item">
            <a id="tabb1" class="nav-link active" id="ktg-menu" style="padding:20px; margin-right:24px;" onclick="openMenu(event, 'Notification')">Notification</a>
          </li>
          <li class="nav-item">
            <a id="tabb2" class="nav-link" id="ktg-menu" style="padding:20px; margin-right:24px;" onclick="openMenu(event, 'Collaborated Project')">Collaborated Project</a>
          </li>
          <li class="nav-item">
            <a id="tabb3" class="nav-link" id="ktg-menu" style="padding:20px; margin-right:24px;" onclick="openMenu(event, 'Initiated Project')">Initiated Project</a>
          </li>
          <li class="nav-item">
            <a id="tabb4" class="nav-link" id="ktg-menu" style="padding:20px; margin-right:24px;" onclick="openMenu(event, 'Manage Collaborator')">Manage Collaborator</a>
          </li>
        </ul>
      </nav>

      <div id="views1" style="padding: 15px 15px 25px; ">
        <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; font-size: 2.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74);">Notification</h1>
        <p style="margin-bottom:40px">Keep track on any latest update on your collaborated & initiated projects.</p>
        <form>
            <h1 style="width: 100%; font-family: heading-bold; font-size: 1.5rem; font-weight: 525; text-align: left; color: rgb(74, 74, 74);">Collaborated Projects</h1>
        </form>
      </div>

      <div id="views2" style="padding: 15px 15px 25px; display:none;">
        <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; font-size: 2.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74);">Collaborated Project</h1>
        <p style="margin-bottom:40px">A place where you keep track on all of your collaborated projects.</p>
        <form>
            <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 1rem; font-size: 1.5rem; font-weight: 525; text-align: left; color: rgb(74, 74, 74);">On Going Projects</h1>
            <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; font-size: 1.5rem; font-weight: 525; text-align: left; color: rgb(74, 74, 74);">Waiting For Initiator Review</h1>

        </form>

      </div>


      <div id="views3" style="padding: 15px 15px 25px; display:none;">
        <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; font-size: 2.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74);">Initiated Project</h1>
        <p style="margin-bottom:40px">A place where you keep track on all of your initiated projects. </p>
        <form>
          <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 1rem; font-size: 1.5rem; font-weight: 525; text-align: left; color: rgb(74, 74, 74);">Drafts</h1>
          <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; font-size: 1.5rem; font-weight: 525; text-align: left; color: rgb(74, 74, 74);">Waiting For Initiator Review</h1>
        </form>
      </div>


      <div id="views4" style="padding: 15px 15px 25px; display:none;">
        <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; font-size: 2.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74);">Manage Collaborator</h1>
        <p style="margin-bottom:40px">See people who interested to join in your project! Remember, to always check and review their profile and portfolio before you accept them to be one of the collaborators.</p>
        <form>
            <h1 style="width: 100%; font-family: heading-bold; font-size: 1.5rem; font-weight: 525; text-align: left; color: rgb(74, 74, 74);">Initiated Projects</h1>
        </form>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('#tabb1').click(function(){
    $('#views1').show();
    $('#views2').hide();
    $('#views3').hide();
    $('#views4').hide();
  });

  $('#tabb2').click(function(){
    $('#views1').hide();
    $('#views2').show();
    $('#views3').hide();
    $('#views4').hide();
  });


  $('#tabb3').click(function(){
    $('#views1').hide();
    $('#views2').hide();
    $('#views3').show();
    $('#views4').hide();
  });

  $('#tabb4').click(function(){
    $('#views1').hide();
    $('#views2').hide();
    $('#views3').hide();
    $('#views4').show();
  });

});
</script>

<?php $this->load->view('page_footer')?>
