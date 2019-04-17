<?php $this->load->view('page_header')?>
<style>
	table{
		text-align: center;
		width:80%;
	}
	.bungkus{
		background-color: #f7f9ff;
		height: 100%;
	}
	.vertical-center {
	  	background-color: #C5C9B8;
    	color: #333333;
    	height: 25vh;
    	margin: 20px;
    	margin-left:225px;
    	margin-right:225px;
    	overflow: hidden;
    	align-items: center;
    	justify-content: space-around;
    	display: flex;
    	float: none;
	}
</style>

<div class="bungkus">

	<h3 style="margin-bottom: 40px; font-family: heading; font-weight: bold; font-size: 24px; line-height: 1.1;">OUR STORY</h3>
	<img src="<?= base_url('assets/img/about1.png')?>" alt="map" style="width: 100%; margin-bottom: 40px; vertical-align: middle;">
	<p class="css-14spjgp">As the fourth most populous country in the world, Indonesia has tremendous wealth and extraordinary potential: tens of thousands of islands, tribes, and local dialects; art and culture; creators who assemble inventions in various fields.</p>
	<div style="margin-bottom: 100px;">
		<div class="col-md-6" style="width: 49.9%; vertical-align: middle; display: inline-block;">
			<img src="<?= base_url('assets/img/about2.gif')?>" alt="talents" style="width: 100%;">
		</div>
		<div class="col-md-6" style="width: 49.9%; vertical-align: middle; display: inline-block;" align="left">
			<p class="css-qnv76h">However, oftentimes these creators have difficulty in executing their ideas into final products due to various circumstances. To solve this problem, we believe that collaboration is the key.</p>
			<p>Collaboration is also a demonstration of Indonesia’s own culture of ‘gotong royong’ that have been passed from generation to generation. With the spirit of mutual cooperation, we want to bring together creators from different fields to exchange ideas, to be able to work together to build their dreams into reality.</p>
		</div>
	</div>
	<div class="clearfix"></div>
	<img src="<?= base_url('assets/img/logo.png')?>" style="max-width: 400px; width: 100%; margin-bottom: 40px;" alt="world">
	<p>KROWD is an online platform that aims to bridge the collaboration between Indonesian creators who want to produce creations that are not only inspiring, but also impactful. A platform where designers, animators, comic artists, musicians, writers, artists, crafters, and app developers can meet and produce high-quality masterpieces that can go global.</p>
</div>




<?php $this->load->view('page_footer')?>