<?php $this->load->view('page_header')?>

<style>
.bungkusDetilProject2 {
    min-height: 620px;
}

.bungkusDetilProject2 {
    padding-top: 150px;
    display: flex;
}

.posProject {
    margin-bottom: 60px;
    flex: none;
    width: 75%;
}

.posInitiator {
    margin-bottom: 60px;
    flex: none;
    width: 25%;
}

.textJudulProjectDetil {
    width: 100%;
    font-family: heading-bold;
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 1rem;
    line-height: 1;
}

.textKategori {
    color: rgb(155, 155, 155);
    display: inline-block;
    padding-right: 20px;
    padding-bottom: 5px;
    margin-bottom: 10px;
    border-bottom: 1px solid rgb(238, 48, 89);
}

.textBriefProject {
    display: block;
    margin-bottom: 40px;
}

span {
    font-style: inherit;
    font-weight: inherit;
}

.bungkusInitiator {
    background: white none repeat scroll 0% 0%;
    box-shadow: rgba(0, 0, 0, 0.08) 0px 7px 13px;
    position: relative;
    overflow: auto;
    padding: 20px;
}

.imgInitiator {
    height: 120px;
    max-width: 120px;
    border-radius: 50%;
    margin: 10px auto auto;
    display: block;
}

.textNamaInit {
    font-size: 1.25rem;
    font-weight: 600;
}

.textJobdesk {
    font-size: 0.875rem;
    line-height: 2;
}

.textKota {
    font-size: 0.75rem;
    color: rgb(155, 155, 155);
    line-height: 2;
}

.textCollaborator, [data-textCollaborator] {
    padding-right: 4px;
}

.btnCollaborate {
    display: inline-block;
    box-sizing: border-box;
    padding: 10px 20px;
    margin-top: 30px;
    transition: all 0.2s ease 0s;
    border: 1px solid rgba(230, 50, 80, 0.9);
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;
    cursor: pointer;
    background: rgb(238, 48, 89) none repeat scroll 0% 0%;
    letter-spacing: 1px;
    text-align: center;
    font-size: 0.875rem;
    font-weight: 600;
    color: white;
}

.textBackStory {
	font-size: 0.75rem;
    line-height: 2;
    margin-bottom: 40px;
}

.textColabTimeline {
    display: inline-block;
    padding-bottom: 5px;
    margin-bottom: 16px;
    border-bottom: 1px solid red;
    font-weight: 600;
}

.imgProject {
    width: 100%;
}

.paddingBungkusProject {
    padding: 50px;
}

.backgorundProject {
    background: white none repeat scroll 0% 0%;
    position: relative;
    top: -16px;
}
.boxDetilProject {
    background: white none repeat scroll 0% 0%;
    box-shadow: rgba(0, 0, 0, 0.08) 0px 7px 13px;
    position: relative;
    overflow: auto;
}

.bungkusJurnalProject2 {
    width: 100%;
    background: white none repeat scroll 0% 0%;
    padding: 20px 50px;
    font-size: 18px;
}
.CollaborationBungkus {
    border-top: 2px solid rgb(239, 239, 239);
    margin-left: 50px;
    margin-right: 50px;
}
.CollaborationBungkus2 {
    width: 100%;
    min-height: 60px;
    padding: 20px 50px;
}
.CollaborationBungkusPangluarna {
    background: white none repeat scroll 0% 0%;
    position: relative;
    top: -16px;
}
.CollabLokasi {
    overflow: hidden;
    text-align: center;
}
.CollabImage {
    max-height: 100%;
    max-width: 100%;
    border-radius: 50%;
}
.CollabNgaran {
    background: rgb(255, 255, 255) none repeat scroll 0% 0%;
    padding-left: 10px;
}
.CollabDesc {
    font-size: 0.75rem;
    display: block;
    margin-bottom: 5px;
}
</style>

<script>
	document.getElementByClass("nav-link active").click();
</script>

<?php foreach($project as $p){?>
<div class="bungkusDProject container">
	<div class="bungkusDetilProject2 columns">
		<div class="posProject column is-9">
			<h1 class="textJudulProjectDetil"><?= $p['judul_project']?></h1>
			<div class="textKategori"><?= $p['kategori']?></div>
			<span class="textBriefProject"><?= $p['short_desc']?></span>
			<div class="boxDetilProject">
				<div class="ant-tabs ant-tabs-top ant-tabs-line">
					<div role="tablist" class="ant-tabs-bar" tabindex="0">
							<div class="ant-tabs-nav-wrap">
								<div class="ant-tabs-nav-scroll">
									<nav class="navbar navbar-expand-sm justify-content-between" id="navMainMenu">
								      <ul class="navbar-nav nav-fill w-100 align-items-start">
								        <li class="nav-item">
								            <a class="nav-link active" id="ktg-menu" onclick="openMenu(event, 'story')">Story</a>
								        </li>
								        <li class="nav-item">
								            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'jurnal')">Journal</a>
								        </li>
								        <li class="nav-item">
								            <a class="nav-link" id="ktg-menu" onclick="openMenu(event, 'colab')">Colaborators</a>
								        </li>
								     </ul>
								    </nav>
								</div>
							</div>
					</div>
					<div class="ant-tabs-content ant-tabs-content-animated" style="margin-left: 0%;">
						<div id="story" class="tabcontent backgorundProject">
						  	<img src="<?= base_url('assets/img/default-project.png')?>" alt="card" class="imgProject">
						  	<div class="paddingBungkusProject">
								<div class="textColabTimeline">Background Story</div>
									<div class="textBackStory"><?= $p['deskripsi']?></div>
									<div class="textColabTimeline">Collaborators’ Task &amp; Timeline</div>
								<div class="textBackStory"></div>
							</div>
						</div>
						<div id="jurnal" class="tabcontent backgorundProject">
						  	<div class="bungkusJurnalProject">
						  		<div class="bungkusJurnalProject2">'No journal available.'</div></div>
						</div>
						<div id="colab" class="tabcontent backgorundProject">
							<div class="">
								<div>
									<div class=""></div>
										<div class="CollaborationBungkus2 is-12">
											<?php foreach($collab as $c){?>
											<div class="css-nil columns is-mobile">
												<div class="CollabLokasi column is-2-desktop is-3-tablet is-6-mobile">
													<img src="<?= base_url('assets/img/user.jpg')?>" alt="card" class="CollabImage"></div>
													<div class="CollabNgaran column is-10-desktop is-9-tablet is-6-mobile">
														<span style="font-size: 1rem; color: rgb(155, 155, 155);" class="css-nil"><?= $c['username']?>
														</span>
														<span class="CollabDesc description">
															<div class="columns">
																<div class="column is-3">
																</div>
																<div class="column is-3">
																	<div><?= $c['kota']?></div>
																</div>
																<div class="column is-3">
																	<div>Collaborated Project: 1</div>
																</div>
																<div class="column is-3">
																	<div>Initiated Project: 0</div>
																</div>
															</div>
														</span>
													</div>
												<div class=""></div>
											</div>
											<?php }?>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="posInitiator">
			<div class="bungkusInitiator">
				<img src="<?= base_url('assets/img/user.jpg')?>" alt="card" class="imgInitiator">
				<div class="body has-text-centered">
					<div class="textNamaInit"><?= $p['username']?></div>
					<div class="textJobdesk">
						<dl>
							<div>
								<dt><?= $p['bidang_keahlian']?></dt>
							</div>
						</dl>
					</div>
					<div class="textKota"><?= $p['lokasi']?></div>
					<progress class="progress is-danger is-12 is-small" value="<?= $p['joined_user']?>" max="<?= $p['max_user']?>" style="height: 6px; margin-top: 20px; margin-bottom: 5px;"></progress>
					<div class="columns is-mobile">
						<div class="column is-6 is-size-7 is-inline-block" align="left">
							<span class="textCollaborator is-black"><?= $p['joined_user']?>/<?= $p['max_user']?></span>Collaborators
						</div>
						<div class="column is-6 is-size-7 is-inline-block" align="right">
							<p class="time-left"><?= $p['days_left']?> days left</p>
						</div>
					</div>
					<?php if($p['joined_user'] != $p['max_user']) {?>
					<button type="submit" class="btnCollaborate">Collaborate</button>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>

<?php $this->load->view('page_footer')?>