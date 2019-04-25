<?php $this->load->view('page_header')?>

<link rel="stylesheet" href="<?= base_url('assets/css/main_menu.css')?>"/>

<div class="container" id="container_menu" style="margin-top:160px">
  <div class="row">
    <div class="col-lg-9">
      <nav class="navbar navbar-expand-sm justify-content-between" id="navMainMenu"  style="margin-bottom:16px;">
        <ul class="navbar-nav nav-tabs w-100 align-items-start">
          <li class="nav-item">
            <a id="tab1" class="nav-link active" id="ktg-menu" style="padding:20px; margin-right:24px;" onclick="openMenu(event, 'Basic Info')">Basic Info</a>
          </li>
          <li class="nav-item">
            <a id="tab2" class="nav-link" id="ktg-menu" style="padding:20px; margin-right:24px;" onclick="openMenu(event, 'Story')">Story</a>
          </li>
          <li class="nav-item">
            <a id="tab3" class="nav-link" id="ktg-menu" style="padding:20px; margin-right:24px;" onclick="openMenu(event, 'Reward')">Reward</a>
          </li>
        </ul>
      </nav>

      <div id="view1" style="padding: 15px 15px 25px;">
        <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; font-size: 2.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74);">Tell us about your project, to every bit.</h1>
        <p style="margin-bottom:40px">Keep track on any latest update on your collaborated & initiated projects.</p>
        <form id="formEdit" action="#" method="post">
          <div class="form-group row" style="margin: 12px;">
            <input type="hidden" name="id_project" value="<?= $project->id_project?>" />
            <label for="ProjectFile" class="col-sm-3 col-form-label" style="padding: 25px 12px 12px;">Project Image</label>
            <div class="col-sm-9" style="padding: 12px;">
              <input type="file" class="form-control-file" name="upload_image" placeholder="" id="ProjectFile" aria-describedby="fileHelp" value="" style="width: 100%; margin-bottom: 10px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" >
              <span id="fileHelp" class="form-text text-muted">PNG, JPEG, max(?) MB</span>
            </div>
          </div>
          <div class="form-group row" style="margin: 12px;">
            <label for="ProjectName" class="col-sm-3 col-form-label" style="padding: 25px 12px 12px;">Project Title</label>
            <div class="col-sm-9" style="padding: 12px;">
              <input type="text" name="judul_project" placeholder="pop" id="ProjectName" aria-describedby="nameHelp" value="<?= $project->judul_project ?>" style="width: 100%; margin-bottom: 10px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" >
              <span id="nameHelp" class="form-text text-muted">Once you collaborate or initiate a project, you can't change the project name</span>
            </div>
          </div>
          <div class="form-group row" style="margin: 12px;">
            <label for="ProjectDescription" class="col-sm-3 col-form-label" style="padding: 25px 12px 12px;">Short Description</label>
            <div class="col-sm-9" style="padding: 12px;">
              <textarea class="form-control" name="short_desc" id="eProjectDescription" placeholder="Tell us about your project" rows="3" style="width: 100%; margin-bottom: 10px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;"><?= $project->short_desc ?></textarea>
            </div>
          </div>
          <div class="form-group row" style="margin: 12px;">
            <label for="ProjectCategory" class="col-sm-3 col-form-label" style="padding: 25px 12px 12px;">Category</label>
            <div class="col-sm-9" style="padding: 12px;">
              <select class="form-control selectpicker" placeholder="Select Category" name="category" id="ProjectCategory" style="width: 100%; margin-bottom: 16px; padding: 6px 4px; font-size: 16px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" >
                <option hidden>Select Category</option>
                <option>Music</option>
                <option>Fashion</option>
                <option>Technology</option>
                <option>Art & Culture</option>
                <option>Film & Video</option>
                <option>Games</option>
                <option>Publishing</option>
                <option>Social</option>
              </select>
            </div>
          </div>
          <div class="form-group row" style="margin: 12px;">
            <label for="ProjectLocation" class="col-sm-3 col-form-label" style="padding: 25px 12px 12px;">Location</label>
            <div class="col-sm-9" style="padding: 12px;">
              <input value="<?= $project->judul_project ?>" type="text" name="lokasi" placeholder="Masukan Kabupaten/Kota Anda Berada" id="ProjectLocation" aria-describedby="nameHelp" style="width: 100%; margin-bottom: 10px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" >
            </div>
          </div>
          <div class="form-group row" style="margin: 12px;">
            <label for="ProjectDuration" class="col-sm-3 col-form-label" style="padding: 25px 12px 12px;">Project Duration</label>
            <div class="row col-sm-9" style="padding: 12px;">
              <input class="col-lg-5 mr-3 ml-3" type="text" name="start_date" placeholder="StartDate" id="ProjectDuration" value="" style="width: 50%; margin-bottom: 10px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" >
              <strong class="col-lg-1 m-auto"> - </strong>
              <input class="col-lg-5" type="text" name="end_date" placeholder="EndDate" id="ProjectDuration" value="" style="width: 50%; margin-bottom: 10px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" >
            </div>
          </div>
          <div class="form-group row" style="margin: 12px;">
            <label for="ProjectField" class="col-sm-3 col-form-label" style="padding: 25px 12px 12px;">Expert Field</label>
            <div class="col-sm-9" style="padding: 12px;">
              <select class="form-control selectpicker" name="bidang_keahlian" id="ExpertField" style="width: 100%; margin-bottom: 16px; padding: 6px 4px; font-size: 16px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" >
                <option hidden style="color:gray;">Select Expertise</option>
                <option>Illustrator</option>
                <option>Data Researcher</option>
                <option>Animator</option>
                <option>Journalist</option>
                <option>Photogrpher</option>
                <option>Game Developer</option>
                <option>Fashion Designer</option>
                <option>Actor/actress</option>
                <option>Programmer</option>
                <option>Copywriter</option>
                <option>Grapic Designer</option>
                <option>Musician</option>
                <option>Interior Designer</option>
                <option>Project Designer</option>
                <option>Architect</option>
              </select>
            </div>
          </div>

        <div class="row">
          <a id="btnView2"class="btn nav_button_regis text-center mx-auto" style="color: white;">NEXT</a>
        </div>
      </div>
      <div id="view2" style="padding: 15px 15px 25px; display:none;">
        <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; font-size: 2.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74);">It won’t be perfect without details.</h1>
        <p style="margin-bottom:40px">Use images, video, and a compelling description to describe what you’re making. Be sure to get specific about why people should be excited about your project.</p>

          <div class="form-group row" style="margin: 12px;">
            <label for="ProjectDescription" class="col-sm-3 col-form-label" style="padding: 25px 12px 12px;">Background Story</label>
            <div class="col-sm-9" style="padding: 12px;">
              <textarea class="form-control" id="eProjectDescription" placeholder="Background Story" rows="3" style="width: 100%; margin-bottom: 10px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;"></textarea>
            </div>
          </div>
          <div class="form-group row" style="margin: 12px;">
            <label for="ProjectDescription" class="col-sm-3 col-form-label" style="padding: 25px 12px 12px;">Collaborators’ Task & Timeline</label>
            <div class="col-sm-9" style="padding: 12px;">
              <textarea class="form-control" id="eProjectDescription" placeholder="Collaborators’ Task & Timeline" rows="3" style="width: 100%; margin-bottom: 10px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;"></textarea>
            </div>
          </div>
        </forn>
        <div class="row">
          <a id="btnView3" class="btn nav_button_regis text-center mx-auto" style="color: white;">NEXT</a>
        </div>
      </div>

      <div id="view3" style="padding: 15px 15px 25px; display:none;">
        <h1 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; font-size: 2.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74);">Offer the rewards for your collaborators.</h1>
        <p style="margin-bottom:40px">Tell your potential collaborators that they will not only get experience and a fun journey in your project, but they also can get credits, gifts, or even a profit sharing!</p>

      </div>
    </div>
    <div class="col-lg-3">
      <div class="row" style="margin-bottom:16px; margin-left:2px;">
        <button id="btnSubmit1" type="button" class="btn nav_button_login col-lg-3">Save</button>
        <button id="btnSubmit2" class="btn nav_button_regis col-lg-3">Publish</button>
      </div>
    </form>
      <div class="column">
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
                  <a href="">
                    <h3 class="title" style="font-family: 'Rubik' sans-serif; font-weight: bold; font-size: 20px; overflow-wrap: break-word;">TITLE
                    </h3>
                  </a>
                  <span class="category" style="font-size: 16px; display: block; margin-bottom: 5px; color: rgb(189, 189, 189);">category
                  </span>
                  <p class="sc_auth">
                    <span class="textBy">by</span>
                    <span class="textInitiator">username</span>
                  </p>
                  <div class="textDeskripsi">sort desc
                  </div>
                </div>
                <div>
                  <progress class="progress is-danger is-12 is-small" value="1" max="10" style="margin-bottom: 5px;"></progress>
                  <div class="columns is-mobile" style="margin: 0px;">
                    <div class="column is-6 is-size-7 is-inline-block is-paddingless">
                      <span class="textBy">1/10</span>
                      <span class="textCollaborator">Collaborators</span>
                    </div>
                    <div class="column is-6 is-size-7 is-inline-block is-paddingless" align="right">
                      <p class="time-left">10
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

  </div>
</div>

<script>
$('#btnSubmit1').click(function(){
$('#formEdit').attr('action', '<?= base_url('C_krowd_initiate/save') ?>');
$('#formEdit').submit();
});

$('#btnSubmit2').click(function(){
$('#formEdit').attr('action', 'location2.php');
$('#formEdit').submit();
});
</script>

<?php $this->load->view('page_footer')?>
