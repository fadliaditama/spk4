<?php $this->load->view('layout/header');?>
<div class="container">
	<h1>Edit Data</h1>
	<?php foreach($mahasiswa as $mhs)?>
	<form id="myformedit" method="post" onsubmit="edit();return false;" action="<?= base_url('alternatif/update/').$mhs->id ?>">
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
			      <input type="number" class="form-control" name="fixed_acid" required="" value="<?php echo $mhs->fixed_acid ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Volatile Acid</label>
			      <input type="number" class="form-control" name="volatile_acid" required="" value="<?php echo $mhs->volatile_acid ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Citric Acid</label>
			      <input type="number" class="form-control" name="citric_acid" required="" value="<?php echo $mhs->citric_acid ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">pH</label>
			      <input type="number" class="form-control" name="ph" required="" value="<?php echo $mhs->ph ?>">
			    </div>
			  </div>
			  <br>
			  <h3>Kandungan Non Asam</h3>
			  <div class="row">
			    <div class="col-md-2">
			    	<label for="">Residual Sugar</label>
			      <input type="number" class="form-control" name="residual_sugar" required="" value="<?php echo $mhs->residual_sugar ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Chlorides</label>
			      <input type="number" class="form-control" name="chlorides" required="" value="<?php echo $mhs->chlorides ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Free Sulfur Dioxide</label>
			      <input type="number" class="form-control" name="free_sulfur_dioxide" required="" value="<?php echo $mhs->free_sulfur_dioxide ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Sulphates</label>
			      <input type="number" class="form-control" name="sulphates" required="" value="<?php echo $mhs->sulphates ?>">
			    </div>
			    <div class="col-md-2">
			    	<label for="">Alcohol</label>
			      <input type="number" class="form-control" name="alcohol" required="" value="<?php echo $mhs->alcohol ?>">
			    </div>
			  </div>
			  <br>
			  <div>
			  	<!-- <button type="submit" class="btn btn-primary" value="edit">Edit</button> -->
			  	<a href="<?= base_url('alternatif') ?>">
			  		<button type="button" class="btn btn-primary">Kembali</button>
			  	</a>
			  		<button type="submit" class="btn btn-danger">Update</button>
			  </div>
		</form>
</div>
<script type="text/javascript">
	function edit()
    {
      swal({
        title: "Noice!",
          text: "Data berhasil diedit",
          icon: "success",
        // buttons: true,
        button: "Okay!",
      }).then((okay) =>{
        if(okay)
          document.getElementById("myformedit").submit(); 
        else
          document.getElementById("myformedit").submit(); 
      });
    }
</script>
<?php $this->load->view('layout/footer');?>