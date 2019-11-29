<?php $this->load->view('layout/header');?>
	<div class="container"> 
		<h1>Alternatif</h1>
		<form action="<?php base_url(). 'alternatif/insert'; ?>" method="post">
		  <div class="row">
		    <div class="col-md-3">
		    	<label for="">Nama Alternatif</label>
		      <input type="text" class="form-control" placeholder="First name" name="nama">
		    </div>
		  </div>
		  <br>
		  <h3>Kandungan Asam</h3>
		  <div class="row">
		    <div class="col-md-2">
		    	<label for="">Fixed Acid</label>
		      <input type="text" class="form-control" placeholder="First name" name="fixed_acid">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Volatile Acid</label>
		      <input type="text" class="form-control" placeholder="First name" name="volatile_acid">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Citric Acid</label>
		      <input type="text" class="form-control" placeholder="First name" name="citric_acid">
		    </div>
		    <div class="col-md-2">
		    	<label for="">pH</label>
		      <input type="text" class="form-control" placeholder="First name" name="ph">
		    </div>
		  </div>
		  <br>
		  <h3>Kandungan Non Asam</h3>
		  <div class="row">
		    <div class="col-md-2">
		    	<label for="">Residual Sugar</label>
		      <input type="text" class="form-control" placeholder="First name" name="residual_sugar">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Chlorides</label>
		      <input type="text" class="form-control" placeholder="First name" name="chlorides">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Free Sulfur Dioxide</label>
		      <input type="text" class="form-control" placeholder="First name" name="free_sulfur_dioxide">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Sulphates</label>
		      <input type="text" class="form-control" placeholder="First name" name="sulphates">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Alcohol</label>
		      <input type="text" class="form-control" placeholder="First name" name="alcohol">
		    </div>
		  </div>
		  <br>
		  <div>
		  	<button type="submit" class="btn btn-primary" value="tambah">Tambah</button>
		  </div>
	</form>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>no</th>
					<th>Nama</th>
					<th>Fixed Acid</th>
					<th>Volatile Acid</th>
					<th>Citric Acid</th>
					<th>pH</th>
					<th>Residual Sugar</th>
					<th>Chlorides</th>
					<th>Free Sulfur Dioxide</th>
					<th>Sulphates</th>
					<th>Alcohol</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($mahasiswa as $row) 
				{ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama?></td>
						<td><?php echo $row->fixed_acid?></td>
						<td><?php echo $row->volatile_acid?></td>
						<td><?php echo $row->citric_acid?></td>
						<td><?php echo $row->ph?></td>
						<td><?php echo $row->residual_sugar?></td>
						<td><?php echo $row->chlorides?></td>
						<td><?php echo $row->free_sulfur_dioxide?></td>
						<td><?php echo $row->sulphates?></td>
						<td><?php echo $row->alcohol?></td>
						<td><a href="" title=""><button type="submit" class="btn btn-warning btn-sm">edit</button></a><a href="<?php base_url(). 'alternatif/hapus'; ?>" title=""><button type="delete" class="btn btn-danger btn-sm">delete</button></a></td>
					</tr>				
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php $this->load->view('layout/footer');?>

