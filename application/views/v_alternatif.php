<?php $this->load->view('layout/header');?>
	<div class="container"> 
		<h1>Alternatif</h1>
		<form id="myform" method="post" onsubmit="tambah();return false;" action='<?= base_url('alternatif/insert') ?>'>
		  <div class="row">
		    <div class="col-md-3">
		    	<label for="">Nama Alternatif</label>
		      <input type="text" class="form-control" placeholder="First name" name="nama" required="">
		    </div>
		  </div>
		  <br>
		  <h3>Kandungan Asam</h3>
		  <div class="row">
		    <div class="col-md-2">
		    	<label for="">Fixed Acid</label>
		      <input type="text" class="form-control" name="fixed_acid" required="">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Volatile Acid</label>
		      <input type="text" class="form-control" name="volatile_acid" required="">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Citric Acid</label>
		      <input type="text" class="form-control" name="citric_acid" required="">
		    </div>
		    <div class="col-md-2">
		    	<label for="">pH</label>
		      <input type="text" class="form-control" name="ph" required="">
		    </div>
		  </div>
		  <br>
		  <h3>Kandungan Non Asam</h3>
		  <div class="row">
		    <div class="col-md-2">
		    	<label for="">Residual Sugar</label>
		      <input type="text" class="form-control" name="residual_sugar" required="">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Chlorides</label>
		      <input type="text" class="form-control" name="chlorides" required="">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Free Sulfur Dioxide</label>
		      <input type="text" class="form-control" name="free_sulfur_dioxide" required="">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Sulphates</label>
		      <input type="text" class="form-control" name="sulphates" required="">
		    </div>
		    <div class="col-md-2">
		    	<label for="">Alcohol</label>
		      <input type="text" class="form-control" name="alcohol" required="">
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
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
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
						<td>
							<a href="" title=""><button type="submit" class="btn btn-warning btn-sm">edit</button></a>
							<!-- <a href="<?= base_url('alternatif/hapus/').$row->id ?>" title=""><button type="delete" class="btn btn-danger btn-sm">delete</button></a> -->
							<?php $hapus = base_url('alternatif/hapus/').$row->id; ?>
							<a href="" onclick="hapus('<?= $hapus ?>');return false;"><button type="delete" class="btn btn-danger btn-sm">delete</button></a>
						</td>
					</tr>				
				<?php } ?>
			</tbody>
		</table>
	</div>
	<script type="text/javascript">
		function hapus(url)
		{
			swal({
				title: "Hapus Jangan?",
			    text: "Data tidak bisa dikembalikan",
			    icon: "warning",
				// buttons: true,
				buttons: ["tidak", "ya!"],
				dangerMode: true,
				})
			.then((willDelete) => {
				if (willDelete) {
					swal({
						title: "Poof!",
			    		text: "Data dihapus!",
						icon: "success",
						closeOnConfirm: true,
					})
					.then((okay) =>{
						if(okay)
							window.location = url;
						else
							window.location = url;
					});
				} 
				else {
					swal({
						title: "Safe!",
			    		text: "Data tidak dihapus!",
					});
				}
			});
			return false;
		}
		function tambah()
		{
			swal({
				title: "Noice!",
			    text: "Data berhasil ditambahkan",
			    icon: "success",
				// buttons: true,
				button: "Okay!",
			}).then((okay) =>{
				if(okay)
					document.getElementById("myform").submit(); 
				else
					document.getElementById("myform").submit(); 
			});
		}
	</script>
	
<?php $this->load->view('layout/footer');?>

