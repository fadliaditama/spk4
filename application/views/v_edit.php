<?php $this->load->view('layout/header');?>
<div class="container">
	<h1>Edit Data</h1>
	<?php foreach($mahasiswa as $mhs)?>
	<form id="myformedit" method="post" onsubmit="edit().$row->id;return false;" action='<?= base_url('alternatif/edit') ?>'>
			  <div class="row">
			    <div class="col-md-3">
			    	<label for="">Nama Alternatif</label>
			      <input type="text" class="form-control" placeholder="First name" name="nama" required="" value="<?php echo $mhs->nama ?>">
			    </div>
			  </div>
			  <br>
			  <h3>Kandungan Asam</h3>
			  <div class="row">
			    <div class="col-md-2">
			    	<label for="">Fixed Acid</label>
			      <input type="number" class="form-control" name="fixed_acid" required="" min="0" max="13"value="<?php echo $mhs->fixed_acid ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Volatile Acid</label>
			      <input type="number" class="form-control" name="volatile_acid" required="" min="0" max="2" value="<?php echo $mhs->volatile_acid ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Citric Acid</label>
			      <input type="number" class="form-control" name="citric_acid" required="" min="0" max="1" value="<?php echo $mhs->citric_acid ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">pH</label>
			      <input type="number" class="form-control" name="ph" required="" min="0" max="14" value="<?php echo $mhs->ph ?>">
			    </div>
			  </div>
			  <br>
			  <h3>Kandungan Non Asam</h3>
			  <div class="row">
			    <div class="col-md-2">
			    	<label for="">Residual Sugar</label>
			      <input type="number" class="form-control" name="residual_sugar" required="" min="0" max="16" value="<?php echo $mhs->residual_sugar ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Chlorides</label>
			      <input type="number" class="form-control" name="chlorides" required="" min="0" max="1" value="<?php echo $mhs->chlorides ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Free Sulfur Dioxide</label>
			      <input type="number" class="form-control" name="free_sulfur_dioxide" required="" min="1" max="100" value="<?php echo $mhs->free_sulfur_dioxide ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Sulphates</label>
			      <input type="number" class="form-control" name="sulphates" required="" min="0" max="2" value="<?php echo $mhs->sulphates ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Alcohol</label>
			      <input type="number" class="form-control" name="alcohol" required="" min="0" max="16" value="<?php echo $mhs->alcohol ?>">
			    </div>
			  </div>
			  <br>
			  <div>
			  	<button type="submit" class="btn btn-primary" value="edit">Edit</button>
			  </div>
		</form>
</div>
	<?php $this->load->view('layout/footer');?>