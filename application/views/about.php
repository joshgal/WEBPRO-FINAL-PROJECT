<?php $this->load->view('page_header')?>
<style>
	.bungkus_about {
    	margin-top: 100px;
	}
	.bungkus_dalem_about {
	    width: 100%;
	    max-width: 900px;
	    margin: 0px auto;
	    background: rgb(255, 255, 255) none repeat scroll 0% 0%;
	}
	.about_content {
		margin: auto;
		padding: 40px 10px 200px;
		max-width: 660px;
	}

	.judul_about {
		margin-bottom: 40px; 
		font-family: 'Rubik', sans-serif;
		font-weight: bold; 
		font-size: 24px; 
		line-height: 1.1;
	}
	.gambar_about_1{
		width: 100%; 
		margin-bottom: 40px; 
		vertical-align: middle;
	}
	.spasi_bawah {
	    margin-bottom: 140px;
	}
	#gambar_about_2 {
		width: 49.9%; 
		vertical-align: middle; 
		display: inline-block;	
	}
	.spasi_bawah_2{
		margin-bottom: 25px;
	}
	#gambar_about_3{
		max-width: 400px; 
		width: 100%; 
		margin-bottom: 40px;
	}
</style>

<div class="bungkus_about">
	<div class="bungkus_dalem_about">
		<div class="about_content" align="center">
			<h3 class="judul_about">OUR STORY</h3>
			<img src="<?= base_url('assets/img/about1.png')?>" class="gambar_about_1" alt="map">
			<p class="spasi_bawah">As the fourth most populous country in the world, Indonesia has tremendous wealth and extraordinary potential: tens of thousands of islands, tribes, and local dialects; art and culture; creators who assemble inventions in various fields.</p>
			<div style="margin-bottom: 100px;">
				<div class="col-md-6" id="gambar_about_2">
					<img src="<?= base_url('assets/img/about2.gif')?>" alt="talents" style="width: 100%;">
				</div>
				<div class="col-md-6" id="gambar_about_2" align="left">
					<p class="spasi_bawah_2">However, oftentimes these creators have difficulty in executing their ideas into final products due to various circumstances. To solve this problem, we believe that collaboration is the key.</p>
					<p>Collaboration is also a demonstration of Indonesia’s own culture of ‘gotong royong’ that have been passed from generation to generation. With the spirit of mutual cooperation, we want to bring together creators from different fields to exchange ideas, to be able to work together to build their dreams into reality.</p>
				</div>
			</div>
			<img src="<?=  base_url('assets/img/logo.png')?>" id="gambar_about_3" alt="world">
			<p>KROWD is an online platform that aims to bridge the collaboration between Indonesian creators who want to produce creations that are not only inspiring, but also impactful. A platform where designers, animators, comic artists, musicians, writers, artists, crafters, and app developers can meet and produce high-quality masterpieces that can go global.</p>
		</div>
	</div>
</div>




<?php $this->load->view('page_footer')?>