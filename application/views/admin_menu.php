<?php $this->load->view('page_header')?>


<style>
.backgorund_judul_main {
    margin-top: 80px;
    padding: 100px;
    background: url('<?= base_url('assets/img/collaborate.png')?>') center center / cover no-repeat;
    text-align: center
 }
 .garisPink {
    border-bottom: 2px solid rgb(246, 74, 123);
    width: 40%;
    display: block;
    margin: 24px 0px;
    text-align: : center;
    margin-right: 25px
    margin-left: 25px;
}
</style>

<div class="backgorund_judul_main">
    <h1 id="judul">Welcome to the Admin Page</h1>
</div>

<div class="container">
	<p id="judul2" class="garisPink">Berikut ini adalah project yang belum ditinjau oleh Admin</p>
	<table class="table table-striped table-bordered" style="margin-bottom: 100px;">
	    <tr>
			<th style="width:9%;color:grey;">Project ID</th>
			<th style="width:19%;color:grey;">Project Name</th>
			<th style="width:19%;color:grey;">Project Brief</th>
			<th style="width:15%;color:grey;">Project Initiator</th>
			<th style="width:15%;color:grey;">Project Time Left</th>
			<th style="color:grey;">Actions</th>
	    </tr>
		<?php if(!empty($nproject)){?>
		<?php foreach($nproject as $np){?>
	    <tr>
			<td><?= $np['id_project']?></td>
			<td><a href="<?= base_url('c_krowd_home/detil_project/')?><?= $np['id_project']?>"><strong><?= $np['judul_project']?></strong></a></td>
			<td><?= $np['short_desc']?></td>
			<td><?= $np['username']?></td>
			<td><?= $np['days_left']?> days</td>
			<td>
	            <a href="<?= base_url('c_krowd_home/update_stat/')?><?= $np['id_project']?>" class="btn btn-info btn-xs">Accept</a> 
	            <a href="" class="btn btn-danger btn-xs">Reject</a>
	        </td>
	    </tr>
	    <?php }?>
	    <?php } else {?>
	    <tr>
	    	<td style="text-align: center" colspan="6">"Tidak ada proyek baru"</td>
	    </tr>
	    <?php }?>
	</table>
</div>

<div class="container">
	<p id="judul2" class="garisPink">Berikut ini adalah project yang telah disetujui Admin</p>
	<table class="table table-striped table-bordered" align="center">
	    <tr>
			<th style="width:9%; color:grey;">Project ID</th>
			<th style="width:19%; color:grey;">Project Name</th>
			<th style="width:19%; color:grey;">Project Brief</th>
			<th style="width:15%; color:grey;">Project Initiator</th>
			<th style="width:15%; color:grey;">Project Time Left</th>
			<th style="color:grey;">Action</th>
	    </tr>
	    <?php if(!empty($project)){?>
	    <?php foreach($project as $p){?>
	    <tr>
			<td><?= $p['id_project']?></td>
			<td><a href="<?= base_url('c_krowd_home/detil_project/')?><?= $p['id_project']?>"><strong><?= $p['judul_project']?></strong></a></td>
			<td><?= $p['short_desc']?></td>
			<td><?= $p['username']?></td>
			<td><?= $p['days_left']?> days</td>
			<td>
	            <a href="" class="btn btn-danger">Close Project</a>
	        </td>
	    </tr>
	    <?php }?>
	    <?php } else {?>
	    	<td style="text-align: center" colspan="6">"Tidak ada proyek ditemukan"</td>
	    <?php }?>
	</table>
</div>


<?php $this->load->view('page_footer')?>