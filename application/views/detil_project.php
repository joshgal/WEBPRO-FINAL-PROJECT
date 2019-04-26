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
    width: 30%;
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
</style>

<script>
	document.getElementByClass("nav-link active").click();
</script>

<div class="bungkusDProject container">
	<div class="bungkusDetilProject2 columns">
		<div class="posProject column is-9">
			<h1 class="textJudulProjectDetil">Aplikasi E-commerce untuk Farmasi Besar</h1>
			<div class="textKategori">Technology</div>
			<span class="textBriefProject">Kami membuat aplikasi yang menghubungkan penyedia stok obat-obatan maupun alat kesehatan dengan apotek-apotek hingga rumah sakit.</span>
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
									<div class="textBackStory">Ada sebuah artikel yang pernah saya baca menjelaskan tentang e-commerce di dunia kesehatan lebih kuat di lingkup B2B yaitu business to business. Hal itu mendorong saya untuk membuat suatu aplikasi e-commerce untuk perdagangan besar farmasi, yang mana menghubungkan antara Distributor penyedia obat-obatan dan alat-alat kesehatan dengan apotek-apotek, toko obat, maupun rumah sakit yang membutuhkan stok tertentu. 

									Seperti yang kita tahu, penggunaan obat-obatan dan alat-alat kesehatan terus bertambah dan sangat di butuhkan kapanpun. Hal ini mendorong setiap apotek atau toko obat bahkan rumah sakit, untuk selalu menyetok barang dan berusaha agar barang tidak kosong di toko mereka. Namun terkadang pemesanan yang terlalu banyak aturan menjadi hambatan, belum lagi proses pengiriman. Akan sangat menguntungkan jika ada aplikasi e-commerce yang menyediakan data barang-barang yang mereka butuhkan, sehingga mereka tahu harus memesan dimana. Hal ini akan mempercepat segala proses setelahnya.</div>
									<div class="textColabTimeline">Collaborators’ Task &amp; Timeline</div>
								<div class="textBackStory"></div>
							</div>
						</div>
						<div id="jurnal" class="tabcontent backgorundProject">
						  
						</div>
						<div id="colab" class="tabcontent backgorundProject">
						  
						</div>
				</div>
			</div>
		</div>
		<div class="posInitiator">
			<div class="bungkusInitiator">
				<img src="<?= base_url('assets/img/user.jpg')?>" alt="card" class="imgInitiator">
				<div class="body has-text-centered">
					<div class="textNamaInit">Prillyandini_Nurul</div>
					<div class="textJobdesk">
						<dl>
							<div>
								<dt>Programmer</dt>
							</div>
						</dl>
					</div>
					<div class="textKota">KOTA BANDUNG</div>
					<progress class="progress is-danger is-12 is-small" value="30" max="100" style="height: 6px; margin-top: 20px; margin-bottom: 5px;">90%</progress>
					<div class="columns is-mobile">
						<div class="column is-6 is-size-7 is-inline-block" align="left">
							<span class="textCollaborator is-black">3/10</span>Collaborators
						</div>
						<div class="column is-6 is-size-7 is-inline-block" align="right">
							<p class="time-left">251 days left</p>
						</div>
					</div>
					<button type="submit" class="btnCollaborate">Collaborate</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('page_footer')?>